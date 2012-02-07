<?php $this->pageTitle=Yii::app()->name; ?>

<div class="row">

	<div class="span10">

		<div id="bootActiveForm">

			<h3>BootActiveForm</h3>

			<?php $form=$this->beginWidget('BootActiveForm', array(
				'id'=>'login-form',
				'enableClientValidation'=>true,
				'clientOptions'=>array('validateOnSubmit'=>true),
			)); ?>

			<p>@todo</p>

			<div class="form-actions">
				<?php echo CHtml::htmlButton('<i class="icon-ok icon-white"></i> Submit', array('class'=>'btn btn-primary','type'=>'submit')); ?>
				<?php echo CHtml::htmlButton('<i class="icon-remove"></i> Reset', array('class'=>'btn','type'=>'reset')); ?>
			</div>

			<?php $this->endWidget(); ?>

		</div>

		<div id="bootAlert">

			<h3>BootAlert</h3>

			<?php Yii::app()->user->setFlash('success', '<strong>Well done!</strong> You successfully read this important alert message.'); ?>
			<?php Yii::app()->user->setFlash('info', '<strong>Heads up!</strong> This alert needs your attention, but it\'s not super important.'); ?>
			<?php Yii::app()->user->setFlash('warning', '<strong>Warning!</strong> Best check yo self, you\'re not looking too good.'); ?>
			<?php Yii::app()->user->setFlash('error', '<strong>Oh snap!</strong> Change a few things up and try submitting again.'); ?>

			<?php $this->widget('BootAlert', array(
				'options'=>array('displayTime'=>0),
			)); ?>

		</div>

		<hr />

		<div id="bootCrumb">

			<h3>BootCrumb</h3>

			<?php $this->widget('BootCrumb', array(
				'links'=>array('Library'=>'#', 'Data'),
			)); ?>

		</div>

		<hr />

		<div id="bootNavbar">

			<h3>BootNavbar</h3>

			<?php $this->widget('BootNavbar', array(
				'fixed'=>false,
				'brand'=>'Project name',
				'brandUrl'=>'#',
				'items'=>array(
					array(
						'class'=>'BootMenu',
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
					'<form class="navbar-search pull-left" action=""><input type="text" class="search-query span2" placeholder="Search"></form>',
					array(
						'class'=>'BootMenu',
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

		</div>

		<hr />

		<div id="bootMenu">

			<h3>BootMenu</h3>

			<h4>Tabs</h4>

			<div class="row">

				<div class="span5">

					<?php $this->widget('BootMenu', array(
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

				<div class="span5">

					<?php $this->widget('BootMenu', array(
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

			<h4>Pills</h4>

			<div class="row">

				<div class="span5">

					<?php $this->widget('BootMenu', array(
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

				<div class="span5">

					<?php $this->widget('BootMenu', array(
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

			<h4>List</h4>

			<div class="well" style="padding: 8px 0;">

				<?php $this->widget('BootMenu', array(
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

		</div>

		<hr />

		<div id="bootTabbed">

			<h3>BootTabbed</h3>
			
			<p>@todo</p>

		</div>

		<hr />

		<div id="bootGridView">
			
			<h3>BootGridView</h3>

			<h4>Default</h4>

			<?php $this->widget('BootGridView', array(
				'dataProvider'=>$gridDataProvider,
				'template'=>"{items}",
				'itemsCssClass'=>'table',
				'columns'=>$gridColumns,
			)); ?>

			<h4>Striped</h4>

			<?php $this->widget('BootGridView', array(
				'dataProvider'=>$gridDataProvider,
				'template'=>"{items}",
				'itemsCssClass'=>'table table-striped',
				'columns'=>$gridColumns,
			)); ?>

			<h4>Condensed</h4>

			<?php $this->widget('BootGridView', array(
				'dataProvider'=>$gridDataProvider,
				'template'=>"{items}",
				'itemsCssClass'=>'table table-condensed',
				'columns'=>$gridColumns,
			)); ?>

			<h4>Striped and condensed</h4>

			<?php $this->widget('BootGridView', array(
				'dataProvider'=>$gridDataProvider,
				'template'=>"{items}",
				'itemsCssClass'=>'table table-striped table-condensed',
				'columns'=>$gridColumns,
			)); ?>
			
		</div>

		<hr />

		<div id="bootThumbs">

			<h3>BootThumbs</h3>

			<?php $this->widget('BootThumbs', array(
				'dataProvider'=>$listDataProvider,
				'template'=>"{items}\n{pager}",
				'itemView'=>'_thumb',
			)); ?>

		</div>

		<hr />

		<div id="bootTooltip">

			<h3>BootTooltip</h3>

			<p class="well">
				Lorem ipsum dolor sit amet,
				<a href="#" rel="tooltip" title="First tooltip">consectetur</a>
				adipiscing elit.
				Fusce ut velit sem, id elementum elit. Quisque tincidunt magna in quam luctus a ultrices tellus luctus.
				Pellentesque at tellus urna. Ut congue, nibh eu
				<a href="#" rel="tooltip" title="Another tooltip">interdum commodo</a>,
				ligula urna consequat tortor, at vehicula tellus est a orci.
				Maecenas nec ligula sed ipsum posuere sollicitudin pretium ac sapien.
				Sed odio dui, pretium eu pellentesque ac, tempor sed sem. Sed
				<a href="#" rel="tooltip" title="Yet another tooltip">sodales</a>
				massa a dui tempor dapibus.
			</p>

			<?php $this->widget('BootTooltip'); ?>

		</div>

		<hr />

		<div id="bootPopover">

			<h3>BootPopover</h3>

			<?php echo CHtml::link('Hover me', '#',
					array('class'=>'btn btn-primary btn-danger','data-title'=>'Heading','data-content'=>'Content ...','rel'=>'popover')); ?>

			<?php $this->widget('BootPopover'); ?>

		</div>

		<hr />

		<div id="bootModal">

			<h3>BootModal</h3>

			<?php $this->beginWidget('BootModal',array(
			'id'=>'modal',
			'options'=>array(
				'title'=>'Heading',
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

			<?php echo CHtml::link('Click me','#',array('class'=>'btn btn-primary', 'onclick'=>"jQuery('#modal').bootModal('open'); return false;")); ?>

		</div>

	</div>

	<div class="span2">

		<div class="well" style="padding: 8px 0;">

			<?php $this->widget('BootMenu', array(
				'type'=>'list',
				'items'=>array(
					array('label'=>'WIDGETS','itemOptions'=>array('class'=>'nav-header')),
					array('label'=>'BootActiveForm','url'=>'#bootActiveForm'),
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
				),
			)); ?>

		</div>

	</div>

</div>