<?php
/**
 * BootListView class file.
 * @author Christoffer Niska <ChristofferNiska@gmail.com>
 * @copyright Copyright &copy; Christoffer Niska 2011-
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 */

Yii::import('zii.widgets.CListView');
class BootListView extends CListView
{
	/**
	 * @property string the CSS class name for the pager container. Defaults to 'pagination'.
	 */
	public $pagerCssClass = 'pagination';

	/**
	 * @property array the configuration for the pager. Defaults to <code>array('class'=>'BootPager')</code>.
	 * @see enablePagination
	 */
	public $pager = array('class'=>'ext.bootstrap.widgets.BootPager');
}
