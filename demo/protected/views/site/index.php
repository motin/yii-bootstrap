<?php $this->pageTitle=Yii::app()->name; ?>

<div class="row">

	<div class="span9">

		<h1>Widgets</h1>

		<section id="bootAlert">

			<h2>BootAlert</h2>

			<?php
			Yii::app()->user->setFlash('success', '<strong>Well done!</strong> You successfully read this important alert message.');
			Yii::app()->user->setFlash('info', '<strong>Heads up!</strong> This alert needs your attention, but it\'s not super important.');
			Yii::app()->user->setFlash('warning', '<strong>Warning!</strong> Best check yo self, you\'re not looking too good.');
			Yii::app()->user->setFlash('error', '<strong>Oh snap!</strong> Change a few things up and try submitting again.');
			?>

			<?php $this->widget('bootstrap.widgets.BootAlert'); ?>

			<h4>Source code</h4>

<?php echo $parser->safeTransform("~~~
[php]
<?php
Yii::app()->user->setFlash('success', '<strong>Well done!</strong> You successfully read this important alert message.');
Yii::app()->user->setFlash('info', '<strong>Heads up!</strong> This alert needs your attention, but it\'s not super important.');
Yii::app()->user->setFlash('warning', '<strong>Warning!</strong> Best check yo self, you\'re not looking too good.');
Yii::app()->user->setFlash('error', '<strong>Oh snap!</strong> Change a few things up and try submitting again.');
?>
~~~
~~~
[php]
<?php \$this->widget('bootstrap.widgets.BootAlert'); ?>
~~~"); ?>

			<a class="top" href="#top">Back to top &uarr;</a>

		</section>

		<section id="bootCrumb">

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

		</section>

		<section id="bootNavbar">

			<h2>BootNavbar</h2>

			<?php $this->widget('bootstrap.widgets.BootNavbar', array(
				'fixed'=>false,
				'brand'=>'Project name',
				'brandUrl'=>'#',
				'collapse'=>true, // requires bootstrap-responsive.css
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
	'collapse'=>true, // requires bootstrap-responsive.css
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

		</section>

		<section id="bootMenu">

			<h2>BootMenu</h2>

			<h3>Basic tabs</h3>

			<?php $this->widget('bootstrap.widgets.BootMenu', array(
				'type'=>'tabs',
				'items'=>array(
					array('label'=>'Home', 'url'=>'#', 'active'=>true),
					array('label'=>'Profile', 'url'=>'#'),
					array('label'=>'Messages', 'url'=>'#'),
				),
			)); ?>

			<h3>Stacked tabs</h3>

			<?php $this->widget('bootstrap.widgets.BootMenu', array(
				'type'=>'tabs',
				'stacked'=>true,
				'items'=>array(
					array('label'=>'Home', 'url'=>'#', 'active'=>true),
					array('label'=>'Profile', 'url'=>'#'),
					array('label'=>'Messages', 'url'=>'#'),
				),
			)); ?>

			<h3>Basic pills</h3>

			<?php $this->widget('bootstrap.widgets.BootMenu', array(
				'type'=>'pills',
				'items'=>array(
					array('label'=>'Home', 'url'=>'#', 'active'=>true),
					array('label'=>'Profile', 'url'=>'#'),
					array('label'=>'Messages', 'url'=>'#'),
				),
			)); ?>

			<h3>Stacked pills</h3>

			<?php $this->widget('bootstrap.widgets.BootMenu', array(
				'type'=>'pills',
				'stacked'=>true,
				'items'=>array(
					array('label'=>'Home', 'url'=>'#', 'active'=>true),
					array('label'=>'Profile', 'url'=>'#'),
					array('label'=>'Messages', 'url'=>'#'),
				),
			)); ?>

			<h4>Source code</h4>

<?php echo $parser->safeTransform("~~~
[php]
<?php \$this->widget('bootstrap.widgets.BootMenu', array(
	'type'=>'tabs', // '', 'tabs', 'pills' (or 'list')
	'stacked'=>false, // whether this is a stacked menu
	'items'=>array(
		array('label'=>'Home', 'url'=>'#', 'active'=>true),
		array('label'=>'Profile', 'url'=>'#'),
		array('label'=>'Messages', 'url'=>'#'),
	),
)); ?>
~~~"); ?>

			<h3>Nav list</h3>

			<div class="well" style="padding: 8px 0;">

				<?php $this->widget('bootstrap.widgets.BootMenu', array(
					'type'=>'list',
					'encodeLabel'=>false,
					'items'=>array(
						array('label'=>'LIST HEADER', 'itemOptions'=>array('class'=>'nav-header')),
						array('label'=>'<i class="icon-home"></i> Home', 'url'=>'#', 'active'=>true),
						array('label'=>'<i class="icon-book"></i> Library', 'url'=>'#'),
						array('label'=>'<i class="icon-pencil"></i> Application', 'url'=>'#'),
						array('label'=>'ANOTHER LIST HEADER', 'itemOptions'=>array('class'=>'nav-header')),
						array('label'=>'<i class="icon-user"></i> Profile', 'url'=>'#'),
						array('label'=>'<i class="icon-cog"></i> Settings', 'url'=>'#'),
						array('label'=>'<i class="icon-flag"></i> Help', 'url'=>'#'),
					),
				)); ?>

			</div>

<h4>Source code</h4>

<?php echo $parser->safeTransform("~~~
[php]
<?php \$this->widget('bootstrap.widgets.BootMenu', array(
	'type'=>'list',
	'encodeLabel'=>false,
	'items'=>array(
		array('label'=>'LIST HEADER', 'itemOptions'=>array('class'=>'nav-header')),
		array('label'=>'<i class=\"icon-home\"></i> Home', 'url'=>'#', 'active'=>true),
		array('label'=>'<i class=\"icon-book\"></i> Library', 'url'=>'#'),
		array('label'=>'<i class=\"icon-pencil\"></i> Application', 'url'=>'#'),
		array('label'=>'ANOTHER LIST HEADER', 'itemOptions'=>array('class'=>'nav-header')),
		array('label'=>'<i class=\"icon-user\"></i> Profile', 'url'=>'#'),
		array('label'=>'<i class=\"icon-cog\"></i> Settings', 'url'=>'#'),
		array('label'=>'<i class=\"icon-flag\"></i> Help', 'url'=>'#'),
	),
)); ?>
~~~"); ?>

			<a class="top" href="#top">Back to top &uarr;</a>

		</section>

		<section id="bootTabbed">

			<h2>BootTabbed</h2>

			<?php $this->widget('bootstrap.widgets.BootTabbed', array(
				'htmlOptions'=>array('class'=>'tabbed'),
				'tabs'=>array(
					array('label'=>'Home', 'content'=>'Raw denim you probably haven\'t heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.'),
					array('label'=>'Profile', 'content'=>'Food truck fixie locavore, accusamus mcsweeney\'s marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.'),
					array('label'=>'Dropdown', 'items'=>array(
						array('label'=>'@fat', 'content'=>'Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney\'s organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven\'t heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.'),
						array('label'=>'@mdo', 'content'=>'Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral, mustache readymade thundercats keffiyeh craft beer marfa ethical. Wolf salvia freegan, sartorial keffiyeh echo park vegan.'),
					)),
				),
			)); ?>

			<?php $this->widget('bootstrap.widgets.BootTabbed', array(
				'type'=>BootMenu::TYPE_PILLS,
				'htmlOptions'=>array('class'=>'tabbed'),
				'tabs'=>array(
					array('label'=>'Home', 'content'=>'Raw denim you probably haven\'t heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.'),
					array('label'=>'Profile', 'content'=>'Food truck fixie locavore, accusamus mcsweeney\'s marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.'),
					array('label'=>'Dropdown', 'items'=>array(
						array('label'=>'@fat', 'content'=>'Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney\'s organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven\'t heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.'),
						array('label'=>'@mdo', 'content'=>'Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral, mustache readymade thundercats keffiyeh craft beer marfa ethical. Wolf salvia freegan, sartorial keffiyeh echo park vegan.'),
					)),
				),
			)); ?>

			<h4>Source code</h4>

<?php echo $parser->safeTransform("~~~
[php]
<?php \$this->widget('bootstrap.widgets.BootTabbed', array(
	'tabs'=>array(
		array('label'=>'Home', 'content'=>'Raw denim you probably haven\'t heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.'),
		array('label'=>'Profile', 'content'=>'Food truck fixie locavore, accusamus mcsweeney\'s marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.'),
		array('label'=>'Dropdown', 'items'=>array(
			array('label'=>'@fat', 'content'=>'Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney\'s organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven\'t heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.'),
			array('label'=>'@mdo', 'content'=>'Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral, mustache readymade thundercats keffiyeh craft beer marfa ethical. Wolf salvia freegan, sartorial keffiyeh echo park vegan.'),
		)),
	),
)); ?>
~~~"); ?>

			<a class="top" href="#top">Back to top &uarr;</a>

		</section>

		<section id="bootGridView">

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

			<h3>Bordered</h3>

			<?php $this->widget('bootstrap.widgets.BootGridView', array(
				'dataProvider'=>$gridDataProvider,
				'template'=>"{items}",
				'itemsCssClass'=>'table table-bordered',
				'columns'=>$gridColumns,
			)); ?>

			<h3>Condensed</h3>

			<?php $this->widget('bootstrap.widgets.BootGridView', array(
				'dataProvider'=>$gridDataProvider,
				'template'=>"{items}",
				'itemsCssClass'=>'table table-condensed',
				'columns'=>$gridColumns,
			)); ?>

			<h3>Striped, bordered and condensed</h3>

			<?php $this->widget('bootstrap.widgets.BootGridView', array(
				'dataProvider'=>$gridDataProvider,
				'template'=>"{items}",
				'itemsCssClass'=>'table table-striped table-bordered table-condensed',
				'columns'=>$gridColumns,
			)); ?>

			<h4>Source code</h4>

<?php echo $parser->safeTransform("~~~
[php]
\$gridDataProvider = new CArrayDataProvider(array(
	array('id'=>1, 'firstName'=>'Mark', 'lastName'=>'Otto', 'language'=>'CSS'),
	array('id'=>2, 'firstName'=>'Jacob', 'lastName'=>'Thornton', 'language'=>'JavaScript'),
	array('id'=>3, 'firstName'=>'Stu', 'lastName'=>'Dent', 'language'=>'HTML'),
));
~~~
~~~
[php]
<?php \$this->widget('bootstrap.widgets.BootGridView', array(
	'dataProvider'=>\$gridDataProvider,
	'template'=>\"{items}\",
	'itemsCssClass'=>'table table-striped table-bordered table-condensed',
	'columns'=>array(
		array('name'=>'id', 'header'=>'#'),
		array('name'=>'firstName', 'header'=>'First name'),
		array('name'=>'lastName', 'header'=>'Last name'),
		array('name'=>'language', 'header'=>'Language'),
		array(
			'class'=>'BootButtonColumn',
			'htmlOptions'=>array('style'=>'width: 50px'),
			'viewButtonOptions'=>array('rel'=>'tooltip'),
			'updateButtonOptions'=>array('rel'=>'tooltip'),
			'deleteButtonOptions'=>array('rel'=>'tooltip'),
		),
	),
)); ?>
~~~"); ?>

			<a class="top" href="#top">Back to top &uarr;</a>

		</section>

		<section id="bootThumbs">

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

		</section>

		<section id="bootTooltip">

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

		</section>

		<section id="bootPopover">

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

		</section>

		<section id="bootModal">

			<h2>BootModal</h2>

			<?php $this->beginWidget('bootstrap.widgets.BootModal', array(
				'id'=>'modal',
				'htmlOptions'=>array('class'=>'hide'),
				'events'=>array(
					'show'=>"js:function() { console.log('modal show.'); }",
					'shown'=>"js:function() { console.log('modal shown.'); }",
					'hide'=>"js:function() { console.log('modal hide.'); }",
					'hidden'=>"js:function() { console.log('modal hidden.'); }",
				),
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
	'htmlOptions'=>array('class'=>'hide'),
	'events'=>array(
		'show'=>\"js:function() { console.log('modal show.'); }\",
		'shown'=>\"js:function() { console.log('modal shown.'); }\",
		'hide'=>\"js:function() { console.log('modal hide.'); }\",
		'hidden'=>\"js:function() { console.log('modal hidden.'); }\",
	),
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

		</section>

		<section id="bootActiveForm">

			<h2>BootActiveForm</h2>

			<h3>Vertical</h3>

			<?php /** @var BootActiveForm $form */
			$form = $this->beginWidget('bootstrap.widgets.BootActiveForm', array(
				'id'=>'verticalForm',
				'enableClientValidation'=>true,
				'clientOptions'=>array('validateOnSubmit'=>true),
				'htmlOptions'=>array('class'=>'well'),
			)); ?>

			<?php echo $form->textFieldRow($model, 'textField', array('class'=>'span3')); ?>
			<?php echo $form->passwordFieldRow($model, 'password', array('class'=>'span3')); ?>
			<?php echo $form->checkboxRow($model, 'checkbox'); ?>
			<?php echo CHtml::htmlButton('<i class="icon-ok"></i> Submit', array('class'=>'btn', 'type'=>'submit')); ?>

			<?php $this->endWidget(); ?>

			<h3>Search</h3>

			<?php /** @var BootActiveForm $form */
			$form = $this->beginWidget('bootstrap.widgets.BootActiveForm', array(
				'id'=>'searchForm',
				'type'=>'search',
				'enableClientValidation'=>true,
				'clientOptions'=>array('validateOnSubmit'=>true),
				'htmlOptions'=>array('class'=>'well'),
			)); ?>

			<?php echo $form->textFieldRow($model, 'textField', array('class'=>'input-medium')); ?>
			<?php echo CHtml::htmlButton('<i class="icon-search"></i> Search', array('class'=>'btn', 'type'=>'submit')); ?>

			<?php $this->endWidget(); ?>

			<h3>Inline</h3>

			<?php /** @var BootActiveForm $form */
			$form = $this->beginWidget('bootstrap.widgets.BootActiveForm', array(
				'id'=>'inlineForm',
				'type'=>'inline',
				'enableClientValidation'=>true,
				'clientOptions'=>array('validateOnSubmit'=>true),
				'htmlOptions'=>array('class'=>'well'),
			)); ?>

			<?php echo $form->textFieldRow($model, 'textField', array('class'=>'input-small')); ?>
			<?php echo $form->passwordFieldRow($model, 'password', array('class'=>'input-small')); ?>
			<?php echo CHtml::htmlButton('Go', array('class'=>'btn', 'type'=>'submit')); ?>

			<?php $this->endWidget(); ?>

			<h3>Horizontal</h3>

			<?php /** @var BootActiveForm $form */
			$form = $this->beginWidget('bootstrap.widgets.BootActiveForm', array(
				'id'=>'horizontalForm',
				'type'=>'horizontal',
				'enableClientValidation'=>true,
				'clientOptions'=>array('validateOnSubmit'=>true),
			)); ?>

			<fieldset>

				<legend>Legend</legend>

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
				<?php echo CHtml::htmlButton('<i class="icon-ok icon-white"></i> Submit', array('class'=>'btn btn-primary', 'type'=>'submit')); ?>
				<?php echo CHtml::htmlButton('<i class="icon-ban-circle"></i> Reset', array('class'=>'btn', 'type'=>'reset')); ?>
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

<?php echo \$form->textFieldRow(\$model, 'textField', array('class'=>'span3')); ?>
<?php echo \$form->passwordFieldRow(\$model, 'password', array('class'=>'span3')); ?>
<?php echo \$form->checkboxRow(\$model, 'checkbox'); ?>
<?php echo CHtml::htmlButton('<i class=\"icon-ok\"></i> Submit', array('class'=>'btn', 'type'=>'submit')); ?>

<?php \$this->endWidget(); ?>
~~~
~~~
[php]
<?php /** @var BootActiveForm \$form */
\$form = \$this->beginWidget('bootstrap.widgets.BootActiveForm', array(
	'id'=>'searchForm',
	'type'=>'search',
	'enableClientValidation'=>true,
	'clientOptions'=>array('validateOnSubmit'=>true),
	'htmlOptions'=>array('class'=>'well'),
)); ?>

<?php echo \$form->textFieldRow(\$model, 'textField', array('class'=>'input-medium')); ?>
<?php echo CHtml::htmlButton('<i class=\"icon-search\"></i> Search', array('class'=>'btn','type'=>'submit')); ?>

<?php \$this->endWidget(); ?>
~~~
~~~
[php]
<?php /** @var BootActiveForm \$form */
\$form = \$this->beginWidget('bootstrap.widgets.BootActiveForm', array(
	'id'=>'inlineForm',
	'type'=>'inline',
	'enableClientValidation'=>true,
	'clientOptions'=>array('validateOnSubmit'=>true),
	'htmlOptions'=>array('class'=>'well'),
)); ?>

<?php echo \$form->textFieldRow(\$model, 'textField', array('class'=>'input-small')); ?>
<?php echo \$form->passwordFieldRow(\$model, 'password', array('class'=>'input-small')); ?>
<?php echo CHtml::htmlButton('Go', array('class'=>'btn', 'type'=>'submit')); ?>

<?php \$this->endWidget(); ?>
~~~
~~~
[php]
<?php /** @var BootActiveForm \$form */
\$form = \$this->beginWidget('bootstrap.widgets.BootActiveForm', array(
	'id'=>'horizontalForm',
	'type'=>'horizontal,
	'enableClientValidation'=>true,
	'clientOptions'=>array('validateOnSubmit'=>true),
)); ?>

<fieldset>

	<legend>Legend</legend>

	<?php echo \$form->textFieldRow(\$model, 'textField',
			array('hint'=>'In addition to freeform text, any HTML5 text-based input appears like so.')); ?>
	<?php echo \$form->dropDownListRow(\$model, 'dropdown', array('Something ...', '1', '2', '3', '4', '5')); ?>
	<?php echo \$form->dropDownListRow(\$model, 'multiDropdown', array('1', '2', '3', '4', '5'), array('multiple'=>true)); ?>
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
	<?php echo CHtml::htmlButton('<i class=\"icon-ok icon-white\"></i> Submit', array('class'=>'btn btn-primary', 'type'=>'submit')); ?>
	<?php echo CHtml::htmlButton('<i class=\"icon-ban-circle\"></i> Reset', array('class'=>'btn', 'type'=>'reset')); ?>
</div>

<?php \$this->endWidget(); ?>
~~~"); ?>

			<a class="top" href="#top">Back to top &uarr;</a>

		</section>

	</div>

	<div class="span3">

		<aside class="well" style="padding: 8px 0;">

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

		</aside>

	</div>

</div>