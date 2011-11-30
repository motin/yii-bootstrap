<?php
/**
 * BootDataColumn class file.
 * @author Christoffer Niska <ChristofferNiska@gmail.com>
 * @copyright Copyright &copy; Christoffer Niska 2011-
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 */

/**
 * Thanks to Simo Jokela <rBoost@gmail.com> for writing the original version of this class.
 */

Yii::import('zii.widgets.grid.CDataColumn');
class BootDataColumn extends CDataColumn
{
	/**
	 * Initializes the column.
	 */
	public function init()
	{
		if (isset($this->headerHtmlOptions['class']))
			$this->headerHtmlOptions['class'] .= ' header';
		else
			$this->headerHtmlOptions['class'] = 'header';

		parent::init();
	}

	/**
	 * Renders the header cell.
	 */
	public function renderHeaderCell()
	{
		if ($this->grid->enableSorting && $this->sortable && $this->name !== null)
		{
			$sortDir = $this->grid->dataProvider->getSort()->getDirection($this->name);

			if ($sortDir !== null)
			{
				$sortCssClass = $sortDir ? 'headerSortDown' : 'headerSortUp';
				$this->headerHtmlOptions['class'] .= ' '.$sortCssClass;
			}
		}

		parent::renderHeaderCell();
	}
}
