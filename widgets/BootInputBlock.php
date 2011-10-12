<?php
/**
 * BootInputBlock class file.
 * @author Christoffer Niska <ChristofferNiska@gmail.com>
 * @copyright Copyright &copy; Christoffer Niska 2011-
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 */
 
class BootInputBlock extends CInputWidget
{
	/**
	 * @property BootActiveForm the associated form widget.
	 */
	public $form;
	/**
	 * @property string the input label text.
	 */
	public $label;
	/**
	 * @property string the input type.
	 * Following types are supported: checkbox, checkboxlist, dropdownlist, filefield, passwordfield,
	 * radiobutton, radiobuttonlist, textarea, textfield.
	 */
	public $type;
	/**
	 * @property array the data for list inputs.
	 */
	public $data = array();

	/**
	 * Initializes the widget.
	 * This method is called by {@link CBaseController::createWidget}
	 * and {@link CBaseController::beginWidget} after the widget's
	 * properties have been initialized.
	 */
	public function init()
	{
		if ($this->form === null)
			throw new CException(__CLASS__.': '.Yii::t('bootstrap','Failed to initialize widget! Form is not set.'));

		if ($this->model === null)
			throw new CException(__CLASS__.': '.Yii::t('bootstrap','Failed to initialize widget! Model is not set.'));

		if ($this->type === null)
			throw new CException(__CLASS__.': '.Yii::t('bootstrap','Failed to initialize widget! Input type is not set.'));
	}

	/**
	 * Executes the widget.
	 * This method is called by {@link CBaseController::endWidget}.
	 */
	public function run()
	{
		switch ($this->type)
		{
			case 'checkbox':
				$input = $this->form->booleanField('checkbox', $this->model, $this->attribute, $this->htmlOptions);
				break;

			case 'checkboxlist':
				// todo: implement
				$input = $this->form->checkBoxList($this->model, $this->attribute, $this->data, $this->htmlOptions);
				break;

			case 'dropdownlist':
				$input = $this->form->dropDownList($this->model, $this->attribute, $this->data, $this->htmlOptions);
				break;

			case 'filefield':
				$input = $this->form->fileField($this->model, $this->attribute, $this->htmlOptions);
				break;

			case 'passwordfield':
				$input = $this->form->passwordField($this->model, $this->attribute, $this->htmlOptions);
				break;

			case 'radiobutton':
				$input = $this->form->booleanField('radio', $this->model, $this->attribute, $this->htmlOptions);
				break;

			case 'radiobuttonlist':
				// todo: implement
				$input = $this->form->radioButtonList($this->model, $this->attribute, $this->data, $this->htmlOptions);
				break;

			case 'textarea':
				$input = $this->form->textArea($this->model, $this->attribute, $this->htmlOptions);
				break;

			case 'textfield':
				$input = $this->form->textField($this->model, $this->attribute, $this->htmlOptions);
				break;

			default:
				throw new CException(Yii::t('bootstrap',__CLASS__.': Failed to run widget! Input type is invalid.'));
		}

		if ($this->label !== false && $this->type !== 'checkbox' && $this->type !== 'radiobutton' && $this->hasModel())
			$label = $this->form->labelEx($this->model, $this->attribute);
		else if ($this->label !== null)
			$label = $this->label;
		else
			$label = '';

		$error = $this->form->error($this->model, $this->attribute);
		$errorCss = $this->model->hasErrors($this->attribute) ? ' '.BootHtml::$errorCss : '';

		echo BootHtml::openTag('div', array('class'=>'clearfix'.$errorCss));
		echo $label;
		echo BootHtml::openTag('div', array('class'=>'input'));
		echo $input.$error;
		echo '</div>';
		echo '</div>';
	}
}
