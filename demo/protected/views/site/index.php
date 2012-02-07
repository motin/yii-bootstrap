<?php $this->pageTitle=Yii::app()->name; ?>

<ul class="nav nav-pills">
	<li><a href="#bootMenu">BootMenu</a></li>
	<li><a href="#bootAlert">BootAlert</a></li>
	<li><a href="#bootCrumb">BootCrumb</a></li>
	<li><a href="#bootActiveForm">BootActiveForm</a></li>
	<li><a href="#bootTwipsy">BootTwipsy</a></li>
	<li><a href="#bootPopover">BootPopover</a></li>
	<li><a href="#bootModal">BootModal</a></li>
	<li><a href="#bootTabbed">BootTabbed</a></li>
</ul>

<hr />

<div id="bootMenu">
	<h3>BootMenu</h3>

	<?php $this->widget('BootMenu', array(
	'type'=>'tabs', // '', tabs or pills, defaults to tabs
	'items'=>array(
		array('label'=>'Home', 'url'=>array('site/index')),
		array('label'=>'About', 'url'=>'#'),
		array('label'=>'Dropdown', 'items'=>array(
			array('label'=>'Secondary link', 'url'=>'#'),
			array('label'=>'Something else here', 'url'=>'#'),
			'---',
			array('label'=>'Another link', 'url'=>'#'),
		)),
		/*
		array('label'=>'Dropdown', 'items'=>array(
			array('label'=>'Secondary link', 'url'=>'#'),
			array('label'=>'Something else here', 'url'=>'#'),
			'---',
			array('label'=>'Another link', 'url'=>'#'),
		)),
		*/
		array('label'=>'Contact', 'url'=>array('site/contact')),
	),
	)); ?>
	<p>Menu items (single & dropdown) placed after a dropdown item appear wrongly.</p>

</div>

<hr />

<div id="bootAlert">

	<h3>BootAlert</h3>

	<?php Yii::app()->user->setFlash('success','Success!'); ?>
	<?php Yii::app()->user->setFlash('warning','This is a warning.'); ?>
	<?php Yii::app()->user->setFlash('info','Attention!'); ?>
	<?php Yii::app()->user->setFlash('error','This is an error.'); ?>

	<?php $this->widget('BootAlert',array(
		'options'=>array('displayTime'=>0),
	)); ?>

</div>

<hr />

<div id="bootCrumb">

	<h3>BootCrumb</h3>

	<?php $this->widget('BootCrumb',array(
		'links'=>$this->breadcrumbs,
		'separator'=>'/',
		'homeLink'=>array('label'=>'Home','url'=>Yii::app()->homeUrl),
		'links'=>array(
			'Products'=>array('products/view'),
			'Users'=>array('users/view'),
			'Current Page',
		),
	)); ?>

</div>

<hr />

<div id="bootActiveForm">

	<h3>BootActiveForm</h3>

	<p>[Include form fields]</p>

	<?php $form=$this->beginWidget('BootActiveForm', array(
		'id'=>'login-form',
		'enableClientValidation'=>false,
		'clientOptions'=>array(
			'validateOnSubmit'=>false,
		),
	)); ?>

	<?php /** @var BootActiveForm $form */?>
	<?php //echo $form->textFieldRow($model, 'username'); ?>
	<?php //echo $form->passwordFieldRow('password'); ?>
	<?php //echo $form->checkBoxRow('rememberMe'); ?>

	<div class="actions">
		<?php echo CHtml::htmlButton('Submit', array('class'=>'btn btn-primary','type'=>'submit')); ?>
		<?php echo CHtml::htmlButton('Reset', array('class'=>'btn','type'=>'reset')); ?>
		<?php echo CHtml::htmlButton('<i class="icon-search"></i> Search', array('class'=>'btn')); ?></i>
		<p>Button icon classes do not work.</p>
	</div>

	<?php $this->endWidget(); ?>

</div>

<hr />

<div id="bootTwipsy">
	<h3>BootTwipsy</h3>

	<?php echo CHtml::link('Click Here', array('#'), array('title'=>'Tooltip text.', 'class'=>'btn btn-primary')); ?>
	<p>Tooltips appear at the bottom-left corner of the page.</p>
</div>

<hr />

<div id="bootPopover">

	<h3>BootPopover</h3>

	<?php echo CHtml::link('Hover me', '#', 
			array('class'=>'btn btn-primary btn-danger','data-title'=>'Heading','data-content'=>'Content ...','rel'=>'popover')); ?>

	<?php $this->widget('BootPopover',array(
		'options'=>array(),
	)); ?>

</div>

<hr />

<div id="bootModal">

	<h3>BootModal</h3>

	<?php $this->beginWidget('BootModal',array(
	'id'=>'modal',
	'options'=>array(
		'title'=>'Modal heading',
		'backdropClose'=>false, // close the modal when the backdrop is clicked?
		'escapeClose'=>false, // close the modal when escape is pressed?
		'open'=>false, // should we open the modal on initialization?
		'closeTime'=>350,
		'openTime'=>1000,
		'buttons'=>array(
			array(
				'label'=>'Ok',
				'class'=>'btn btn-primary',
				'click'=>"js:function() {
                    
                }",
			),
			array(
				'label'=>'Cancel',
				'class'=>'btn',
				'click'=>"js:function() {
                    $('#modal').bootModal('close');
                    return false;
                }",
			),
		),
	),
	)); ?>

	Content ...

	<?php $this->endWidget(); ?>

	<a href="#" onclick="$('#modal').bootModal('open'); return false;">Open</a>

</div>