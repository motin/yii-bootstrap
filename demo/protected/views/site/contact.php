<?php
$this->pageTitle=Yii::app()->name . ' - Contact Us';
$this->breadcrumbs=array(
	'Contact',
);
?>

<h1>Contact Us</h1>

<p class="well">
	If you have business inquiries or other questions, please fill out the following form to contact us. Thank you.
</p>

<?php /** @var BootActiveForm $form */
$form=$this->beginWidget('bootstrap.widgets.BootActiveForm',array(
	'id'=>'contact-form',
	'type'=>BootActiveForm::TYPE_HORIZONTAL,
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<fieldset>

		<?php echo $form->textFieldRow($model,'name'); ?>
		<?php echo $form->textFieldRow($model,'email'); ?>
		<?php echo $form->textFieldRow($model,'subject',array('class'=>'span6','maxlength'=>128,'size'=>60)); ?>
		<?php echo $form->textAreaRow($model,'body',array('class'=>'span8','rows'=>6)); ?>

		<?php if(CCaptcha::checkRequirements()): ?>
			<?php echo $form->captchaRow($model,'verifyCode',
					array('hint'=>'Please enter the letters as they are shown in the image above.<br/>Letters are not case-sensitive.')); ?>
		<?php endif; ?>

		<div class="form-actions">
			<?php echo CHtml::htmlButton('<i class="icon-ok icon-white"></i> Submit',array('class'=>'btn btn-primary','type'=>'submit')); ?>
		</div>

	</fieldset>

<?php $this->endWidget(); ?>