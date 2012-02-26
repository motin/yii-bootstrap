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
	const TAG_LINK = 'a';
	const TAG_BUTTON = 'button';

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

	public $tag = self::TAG_LINK;
	public $type = self::TYPE_NORMAL;
	public $size = self::SIZE_NORMAL;
	public $icon;
	public $label;
	public $url;
	public $items;
	public $toggle;
	public $loadingText;
	public $completeText;
	public $encodeLabel = true;

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

		if ($this->hasDropdown())
		{
			$class[] = 'dropdown-toggle';
			$this->htmlOptions['data-toggle'] = 'dropdown';

			Yii::app()->bootstrap->registerDropdown();
		}

		$cssClass = implode(' ', $class);

		if (isset($this->htmlOptions['class']))
			$this->htmlOptions['class'] .= ' '.$cssClass;
		else
			$this->htmlOptions['class'] = $cssClass;

		if ($this->encodeLabel)
			$this->label = CHtml::encode($this->label);

		if (isset($this->icon))
		{
			if (strpos($this->icon, 'icon') === false)
				$this->icon = 'icon-'.implode(' icon-', explode(' ', $this->icon));

			$this->label = '<i class="'.$this->icon.'"></i> '.$this->label;
		}

		if (!isset($this->url))
			$this->url = '#';

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
		if ($this->tag === self::TAG_LINK)
			$this->htmlOptions['href'] = $this->url;

		echo CHtml::openTag($this->tag, $this->htmlOptions);
		echo $this->label;

		if ($this->hasDropdown())
			echo ' <span class="caret"></span>';

		echo CHtml::closeTag($this->tag);

		if ($this->hasDropdown())
		{
			$this->controller->widget('bootstrap.widgets.BootDropdown', array(
				'items'=>$this->items,
			));
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
