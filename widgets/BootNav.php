<?php
class BootNav extends BootWidget
{
	/**
	 * @var array the menu items
	 */
	public $items = array();
	/**
	 * @var string the URL for the brand link
	 */
	public $brandUrl;
	/**
	 * @var string the text for the brand link
	 */
	public $brandText;
	/**
	 * @var array the HTML attributes for the brand link
	 */
	public $brandOptions = array();
	/**
	 * @var array the HTML attributes for the menu
	 */
	public $navOptions = array();

	/**
	 * Runs the widget.
	 */
	public function run()
	{
		if (isset($this->htmlOptions['class']))
			$this->htmlOptions['class'] .= ' topbar';
		else
			$this->htmlOptions['class'] = 'topbar';

		if (isset($this->brandOptions['class']))
			$this->brandOptions['class'] .= ' brand';
		else
			$this->brandOptions['class'] = 'brand';

		if (isset($this->brandUrl))
			$this->brandOptions['href'] = $this->brandUrl;

		if (isset($this->navOptions['class']))
			$this->navOptions['class'] .= ' nav';
		else
			$this->navOptions['class'] = 'nav';

		echo CHtml::openTag('div', $this->htmlOptions);
		echo '<div class="topbar-inner"><div class="container">';
		echo CHtml::openTag('a', $this->brandOptions);
		echo $this->brandText;
		echo '</a>';

		$this->controller->widget('bootstrap.widgets.BootMenu', array(
			'type'=>'',
			'items'=>$this->items,
			'htmlOptions'=>$this->navOptions,
		));

		echo '</div></div></div>';
	}
}
