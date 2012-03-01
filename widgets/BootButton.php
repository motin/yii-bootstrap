<?php
/**
 * BootButton class file.
 * @author Christoffer Niska <ChristofferNiska@gmail.com>
 * @copyright Copyright &copy; Christoffer Niska 2011-
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 * @package bootstrap.widgets
 * @since 0.9.10
 */

Yii::import('bootstrap.widgets.BootWidget');

class BootButton extends BootWidget
{
	const METHOD_LINK = 'link';
	const METHOD_BUTTON = 'button';
	const METHOD_AJAXLINK = 'ajaxLink';
	const METHOD_AJAXBUTTON = 'ajaxButton';

	const TYPE_NORMAL = '';
	const TYPE_PRIMARY = 'primary';
	const TYPE_INFO = 'info';
	const TYPE_SUCCESS = 'success';
	const TYPE_WARNING = 'warning';
	const TYPE_DANGER = 'danger';
	const TYPE_INVERSE = 'inverse';

	const SIZE_SMALL = 'small';
	const SIZE_NORMAL = '';
	const SIZE_LARGE = 'large';

	public $method = self::METHOD_LINK;
	public $type = self::TYPE_NORMAL;
	public $size = self::SIZE_NORMAL;
	public $icon;
	public $label;
	public $url;
	public $active = false;
	public $items;
	public $toggle;
	public $loadingText;
	public $completeText;
	public $encodeLabel = true;
	public $ajaxOptions = array();

	/**
	 * Initializes the widget.
	 */
	public function init()
	{
		$class = array('btn');

		$validTypes = array(self::TYPE_PRIMARY, self::TYPE_INFO, self::TYPE_SUCCESS,
				self::TYPE_WARNING, self::TYPE_DANGER, self::TYPE_INVERSE);

		if (isset($this->type) && in_array($this->type, $validTypes))
			$class[] = 'btn-'.$this->type;

		$validSizes = array(self::SIZE_SMALL, self::SIZE_LARGE);

		if (isset($this->size) && in_array($this->size, $validSizes))
			$class[] = 'btn-'.$this->size;

		if ($this->active) {
			$class[] = 'active';
		}

		if ($this->encodeLabel)
			$this->label = CHtml::encode($this->label);

		if ($this->hasDropdown())
		{
			$class[] = 'dropdown-toggle';
			$this->label .= ' <span class="caret"></span>';
			$this->htmlOptions['data-toggle'] = 'dropdown';
			Yii::app()->bootstrap->registerDropdown();
		}

		$cssClass = implode(' ', $class);

		if (isset($this->htmlOptions['class']))
			$this->htmlOptions['class'] .= ' '.$cssClass;
		else
			$this->htmlOptions['class'] = $cssClass;

		if (isset($this->icon))
		{
			if (strpos($this->icon, 'icon') === false)
				$this->icon = 'icon-'.implode(' icon-', explode(' ', $this->icon));

			$this->label = '<i class="'.$this->icon.'"></i> '.$this->label;
		}

		$this->initHTML5Data();
	}

	/**
	 * Initializes the HTML5 data attributes used by the data-api.
	 */
	protected function initHTML5Data()
	{
		if (isset($this->toggle) || isset($this->loadingText) || isset($this->completeText))
		{
			if (isset($this->toggle))
				$this->htmlOptions['data-toggle'] = 'button';

			if (isset($this->loadingText))
				$this->htmlOptions['data-loading-text'] = $this->loadingText;

			if (isset($this->completeText))
				$this->htmlOptions['data-complete-text'] = $this->completeText;

			Yii::app()->bootstrap->registerButton();
		}
	}

	/**
	 * Runs the widget.
	 */
	public function run()
	{
		echo $this->createButton();

		if ($this->hasDropdown())
			$this->controller->widget('bootstrap.widgets.BootDropdown', array('items'=>$this->items));
	}

	/**
	 * Creates the button element.
	 * @return string the created button.
	 */
	protected function createButton()
	{
		switch ($this->method)
		{
			case self::METHOD_BUTTON:
				return CHtml::htmlButton($this->label, $this->htmlOptions);

			case self::METHOD_AJAXLINK:
				return CHtml::ajaxLink($this->label, $this->url, $this->ajaxOptions, $this->htmlOptions);

			case self::METHOD_AJAXBUTTON:
				return CHtml::ajaxButton($this->label, $this->url, $this->ajaxOptions, $this->htmlOptions);

			default:
			case self::METHOD_LINK:
				return CHtml::link($this->label, $this->url, $this->htmlOptions);
		}
	}

	/**
	 * Returns whether the button has a dropdown.
	 * @return bool the result.
	 */
	protected function hasDropdown()
	{
		return isset($this->items) && !empty($this->items);
	}
}
