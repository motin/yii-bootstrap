<?php
/**
 * BootHtml class file.
 * @author Christoffer Niska <ChristofferNiska@gmail.com>
 * @copyright Copyright &copy; Christoffer Niska 2011-
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 */

class BootHtml extends CHtml
{
	/**
	 * @property string the CSS class for displaying error summaries (see {@link errorSummary}).
	 */
	public static $errorSummaryCss = 'alert-message error';
	/**
	 * @property string the CSS class for displaying error messages (see {@link error}).
	 */
	public static $errorMessageCss = 'help-inline';

	public static function inputsList($items)
	{
		echo BootHtml::openTag('ul',array('class'=>'inputs-list'));

		foreach ($items as $item)
		{
			echo BootHtml::openTag('li');
			echo $item;
			echo '</li>';
		}
		
		echo BootHtml::closeTag('ul');
	}

	/**
	 * Displays the first validation error for a model attribute.
	 * @param CModel $model the data model
	 * @param string $attribute the attribute name
	 * @param array $htmlOptions additional HTML attributes to be rendered in the container div tag.
	 * This parameter has been available since version 1.0.7.
	 * @return string the error display. Empty if no errors are found.
	 * @see CModel::getErrors
	 * @see errorMessageCss
	 */
	public static function error($model, $attribute, $htmlOptions = array())
	{
		CHtml::resolveName($model, $attribute);
		$error = $model->getError($attribute);

		if ($error !== null)
		{
			if (!isset($htmlOptions['class']))
				$htmlOptions['class'] = self::$errorMessageCss;

			return CHtml::tag('span', $htmlOptions, $error); // Bootstrap errors must be spans
		}
		else
			return '';
	}
}
