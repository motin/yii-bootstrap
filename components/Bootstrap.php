<?php
/**
 * Bootstrap class file.
 * @author Christoffer Niska <ChristofferNiska@gmail.com>
 * @copyright Copyright &copy; Christoffer Niska 2011-
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 */

class Bootstrap extends CApplicationComponent
{
	/**
	 * @property string the url to the assets for this extension.
	 */
	protected $_assetsUrl;

	/**
	 * Registers the Bootstrap CSS.
	 */
	public function registerBootstrap()
	{
		Yii::app()->getClientScript()->registerCssFile($this->getAssetsUrl().'/css/bootstrap.min.css');
	}

	/**
	 * Registers a Bootstrap JavaScript file.
	 * @param $fileName the file name.
	 */
	public function registerScriptFile($fileName)
	{
		Yii::app()->getClientScript()->registerScriptFile($this->getAssetsUrl().'/js/'.$fileName);
	}

	/**
	* Returns the url to assets publishing the folder if necessary.
	* @return string the assets url
	*/
	protected function getAssetsUrl()
	{
		if ($this->_assetsUrl !== null)
			return $this->_assetsUrl;
		else
		{
			$assetsPath = Yii::getPathOfAlias('ext.bootstrap.assets');

			if (YII_DEBUG)
				$assetsUrl = Yii::app()->assetManager->publish($assetsPath, false, -1, true);
			else
				$assetsUrl = Yii::app()->assetManager->publish($assetsPath);

			return $this->_assetsUrl = $assetsUrl;
		}
	}
}
