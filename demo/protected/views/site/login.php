<?php
$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>

<h1>Login</h1>

<p class="alert alert-block alert-info">Please fill out the following form with your login credentials:</p>

<?php  /** @var BootActiveForm $form */
$form=$this->beginWidget('bootstrap.widgets.BootActiveForm',array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<fieldset>

		<p>Fields with <span class="required">*</span> are required.</p>

		<?php echo $form->textFieldRow($model,'username'); ?>
		<?php echo $form->passwordFieldRow($model,'password',
				array('hint'=>'Hint: You may login with <tt>demo/demo</tt> or <tt>admin/admin</tt>.')); ?>
		<?php echo $form->checkBoxRow($model,'rememberMe'); ?>

		<div class="form-actions">
			<?php echo CHtml::htmlButton('<i class="icon-ok icon-white"></i> Login',array('class'=>'btn btn-primary','type'=>'submit')); ?>
		</div>

	</fieldset>

<?php $this->endWidget(); ?>
