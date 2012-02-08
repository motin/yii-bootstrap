<?php
/**
 * BootModal class file.
 * @author Christoffer Niska <ChristofferNiska@gmail.com>
 * @copyright Copyright &copy; Christoffer Niska 2011-
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 * @since 0.9.3
 */

Yii::import('bootstrap.widgets.BootWidget');

/**
 * @todo Add support for events. http://twitter.github.com/bootstrap/javascript.html#modals
 */
class BootModal extends BootWidget
{
	/**
	 * @var string the name of the container element. Defaults to 'div'.
	 */
	public $tagName = 'div';

	/**
	 * Initializes the widget.
	 */
	public function init()
	{
		parent::init();
		$this->registerScriptFile('bootstrap-modal.js');
		$this->htmlOptions['id'] = $this->getId();

		echo CHtml::openTag($this->tagName, $this->htmlOptions).PHP_EOL;
	}

	/**
	 * Runs the widget.
	 */
	public function run()
	{
		echo CHtml::closeTag($this->tagName);
	}
}
