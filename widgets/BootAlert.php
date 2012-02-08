<?php
/**
 * BootAlert class file.
 * @author Christoffer Niska <ChristofferNiska@gmail.com>
 * @copyright  Copyright &copy; Christoffer Niska 2011-
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 */

Yii::import('bootstrap.widgets.BootWidget');

/**
 * @todo Add support for events. http://twitter.github.com/bootstrap/javascript.html#alerts
 */
class BootAlert extends BootWidget
{
	/**
	 * @var array the keys for which to get flash messages.
	 */
	public $keys = array('success', 'info', 'warning', 'error', /* or */'danger');
	/**
	 * @var string the template to use for displaying flash messages.
	 */
	public $template = '<div class="alert alert-block alert-{key} fade in"><a class="close" data-dismiss="alert">&times;</a>{message}</div>';
	/**
	 * @var array the html options.
	 */
	public $htmlOptions = array();

	/**
	 * Initializes the widget.
	 */
	public function init()
	{
		parent::init();
		$this->registerScriptFile('bootstrap-alert.js');
		$this->htmlOptions['id'] = $this->getId();
	}

	/**
	 * Runs the widget.
	 */
	public function run()
	{
		if (is_string($this->keys))
			$this->keys = array($this->keys);

		echo CHtml::openTag('div', $this->htmlOptions);

		foreach ($this->keys as $key)
		{
			if (Yii::app()->user->hasFlash($key))
				echo strtr($this->template, array('{key}'=>$key, '{message}'=>Yii::app()->user->getFlash($key)));
		}

		echo '</div>';

		Yii::app()->clientScript->registerScript(__CLASS__.'#'.$this->id,"jQuery('#{$this->id}').alert();");
	}
}
