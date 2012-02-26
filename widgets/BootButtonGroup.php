<?php
/**
 * BootButtonGroup class file.
 * @author Christoffer Niska <ChristofferNiska@gmail.com>
 * @copyright Copyright &copy; Christoffer Niska 2011-
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 * @package bootstrap.widgets
 * @since 0.9.10
 */

Yii::import('bootstrap.widgets.BootButton');
Yii::import('bootstrap.widgets.BootWidget');

class BootButtonGroup extends BootWidget
{
	const TOGGLE_CHECKBOX = 'checkbox';
	const TOGGLE_RADIO = 'radio';

	public $tag = BootButton::TAG_LINK;
	public $type = BootButton::TYPE_NORMAL;
	public $size = BootButton::SIZE_NORMAL;
	public $encodeLabel = true;
	public $buttons = array();
	public $toggle;

	public function init()
	{
		$cssClass = 'btn-group';
		if (isset($this->htmlOptions['class']))
			$this->htmlOptions['class'] .= ' '.$cssClass;
		else
			$this->htmlOptions['class'] = $cssClass;

		$validToggles = array(self::TOGGLE_CHECKBOX, self::TOGGLE_RADIO);

		if (isset($this->toggle) && in_array($this->toggle, $validToggles))
		{
			$this->htmlOptions['data-toggle'] = 'buttons-'.$this->toggle;
			Yii::app()->bootstrap->registerButton();
		}
	}

	public function run()
	{
		echo CHtml::openTag('div', $this->htmlOptions);

		foreach ($this->buttons as $button)
		{
			$this->controller->widget('bootstrap.widgets.BootButton', array(
				'tag'=>isset($button['tag']) ? $button['tag'] : $this->tag,
				'type'=>$this->type,
				'size'=>$this->size,
				'icon'=>isset($button['icon']) ? $button['icon'] : null,
				'label'=>isset($button['label']) ? $button['label'] : null,
				'url'=>isset($button['url']) ? $button['url'] : null,
				'items'=>isset($button['items']) ? $button['items'] : array(),
				'htmlOptions'=>isset($button['htmlOptions']) ? $button['htmlOptions'] : array(),
				'encodeLabel'=>isset($button['encodeLabel']) ? $button['encodeLabel'] : $this->encodeLabel,
			));
		}

		echo '</div>';
	}
}
