<?php
/**
 * BootMediaGrid class file.
 * @author Christoffer Niska <ChristofferNiska@gmail.com>
 * @copyright Copyright &copy; Christoffer Niska 2011-
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 */

Yii::import('ext.bootstrap.widgets.BootListView');
class BootMediaGrid extends BootListView
{
	public $tagName = 'div';

	public $images = array();

	/**
	 * Renders the data items for the view.
	 * Each item is corresponding to a single data model instance.
	 * Child classes should override this method to provide the actual item rendering logic.
	 */
	public function renderItems()
	{
		$data = $this->dataProvider->getData();
		
		if (!empty($data))
		{
			echo BootHtml::openTag('ul', array('class'=>'media-grid'));
			$owner = $this->getOwner();
			$render = $owner instanceof CController ? 'renderPartial' : 'render';
			foreach($data as $i=>$item)
			{
				$data = $this->viewData;
				$data['index'] = $i;
				$data['data'] = $item;
				$data['widget'] = $this;
				echo BootHtml::openTag('li');
				$owner->$render($this->itemView,$data);
				echo BootHtml::closeTag('li');
			}

			echo BootHtml::closeTag('ul');
		}
		else
			$this->renderEmptyText();
	}
}
