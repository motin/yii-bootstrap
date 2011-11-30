<?php
/**
 * BootMenu class file.
 * @author Christoffer Niska <ChristofferNiska@gmail.com>
 * @copyright Copyright &copy; Christoffer Niska 2011-
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 * @since 0.9.5
 */

Yii::import('zii.widgets.CMenu');
class BootMenu extends CMenu
{
	/**
	 * @property string the type of menu to display.
	 * Following types are supported: 'tabs' and 'pills'.
	 */
	public $type='tabs';

	/**
	 * Initializes the menu widget.
	 * This method mainly normalizes the {@link items} property.
	 * If this method is overridden, make sure the parent implementation is invoked.
	 */
	public function init()
	{
		if (isset($this->htmlOptions['class']))
			$this->htmlOptions['class'].=' '.$this->type;
		else
			$this->htmlOptions['class']=$this->type;

		parent::init();
	}
}
