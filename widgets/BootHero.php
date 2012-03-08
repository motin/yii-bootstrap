<?php
/**
 * BootHero class file.
 * @author Christoffer Niska <ChristofferNiska@gmail.com>
 * @copyright  Copyright &copy; Christoffer Niska 2011-
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 * @package bootstrap.widgets
 * @since 0.9.10
 */

Yii::import('bootstrap.widgets.BootWidget');

/**
 * Modest bootstrap hero widget.
 */
class BootHero extends BootWidget
{
	/**
	 * @var string the heading text.
	 */
	public $heading;
	/**
	 * @var string the content text.
	 */
	public $content;
	/**
	 * @var boolean indicates whether to encode the heading.
	 */
	public $encodeHeading = true;

	/**
	 * Initializes the widget.
	 */
	public function init()
	{
		$cssClass = 'hero-unit';
		if (isset($this->htmlOptions['class']))
			$this->htmlOptions['class'] = ' '.$cssClass;
		else
			$this->htmlOptions['class'] = $cssClass;

		if ($this->encodeHeading)
			$this->heading = CHtml::encode($this->heading);
	}

	/**
	 * Runs the widget.
	 */
	public function run()
	{
		echo CHtml::openTag('div', $this->htmlOptions);
		echo CHtml::tag('h1', array(), $this->heading);
		echo $this->content;
		echo '</div>';
	}
}
