<?php
/**
 * BootGridView class file.
 * @author Christoffer Niska <ChristofferNiska@gmail.com>
 * @copyright Copyright &copy; Christoffer Niska 2011-
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 */

Yii::import('zii.widgets.grid.CGridView');
Yii::import('ext.bootstrap.widgets.grid.BootDataColumn');
class BootGridView extends CGridView
{
	/**
	 * @property string the CSS class name for the container table.
	 * Defaults to 'zebra-striped'.
	 */
	public $itemsCssClass = 'zebra-striped';

	/**
	 * @property string the CSS class name for the pager container.
	 * Defaults to 'pagination'.
	 */
	public $pagerCssClass = 'pagination';

	/**
	 * @property array the configuration for the pager.
	 * Defaults to <code>array('class'=>'ext.bootstrap.widgets.BootPager')</code>.
	 */
	public $pager = array('class'=>'ext.bootstrap.widgets.BootPager');

	/**
	 * Creates column objects and initializes them.
	 */
	protected function initColumns()
	{
		foreach ($this->columns as &$column)
			if (!isset($column['class']))
				$column['class'] = 'BootDataColumn';

		parent::initColumns();
	}


}
