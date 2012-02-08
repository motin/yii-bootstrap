<?php $this->pageTitle=Yii::app()->name; ?>

<div class="row">

	<div class="span9">

		<h1>Widgets</h1>

		<div class="section" id="bootAlert">

			<h2>BootAlert</h2>

			<?php
			Yii::app()->user->setFlash('success',
					'<strong>Well done!</strong> You successfully read this important alert message.');
			Yii::app()->user->setFlash('info',
					'<strong>Heads up!</strong> This alert needs your attention, but it\'s not super important.');
			Yii::app()->user->setFlash('warning',
					'<strong>Warning!</strong> Best check yo self, you\'re not looking too good.');
			Yii::app()->user->setFlash('error',
					'<strong>Oh snap!</strong> Change a few things up and try submitting again.');
			?>

			<?php $this->widget('bootstrap.widgets.BootAlert'); ?>

			<h4>Source code</h4>

<?php echo $parser->safeTransform("~~~
[php]
<?php
Yii::app()->user->setFlash('success',
		'<strong>Well done!</strong> You successfully read this important alert message.');
Yii::app()->user->setFlash('info',
		'<strong>Heads up!</strong> This alert needs your attention, but it\'s not super important.');
Yii::app()->user->setFlash('warning',
		'<strong>Warning!</strong> Best check yo self, you\'re not looking too good.');
Yii::app()->user->setFlash('error',
		'<strong>Oh snap!</strong> Change a few things up and try submitting again.');
?>
~~~
~~~
[php]
<?php \$this->widget('bootstrap.widgets.BootAlert'); ?>
~~~"); ?>

			<a class="top" href="#top">Back to top &uarr;</a>

		</div>

		<div class="section" id="bootCrumb">

			<h2>BootCrumb</h2>

			<?php $this->widget('bootstrap.widgets.BootCrumb', array(
				'links'=>array('Library'=>'#', 'Data'),
			)); ?>

			<h4>Source code</h4>

<?php echo $parser->safeTransform("~~~
[php]
<?php \$this->widget('bootstrap.widgets.BootCrumb', array(
	'links'=>array('Library'=>'#', 'Data'),
)); ?>
~~~"); ?>

			<a class="top" href="#top">Back to top &uarr;</a>

		</div>

		<div class="section" id="bootNavbar">

			<h2>BootNavbar</h2>

			<?php $this->widget('bootstrap.widgets.BootNavbar', array(
				'fixed'=>false,
				'brand'=>'Project name',
				'brandUrl'=>'#',
				'items'=>array(
					array(
						'class'=>'bootstrap.widgets.BootMenu',
						'items'=>array(
							array('label'=>'Home', 'url'=>'#', 'active'=>true),
							array('label'=>'Link', 'url'=>'#'),
							array('label'=>'Dropdown', 'url'=>'#', 'items'=>array(
								array('label'=>'Action', 'url'=>'#'),
								array('label'=>'Another action', 'url'=>'#'),
								array('label'=>'Something else here', 'url'=>'#'),
								'---',
								array('label'=>'Separated link', 'url'=>'#'),
							)),
						),
					),
					'<form class="navbar-search pull-left" action="">
						<input type="text" class="search-query span2" placeholder="Search">
					</form>',
					array(
						'class'=>'bootstrap.widgets.BootMenu',
						'htmlOptions'=>array('class'=>'pull-right'),
						'items'=>array(
							array('label'=>'Link', 'url'=>'#'),
							array('label'=>'Dropdown', 'url'=>'#', 'items'=>array(
								array('label'=>'Action', 'url'=>'#'),
								array('label'=>'Another action', 'url'=>'#'),
								array('label'=>'Something else here', 'url'=>'#'),
								'---',
								array('label'=>'Separated link', 'url'=>'#'),
							)),
						),
					),
				),
			)); ?>

			<h4>Source code</h4>

<?php echo $parser->safeTransform("~~~
[php]
<?php \$this->widget('bootstrap.widgets.BootNavbar', array(
	'fixed'=>false,
	'brand'=>'Project name',
	'brandUrl'=>'#',
	'items'=>array(
		array(
			'class'=>'bootstrap.widgets.BootMenu',
			'items'=>array(
				array('label'=>'Home', 'url'=>'#', 'active'=>true),
				array('label'=>'Link', 'url'=>'#'),
				array('label'=>'Dropdown', 'url'=>'#', 'items'=>array(
					array('label'=>'Action', 'url'=>'#'),
					array('label'=>'Another action', 'url'=>'#'),
					array('label'=>'Something else here', 'url'=>'#'),
					'---',
					array('label'=>'Separated link', 'url'=>'#'),
				)),
			),
		),
		'<form class=\"navbar-search pull-left\" action=\"\">
			<input type=\"text\" class=\"search-query span2\" placeholder=\"Search\">
		</form>',
		array(
			'class'=>'bootstrap.widgets.BootMenu',
			'htmlOptions'=>array('class'=>'pull-right'),
			'items'=>array(
				array('label'=>'Link', 'url'=>'#'),
				array('label'=>'Dropdown', 'url'=>'#', 'items'=>array(
					array('label'=>'Action', 'url'=>'#'),
					array('label'=>'Another action', 'url'=>'#'),
					array('label'=>'Something else here', 'url'=>'#'),
					'---',
					array('label'=>'Separated link', 'url'=>'#'),
				)),
			),
		),
	),
)); ?>
~~~"); ?>

			<a class="top" href="#top">Back to top &uarr;</a>

		</div>

		<div class="section" id="bootMenu">

			<h2>BootMenu</h2>

			<h3>Tabs</h3>

			<div class="row">

				<div class="span5">

					<h4>Default</h4>

					<?php $this->widget('bootstrap.widgets.BootMenu', array(
						'type'=>'tabs',
						'items'=>array(
							array('label'=>'Home', 'url'=>'#', 'active'=>true),
							array('label'=>'Profile', 'url'=>'#'),
							array('label'=>'Dropdown', 'items'=>array(
								array('label'=>'Secondary link', 'url'=>'#'),
								array('label'=>'Something else here', 'url'=>'#'),
								'---',
								array('label'=>'Another link', 'url'=>'#'),
							)),
							array('label'=>'Messages', 'url'=>'#'),
						),
					)); ?>

				</div>

				<div class="span4">

					<h4>Stacked</h4>

					<?php $this->widget('bootstrap.widgets.BootMenu', array(
						'type'=>'tabs',
						'stacked'=>true,
						'items'=>array(
							array('label'=>'Home', 'url'=>'#', 'active'=>true),
							array('label'=>'Profile', 'url'=>'#'),
							array('label'=>'Dropdown', 'items'=>array(
								array('label'=>'Secondary link', 'url'=>'#'),
								array('label'=>'Something else here', 'url'=>'#'),
								'---',
								array('label'=>'Another link', 'url'=>'#'),
							)),
							array('label'=>'Messages', 'url'=>'#'),
						),
					)); ?>

				</div>

			</div>

			<h3>Pills</h3>

			<div class="row">

				<div class="span5">

					<h4>Default</h4>

					<?php $this->widget('bootstrap.widgets.BootMenu', array(
						'type'=>'pills',
						'items'=>array(
							array('label'=>'Home', 'url'=>'#', 'active'=>true),
							array('label'=>'Profile', 'url'=>'#'),
							array('label'=>'Dropdown', 'items'=>array(
								array('label'=>'Secondary link', 'url'=>'#'),
								array('label'=>'Something else here', 'url'=>'#'),
								'---',
								array('label'=>'Another link', 'url'=>'#'),
							)),
							array('label'=>'Messages', 'url'=>'#'),
						),
					)); ?>

				</div>

				<div class="span4">

					<h4>Stacked</h4>

					<?php $this->widget('bootstrap.widgets.BootMenu', array(
						'type'=>'pills',
						'stacked'=>true,
						'items'=>array(
							array('label'=>'Home', 'url'=>'#', 'active'=>true),
							array('label'=>'Profile', 'url'=>'#'),
							array('label'=>'Dropdown', 'items'=>array(
								array('label'=>'Secondary link', 'url'=>'#'),
								array('label'=>'Something else here', 'url'=>'#'),
								'---',
								array('label'=>'Another link', 'url'=>'#'),
							)),
							array('label'=>'Messages', 'url'=>'#'),
						),
					)); ?>

				</div>

			</div>

			<h3>List</h3>

			<div class="well" style="padding: 8px 0;">

				<?php $this->widget('bootstrap.widgets.BootMenu', array(
					'type'=>'list',
					'items'=>array(
						array('label'=>'Home', 'url'=>'#', 'active'=>true),
						array('label'=>'Profile', 'url'=>'#'),
						array('label'=>'Dropdown', 'items'=>array(
							array('label'=>'Secondary link', 'url'=>'#'),
							array('label'=>'Something else here', 'url'=>'#'),
							'---',
							array('label'=>'Another link', 'url'=>'#'),
						)),
						array('label'=>'Messages', 'url'=>'#'),
					),
				)); ?>

			</div>

			<h4>Source code</h4>

<?php echo $parser->safeTransform("~~~
[php]
<?php \$this->widget('bootstrap.widgets.BootMenu', array(
	'type'=>'tabs', // '', 'tabs', 'pills' or 'list'
	'stacked'=>false, // whether this is a stacked menu
	'items'=>array(
		array('label'=>'Home', 'url'=>'#', 'active'=>true),
		array('label'=>'Profile', 'url'=>'#'),
		array('label'=>'Dropdown', 'items'=>array(
			array('label'=>'Secondary link', 'url'=>'#'),
			array('label'=>'Something else here', 'url'=>'#'),
			'---',
			array('label'=>'Another link', 'url'=>'#'),
		)),
		array('label'=>'Messages', 'url'=>'#'),
	),
)); ?>
~~~"); ?>

			<a class="top" href="#top">Back to top &uarr;</a>

		</div>

		<div class="section" id="bootTabbed">

			<h2>BootTabbed</h2>

			<p>@todo</p>

			<a class="top" href="#top">Back to top &uarr;</a>

		</div>

		<div class="section" id="bootGridView">

			<h2>BootGridView</h2>

			<h3>Default</h3>

			<?php $this->widget('bootstrap.widgets.BootGridView', array(
				'dataProvider'=>$gridDataProvider,
				'template'=>"{items}",
				'itemsCssClass'=>'table',
				'columns'=>$gridColumns,
			)); ?>

			<h3>Striped</h3>

			<?php $this->widget('bootstrap.widgets.BootGridView', array(
				'dataProvider'=>$gridDataProvider,
				'template'=>"{items}",
				'itemsCssClass'=>'table table-striped',
				'columns'=>$gridColumns,
			)); ?>

			<h3>Condensed</h3>

			<?php $this->widget('bootstrap.widgets.BootGridView', array(
				'dataProvider'=>$gridDataProvider,
				'template'=>"{items}",
				'itemsCssClass'=>'table table-condensed',
				'columns'=>$gridColumns,
			)); ?>

			<h3>Striped and condensed</h3>

			<?php $this->widget('bootstrap.widgets.BootGridView', array(
				'dataProvider'=>$gridDataProvider,
				'template'=>"{items}",
				'itemsCssClass'=>'table table-striped table-condensed',
				'columns'=>$gridColumns,
			)); ?>

			<h4>Source code</h4>

<?php echo $parser->safeTransform("~~~
[php]
<?php \$this->widget('bootstrap.widgets.BootGridView', array(
	'dataProvider'=>\$gridDataProvider,
	'template'=>\"{items}\",
	'itemsCssClass'=>'table table-striped table-condensed',
	'columns'=>\$gridColumns,
)); ?>
~~~"); ?>

			<a class="top" href="#top">Back to top &uarr;</a>

		</div>

		<div class="section" id="bootThumbs">

			<h2>BootThumbs</h2>

			<?php $this->widget('bootstrap.widgets.BootThumbs', array(
				'dataProvider'=>$listDataProvider,
				'template'=>"{items}\n{pager}",
				'itemView'=>'_thumb',
				// Remove the existing tooltips and
				// rebind the plugin after each ajax-call.
				'afterAjaxUpdate'=>"js:function() {
					jQuery('.tooltip').remove();
					jQuery('a[rel=tooltip]').tooltip();
				}",
			)); ?>

			<h4>Source code</h4>

<?php echo $parser->safeTransform("~~~
[php]
<?php \$this->widget('bootstrap.widgets.BootThumbs', array(
	'dataProvider'=>\$listDataProvider,
	'template'=>\"{items}\\n{pager}\",
	'itemView'=>'_thumb',
	// Remove the existing tooltips and
	// rebind the plugin after each ajax-call.
	'afterAjaxUpdate'=>\"js:function() {
		jQuery('.tooltip').remove();
		jQuery('a[rel=tooltip]').tooltip();
	}\",
)); ?>
~~~
**\_thumb.php**
~~~
[html]
<li class=\"span3\">
	<a href=\"#\" class=\"thumbnail\" rel=\"tooltip\" data-title=\"Tooltip\">
		<img src=\"http://placehold.it/280x180\" alt=\"\">
	</a>
</li>
~~~"); ?>

			<a class="top" href="#top">Back to top &uarr;</a>

		</div>

		<div class="section" id="bootTooltip">

			<h2>BootTooltip</h2>

			<p class="well">
				Lorem ipsum dolor sit <a href="#" rel="tooltip" title="First tooltip">amet</a>,
				consectetur adipiscing elit.
				Fusce ut velit sem, id elementum elit. Quisque tincidunt magna in quam luctus a ultrices tellus luctus.
				Pellentesque at tellus urna.
				Ut congue, <a href="#" rel="tooltip" title="Another tooltip">nibh eu</a> interdum commodo,
				ligula urna consequat tortor, at vehicula tellus est a orci.
				Maecenas nec ligula sed ipsum posuere sollicitudin pretium ac sapien.
				Sed odio dui, pretium eu pellentesque ac,
				<a href="#" rel="tooltip" title="Yet another tooltip">tempor</a> sed sem.
			</p>

			<h4>Source code</h4>

<?php echo $parser->safeTransform("~~~
[html]
<p class=\"well\">
	Lorem ipsum dolor sit <a href=\"#\" rel=\"tooltip\" title=\"First tooltip\">amet</a>,
	consectetur adipiscing elit.
	Fusce ut velit sem, id elementum elit. Quisque tincidunt magna in quam luctus a ultrices tellus luctus.
	Pellentesque at tellus urna.
	Ut congue, <a href=\"#\" rel=\"tooltip\" title=\"Another tooltip\">nibh eu</a> interdum commodo,
	ligula urna consequat tortor, at vehicula tellus est a orci.
	Maecenas nec ligula sed ipsum posuere sollicitudin pretium ac sapien.
	Sed odio dui, pretium eu pellentesque ac,
	<a href=\"#\" rel=\"tooltip\" title=\"Yet another tooltip\">tempor</a> sed sem.
</p>
~~~"); ?>

			<a class="top" href="#top">Back to top &uarr;</a>

		</div>

		<div class="section" id="bootPopover">

			<h2>BootPopover</h2>

			<div class="well">
				<?php echo CHtml::link('Hover me', '#', array(
					'class'=>'btn btn-primary btn-danger',
					'data-title'=>'Heading',
					'data-content'=>'Content ...',
					'rel'=>'popover'
				)); ?>
			</div>

			<h4>Source code</h4>

<?php echo $parser->safeTransform("~~~
[php]
<?php echo CHtml::link('Hover me', '#', array(
	'class'=>'btn btn-primary btn-danger',
	'data-title'=>'Heading',
	'data-content'=>'Content ...',
	'rel'=>'popover'
)); ?>
~~~"); ?>

			<a class="top" href="#top">Back to top &uarr;</a>

		</div>

		<div class="section" id="bootModal">

			<h2>BootModal</h2>

			<?php $this->beginWidget('bootstrap.widgets.BootModal', array(
				'id'=>'modal',
				'events'=>array(
					'show'=>"js:function() { console.log('modal show.'); }",
					'shown'=>"js:function() { console.log('modal shown.'); }",
					'hide'=>"js:function() { console.log('modal hide.'); }",
					'hidden'=>"js:function() { console.log('modal hidden.'); }",
				),
				'htmlOptions'=>array('class'=>'modal hide fade'),
			)); ?>

			<div class="modal-header">
				<a class="close" data-dismiss="modal">&times;</a>
				<h3>Modal header</h3>
			</div>
			<div class="modal-body">
				<p>One fine body...</p>
			</div>
			<div class="modal-footer">
				<?php echo CHtml::link('Save changes', '#', array('class'=>'btn btn-primary', 'data-dismiss'=>'modal')); ?>
				<?php echo CHtml::link('Close', '#', array('class'=>'btn', 'data-dismiss'=>'modal')); ?>
			</div>

			<?php $this->endWidget(); ?>

			<div class="well">
				<?php echo CHtml::link('Click me','#modal', array(
					'class'=>'btn btn-primary',
					'data-toggle'=>'modal',
				)); ?>
			</div>

			<h4>Source code</h4>

<?php echo $parser->safeTransform("~~~
[php]
<?php \$this->beginWidget('bootstrap.widgets.BootModal', array(
	'id'=>'modal',
	'events'=>array(
		'show'=>\"js:function() { console.log('modal show.'); }\",
		'shown'=>\"js:function() { console.log('modal shown.'); }\",
		'hide'=>\"js:function() { console.log('modal hide.'); }\",
		'hidden'=>\"js:function() { console.log('modal hidden.'); }\",
	),
	'htmlOptions'=>array('class'=>'hide fade'),
)); ?>
~~~
~~~
[html]
<div class=\"modal-header\">
	<a class=\"close\" data-dismiss=\"modal\">&times;</a>
	<h3>Modal header</h3>
</div>
<div class=\"modal-body\">
	<p>One fine body…</p>
</div>
<div class=\"modal-footer\">
	<?php echo CHtml::link('Save changes', '#', array('class'=>'btn btn-primary', 'data-dismiss'=>'modal')); ?>
	<?php echo CHtml::link('Close', '#', array('class'=>'btn', 'data-dismiss'=>'modal')); ?>
</div>
~~~
~~~
[php]
<?php \$this->endWidget(); ?>
~~~
~~~
[php]
<?php echo CHtml::link('Click me','#modal', array(
	'class'=>'btn btn-primary',
	'data-toggle'=>'modal',
)); ?>
~~~"); ?>

			<a class="top" href="#top">Back to top &uarr;</a>

		</div>

		<div class="section" id="bootActiveForm">

			<h2>BootActiveForm</h2>

			<?php /** @var BootActiveForm $form */
			$form = $this->beginWidget('bootstrap.widgets.BootActiveForm', array(
				'id'=>'verticalForm',
				'enableClientValidation'=>true,
				'clientOptions'=>array('validateOnSubmit'=>true),
				'htmlOptions'=>array('class'=>'well'),
			)); ?>

			<?php echo $form->textFieldRow($model, 'textField'); ?>
			<?php echo $form->passwordFieldRow($model, 'password'); ?>
			<?php echo $form->checkboxRow($model, 'checkbox'); ?>

			<?php echo CHtml::htmlButton('<i class="icon-ok icon-white"></i> Submit',
					array('class'=>'btn btn-primary','type'=>'submit')); ?>

			<?php $this->endWidget(); ?>

			<?php /** @var BootActiveForm $form */
			$form = $this->beginWidget('bootstrap.widgets.BootActiveForm', array(
				'id'=>'horizontalForm',
				'type'=>BootActiveForm::TYPE_HORIZONTAL,
				'enableClientValidation'=>true,
				'clientOptions'=>array('validateOnSubmit'=>true),
			)); ?>

			<fieldset>

				<legend>Horizontal form</legend>

				<?php echo $form->textFieldRow($model, 'textField',
						array('hint'=>'In addition to freeform text, any HTML5 text-based input appears like so.')); ?>
				<?php echo $form->dropDownListRow($model, 'dropdown', array('Something ...', '1', '2', '3', '4', '5')); ?>
				<?php echo $form->dropDownListRow($model, 'multiDropdown', array('1', '2', '3', '4', '5'),
						array('multiple'=>true)); ?>
				<?php echo $form->fileFieldRow($model, 'fileField'); ?>
				<?php echo $form->textAreaRow($model, 'textarea', array('class'=>'span8', 'rows'=>5)); ?>
				<?php echo $form->uneditableRow($model, 'uneditable'); ?>
				<?php echo $form->textFieldRow($model, 'disabled', array('disabled'=>true)); ?>
				<?php echo $form->checkBoxRow($model, 'disabledCheckbox', array('disabled'=>true)); ?>
				<?php echo $form->checkBoxListInlineRow($model, 'inlineCheckboxes', array('1', '2', '3')); ?>
				<?php echo $form->checkBoxListRow($model, 'checkboxes', array(
					'Option one is this and that—be sure to include why it\'s great',
					'Option two can also be checked and included in form results',
					'Option three can—yes, you guessed it—also be checked and included in form results',
				), array('hint'=>'<strong>Note:</strong> Labels surround all the options for much larger click areas.')); ?>
				<?php echo $form->radioButtonRow($model, 'radioButton'); ?>
				<?php echo $form->radioButtonListRow($model, 'radioButtons', array(
					'Option one is this and that—be sure to include why it\'s great',
					'Option two can is something else and selecting it will deselect option one',
				)); ?>
				<?php echo $form->captchaRow($model, 'captcha'); ?>

			</fieldset>

			<div class="form-actions">
				<?php echo CHtml::htmlButton('<i class="icon-ok icon-white"></i> Submit',
						array('class'=>'btn btn-primary','type'=>'submit')); ?>
				<?php echo CHtml::htmlButton('<i class="icon-ban-circle"></i> Reset',
						array('class'=>'btn','type'=>'reset')); ?>
			</div>

			<?php $this->endWidget(); ?>

			<h4>Source code</h4>

<?php echo $parser->safeTransform("~~~
[php]
<?php /** @var BootActiveForm \$form */
\$form = \$this->beginWidget('bootstrap.widgets.BootActiveForm', array(
	'id'=>'verticalForm',
	'enableClientValidation'=>true,
	'clientOptions'=>array('validateOnSubmit'=>true),
	'htmlOptions'=>array('class'=>'well'),
)); ?>

<?php echo \$form->textFieldRow(\$model, 'textField'); ?>
<?php echo \$form->passwordFieldRow(\$model, 'password'); ?>
<?php echo \$form->checkboxRow(\$model, 'checkbox'); ?>

<?php echo CHtml::htmlButton('<i class=\"icon-ok icon-white\"></i> Submit',
		array('class'=>'btn btn-primary','type'=>'submit')); ?>

<?php \$this->endWidget(); ?>
~~~
~~~
[php]
<?php /** @var BootActiveForm \$form */
\$form = \$this->beginWidget('bootstrap.widgets.BootActiveForm', array(
	'id'=>'horizontalForm',
	'type'=>BootActiveForm::TYPE_HORIZONTAL,
	'enableClientValidation'=>true,
	'clientOptions'=>array('validateOnSubmit'=>true),
)); ?>

<fieldset>

	<legend>Horizontal form</legend>

	<?php echo \$form->textFieldRow(\$model, 'textField',
			array('hint'=>'In addition to freeform text, any HTML5 text-based input appears like so.')); ?>
	<?php echo \$form->dropDownListRow(\$model, 'dropdown', array('Something ...', '1', '2', '3', '4', '5')); ?>
	<?php echo \$form->dropDownListRow(\$model, 'multiDropdown', array('1', '2', '3', '4', '5'),
			array('multiple'=>true)); ?>
	<?php echo \$form->fileFieldRow(\$model, 'fileField'); ?>
	<?php echo \$form->textAreaRow(\$model, 'textarea', array('class'=>'span8', 'rows'=>5)); ?>
	<?php echo \$form->uneditableRow(\$model, 'uneditable'); ?>
	<?php echo \$form->textFieldRow(\$model, 'disabled', array('disabled'=>true)); ?>
	<?php echo \$form->checkBoxRow(\$model, 'disabledCheckbox', array('disabled'=>true)); ?>
	<?php echo \$form->checkBoxListInlineRow(\$model, 'inlineCheckboxes', array('1', '2', '3')); ?>
	<?php echo \$form->checkBoxListRow(\$model, 'checkboxes', array(
		'Option one is this and that—be sure to include why it\'s great',
		'Option two can also be checked and included in form results',
		'Option three can—yes, you guessed it—also be checked and included in form results',
	), array('hint'=>'<strong>Note:</strong> Labels surround all the options for much larger click areas.')); ?>
	<?php echo \$form->radioButtonRow(\$model, 'radioButton'); ?>
	<?php echo \$form->radioButtonListRow(\$model, 'radioButtons', array(
		'Option one is this and that—be sure to include why it\'s great',
		'Option two can is something else and selecting it will deselect option one',
	)); ?>
	<?php echo \$form->captchaRow(\$model, 'captcha'); ?>

</fieldset>

<div class=\"form-actions\">
	<?php echo CHtml::htmlButton('<i class=\"icon-ok icon-white\"></i> Submit',
			array('class'=>'btn btn-primary','type'=>'submit')); ?>
	<?php echo CHtml::htmlButton('<i class=\"icon-ban-circle\"></i> Reset',
			array('class'=>'btn','type'=>'reset')); ?>
</div>

<?php \$this->endWidget(); ?>
~~~"); ?>

			<a class="top" href="#top">Back to top &uarr;</a>

		</div>

	</div>

	<div class="span3">

		<div class="well" style="padding: 8px 0;">

			<?php $this->widget('bootstrap.widgets.BootMenu', array(
				'type'=>'list',
				//'scrollspy'=>true,
				'items'=>array(
					array('label'=>'WIDGETS','itemOptions'=>array('class'=>'nav-header')),
					array('label'=>'BootAlert','url'=>'#bootAlert'),
					array('label'=>'BootCrumb','url'=>'#bootCrumb'),
					array('label'=>'BootNavbar','url'=>'#bootNavbar'),
					array('label'=>'BootMenu','url'=>'#bootMenu'),
					array('label'=>'BootTabbed','url'=>'#bootTabbed'),
					array('label'=>'BootDetailView','url'=>'#bootDetailView'),
					array('label'=>'BootGridView','url'=>'#bootGridView'),
					array('label'=>'BootThumbs','url'=>'#bootThumbs'),
					array('label'=>'BootTooltip','url'=>'#bootTooltip'),
					array('label'=>'BootPopover','url'=>'#bootPopover'),
					array('label'=>'BootModal','url'=>'#bootModal'),
					array('label'=>'BootActiveForm','url'=>'#bootActiveForm'),
				),
			)); ?>

		</div>

	</div>

</div>