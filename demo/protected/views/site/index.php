<?php $this->pageTitle=Yii::app()->name; ?>

<ul class="nav nav-pills">
	<li><a href="#bootMenu">BootMenu</a></li>
	<li><a href="#bootAlert">BootAlert</a></li>
	<li><a href="#bootCrumb">BootCrumb</a></li>
	<li><a href="#bootActiveForm">BootActiveForm</a></li>
	<li><a href="#bootTwipsy">BootTwipsy</a></li>
	<li><a href="#bootPopover">BootPopover</a></li>
	<li><a href="#bootModal">BootModal</a></li>
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
		array('label'=>'Dropdown', 'items'=>array(
			array('label'=>'Secondary link', 'url'=>'#'),
			array('label'=>'Something else here', 'url'=>'#'),
			'---',
			array('label'=>'Another link', 'url'=>'#'),
		)),
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

	<?php $this->widget('bootstrap.widgets.BootAlert',array(
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
	));
	?>

	<?php /** @var BootActiveForm $form */?>
	<?php //echo $form->textFieldRow($model, 'username'); ?>
	<?php //echo $form->passwordFieldRow('password'); ?>
	<?php //echo $form->checkBoxRow('rememberMe'); ?>

	<div class="actions">
		<?php echo CHtml::submitButton('Login', array('class'=>'btn-primary')); ?>
		<?php echo CHtml::submitButton('Login', array('class'=>'btn-success')); ?>
		<i class="icon-search icon-white"><?php echo CHtml::button('Login', array('class'=>'btn btn-primary')); ?></i>
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
	<?php $this->widget('BootPopover',array(
	'selector'=>'.pop',
	'options'=>array(
		'placement'=>'above',
		'showEvent'=>'mouseenter',
		'hideEvent'=>'mouseleave',
		'offset'=>0, // tooltip offset in pixels
		'live'=>false, // use .live instead of .bind?
	),
)); ?>
	<?php echo CHtml::link('Click Here', array('#'), array('title'=>'Tooltip text.', 'class'=>'btn btn-primary pop')); ?>
	<p>Popover tooltips do not appear correctly.</p>
</div>

<hr />

<div id="bootModal">
	<h3>BootModal</h3>
	<?php $this->beginWidget('BootModal',array(
	'id'=>'modal',
	'options'=>array(
		'title'=>'Sample title',
		'backdropClose'=>false, // close the modal when the backdrop is clicked?
		'escapeClose'=>false, // close the modal when escape is pressed?
		'open'=>false, // should we open the modal on initialization?
		'closeTime'=>350,
		'openTime'=>1000,
		'buttons'=>array(
			array(
				'label'=>'Ok',
				'class'=>'btn primary',
				'click'=>"js:function() {
                    .....
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
	<?php $this->endWidget(); ?>

	<div id="modal" class="modal hide fade" style="display: none;">
		<div class="modal-header">
			<a class="close" data-dismiss="modal">×</a>
			<h3>Modal Heading</h3>
		</div>
		<div class="modal-body">
			<h4>Text in a modal</h4>
			<p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem.</p>
			<h4>Popover in a modal</h4>
			<p>
			<h4>Tooltips in a modal</h4>
			<p>
		</div>
		<div class="modal-footer">
			<a class="btn btn-primary" href="#">Save changes</a>
			<a class="btn" data-dismiss="modal" href="#">Close</a>
		</div>
	</div>

	<a href="#" onclick="$('#modal').bootModal('open'); return false;">Open</a>
	<a class="btn" data-toggle="modal" href="#modal">Launch Modal</a>
	<p>Cannot get this to work.</p>
</div>