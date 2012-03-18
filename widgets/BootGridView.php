<?php
/**
 * BootGridView class file.
 * @author Christoffer Niska <ChristofferNiska@gmail.com>
 * @copyright Copyright &copy; Christoffer Niska 2011-
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 * @package bootstrap.widgets
 */

Yii::import('zii.widgets.grid.CGridView');

/**
 * Bootstrap grid view widget.
 * Used for setting default HTML classes, disabling the default CSS and enable the bootstrap pager.
 */
class BootGridView extends CGridView
{
	// Table types.
	const TYPE_PLAIN = '';
	const TYPE_STRIPED = 'striped';
	const TYPE_BORDERED = 'bordered';
	const TYPE_CONDENSED = 'condensed';

	/**
	 * @var string|array the table type.
	 * Valid values are '', 'striped', 'bordered' and/or ' condensed'.
	 */
	public $type = self::TYPE_PLAIN;
	/**
	 * @var array the CSS class names for the table body rows.
	 * Defaults to an empty array.
	 */
	public $rowCssClass = array();
	/**
	 * @var string the CSS class name for the pager container.
	 * Defaults to 'pagination'.
	 */
	public $pagerCssClass = 'pagination';
	/**
	 * @var array the configuration for the pager.
	 * Defaults to <code>array('class'=>'ext.bootstrap.widgets.BootPager')</code>.
	 */
	public $pager = array('class'=>'bootstrap.widgets.BootPager');
	/**
	 * @var string the URL of the CSS file used by this detail view.
	 * Defaults to false, meaning that no CSS will be included.
	 */
	public $cssFile = false;

	/**
	 * Initializes the widget.
	 */
	public function init()
	{
		parent::init();

		$class = array('table');

		if (is_string($this->type))
			$this->type = explode(' ', $this->type);

		$validTypes = array(self::TYPE_STRIPED, self::TYPE_BORDERED, self::TYPE_CONDENSED);

		foreach ($this->type as $type)
			if (in_array($type, $validTypes))
				$class[] = 'table-'.$type;

		$this->itemsCssClass .= ' '.implode(' ', $class);
	}
}
