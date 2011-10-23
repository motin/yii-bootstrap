<?php
/**
 * BootWidget class file.
 * @author Christoffer Niska <ChristofferNiska@gmail.com>
 * @copyright Copyright &copy; Christoffer Niska 2011-
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 */

class BootWidget extends CWidget
{
	/**
	 * @property array the initial JavaScript options that should be passed to the Bootstrap plugin.
	 */
	public $options = array();
	/**
	 * @property array the HTML attributes that should be rendered in the HTML tag representing the Bootstrap widget.
	 */
	public $htmlOptions = array();

	/**
	 * Initializes the widget.
	 */
	public function init()
	{
		Yii::app()->clientScript->registerCoreScript('jquery');
		Yii::app()->clientScript->registerCoreScript('jquery.ui');
		
		$this->registerScriptFile('jquery.ui.bootwidget.js');
	}

	/**
	 * Registers a JavaScript file under {@link scriptUrl}.
	 * Note that by default, the script file will be rendered at the end of a page to improve page loading speed.
	 * @param string $fileName JavaScript file name
	 * @param integer $position the position of the JavaScript file. Valid values include the following:
	 */
	protected function registerScriptFile($fileName, $position=CClientScript::POS_END)
	{
		Yii::app()->bootstrap->registerScriptFile($fileName, $position);
	}
}
