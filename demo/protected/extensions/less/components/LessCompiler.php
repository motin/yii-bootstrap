<?php
/**
 * LessCompiler class file.
 * @author Christoffer Niska <ChristofferNiska@gmail.com>
 * @copyright Copyright &copy; Christoffer Niska 2011-
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 */

Yii::setPathOfAlias('Less', realpath(dirname(__FILE__).'/../lib/lessphp/lib/Less'));
class LessCompiler extends CApplicationComponent
{
	/**
	 * @var string the base path.
	 */
	public $basePath;
	/**
	 * @var array the paths for the files to parse.
	 */
	public $paths = array();
	/**
	 * @var bool
	 */
	public $autoCompile = false;
	/**
	 * @var \Less\Parser the less parser.
	 */
	protected $_parser;

	/**
	 * Initializes the component.
	 * @throws CException if the base path does not exist
	 */
	public function init()
	{
		if (!isset($this->basePath))
			$this->basePath = Yii::getPathOfAlias('webroot');

		if (!file_exists($this->basePath))
			throw new CException(__CLASS__.': Failed to initialize compiler. Base path does not exist!');

		$this->_parser = new \Less\Parser();

		if ($this->autoCompile)
			$this->compile();
	}

	/**
	 * Compiles the less files.
	 * @throws CException if the source path does not exist
	 */
	public function compile()
	{
		foreach ($this->paths as $lessPath => $cssPath)
		{
			$toPath = $this->basePath.'/'.$cssPath;
			$fromPath = $this->basePath.'/'.$lessPath;

			if (file_exists($fromPath))
				file_put_contents($toPath, $this->parse($fromPath));
			else
				throw new CException(__CLASS__.': Failed to compile less file. Source path does not exist!');

			$this->_parser->clearCss();
		}
	}

	/**
	 * Parses the less code to css.
	 * @param string $filename the file path to the less file
	 * @return string the css
	 */
	public function parse($filename)
	{
		try
		{
			$css = $this->_parser->parseFile($filename);
		}
		catch (\Less\Exception\ParserException $e)
		{
			throw new CException(__CLASS__.': '.Yii::t('less','Failed to compile less file with message: `{message}`.',
					array('{message}'=>$e->getMessage())));
		}

		return $css;
	}

	/**
	 * Returns whether any of files configured to be compiled has changed.
	 * @return boolean the result
	 */
	public function hasChanges()
	{
		$dirs = array();
		foreach ($this->paths as $source => $destination)
		{
			$compiled = $this->getLastModified($destination);
			if (!isset($lastCompiled) || $compiled < $lastCompiled )
				$lastCompiled = $compiled;

			if (!in_array(dirname($source), $dirs))
				$dirs[] = $source;
		}

		foreach ($dirs as $dir) {
			$modified = $this->getLastModified($dir);
			if (!isset($lastModified) || $modified < $lastModified)
				$lastModified = $modified;
		}

		return isset($lastCompiled) && isset($lastModified) && $lastModified > $lastCompiled;
	}

	/**
	 * Returns the last modified for a specific path.
	 * @param string $path the path
	 * @return integer the last modified (as a timestamp)
	 */
	protected function getLastModified($path)
	{
		if (!file_exists($path))
			return 0;
		else
		{
			if (is_file($path))
			{
				$stat = stat($path);
				return $stat['mtime'];
			}
			else
			{
				$lastModified = null;

				/** @var Directory $dir */
				$dir = dir($path);
				while ($entry = $dir->read())
				{
					if (strpos($entry, '.') === 0)
						continue;

					$path .= '/'.$entry;

					if( is_dir($path) )
						$modified = $this->getLastModified($path);
					else
					{
						$stat = stat($path);
						$modified = $stat['mtime'];
					}

					if( isset($lastModified) || $modified > $lastModified )
						$lastModified = $modified;
				}

				return $lastModified;
			}
		}
	}
}
