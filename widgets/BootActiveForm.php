<?php
/**
 * BootActiveForm class file.
 * @author Christoffer Niska <ChristofferNiska@gmail.com>
 * @copyright Copyright &copy; Christoffer Niska 2011-
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 */

class BootActiveForm extends CActiveForm
{
	/**
	 * @property string the legend for the form.
	 */
	public $legend;
	/**
	 * @property string the error message type. Valid types are 'inline' and 'block'.
	 */
	public $errorMessageType = 'inline';
	/**
	 * @property boolean whether this is a stacked form.
	 */
	public $stacked = false;

	/**
	 * Initializes the widget.
	 * This renders the form open tag.
	 */
	public function init()
	{
		$cssClass = $this->stacked ? 'form-stacked' : '';

		if (!isset($this->htmlOptions['class']))
			$this->htmlOptions['class'] = $cssClass;
		else
			$this->htmlOptions['class'] .= ' '.$cssClass;

		if ($this->errorMessageType === 'inline')
			$this->errorMessageCssClass = 'help-inline';
		else
			$this->errorMessageCssClass = 'help-block';

		parent::init();
		echo BootHtml::openTag('fieldset');

		if ($this->legend !== null)
		{
			echo BootHtml::openTag('legend');
			echo BootHtml::encode($this->legend);
			echo BootHtml::closeTag('legend');
		}
	}

	/**
	 * Runs the widget.
	 */
	public function run()
	{
		echo BootHtml::closeTag('fieldset');
		parent::run();
	}

	/**
	 * Creates an input block of a specific type.
	 * @param string $type the input type
	 * @param CModel $model the data model
	 * @param string $attribute the attribute
	 * @param array $data the data for list inputs
	 * @param array $htmlOptions additional HTML attributes
	 * @return string the generated block
	 */
	public function inputBlock($type, $model, $attribute, $data = null, $htmlOptions = array())
	{
		ob_start();
		Yii::app()->controller->widget('ext.bootstrap.widgets.BootInputBlock',array(
			'type'=>$type,
			'form'=>$this,
			'model'=>$model,
			'attribute'=>$attribute,
			'data'=>$data,
			'htmlOptions'=>$htmlOptions,
		));
		return ob_get_clean();
	}

	/**
	 * Renders a checkbox input block.
	 * @param CModel $model the data model
	 * @param string $attribute the attribute
	 * @param array $htmlOptions additional HTML attributes
	 * @return string the generated block
	 */
	public function checkBoxBlock($model, $attribute, $htmlOptions = array())
	{
		return $this->inputBlock('checkbox', $model, $attribute, null, $htmlOptions);
	}

	/**
	 * Renders a checkbox list input block.
	 * @param CModel $model the data model
	 * @param string $attribute the attribute
	 * @param array $data the list data
	 * @param array $htmlOptions additional HTML attributes
	 * @return string the generated block
	 */
	public function checkBoxListBlock($model, $attribute, $data = array(), $htmlOptions = array())
	{
		return $this->inputBlock('checkboxlist', $model, $attribute, $data, $htmlOptions);
	}

	/**
	 * Renders a drop-down list input block.
	 * @param CModel $model the data model
	 * @param string $attribute the attribute
	 * @param array $data the list data
	 * @param array $htmlOptions additional HTML attributes
	 * @return string the generated block
	 */
	public function dropDownListBlock($model, $attribute, $data = array(), $htmlOptions = array())
	{
		return $this->inputBlock('dropdownlist', $model, $attribute, $data, $htmlOptions);
	}

	/**
	 * Renders a file field input block.
	 * @param CModel $model the data model
	 * @param string $attribute the attribute
	 * @param array $htmlOptions additional HTML attributes
	 * @return string the generated block
	 */
	public function fileFieldBlock($model, $attribute, $htmlOptions = array())
	{
		return $this->inputBlock('filefield', $model, $attribute, null, $htmlOptions);
	}

	/**
	 * Renders a password field input block.
	 * @param CModel $model the data model
	 * @param string $attribute the attribute
	 * @param array $htmlOptions additional HTML attributes
	 * @return string the generated block
	 */
	public function passwordFieldBlock($model, $attribute, $htmlOptions = array())
	{
		return $this->inputBlock('passwordfield', $model, $attribute, null, $htmlOptions);
	}

	/**
	 * Renders a radio button input block.
	 * @param CModel $model the data model
	 * @param string $attribute the attribute
	 * @param array $htmlOptions additional HTML attributes
	 * @return string the generated block
	 */
	public function radioButtonBlock($model, $attribute, $htmlOptions = array())
	{
		return $this->inputBlock('radiobutton', $model, $attribute, null, $htmlOptions);
	}

	/**
	 * Renders a radio button list input block.
	 * @param CModel $model the data model
	 * @param string $attribute the attribute
	 * @param array $data the list data
	 * @param array $htmlOptions additional HTML attributes
	 * @return string the generated block
	 */
	public function radioButtonListBlock($model, $attribute, $data = array(), $htmlOptions = array())
	{
		return $this->inputBlock('radiobuttonlist', $model, $attribute, $data, $htmlOptions);
	}

	/**
	 * Renders a text field input block.
	 * @param CModel $model the data model
	 * @param string $attribute the attribute
	 * @param array $htmlOptions additional HTML attributes
	 * @return string the generated block
	 */
	public function textFieldBlock($model, $attribute, $htmlOptions = array())
	{
		return $this->inputBlock('textfield', $model, $attribute, null, $htmlOptions);
	}

	/**
	 * Renders a text area input block.
	 * @param CModel $model the data model
	 * @param string $attribute the attribute
	 * @param array $htmlOptions additional HTML attributes
	 * @return string the generated block
	 */
	public function textAreaBlock($model, $attribute, $htmlOptions = array())
	{
		return $this->inputBlock('textarea', $model, $attribute, null, $htmlOptions);
	}

	/**
	 * Renders a captcha block.
	 * @param CModel $model the data model
	 * @param string $attribute the attribute
	 * @param array $htmlOptions additional HTML attributes
	 * @return string the generated block
	 * @since 0.9.3
	 */
	public function captchaBlock($model, $attribute, $htmlOptions = array())
	{
		return $this->inputBlock('captcha', $model, $attribute, null, $htmlOptions);
	}

	/**
	 * Renders a boolean input field within a label for a model attribute.
	 * @param string $type the input type
	 * @param CModel $model the data model
	 * @param string $attribute the attribute
	 * @param array $htmlOptions additional HTML attributes
	 * @return string the generated toggle field
	 */
	public function booleanField($type, $model, $attribute, $htmlOptions = array())
	{
		if (!in_array($type, array('checkbox', 'radio')))
			throw new CException(__CLASS__.': '.Yii::t('bootstrap','Failed to render toggle field! Type is invalid.'));

		if (isset($htmlOptions['label']))
		{
			$label = $htmlOptions['label'];
			unset($htmlOptions['label']);
		}
		else
			$label = $model->getAttributeLabel($attribute);

		$method = $type === 'checkbox' ? 'activeCheckBox' : 'activeRadioButton';
		$input = BootHtml::$method($model, $attribute, $htmlOptions);

		// todo: think about alternative ways to do this.
		$matches = array();
		preg_match_all('/\<[\w\d\s\"\[\]\_\=]+\/\>/i', $input, $matches);

		$item = $matches[0][0].BootHtml::openTag('label');
		$item.= $matches[0][1].' '.BootHtml::tag('span', array(), $label);
		$item.= BootHtml::closeTag('label');

		ob_start();
		echo BootHtml::inputsList(array($item));
		return ob_get_clean();
	}

	/**
	 * Displays a summary of validation errors for one or several models.
	 * This method is very similar to {@link CHtml::errorSummary} except that it also works
	 * when AJAX validation is performed.
	 * @param mixed $models the models whose input errors are to be displayed. This can be either
	 * a single model or an array of models.
	 * @param string $header a piece of HTML code that appears in front of the errors
	 * @param string $footer a piece of HTML code that appears at the end of the errors
	 * @param array $htmlOptions additional HTML attributes to be rendered in the container div tag.
	 * @return string the error summary. Empty if no errors are found.
	 * @see CHtml::errorSummary
	 */
	public function errorSummary($models, $header = null, $footer = null, $htmlOptions = array())
	{
		if (!isset($htmlOptions['class']))
			$htmlOptions['class'] = 'alert-message error'; // Bootstrap error class as default

		return parent::errorSummary($models, $header, $footer, $htmlOptions);
	}

	/**
	 * Displays the first validation error for a model attribute.
	 * @param CModel $model the data model
	 * @param string $attribute the attribute name
	 * @param array $htmlOptions additional HTML attributes to be rendered in the container div tag.
	 * @param boolean $enableAjaxValidation whether to enable AJAX validation for the specified attribute.
	 * @param boolean $enableClientValidation whether to enable client-side validation for the specified attribute.
	 * @return string the validation result (error display or success message).
	 */
	public function error($model, $attribute, $htmlOptions = array(), $enableAjaxValidation = true, $enableClientValidation = true)
	{
		if (!$this->enableAjaxValidation)
			$enableAjaxValidation = false;

		if (!$this->enableClientValidation)
			$enableClientValidation = false;

		if (!isset($htmlOptions['class']))
			$htmlOptions['class'] = $this->errorMessageCssClass;

		if (!$enableAjaxValidation && !$enableClientValidation)
			return BootHtml::error($model, $attribute, $htmlOptions);

		$id = BootHtml::activeId($model,$attribute);
		$inputID = isset($htmlOptions['inputID']) ? $htmlOptions['inputID'] : $id;
		unset($htmlOptions['inputID']);
		if (!isset($htmlOptions['id']))
			$htmlOptions['id'] = $inputID.'_em_';

		$option = array(
			'id'=>$id,
			'inputID'=>$inputID,
			'errorID'=>$htmlOptions['id'],
			'model'=>get_class($model),
			'name'=>BootHtml::resolveName($model, $attribute),
			'enableAjaxValidation'=>$enableAjaxValidation,
			'inputContainer'=>'div.clearfix', // Bootstrap requires this
		);

		$optionNames = array(
			'validationDelay',
			'validateOnChange',
			'validateOnType',
			'hideErrorMessage',
			'inputContainer',
			'errorCssClass',
			'successCssClass',
			'validatingCssClass',
			'beforeValidateAttribute',
			'afterValidateAttribute',
		);

		foreach ($optionNames as $name)
		{
			if (isset($htmlOptions[$name]))
			{
				$option[$name] = $htmlOptions[$name];
				unset($htmlOptions[$name]);
			}
		}

		if ($model instanceof CActiveRecord && !$model->isNewRecord)
			$option['status'] = 1;

		if ($enableClientValidation)
		{
			$validators = isset($htmlOptions['clientValidation']) ? array($htmlOptions['clientValidation']) : array();
			foreach ($model->getValidators($attribute) as $validator)
			{
				if ($enableClientValidation && $validator->enableClientValidation)
				{
					if (($js = $validator->clientValidateAttribute($model,$attribute)) != '')
						$validators[] = $js;
				}
			}

			if ($validators !== array())
				$option['clientValidation']="js:function(value, messages, attribute) {\n".implode("\n",$validators)."\n}";
		}

		$html = BootHtml::error($model, $attribute, $htmlOptions);

		if ($html === '')
		{
			if(isset($htmlOptions['style']))
				$htmlOptions['style'] = rtrim($htmlOptions['style'], ';').';display:none';
			else
				$htmlOptions['style'] = 'display:none';

			$html = BootHtml::tag('span', $htmlOptions, '');
		}

		$this->attributes[$inputID] = $option;
		return $html;
	}
}
