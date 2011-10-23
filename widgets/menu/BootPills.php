<?php
/**
 * BootPills class file.
 * @author Christoffer Niska <ChristofferNiska@gmail.com>
 * @copyright Copyright &copy; Christoffer Niska 2011-
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 * @since 0.9.3
 */

Yii::import('zii.widgets.CMenu');
class BootPills extends CMenu
{
	/**
	 * @property array the HTML options used for {@link tagName}
	 */
	public $htmlOptions=array('class'=>'pills');
}
