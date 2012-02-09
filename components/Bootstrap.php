<?php
/**
 * Bootstrap class file.
 * @author Christoffer Niska <ChristofferNiska@gmail.com>
 * @copyright Copyright &copy; Christoffer Niska 2011-
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 */

/**
 * Bootstrap application component.
 * Used for registering Bootstrap core functionality.
 */
class Bootstrap extends CApplicationComponent
{
	/**
	 * @var boolean whether to register the Boostrap core CSS.
	 */
	public $coreCss = true;
	/**
	 * @var boolean whether to register the Bootstrap reponsive CSS.
	 */
	public $responsiveCss = true;
	/**
	 * @var boolean whether to enable CSS transitions.
	 * @since 0.9.8
	 */
	public $transitions = true;
	/**
	 * @var boolean whether to enable scrollspy.
	 * @see http://twitter.github.com/bootstrap/javascript.html#scrollspy
	 * @since 0.9.8
	 */
	public $scrollspy = true;
	/**
	 * @var array the plugin options (name=>options).
	 * @since 0.9.8
	 */
	public $plugins = array();

	protected $_assetsUrl;
	protected $_registeredPlugins = array();

	/**
	 * Initializes the component.
	 */
	public function init()
	{
		if (!Yii::getPathOfAlias('bootstrap'))
			Yii::setPathOfAlias('bootstrap', realpath(dirname(__FILE__).'/..'));

		$this->registerCoreScript();

		if ($this->coreCss)
			$this->registerCoreCss();

		if ($this->responsiveCss)
			$this->registerResponsiveCss();
	}

	/**
	 * Registers the Bootstrap core CSS.
	 */
	protected function registerCoreCss()
	{
		Yii::app()->clientScript->registerCssFile($this->getAssetsUrl().'/css/bootstrap.min.css');
	}

	/**
	 * Registers the Bootstrap responsive CSS.
	 * @since 0.9.8
	 */
	protected function registerResponsiveCss()
	{
		Yii::app()->clientScript->registerCssFile($this->getAssetsUrl().'/css/bootstrap-responsive.min.css');
	}

	/**
	 * Registers the Bootstrap core JavaScript functionality.
	 */
	protected function registerCoreScript()
	{
		if ($this->transitions)
			$this->registerScriptFile('bootstrap-transition.js');

		$plugins = array('button', 'collapse', 'dropdown', 'tooltip', 'popover');

		foreach ($plugins as $name)
		{
			if (!isset($this->plugins[$name]) || isset($this->plugins[$name]) && $this->plugins[$name] !== false)
			{
				switch ($name)
				{
					case 'button':
						$this->registerButton();
						break;

					case 'collapse':
						$this->registerCollapse();
						break;

					case 'dropdown':
						$this->registerDropdown();
						break;

					case 'tooltip':
						$this->registerTooltip();
						break;

					case 'popover':
						$this->registerPopover();
						break;
				}
			}
		}

		if ($this->scrollspy)
			Yii::app()->clientScript->registerScript(__CLASS__.'.scrollspy', "jQuery('body').attr('data-spy', 'scroll');");
	}

	/**
	 * Registers a Bootstrap JavaScript plugin.
	 * @param string $name the name of the plugin
	 * @param string $defaultSelector the default selector, when null the plugin is not bound to any element.
	 * @since 0.9.8
	 */
	protected function registerPlugin($name, $defaultSelector = null)
	{
		if (!$this->isPluginRegistered($name))
		{
			$this->registerScriptFile("bootstrap-{$name}.js");
			$options = isset($this->plugins[$name]) ? $this->plugins[$name] : array();

			if (isset($options['selector']))
			{
				$selector = $options['selector'];

				if ($name !== 'tooltip' && $name !== 'popover')
					unset($options['selector']);
			}
			else
				$selector = $defaultSelector;

			if ($selector !== null)
			{
				$options = !empty($options) ? CJavaScript::encode($options) : '';
				Yii::app()->clientScript->registerScript(__CLASS__.'.'.$name,
						"jQuery('{$selector}').{$name}({$options});");
			}

			$this->_registeredPlugins[$name] = true;
		}
	}

	/**
	 * Registers the Bootstrap buttons plugin.
	 * @see http://twitter.github.com/bootstrap/javascript.html#buttons
	 * @since 0.9.8
	 */
	protected function registerButton()
	{
		$this->registerPlugin('button');
	}

	/**
	 * Registers the Bootstrap collapse plugin.
	 * @see http://twitter.github.com/bootstrap/javascript.html#collapse
	 * @since 0.9.8
	 */
	protected function registerCollapse()
	{
		$this->registerPlugin('collapse', '.collapse');
	}

	/**
	 * Registers the Bootstrap dropdown plugin.
	 * @see http://twitter.github.com/bootstrap/javascript.html#dropdowns
	 * @since 0.9.8
	 */
	protected function registerDropdown()
	{
		$this->registerPlugin('dropdown', '.dropdown-toggle');
	}

	/**
	 * Registers the Bootstrap tooltip plugin.
	 * @see http://twitter.github.com/bootstrap/javascript.html#tooltip
	 * @since 0.9.8
	 */
	protected function registerTooltip()
	{
		$this->registerPlugin('tooltip', 'a[rel="tooltip"]');
	}

	/**
	 * Registers the Bootstrap popover plugin.
	 * @see http://twitter.github.com/bootstrap/javascript.html#popover
	 * @since 0.9.8
	 */
	protected function registerPopover()
	{
		$this->registerTooltip(); // Popover requires the tooltip plugin
		$this->registerPlugin('popover', 'a[rel="popover"]');
	}

	public function isPluginRegistered($name)
	{
		return isset($this->_registeredPlugins[$name]);
	}

	/**
	 * Registers a JavaScript file in the assets folder.
	 * @param string $fileName the file name.
     * @param integer $position the position of the JavaScript file.
	 */
	public function registerScriptFile($fileName, $position=CClientScript::POS_END)
	{
		Yii::app()->clientScript->registerScriptFile($this->getAssetsUrl().'/js/'.$fileName, $position);
	}

	/**
	* Returns the URL to the published assets folder.
	* @return string the URL
	*/
	protected function getAssetsUrl()
	{
		if ($this->_assetsUrl !== null)
			return $this->_assetsUrl;
		else
		{
			$assetsPath = Yii::getPathOfAlias('bootstrap.assets');

			if (YII_DEBUG)
				$assetsUrl = Yii::app()->assetManager->publish($assetsPath, false, -1, true);
			else
				$assetsUrl = Yii::app()->assetManager->publish($assetsPath);

			return $this->_assetsUrl = $assetsUrl;
		}
	}
}
