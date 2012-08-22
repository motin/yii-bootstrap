<?php
$this->pageTitle = Yii::app()->params['appTitle'];
$this->addMetaProperty('og:title', Yii::app()->params['appTitle']);
$this->addMetaProperty('og:type', 'website');
$this->addMetaProperty('og:url', $this->createUrl('index'));
$this->addMetaProperty('og:image', Yii::app()->request->getBaseUrl(true).'/images/bootstrap-avatar_normal.png');
$this->addMetaProperty('og:site_name', Yii::app()->name);
$this->addMetaProperty('og:locale',Yii::app()->fb->locale);
$this->addMetaProperty('fb:app_id', Yii::app()->fb->appID);

Yii::app()->clientScript->registerScript('siteIndex', "
	// Console \"polyfill\"
	if (!console) {
		console = {};
		console.log = function() {};
	}

	// Prevent jumping to the top of the page when demo links are clicked.
	jQuery('.site-index a').on('click', function(e) {
	    var element = $(this),
	        href = element.attr('href'),
	        toggle = element.attr('data-toggle');

	    if ((href && (href.length === 0 || href === '#')) && !toggle) {
	            return false;
	    }
	});

    // Prevent form submission.
	jQuery('.site-index form').on('submit', false);
");
?>
<div class="site-index">

<section id="tbButton">

    <h2>Buttons <small>bootstrap.widgets.TbButton</small></h2>

	<h3>Properties</h3>

	<table class="table table-bordered table-striped">
		<thead>
			<tr><th>Name</th><th>Type</th><td>Default</td><th>Description</th></tr>
		</thead>
		<tbody>
			<tr><td>buttonType</td><td>string</td><td><code>link</code></td><td>Button callback type. Valid values are <code>link</code>, <code>button</code>, <code>submit</code>, <code>submitLink</code>, <code>reset</code>, <code>ajaxLink</code>, <code>ajaxButton</code> and <code>ajaxSubmit</code>.</td></tr>
			<tr><td>type</td><td>string</td><td></td><td>Button type. Valid values are <code>primary</code>, <code>info</code>, <code>success</code>, <code>warning</code>, <code>danger</code>, <code>inverse</code> and <code>link</code>.</td></tr>
			<tr><td>size</td><td>string</td><td></td><td>Button size. Valid values are <code>large</code>, <code>small</code> and <code>mini</code></td></tr>
			<tr><td>icon</td><td>string</td><td></td><td>Button icon, e.g. <code>ok</code> or <code>remove white</code>.</td></tr>
			<tr><td>label</td><td>string</td><td></td><td>Button label text.</td></tr>
			<tr><td>url</td><td>string</td><td></td><td>Button URL.</td></tr>
			<tr><td>encodeLabel</td><td>boolean</td><td><code>true</code></code></td><td>Whether the label should be encoded.</td></tr>
			<tr><td>block</td><td>boolean</td><td><code>false</code></td><td>Whether the button should span the full width of the a parent.</td></tr>
			<tr><td>active</td><td>boolean</td><td><code>false</code></td><td>Whether the button is active.</td></tr>
			<tr><td>disabled</td><td>boolean</td><td><code>false</code></td><td>Whether the button is disabled.</td></tr>
			<tr><td>toggle</td><td>boolean</td><td><code>false</code></td><td>Whether the button can be toggled.</td></tr>
			<tr><td>loadingText</td><td>string</td><td></td><td>Button loading text.</td></tr>
			<tr><td>completeText</td><td>string</td><td></td><td>Button complete text.</td></tr>
			<tr><td>items</td><td>array</td><td></td><td>Button dropdown menu items.</td></tr>
			<tr><td>htmlOptions</td><td>array</td><td></td><td>Button HTML attributes.</td></tr>
			<tr><td>ajaxOptions</td><td>array</td><td></td><td>Button AJAX options (used by <code>ajaxLink</code> and <code>ajaxButton</code>).</td></tr>
			<tr><td>dropdownOptions</td><td>array</td><td></td><td>Button dropdown menu HTML attributes.</td></tr>
		</tbody>
	</table>

	<p class="read-more"><a href="http://twitter.github.com/bootstrap/base-css.html#buttons" rel="no-follow" target="_blank">Button documentation</a></p>

	<h3>Examples</h3>

    <div class="row">
        <div class="span3">
            <h4>Large</h4>
            <p>
                <?php $this->widget('bootstrap.widgets.TbButton', array(
                    'label'=>'Primary', 'type'=>'primary', 'size'=>'large',
                )); ?>
                <?php $this->widget('bootstrap.widgets.TbButton', array(
                    'label'=>'Action', 'size'=>'large',
                )); ?>
            </p>
        </div>

        <div class="span3">
            <h4>Normal</h4>
            <p>
                <?php $this->widget('bootstrap.widgets.TbButton', array(
                    'label'=>'Primary', 'type'=>'primary',
                )); ?>
                <?php $this->widget('bootstrap.widgets.TbButton', array(
                    'label'=>'Action',
                )); ?>
            </p>
        </div>

        <div class="span3">
            <h4>Small</h4>
            <p>
                <?php $this->widget('bootstrap.widgets.TbButton', array(
                    'label'=>'Primary', 'type'=>'primary', 'size'=>'small',
                )); ?>
                <?php $this->widget('bootstrap.widgets.TbButton', array(
                    'label'=>'Action', 'size'=>'small',
                )); ?>
            </p>
        </div>

        <div class="span3">
            <h4>Mini</h4>
            <p>
                <?php $this->widget('bootstrap.widgets.TbButton', array(
                    'label'=>'Primary', 'type'=>'primary', 'size'=>'mini',
                )); ?>
                <?php $this->widget('bootstrap.widgets.TbButton', array(
                    'label'=>'Action', 'size'=>'mini',
                )); ?>
            </p>
        </div>
    </div>

    <h5>Source code</h5>

    <?php echo $phpLighter->highlight("<?php \$this->widget('bootstrap.widgets.TbButton', array(
	'label'=>'Primary',
	'type'=>'primary', // null, 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
	'size'=>'large', // null, 'large', 'small' or 'mini'
)); ?>"); ?>

    <h4>Dropdowns</h4>

    <div class="btn-toolbar">
        <?php $this->widget('bootstrap.widgets.TbButtonGroup', array(
            'buttons'=>array(
                array('label'=>'Action', 'items'=>array(
                    array('label'=>'Action', 'url'=>'#'),
                    array('label'=>'Another action', 'url'=>'#'),
                    array('label'=>'Something else', 'url'=>'#'),
                    '---',
                    array('label'=>'More options', 'items'=>array(
                        array('label'=>'Second level link', 'url'=>'#'),
                        array('label'=>'Second level link', 'url'=>'#'),
                        array('label'=>'Second level link', 'url'=>'#'),
                        array('label'=>'Second level link', 'items'=>array(
                            array('label'=>'Third level link', 'url'=>'#'),
                        )),
                    )),
                )),
            ),
        )); ?>
        <?php $this->widget('bootstrap.widgets.TbButtonGroup', array(
            'type'=>'primary',
            'buttons'=>array(
                array('label'=>'Action', 'items'=>array(
                    array('label'=>'Action', 'url'=>'#'),
                    array('label'=>'Another action', 'url'=>'#'),
                    array('label'=>'Something else', 'url'=>'#'),
                    '---',
                    array('label'=>'Separate link', 'url'=>'#'),
                )),
            ),
        )); ?>
        <?php $this->widget('bootstrap.widgets.TbButtonGroup', array(
            'type'=>'danger',
            'buttons'=>array(
                array('label'=>'Danger', 'items'=>array(
                    array('label'=>'Action', 'url'=>'#'),
                    array('label'=>'Another action', 'url'=>'#'),
                    array('label'=>'Something else', 'url'=>'#'),
                    '---',
                    array('label'=>'Separate link', 'url'=>'#'),
                )),
            ),
        )); ?>
        <?php $this->widget('bootstrap.widgets.TbButtonGroup', array(
            'type'=>'success',
            'buttons'=>array(
                array('label'=>'Success', 'items'=>array(
                    array('label'=>'Action', 'url'=>'#'),
                    array('label'=>'Another action', 'url'=>'#'),
                    array('label'=>'Something else', 'url'=>'#'),
                    '---',
                    array('label'=>'Separate link', 'url'=>'#'),
                )),
            ),
        )); ?>
        <?php $this->widget('bootstrap.widgets.TbButtonGroup', array(
            'type'=>'info',
            'buttons'=>array(
                array('label'=>'Info', 'items'=>array(
                    array('label'=>'Action', 'url'=>'#'),
                    array('label'=>'Another action', 'url'=>'#'),
                    array('label'=>'Something else', 'url'=>'#'),
                    '---',
                    array('label'=>'Separate link', 'url'=>'#'),
                )),
            ),
        )); ?>
        <?php $this->widget('bootstrap.widgets.TbButtonGroup', array(
            'type'=>'inverse',
            'buttons'=>array(
                array('label'=>'Inverse', 'items'=>array(
                    array('label'=>'Action', 'url'=>'#'),
                    array('label'=>'Another action', 'url'=>'#'),
                    array('label'=>'Something else', 'url'=>'#'),
                    '---',
                    array('label'=>'Separate link', 'url'=>'#'),
                )),
            ),
        )); ?>
    </div>

    <h5>Source code</h5>

    <?php echo $phpLighter->highlight("<div class=\"btn-toolbar\">
	<?php \$this->widget('bootstrap.widgets.TbButtonGroup', array(
		'type'=>'primary', // '', 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
		'buttons'=>array(
			array('label'=>'Action', 'items'=>array(
				array('label'=>'Action', 'url'=>'#'),
				array('label'=>'Another action', 'url'=>'#'),
				array('label'=>'Something else', 'url'=>'#'),
				'---',
				array('label'=>'Separate link', 'url'=>'#'),
			)),
		),
	)); ?>
</div>"); ?>

    <h4>Split dropdowns</h4>

    <div class="btn-toolbar">
        <?php $this->widget('bootstrap.widgets.TbButtonGroup', array(
            'buttons'=>array(
                array('label'=>'Action', 'url'=>'#'),
                array('items'=>array(
                    array('label'=>'Action', 'url'=>'#'),
                    array('label'=>'Another action', 'url'=>'#'),
                    array('label'=>'Something else', 'url'=>'#'),
                    '---',
                    array('label'=>'Separate link', 'url'=>'#'),
                )),
            ),
        )); ?>
        <?php $this->widget('bootstrap.widgets.TbButtonGroup', array(
            'type'=>'primary',
            'buttons'=>array(
                array('label'=>'Action', 'url'=>'#'),
                array('items'=>array(
                    array('label'=>'Action', 'url'=>'#'),
                    array('label'=>'Another action', 'url'=>'#'),
                    array('label'=>'Something else', 'url'=>'#'),
                    '---',
                    array('label'=>'Separate link', 'url'=>'#'),
                )),
            ),
        )); ?>
        <?php $this->widget('bootstrap.widgets.TbButtonGroup', array(
            'type'=>'danger',
            'buttons'=>array(
                array('label'=>'Danger', 'url'=>'#'),
                array('items'=>array(
                    array('label'=>'Action', 'url'=>'#'),
                    array('label'=>'Another action', 'url'=>'#'),
                    array('label'=>'Something else', 'url'=>'#'),
                    '---',
                    array('label'=>'Separate link', 'url'=>'#'),
                )),
            ),
        )); ?>
        <?php $this->widget('bootstrap.widgets.TbButtonGroup', array(
            'type'=>'success',
            'buttons'=>array(
                array('label'=>'Success', 'url'=>'#'),
                array('items'=>array(
                    array('label'=>'Action', 'url'=>'#'),
                    array('label'=>'Another action', 'url'=>'#'),
                    array('label'=>'Something else', 'url'=>'#'),
                    '---',
                    array('label'=>'Separate link', 'url'=>'#'),
                )),
            ),
        )); ?>
        <?php $this->widget('bootstrap.widgets.TbButtonGroup', array(
            'type'=>'info',
            'buttons'=>array(
                array('label'=>'Info', 'url'=>'#'),
                array('items'=>array(
                    array('label'=>'Action', 'url'=>'#'),
                    array('label'=>'Another action', 'url'=>'#'),
                    array('label'=>'Something else', 'url'=>'#'),
                    '---',
                    array('label'=>'Separate link', 'url'=>'#'),
                )),
            ),
        )); ?>
        <?php $this->widget('bootstrap.widgets.TbButtonGroup', array(
        'type'=>'inverse',
        'buttons'=>array(
            array('label'=>'Inverse', 'url'=>'#'),
            array('items'=>array(
                array('label'=>'Action', 'url'=>'#'),
                array('label'=>'Another action', 'url'=>'#'),
                array('label'=>'Something else', 'url'=>'#'),
                '---',
                array('label'=>'Separate link', 'url'=>'#'),
            )),
        ),
    )); ?>
    </div>

    <h5>Source code</h5>

    <?php echo $phpLighter->highlight("<div class=\"btn-toolbar\">
	<?php \$this->widget('bootstrap.widgets.TbButtonGroup', array(
	    'type'=>'primary', // '', 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
		'buttons'=>array(
			array('label'=>'Action', 'url'=>'#'),
			array('items'=>array(
				array('label'=>'Action', 'url'=>'#'),
				array('label'=>'Another action', 'url'=>'#'),
				array('label'=>'Something else', 'url'=>'#'),
				'---',
				array('label'=>'Separate link', 'url'=>'#'),
			)),
		),
	)); ?>
</div>"); ?>

	<h4>Block</h4>

	<div class="row">

		<div class="span3">

		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'type'=>'primary',
			'label'=>'Block level button',
			'block'=>true,
		)); ?>

		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'label'=>'Block level button',
			'block'=>true,
		)); ?>

		</div>

	</div>

	<h5>Source code</h5>

	<?php echo $phpLighter->highlight("<?php \$this->widget('bootstrap.widgets.TbButton', array(
	'type'=>'primary',
	'label'=>'Block level button',
	'block'=>true,
)); ?>"); ?>

    <h4>Stateful</h4>

    <p>
        <?php $this->widget('bootstrap.widgets.TbButton', array(
        'buttonType'=>'button',
        'type'=>'primary',
        'label'=>'Click me',
        'loadingText'=>'loading...',
        'htmlOptions'=>array('id'=>'buttonStateful'),
    )); ?>
    </p>

    <?php Yii::app()->clientScript->registerScript('buttonStateful', "
		$('#buttonStateful').click(function() {
			var btn = $(this);
			btn.button('loading'); // call the loading function
			setTimeout(function() {
				btn.button('reset'); // call the reset function
			}, 3000);
		});
	"); ?>

    <h5>Source code</h5>

    <?php echo $phpLighter->highlight("<?php \$this->widget('bootstrap.widgets.TbButton', array(
	'buttonType'=>'button',
	'type'=>'primary',
	'label'=>'Click me',
	'loadingText'=>'loading...',
	'htmlOptions'=>array('id'=>'buttonStateful'),
)); ?>"); ?>

    <?php echo $jsLighter->highlight("$('#buttonStateful').click(function() {
	var btn = $(this);
	btn.button('loading'); // call the loading function
	setTimeout(function() {
		btn.button('reset'); // call the reset function
	}, 3000);
});"); ?>

    <h4>Single state</h4>

    <p>
        <?php $this->widget('bootstrap.widgets.TbButton', array(
        'buttonType'=>'button',
        'type'=>'primary',
        'label'=>'Toggle me',
        'toggle'=>true,
    )); ?>
    </p>

    <h5>Source code</h5>

    <?php echo $phpLighter->highlight("<?php \$this->widget('bootstrap.widgets.TbButton', array(
	'buttonType'=>'button',
	'type'=>'primary',
	'label'=>'Toggle me',
	'toggle'=>true,
)); ?>"); ?>

    <div class="row">

        <div class="span3">

            <h4>Checkbox</h4>

            <?php $this->widget('bootstrap.widgets.TbButtonGroup', array(
            'type' => 'primary',
            'toggle' => 'checkbox',
            'buttons' => array(
                array('label'=>'Left'),
                array('label'=>'Middle'),
                array('label'=>'Right'),
            ),
        )); ?>
            <br />

        </div>

        <div class="span3">

            <h4>Radio</h4>

            <?php $this->widget('bootstrap.widgets.TbButtonGroup', array(
            'type' => 'primary',
            'toggle' => 'radio',
            'buttons' => array(
                array('label'=>'Left'),
                array('label'=>'Middle'),
                array('label'=>'Right'),
            ),
        )); ?>
            <br />

        </div>

    </div>

    <h5>Source code</h5>

    <?php echo $phpLighter->highlight("<?php \$this->widget('bootstrap.widgets.TbButtonGroup', array(
	'type' => 'primary',
	'toggle' => 'radio', // 'checkbox' or 'radio'
	'buttons' => array(
		array('label'=>'Left'),
		array('label'=>'Middle'),
		array('label'=>'Right'),
	),
)); ?>"); ?>

    <a class="top" href="#top">Back to top &uarr;</a>

</section>

<section id="tbButtonGroup">

    <h2>Button groups <small>bootstrap.widgets.TbButtonGroup</small></h2>

	<h3>Properties</h3>

	<table class="table table-bordered table-striped">
		<thead>
			<tr><th>Name</th><th>Type</th><th>Default</th><th>Description</th></tr>
		</thead>
		<tbody>
			<tr><td>buttonType</td><td>string</td><td><code>link</code></td><td>See <code>TbButton::buttonType</code>.</td></tr>
			<tr><td>type</td><td>string</td><td></td><td>See <code>TbButton::type</code>.</td></tr>
			<tr><td>size</td><td>string</td><td></td><td>See <code>TbButton::size</code>.</td></tr>
			<tr><td>encodeLabel</td><td>boolean</td><td><code>true</code></td><td>See <code>TbButton::encodeLabel</code>.</td></tr>
			<tr><td>stacked</td><td>boolean</td><td><code>false</code></td><td>Whether the button group appears vertically stacked.</td></tr>
			<tr><td>toggle</td><td>boolean</td><td><code>false</code></td><td>See <code>TbButton::toggle</code>.</td></tr>
			<tr><td>dropup</td><td>boolean</td><td><code>false</code></td><td>Whether dropdown menus should drop up instead.</td></tr>
			<tr><td>buttons</td><td>array</td><td></td><td>Button configurations.</td></tr>
			<tr><td>htmlOptions</td><td>array</td><td></td><td>Button group HTML attributes.</td></tr>
		</tbody>
	</table>

	<p class="read-more"><a href="http://twitter.github.com/bootstrap/components.html#buttonGroups" rel="no-follow" target="_blank">Button group documentation</a></p>

	<h3>Examples</h3>

    <div class="btn-toolbar">
        <?php $this->widget('bootstrap.widgets.TbButtonGroup', array(
        'buttons'=>array(
            array('label'=>'Left', 'url'=>'#'),
            array('label'=>'Middle', 'url'=>'#'),
            array('label'=>'Right', 'url'=>'#'),
        ),
    )); ?>
    </div>

    <div class="btn-toolbar">
        <?php $this->widget('bootstrap.widgets.TbButtonGroup', array(
        'buttons'=>array(
            array('label'=>'1', 'url'=>'#'),
            array('label'=>'2', 'url'=>'#'),
            array('label'=>'3', 'url'=>'#'),
            array('label'=>'4', 'url'=>'#'),
        ),
    )); ?>
        <?php $this->widget('bootstrap.widgets.TbButtonGroup', array(
        'buttons'=>array(
            array('label'=>'5', 'url'=>'#'),
            array('label'=>'6', 'url'=>'#'),
            array('label'=>'7', 'url'=>'#'),
        ),
    )); ?>
        <?php $this->widget('bootstrap.widgets.TbButtonGroup', array(
        'buttons'=>array(
            array('label'=>'8', 'url'=>'#'),
        ),
    )); ?>
    </div>

    <h5>Source code</h5>

    <?php echo $phpLighter->highlight("<?php \$this->widget('bootstrap.widgets.TbButtonGroup', array(
	'buttons'=>array(
		array('label'=>'1', 'url'=>'#'),
		array('label'=>'2', 'url'=>'#'),
		array('label'=>'3', 'url'=>'#'),
		array('label'=>'4', 'url'=>'#'),
	),
)); ?>"); ?>

    <a class="top" href="#top">Back to top &uarr;</a>

</section>

<section id="tbBreadcrumbs">

	<h2>Breadcrumbs <small>bootstrap.widgets.TbBreadcrumbs</small></h2>

	<h3>Properties</h3>

	<table class="table table-bordered table-striped">
		<thead>
			<tr><th>Name</th><th>Type</th><th>Default</th><th>Description</th></tr>
		</thead>
		<tbody>
			<tr><td>separator</td><td>string</td><td><code>/</code></td><td>Separator between links in the breadcrumbs.</td></tr>
		</tbody>
	</table>

	<p class="read-more"><a href="http://twitter.github.com/bootstrap/components.html#breadcrumbs" rel="no-follow" target="_blank">Breadcrumbs documentation</a></p>

	<?php $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
		'links'=>array(),
	)); ?>

	<?php $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
		'links'=>array('Library'),
	)); ?>

	<?php $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
		'links'=>array('Library'=>'#', 'Data'),
	)); ?>

	<h5>Source code</h5>

<?php echo $phpLighter->highlight("<?php \$this->widget('bootstrap.widgets.TbBreadcrumbs', array(
	'links'=>array('Library'=>'#', 'Data'),
)); ?>"); ?>

	<a class="top" href="#top">Back to top &uarr;</a>

</section>

<section id="tbMenu">

	<h2>Menus <small>bootstrap.widgets.TbMenu</small></h2>

	<h3>Properties</h3>

	<table class="table table-bordered table-striped">
		<thead>
			<tr><th>Name</th><th>Type</th><th>Default</th><th>Description</th></tr>
		</thead>
		<tbody>
			<tr><td>type</td><td>string</td><td></td><td>Menu type. Valid values are <code>tabs</code>, <code>pills</code> and <code>list</code>.</td></tr>
			<tr><td>scrollspy</td><td>string|array</td><td></td><td>Scrollspy target or configuration.</td></tr>
			<tr><td>stacked</td><td>boolean</td><td><code>false</code></td><td>Whether the menu should appear vertically stacked.</td></tr>
			<tr><td>dropup</td><td>boolean</td><td><code>false</code></td><td>Whether dropdown menus should drop up instead.</td></tr>
		</tbody>
	</table>

	<p class="read-more"><a href="http://twitter.github.com/bootstrap/components.html#navs" rel="no-follow" target="_blank">Menu documentation</a></p>

	<h3>Examples</h3>

	<h4>Basic tabs</h4>

	<?php $this->widget('bootstrap.widgets.TbMenu', array(
		'type'=>'tabs',
		'items'=>array(
			array('label'=>'Home', 'url'=>'#', 'active'=>true),
			array('label'=>'Profile', 'url'=>'#'),
			array('label'=>'Messages', 'url'=>'#'),
		),
	)); ?>

	<h4>Stacked tabs</h4>

	<?php $this->widget('bootstrap.widgets.TbMenu', array(
		'type'=>'tabs',
		'stacked'=>true,
		'items'=>array(
			array('label'=>'Home', 'url'=>'#', 'active'=>true),
			array('label'=>'Profile', 'url'=>'#'),
			array('label'=>'Messages', 'url'=>'#'),
		),
	)); ?>

	<h4>Basic pills</h4>

	<?php $this->widget('bootstrap.widgets.TbMenu', array(
		'type'=>'pills',
		'items'=>array(
			array('label'=>'Home', 'url'=>'#', 'active'=>true),
			array('label'=>'Profile', 'url'=>'#'),
			array('label'=>'Messages', 'url'=>'#'),
		),
	)); ?>

	<h4>Stacked pills</h4>

	<?php $this->widget('bootstrap.widgets.TbMenu', array(
		'type'=>'pills',
		'stacked'=>true,
		'items'=>array(
			array('label'=>'Home', 'url'=>'#', 'active'=>true),
			array('label'=>'Profile', 'url'=>'#'),
			array('label'=>'Messages', 'url'=>'#'),
		),
	)); ?>

	<h5>Source code</h5>

<?php echo $phpLighter->highlight("<?php \$this->widget('bootstrap.widgets.TbMenu', array(
	'type'=>'tabs', // '', 'tabs', 'pills' (or 'list')
	'stacked'=>false, // whether this is a stacked menu
	'items'=>array(
		array('label'=>'Home', 'url'=>'#', 'active'=>true),
		array('label'=>'Profile', 'url'=>'#'),
		array('label'=>'Messages', 'url'=>'#'),
	),
)); ?>"); ?>

	<h4>Nav list</h4>

	<div class="well" style="padding: 8px 0;">

		<?php $this->widget('bootstrap.widgets.TbMenu', array(
			'type'=>'list',
			'items'=>array(
				array('label'=>'LIST HEADER'),
				array('label'=>'Home', 'icon'=>'home', 'url'=>'#', 'active'=>true),
				array('label'=>'Library', 'icon'=>'book', 'url'=>'#'),
				array('label'=>'Application', 'icon'=>'pencil', 'url'=>'#'),
				array('label'=>'ANOTHER LIST HEADER'),
				array('label'=>'Profile', 'icon'=>'user', 'url'=>'#'),
				array('label'=>'Settings', 'icon'=>'cog', 'url'=>'#'),
				array('label'=>'Help', 'icon'=>'flag', 'url'=>'#'),
			),
		)); ?>

	</div>

	<h5>Source code</h5>

<?php echo $phpLighter->highlight("<?php \$this->widget('bootstrap.widgets.TbMenu', array(
	'type'=>'list',
	'items'=>array(
		array('label'=>'LIST HEADER'),
		array('label'=>'Home', 'icon'=>'home', 'url'=>'#', 'active'=>true),
		array('label'=>'Library', 'icon'=>'book', 'url'=>'#'),
		array('label'=>'Application', 'icon'=>'pencil', 'url'=>'#'),
		array('label'=>'ANOTHER LIST HEADER'),
		array('label'=>'Profile', 'icon'=>'user', 'url'=>'#'),
		array('label'=>'Settings', 'icon'=>'cog', 'url'=>'#'),
		array('label'=>'Help', 'icon'=>'flag', 'url'=>'#'),
	),
)); ?>"); ?>

	<a class="top" href="#top">Back to top &uarr;</a>

</section>

<section id="tbNavbar">

    <h2>Navbar <small>bootstrap.widgets.TbNavbar</small></h2>

	<h3>Properties</h3>

	<table class="table table-bordered table-striped">
		<thead>
			<tr><th>Name</th><th>Type</th><th>Default</th><th>Description</th></tr>
		</thead>
		<tbody>
			<tr><td>type</td><td>string</td><td></td><td>Navbar type. Set this value to <code>inverse</code> for a dark navbar.</td></tr>
			<tr><td>brand</td><td>string</td><td></td><td>Brand link text.</td></tr>
			<tr><td>brandUrl</td><td>string</td><td></td><td>Brand link URL.</td></tr>
			<tr><td>brandOptions</td><td>array</td><td></td><td>Brand link HTML attributes.</td></tr>
			<tr><td>fixed</td><td>string</td><td><code>top</code></td><td>Fix location of the navbar. Valid values are <code>top</code> and <code>bottom</code>.</td></tr>
			<tr><td>fluid</td><td>boolean</td><td><code>false</code></td><td>Whether the navbar should span over the full width of the document.</td></tr>
			<tr><td>collapse</td><td>boolean</td><td><code>false</code></td><td>Whether the navbar should collapse on narrow screens.</td></tr>
			<tr><td>items</td><td>array</td><td></td><td>Navigation items.</td></tr>
			<tr><td>htmlOptions</td><td>array</td><td></td><td>Navbar HTML attributes.</td></tr>
		</tbody>
	</table>

	<p class="read-more"><a href="http://twitter.github.com/bootstrap/components.html#navbar" rel="no-follow" target="_blank">Navbar documentation</a></p>

	<h3>Examples</h3>

    <?php $this->widget('bootstrap.widgets.TbNavbar', array(
		'fixed'=>false,
		'brand'=>'Default',
		'brandUrl'=>'#',
		'collapse'=>true, // requires bootstrap-responsive.css
		'items'=>array(
			array(
				'class'=>'bootstrap.widgets.TbMenu',
				'items'=>array(
					array('label'=>'Home', 'url'=>'#', 'active'=>true),
					array('label'=>'Link', 'url'=>'#'),
					array('label'=>'Link', 'url'=>'#'),
					array('label'=>'Link', 'url'=>'#'),
					array('label'=>'Dropdown', 'url'=>'#', 'items'=>array(
						array('label'=>'Action', 'url'=>'#'),
						array('label'=>'Another action', 'url'=>'#'),
						array('label'=>'Something else here', 'url'=>'#'),
						'---',
						array('label'=>'NAV HEADER'),
						array('label'=>'Separated link', 'url'=>'#'),
						array('label'=>'One more separated link', 'url'=>'#'),
					)),
				),
			),
			'<form class="navbar-search pull-left" action=""><input type="text" class="search-query span2" placeholder="Search"></form>',
			array(
				'class'=>'bootstrap.widgets.TbMenu',
				'htmlOptions'=>array('class'=>'pull-right'),
				'items'=>array(
					array('label'=>'Link', 'url'=>'#'),
					'---',
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

	<?php $this->widget('bootstrap.widgets.TbNavbar', array(
		'type'=>'inverse', // null or 'inverse'
		'fixed'=>false,
		'brand'=>'Inverse',
		'brandUrl'=>'#',
		'collapse'=>true, // requires bootstrap-responsive.css
		'items'=>array(
			array(
				'class'=>'bootstrap.widgets.TbMenu',
				'items'=>array(
					array('label'=>'Home', 'url'=>'#', 'active'=>true),
					array('label'=>'Link', 'url'=>'#'),
					array('label'=>'Link', 'url'=>'#'),
					array('label'=>'Link', 'url'=>'#'),
					array('label'=>'Dropdown', 'url'=>'#', 'items'=>array(
						array('label'=>'Action', 'url'=>'#'),
						array('label'=>'Another action', 'url'=>'#'),
						array('label'=>'Something else here', 'url'=>'#'),
						'---',
						array('label'=>'NAV HEADER'),
						array('label'=>'Separated link', 'url'=>'#'),
						array('label'=>'One more separated link', 'url'=>'#'),
					)),
				),
			),
			'<form class="navbar-search pull-left" action=""><input type="text" class="search-query span2" placeholder="Search"></form>',
			array(
				'class'=>'bootstrap.widgets.TbMenu',
				'htmlOptions'=>array('class'=>'pull-right'),
				'items'=>array(
					array('label'=>'Link', 'url'=>'#'),
					'---',
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

    <h5>Source code</h5>

    <?php echo $phpLighter->highlight("<?php \$this->widget('bootstrap.widgets.TbNavbar', array(
	'type'=>'inverse', // null or 'inverse'
	'brand'=>'Project name',
	'brandUrl'=>'#',
	'collapse'=>true, // requires bootstrap-responsive.css
	'items'=>array(
		array(
			'class'=>'bootstrap.widgets.TbMenu',
			'items'=>array(
				array('label'=>'Home', 'url'=>'#', 'active'=>true),
				array('label'=>'Link', 'url'=>'#'),
				array('label'=>'Dropdown', 'url'=>'#', 'items'=>array(
					array('label'=>'Action', 'url'=>'#'),
					array('label'=>'Another action', 'url'=>'#'),
					array('label'=>'Something else here', 'url'=>'#'),
					'---',
					array('label'=>'NAV HEADER'),
					array('label'=>'Separated link', 'url'=>'#'),
					array('label'=>'One more separated link', 'url'=>'#'),
				)),
			),
		),
		'<form class=\"navbar-search pull-left\" action=\"\"><input type=\"text\" class=\"search-query span2\" placeholder=\"Search\"></form>',
		array(
			'class'=>'bootstrap.widgets.TbMenu',
			'htmlOptions'=>array('class'=>'pull-right'),
			'items'=>array(
				array('label'=>'Link', 'url'=>'#'),
				'---',
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
)); ?>"); ?>

    <a class="top" href="#top">Back to top &uarr;</a>

</section>

<section id="tbDetailView">

	<h2>Detail views <small>bootstrap.widgets.TbDetailView</small></h2>

	<h3>Properties</h3>

	<table class="table table-bordered table-striped">
		<thead>
			<tr><th>Name</th><th>Type</th><th>Default</th><th>Description</th></tr>
		</thead>
		<tbody>
			<tr><td>type</td><td>array</td><td><code>striped</code>, <code>condensed</code></td><td>Grid types. Valid values are <code>striped</code>, <code>bordered</code> and/or <code>condensed</code>.</td></tr>
		</tbody>
	</table>

	<h3>Examples</h3>

	<?php $this->widget('bootstrap.widgets.TbDetailView', array(
		'data'=>array('id'=>1, 'firstName'=>'Mark', 'lastName'=>'Otto', 'language'=>'CSS'),
		'attributes'=>array(
			array('name'=>'firstName', 'label'=>'First name'),
			array('name'=>'lastName', 'label'=>'Last name'),
			array('name'=>'language', 'label'=>'Language'),
		),
	)); ?>

	<h5>Source code</h5>

<?php echo $phpLighter->highlight("<?php \$this->widget('bootstrap.widgets.TbDetailView', array(
	'data'=>array('id'=>1, 'firstName'=>'Mark', 'lastName'=>'Otto', 'language'=>'CSS'),
	'attributes'=>array(
		array('name'=>'firstName', 'label'=>'First name'),
		array('name'=>'lastName', 'label'=>'Last name'),
		array('name'=>'language', 'label'=>'Language'),
	),
)); ?>"); ?>

	<a class="top" href="#top">Back to top &uarr;</a>

</section>

<section id="tbGridView">

	<h2>Grid views <small>bootstrap.widgets.TbGridView</small></h2>

	<h3>Properties</h3>

	<table class="table table-bordered table-striped">
		<thead>
			<tr><th>Name</th><th>Type</th><th>Default</th><th>Description</th></tr>
		</thead>
		<tbody>
		<tr><td>type</td><td>array</td><td></td><td>Grid types. Valid values are <code>striped</code>, <code>bordered</code> and/or <code>condensed</code>.</td></tr>
		</tbody>
	</table>

	<h3>Examples</h3>

	<h4>Default</h4>

	<?php $this->widget('bootstrap.widgets.TbGridView', array(
		'dataProvider'=>$gridDataProvider,
		'template'=>"{items}",
		'columns'=>$gridColumns,
	)); ?>

	<h4>Striped</h4>

	<?php $this->widget('bootstrap.widgets.TbGridView', array(
		'type'=>'striped',
		'dataProvider'=>$gridDataProvider,
		'template'=>"{items}",
		'columns'=>$gridColumns,
	)); ?>

	<h4>Bordered</h4>

	<?php $this->widget('bootstrap.widgets.TbGridView', array(
		'type'=>'bordered',
		'dataProvider'=>$gridDataProvider,
		'template'=>"{items}",
		'columns'=>$gridColumns,
	)); ?>

	<h4>Condensed</h4>

	<?php $this->widget('bootstrap.widgets.TbGridView', array(
		'type'=>'condensed',
		'dataProvider'=>$gridDataProvider,
		'template'=>"{items}",
		'columns'=>$gridColumns,
	)); ?>

	<h4>Striped, bordered and condensed</h4>

	<?php $this->widget('bootstrap.widgets.TbGridView', array(
		'type'=>'striped bordered condensed',
		'dataProvider'=>$gridDataProvider,
		'template'=>"{items}",
		'filter'=>$person->search(),
		'columns'=>$gridColumns,
	)); ?>

	<h5>Source code</h5>

<?php echo $phpLighter->highlight("\$gridDataProvider = new CArrayDataProvider(array(
	array('id'=>1, 'firstName'=>'Mark', 'lastName'=>'Otto', 'language'=>'CSS'),
	array('id'=>2, 'firstName'=>'Jacob', 'lastName'=>'Thornton', 'language'=>'JavaScript'),
	array('id'=>3, 'firstName'=>'Stu', 'lastName'=>'Dent', 'language'=>'HTML'),
));"); ?>

<?php echo $phpLighter->highlight("<?php \$this->widget('bootstrap.widgets.TbGridView', array(
	'type'=>'striped bordered condensed',
	'dataProvider'=>\$gridDataProvider,
	'template'=>\"{items}\",
	'columns'=>array(
		array('name'=>'id', 'header'=>'#'),
		array('name'=>'firstName', 'header'=>'First name'),
		array('name'=>'lastName', 'header'=>'Last name'),
		array('name'=>'language', 'header'=>'Language'),
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
			'htmlOptions'=>array('style'=>'width: 50px'),
		),
	),
)); ?>"); ?>

	<a class="top" href="#top">Back to top &uarr;</a>

</section>

<section id="tbActiveForm">

	<h2>Forms <small>bootstrap.widgets.TbActiveForm</small></h2>

	<h3>Properties</h3>

	<table class="table table-bordered table-striped">
		<thead>
			<tr><th>Name</th><th>Type</th><th>Default</th><th>Description</th></tr>
		</thead>
		<tbody>
			<tr><td>type</td><td>string</td><td><code>vertical</code></td><td>Form type. Valid values are <code>vertical</code>, <code>inline</code>, <code>horizontal</code> and <code>search</code>.</td></tr>
			<tr><td>inlineErrors</td><td>boolean</td><td></td><td>Whether to display errors as blocks.</td></tr>
		</tbody>
	</table>

	<p class="read-more"><a href="http://twitter.github.com/bootstrap/base-css.html#forms" rel="no-follow" target="_blank">Form documentation</a></p>

	<h3>Examples</h3>

	<h4>Vertical</h4>

	<?php /** @var TbActiveForm $form */
	$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
		'id'=>'verticalForm',
		'htmlOptions'=>array('class'=>'well'),
	)); ?>

	<?php echo $form->textFieldRow($model, 'textField', array('class'=>'span3')); ?>
	<?php echo $form->passwordFieldRow($model, 'password', array('class'=>'span3')); ?>
	<?php echo $form->checkboxRow($model, 'checkbox'); ?>
	<?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'label'=>'Login')); ?>

	<?php $this->endWidget(); ?>

	<h5>Source code</h5>

<?php echo $phpLighter->highlight("<?php /** @var BootActiveForm \$form */
\$form = \$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'verticalForm',
	'htmlOptions'=>array('class'=>'well'),
)); ?>

<?php echo \$form->textFieldRow(\$model, 'textField', array('class'=>'span3')); ?>
<?php echo \$form->passwordFieldRow(\$model, 'password', array('class'=>'span3')); ?>
<?php echo \$form->checkboxRow(\$model, 'checkbox'); ?>
<?php \$this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'label'=>'Login')); ?>

<?php \$this->endWidget(); ?>"); ?>

	<h4>Search</h4>

	<?php /** @var TbActiveForm $form */
	$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
		'id'=>'searchForm',
		'type'=>'search',
		'htmlOptions'=>array('class'=>'well'),
	)); ?>

	<?php echo $form->textFieldRow($model, 'textField', array('class'=>'input-medium', 'prepend'=>'<i class="icon-search"></i>')); ?>
	<?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'label'=>'Go')); ?>

	<?php $this->endWidget(); ?>

	<h5>Source code</h5>

<?php echo $phpLighter->highlight("<?php /** @var BootActiveForm \$form */
\$form = \$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'searchForm',
	'type'=>'search',
	'htmlOptions'=>array('class'=>'well'),
)); ?>

<?php echo \$form->textFieldRow(\$model, 'textField', array('class'=>'input-medium', 'prepend'=>'<i class=\"icon-search\"></i>')); ?>
<?php \$this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'label'=>'Go')); ?>

<?php \$this->endWidget(); ?>"); ?>

	<h4>Inline</h4>

	<?php /** @var TbActiveForm $form */
	$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
		'id'=>'inlineForm',
		'type'=>'inline',
		'htmlOptions'=>array('class'=>'well'),
	)); ?>

	<?php echo $form->textFieldRow($model, 'textField', array('class'=>'input-small')); ?>
	<?php echo $form->passwordFieldRow($model, 'password', array('class'=>'input-small')); ?>
	<?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'label'=>'Log in')); ?>

	<?php $this->endWidget(); ?>

	<h5>Source code</h5>

<?php echo $phpLighter->highlight("<?php /** @var BootActiveForm \$form */
\$form = \$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'inlineForm',
	'type'=>'inline',
	'htmlOptions'=>array('class'=>'well'),
)); ?>

<?php echo \$form->textFieldRow(\$model, 'textField', array('class'=>'input-small')); ?>
<?php echo \$form->passwordFieldRow(\$model, 'password', array('class'=>'input-small')); ?>
<?php \$this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'label'=>'Log in')); ?>

<?php \$this->endWidget(); ?>"); ?>

	<h4>Horizontal</h4>

	<?php /** @var TbActiveForm $form */
	$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
		'id'=>'horizontalForm',
		'type'=>'horizontal',
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
		<?php echo $form->uneditableRow($model, 'uneditable', array('class'=>'input-large')); ?>
		<?php echo $form->textFieldRow($model, 'disabled', array('disabled'=>true)); ?>
		<?php echo $form->textFieldRow($model, 'prepend', array('prepend'=>'@')); ?>
		<?php echo $form->textFieldRow($model, 'append', array('append'=>'.00')); ?>
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

	</fieldset>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'label'=>'Submit')); ?>
		<?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'reset', 'label'=>'Reset')); ?>
	</div>

	<?php $this->endWidget(); ?>

	<h5>Source code</h5>

<?php echo $phpLighter->highlight("<?php /** @var BootActiveForm \$form */
\$form = \$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'horizontalForm',
	'type'=>'horizontal',
)); ?>

<fieldset>

	<legend>Legend</legend>

	<?php echo \$form->textFieldRow(\$model, 'textField', array('hint'=>'In addition to freeform text, any HTML5 text-based input appears like so.')); ?>
	<?php echo \$form->dropDownListRow(\$model, 'dropdown', array('Something ...', '1', '2', '3', '4', '5')); ?>
	<?php echo \$form->dropDownListRow(\$model, 'multiDropdown', array('1', '2', '3', '4', '5'), array('multiple'=>true)); ?>
	<?php echo \$form->fileFieldRow(\$model, 'fileField'); ?>
	<?php echo \$form->textAreaRow(\$model, 'textarea', array('class'=>'span8', 'rows'=>5)); ?>
	<?php echo \$form->uneditableRow(\$model, 'uneditable'); ?>
	<?php echo \$form->textFieldRow(\$model, 'disabled', array('disabled'=>true)); ?>
	<?php echo \$form->textFieldRow(\$model, 'prepend', array('prepend'=>'@')); ?>
	<?php echo \$form->textFieldRow(\$model, 'append', array('append'=>'.00')); ?>
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

</fieldset>

<div class=\"form-actions\">
	<?php \$this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'label'=>'Submit')); ?>
	<?php \$this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'reset', 'label'=>'Reset')); ?>
</div>

<?php \$this->endWidget(); ?>"); ?>

    <h4>Tabular</h4>

    <?php /** @var TbActiveForm $form */
    $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
        'id'=>'horizontalForm',
        'type'=>'horizontal',
    )); ?>

    <?php $this->widget('bootstrap.widgets.TbTabs', array(
        'tabs'=>$this->getTabularFormTabs($form, $model),
    )); ?>

    <div class="form-actions">
        <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'label'=>'Submit')); ?>
        <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'reset', 'label'=>'Reset')); ?>
    </div>

    <?php $this->endWidget(); ?>

    <h5>Source code</h5>

<?php echo $phpLighter->highlight("<?php /** @var TbActiveForm \$form */
\$form = \$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id'=>'horizontalForm',
    'type'=>'horizontal',
)); ?>

<?php \$this->widget('bootstrap.widgets.TbTabs', array(
    'tabs'=>\$this->getTabularFormTabs(\$form, \$model),
)); ?>

<div class=\"form-actions\">
    <?php \$this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'label'=>'Submit')); ?>
    <?php \$this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'reset', 'label'=>'Reset')); ?>
</div>

<?php \$this->endWidget(); ?>"); ?>

<?php echo $phpLighter->highlight("public function getTabularFormTabs(\$form, \$model)
{
    \$tabs = array();
    \$count = 0;
    foreach (array('en'=>'English', 'fi'=>'Finnish', 'sv'=>'Swedish') as \$locale => \$language)
    {
        \$tabs[] = array(
            'active'=>\$count++ === 0,
            'label'=>\$language,
            'content'=>\$this->renderPartial('_tabular', array('form'=>\$form, 'model'=>\$model, 'locale'=>\$locale, 'language'=>\$language), true),
        );
    }
    return \$tabs;
}"); ?>

<?php echo $phpLighter->highlight("<fieldset>

    <legend><?php echo CHtml::encode(\$language); ?> translation</legend>

    <?php echo \$form->textFieldRow(\$model, \"[{\$locale}]textField\"); ?>
    <?php echo \$form->textAreaRow(\$model, \"[{\$locale}]textarea\", array('class'=>'span8', 'rows'=>8)); ?>
    <?php echo \$form->checkBoxListRow(\$model, \"[{\$locale}]checkboxes\", array(
        'Option one is this and that—be sure to include why it\'s great',
        'Option two can also be checked and included in form results',
        'Option three can—yes, you guessed it—also be checked and included in form results',
    ), array('hint'=>'<strong>Note:</strong> Labels surround all the options for much larger click areas.')); ?>

</fieldset>"); ?>

    <a class="top" href="#top">Back to top &uarr;</a>

</section>

<section id="tbHero">

	<h2>Hero unit <small>bootstrap.widgets.TbHeroUnit</small></h2>

	<h3>Properties</h3>

	<table class="table table-bordered table-striped">
		<thead>
			<tr><th>Name</th><th>Type</th><th>Default</th><th>Description</th></tr>
		</thead>
		<tbody>
			<tr><td>heading</td><td>string</td><td></td><td>Heading text.</td></tr>
			<tr><td>encodeHeading</td><td>boolean</td><td><code>true</code></td><td>Whether to encode the heading text.</td></tr>
			<tr><td>headingOptions</td><td>array</td><td></td><td>Heading text HTML attributes.</td></tr>
			<tr><td>htmlOptions</td><td>array</td><td></td><td>Hero unit HTML attributes.</td></tr>
		</tbody>
	</table>

	<p class="read-more"><a href="http://twitter.github.com/bootstrap/components.html#typography" rel="no-follow" target="_blank">Hero unit documentation</a></p>

	<h3>Examples</h3>

	<?php $this->beginWidget('bootstrap.widgets.TbHeroUnit', array(
		'heading'=>'Hello, world!',
	)); ?>
	
		<p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
		<p><?php $this->widget('bootstrap.widgets.TbButton', array(
			'type'=>'primary',
			'size'=>'large',
			'label'=>'Learn more',
		)); ?></p>

	<?php $this->endWidget(); ?>

	<h5>Source code</h5>

<?php echo $phpLighter->highlight("<?php \$this->beginWidget('bootstrap.widgets.TbHeroUnit', array(
	'heading'=>'Hello, world!',
)); ?>

	<p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
	<p><?php \$this->widget('bootstrap.widgets.TbButton', array(
		'type'=>'primary',
		'size'=>'large',
		'label'=>'Learn more',
	)); ?></p>

<?php \$this->endWidget(); ?>"); ?>

		<a class="top" href="#top">Back to top &uarr;</a>

</section>

<section id="tbThumbnails">

    <h2>Thumbnails <small>bootstrap.widgets.TbThumbnails</small></h2>

	<p class="read-more"><a href="http://twitter.github.com/bootstrap/components.html#thumbnails" rel="no-follow" target="_blank">Thumbnails documentation</a></p>

	<h3>Examples</h3>

    <?php $this->widget('bootstrap.widgets.TbThumbnails', array(
    'dataProvider'=>$listDataProvider,
    'template'=>"{items}\n{pager}",
    'itemView'=>'_thumb',
)); ?>

    <h5>Source code</h5>

    <?php echo $phpLighter->highlight("<?php \$this->widget('bootstrap.widgets.TbThumbnails', array(
	'dataProvider'=>\$listDataProvider,
	'template'=>\"{items}\\n{pager}\",
	'itemView'=>'_thumb',
)); ?>"); ?>

    <?php echo $htmlLighter->highlight("<li class=\"span3\">
	<a href=\"#\" class=\"thumbnail\" rel=\"tooltip\" data-title=\"Tooltip\">
		<img src=\"http://placehold.it/280x180\" alt=\"\">
	</a>
</li>"); ?>

    <a class="top" href="#top">Back to top &uarr;</a>

</section>

<section id="tbAlert">

    <h2>Alerts <small>bootstrap.widgets.TbAlert</small></h2>

	<h3>Properties</h3>

	<table class="table table-bordered table-striped">
		<thead>
			<tr><th>Name</th><th>Type</th><th>Default</th><th>Description</th></tr>
		</thead>
		<tbody>
			<tr><td>alerts</td><td>array</td><td></td><td>Alerts configurations.</td></tr>
			<tr><td>closeText</td><td>string|boolean</td><td><code>&amp;times;</code></td><td>Close link text. Set to <code>false</code> in order to hide the close link.</td></tr>
			<tr><td>block</td><td>boolean</td><td><code>true</code></td><td>Whether to display the alerts as blocks.</td></tr>
			<tr><td>fade</td><td>boolean</td><td><code>true</code></td><td>Whether alerts should use transitions.</a></td></tr>
			<tr><td>htmlOptions</td><td>array</td><td></td><td>Container HTML attributes.</td></tr>
			<tr><td>events</td><td>array</td><td></td><td>JavaScript event handlers.</td></tr>
		</tbody>
	</table>

	<p class="read-more"><a href="http://twitter.github.com/bootstrap/components.html#alerts" rel="no-follow" target="_blank">Alert documentation</a></p>

	<h3>Examples</h3>

    <?php
    Yii::app()->user->setFlash('success', '<strong>Well done!</strong> You successfully read this important alert message.');
    Yii::app()->user->setFlash('info', '<strong>Heads up!</strong> This alert needs your attention, but it\'s not super important.');
    Yii::app()->user->setFlash('warning', '<strong>Warning!</strong> Best check yo self, you\'re not looking too good.');
    Yii::app()->user->setFlash('error', '<strong>Oh snap!</strong> Change a few things up and try submitting again.');
    ?>

    <?php $this->widget('bootstrap.widgets.TbAlert', array(
		'events'=>array(
			'close'=>"js:function() { console.log('Alert close.'); }",
			'closed'=>"js:function() { console.log('Alert closed.'); }",
		),
	)); ?>

    <h5>Source code</h5>

    <?php echo $phpLighter->highlight("Yii::app()->user->setFlash('success', '<strong>Well done!</strong> You successfully read this important alert message.');
Yii::app()->user->setFlash('info', '<strong>Heads up!</strong> This alert needs your attention, but it\'s not super important.');
Yii::app()->user->setFlash('warning', '<strong>Warning!</strong> Best check yo self, you\'re not looking too good.');
Yii::app()->user->setFlash('error', '<strong>Oh snap!</strong> Change a few things up and try submitting again.');"); ?>

	<?php echo $phpLighter->highlight("<?php \$this->widget('bootstrap.widgets.TbAlert', array(
		'block'=>true, // display a larger alert block?
		'fade'=>true, // use transitions?
		'closeText'=>'&times;', // close link text - if set to false, no close link is displayed
		'alerts'=>array( // configurations per alert type
			'success'=>array('block'=>true, 'fade'=>true, 'closeText'=>'&times;'), // success, info, warning, error or danger
		),
	); ?>"); ?>

    <a class="top" href="#top">Back to top &uarr;</a>

</section>

<section id="tbProgress">

    <h2>Progress bars <small>bootstrap.widgets.TbProgress</small></h2>

	<h3>Properties</h3>

	<table class="table table-bordered table-striped">
		<thead>
			<tr><th>Name</th><th>Type</th><th>Default</th><th>Description</th></tr>
		</thead>
		<tbody>
			<tr><td>type</td><td>string</td><td></td><td>Progress bar type. Valid values are <code>info</code>, <code>success</code>, <code>warning</code> and <code>danger</code>.</td></tr>
			<tr><td>striped</td><td>boolean</td><td><code>false</code></td><td>Whether the bar should be striped.</td></tr>
			<tr><td>animated</td><td>boolean</td><td><code>false</code></td><td>Whether the bar should be animated.</td></tr>
			<tr><td>percent</td><td>integer</td><td><code>0</code></td><td>Progress in percent.</td></tr>
			<tr><td>htmlOptions</td><td>array</td><td></td><td>Progress bar HTML attributes.</td></tr>
		</tbody>
	</table>

	<p class="read-more"><a href="http://twitter.github.com/bootstrap/components.html#progress" rel="no-follow" target="_blank">Progress bar documentation</a></p>

	<h3>Examples</h3>

    <div class="row">

        <div class="span4">

            <h4>Basic</h4>

            <?php $this->widget('bootstrap.widgets.TbProgress', array(
            'percent'=>30,
        )); ?>

        </div>

        <div class="span4">

            <h4>Striped</h4>

            <?php $this->widget('bootstrap.widgets.TbProgress', array(
            'type'=>'info',
            'percent'=>20,
            'striped'=>true,
        )); ?>

        </div>

        <div class="span4">

            <h4>Animated</h4>

            <?php $this->widget('bootstrap.widgets.TbProgress', array(
            'type'=>'danger', // 'info', 'success' or 'danger'
            'percent'=>40, // the progress
            'striped'=>true,
            'animated'=>true,
        )); ?>

        </div>

    </div>

    <h5>Source code</h5>

    <?php echo $phpLighter->highlight("<?php \$this->widget('bootstrap.widgets.TbProgress', array(
	'type'=>'danger', // 'info', 'success' or 'danger'
	'percent'=>40, // the progress
	'striped'=>true,
	'animated'=>true,
)); ?>"); ?>

    <a class="top" href="#top">Back to top &uarr;</a>

</section>

<section id="tbLabel">

    <h2>Labels <small>bootstrap.widgets.TbLabel</small></h2>

	<h3>Properties</h3>

	<table class="table table-bordered table-striped">
		<thead>
			<tr><th>Name</th><th>Type</th><th>Default</th><th>Description</th></tr>
		</thead>
		<tbody>
			<tr><td>type</td><td>string</td><td></td><td>Label type. Valid values are <code>success</code>, <code>warning</code>, <code>important</code>, <code>info</code> and <code>inverse</code>.</td></tr>
			<tr><td>label</td><td>string</td><td></td><td>Label text.</td></tr>
			<tr><td>encodeLabel</td><td>boolean</td><td><code>true</code></td><td>Whether to encode the label text.</td></tr>
			<tr><td>htmlOptions</td><td>array</td><td></td><td>Label HTML attributes.</td></tr>
		</tbody>
	</table>

	<p class="read-more"><a href="http://twitter.github.com/bootstrap/components.html#labels-badges" rel="no-follow" target="_blank">Label documentation</a></p>

	<h3>Examples</h3>

    <p>
        <?php $this->widget('bootstrap.widgets.TbLabel', array('label'=>'Default')); ?>
        <?php $this->widget('bootstrap.widgets.TbLabel', array('type'=>'success', 'label'=>'Success')); ?>
        <?php $this->widget('bootstrap.widgets.TbLabel', array('type'=>'warning', 'label'=>'Warning')); ?>
        <?php $this->widget('bootstrap.widgets.TbLabel', array('type'=>'important', 'label'=>'Important')); ?>
        <?php $this->widget('bootstrap.widgets.TbLabel', array('type'=>'info', 'label'=>'Info')); ?>
        <?php $this->widget('bootstrap.widgets.TbLabel', array('type'=>'inverse', 'label'=>'Inverse')); ?>
    </p>

    <h5>Source code</h5>

    <?php echo $phpLighter->highlight("<?php \$this->widget('bootstrap.widgets.TbLabel', array(
	'type'=>'success', // 'success', 'warning', 'important', 'info' or 'inverse'
	'label'=>'Success',
)); ?>"); ?>

    <a class="top" href="#top">Back to top &uarr;</a>

</section>

<section id="tbBadge">

    <h2>Badges <small>bootstrap.widgets.TbBadge</small></h2>

	<h3>Properties</h3>

	<table class="table table-bordered table-striped">
		<thead>
			<tr><th>Name</th><th>Type</th><th>Default</th><th>Description</th></tr>
		</thead>
		<tbody>
			<tr><td>type</td><td>string</td><td></td><td>Badge type. Valid values are <code>success</code>, <code>warning</code>, <code>important</code>, <code>info</code> and <code>inverse</code>.</td></tr>
			<tr><td>label</td><td>string</td><td></td><td>Badge text.</td></tr>
			<tr><td>encodeLabel</td><td>boolean</td><td><code>true</code></td><td>Whether to encode the badge text.</td></tr>
			<tr><td>htmlOptions</td><td>array</td><td></td><td>Badge HTML attributes.</td></tr>
		</tbody>
	</table>

	<p class="read-more"><a href="http://twitter.github.com/bootstrap/components.html#labels-badges" rel="no-follow" target="_blank">Badge documentation</a></p>

	<h3>Examples</h3>

    <p>
        <?php $this->widget('bootstrap.widgets.TbBadge', array('label'=>'1')); ?>
        <?php $this->widget('bootstrap.widgets.TbBadge', array('type'=>'success', 'label'=>'2')); ?>
        <?php $this->widget('bootstrap.widgets.TbBadge', array('type'=>'warning', 'label'=>'4')); ?>
        <?php $this->widget('bootstrap.widgets.TbBadge', array('type'=>'important', 'label'=>'6')); ?>
        <?php $this->widget('bootstrap.widgets.TbBadge', array('type'=>'info', 'label'=>'8')); ?>
        <?php $this->widget('bootstrap.widgets.TbBadge', array('type'=>'inverse', 'label'=>'10')); ?>
    </p>

    <h5>Source code</h5>

    <?php echo $phpLighter->highlight("<?php \$this->widget('bootstrap.widgets.TbBadge', array(
	'type'=>'success', // 'success', 'warning', 'important', 'info' or 'inverse'
	'label'=>'2',
)); ?>"); ?>

    <a class="top" href="#top">Back to top &uarr;</a>

</section>

<section id="tbCarousel">

    <h2>Carousel <small>bootstrap.widgets.TbCarousel</small></h2>

	<h3>Properties</h3>

	<table class="table table-bordered table-striped">
		<thead>
			<tr><th>Name</th><th>Type</th><th>Default</th><th>Description</th></tr>
		</thead>
		<tbody>
			<tr><td>prevLabel</td><td>string</td><td><code>&amp;lsaquo;</code></td><td>Previous button text.</td></tr>
			<tr><td>nextLabel</td><td>string</td><td><code>&amp;rsaquo;</code></td><td>Next button text.</td></tr>
			<tr><td>slide</td><td>boolean</td><td><code>true</code></td><td>Whether the carousel items should slide.</td></tr>
			<tr><td>displayPrevAndNext</td><td>boolean</td><td><code>true</code></td><td>Whether to display previous and next buttons.</td></tr>
			<tr><td>items</td><td>array</td><td></td><td>Carousel item configuration.</td></tr>
			<tr><td>htmlOptions</td><td>array</td><td></td><td>Carousel HTML attributes.</td></tr>
			<tr><td>options</td><td>array</td><td></td><td>JavaScript plugin options.</td></tr>
			<tr><td>events</td><td>array</td><td></td><td>JavaScript event handlers.</td></tr>
		</tbody>
	</table>

	<p class="read-more"><a href="http://twitter.github.com/bootstrap/javascript.html#carousel" rel="no-follow" target="_blank">Carousel documentation</a></p>

	<h3>Examples</h3>

    <div class="row">

        <div class="span8">

            <?php $this->widget('bootstrap.widgets.TbCarousel', array(
            'items'=>array(
                array('image'=>'http://placehold.it/770x400&text=First+thumbnail', 'label'=>'First Thumbnail label', 'caption'=>'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.'),
                array('image'=>'http://placehold.it/770x400&text=Second+thumbnail', 'label'=>'Second Thumbnail label', 'caption'=>'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.'),
                array('image'=>'http://placehold.it/770x400&text=Third+thumbnail', 'label'=>'Third Thumbnail label', 'caption'=>'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.'),
            ),
            'events'=>array(
                'slide'=>"js:function() { console.log('Carousel slide.'); }",
                'slid'=>"js:function() { console.log('Carousel slid.'); }",
            ),
        )); ?>

        </div>

    </div>

    <h5>Source code</h5>

    <?php echo $phpLighter->highlight("<?php \$this->widget('bootstrap.widgets.TbCarousel', array(
	'items'=>array(
		array('image'=>'http://placehold.it/770x400&text=First+thumbnail', 'label'=>'First Thumbnail label', 'caption'=>'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.'),
		array('image'=>'http://placehold.it/770x400&text=Second+thumbnail', 'label'=>'Second Thumbnail label', 'caption'=>'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.'),
		array('image'=>'http://placehold.it/770x400&text=Third+thumbnail', 'label'=>'Third Thumbnail label', 'caption'=>'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.'),
	),
)); ?>"); ?>

    <a class="top" href="#top">Back to top &uarr;</a>

</section>

<section id="tbModal">

    <h2>Modals <small>bootstrap.widgets.TbModal</small></h2>

	<h3>Properties</h3>

	<table class="table table-bordered table-striped">
		<thead>
			<tr><th>Name</th><th>Type</th><th>Default</th><th>Description</th></tr>
		</thead>
		<tbody>
			<tr><td>autoOpen</td><td>boolean</td><td><code>false</code></td><td>Whether to automatically open the modal.</td></tr>
			<tr><td>fade</td><td>boolean</td><td><code>true</code></td><td>Whether the modal should use transitions.</td></tr>
			<tr><td>htmlOptions</td><td>array</td><td></td><td>Modal HTML attributes.</td></tr>
			<tr><td>options</td><td>array</td><td></td><td>JavaScript plugin options.</td></tr>
			<tr><td>events</td><td>array</td><td></td><td>JavaScript event handlers.</td></tr>
		</tbody>
	</table>

	<p class="read-more"><a href="http://twitter.github.com/bootstrap/javascript.html#modals" rel="no-follow" target="_blank">Modal documentation</a></p>

	<h3>Examples</h3>

    <?php $this->beginWidget('bootstrap.widgets.TbModal', array(
    'id'=>'myModal',
    'events'=>array(
        'show'=>"js:function() { console.log('Modal show.'); }",
        'shown'=>"js:function() { console.log('Modal shown.'); }",
        'hide'=>"js:function() { console.log('Modal hide.'); }",
        'hidden'=>"js:function() { console.log('Modal hidden.'); }",
    ),
)); ?>

    <div class="modal-header">
        <a class="close" data-dismiss="modal">&times;</a>
        <h4>Modal header</h4>
    </div>

    <div class="modal-body">
        <p>One fine body...</p>
    </div>

    <div class="modal-footer">
        <?php $this->widget('bootstrap.widgets.TbButton', array('type'=>'primary', 'label'=>'Save changes', 'url'=>'#', 'htmlOptions'=>array('data-dismiss'=>'modal'))); ?>
        <?php $this->widget('bootstrap.widgets.TbButton', array('label'=>'Close', 'url'=>'#', 'htmlOptions'=>array('data-dismiss'=>'modal'))); ?>
    </div>

    <?php $this->endWidget(); ?>

    <div class="well">
        <?php $this->widget('bootstrap.widgets.TbButton', array(
        'label'=>'Click me',
        'type'=>'primary',
        'htmlOptions'=>array(
			'data-toggle'=>'modal',
			'data-target'=>'#myModal',
		),
    )); ?>
    </div>

    <h5>Source code</h5>

    <?php echo $phpLighter->highlight("<?php \$this->beginWidget('bootstrap.widgets.TbModal', array('id'=>'myModal')); ?>

<div class=\"modal-header\">
	<a class=\"close\" data-dismiss=\"modal\">&times;</a>
	<h4>Modal header</h4>
</div>

<div class=\"modal-body\">
	<p>One fine body...</p>
</div>

<div class=\"modal-footer\">
	<?php \$this->widget('bootstrap.widgets.TbButton', array(
		'type'=>'primary',
		'label'=>'Save changes',
		'url'=>'#',
		'htmlOptions'=>array('data-dismiss'=>'modal'),
	)); ?>
	<?php \$this->widget('bootstrap.widgets.TbButton', array(
		'label'=>'Close',
		'url'=>'#',
		'htmlOptions'=>array('data-dismiss'=>'modal'),
	)); ?>
</div>

<?php \$this->endWidget(); ?>"); ?>

    <?php echo $phpLighter->highlight("<?php \$this->widget('bootstrap.widgets.TbButton', array(
	'label'=>'Click me',
	'type'=>'primary',
	'htmlOptions'=>array(
		'data-toggle'=>'modal',
		'data-target'=>'#myModal',
	),
)); ?>"); ?>

    <a class="top" href="#top">Back to top &uarr;</a>

</section>

<section id="tbPopover">

    <h2>Popovers <small>bootstrap.widgets.TbPopover</small></h2>

	<p class="read-more"><a href="http://twitter.github.com/bootstrap/javascript.html#popovers" rel="no-follow" target="_blank">Popover documentation</a></p>

	<h3>Examples</h3>

    <div class="well">
        <?php $this->widget('bootstrap.widgets.TbButton', array(
        'label'=>'Click me',
        'type'=>'danger',
        'htmlOptions'=>array('data-title'=>'A Title', 'data-content'=>'And here\'s some amazing content. It\'s very engaging. right?', 'rel'=>'popover'),
    )); ?>
    </div>

    <h5>Source code</h5>

    <?php echo $phpLighter->highlight("<?php \$this->widget('bootstrap.widgets.TbButton', array(
	'label'=>'Click me',
	'type'=>'danger',
	'htmlOptions'=>array('data-title'=>'A Title', 'data-content'=>'And here\'s some amazing content. It\'s very engaging. right?', 'rel'=>'popover'),
)); ?>"); ?>

    <a class="top" href="#top">Back to top &uarr;</a>

</section>

<section id="tbTabs">

    <h2>Togglable tabs <small>bootstrap.widgets.TbTabs</small></h2>

	<h3>Properties</h3>

	<table class="table table-bordered table-striped">
		<thead>
			<tr><th>Name</th><th>Type</th><th>Default</th><th>Description</th></tr>
		</thead>
		<tbody>
			<tr><td>type</td><td>string</td><td><code>tabs</code></td><td>See <code>TbMenu::type</code>.</td></tr>
			<tr><td>placement</td><td>string</td><td></td><td>Tab placement. Valid values are <code>above</code>, <code>below</code>, <code>left</code> and <code>right</code>.</td></tr>
			<tr><td>tabs</td><td>array</td><td></td><td>Tabs configuration.</td></tr>
			<tr><td>encodeLabel</td><td>boolean</td><td><code>true</code></td><td>Whether to encode labels.</td></tr>
			<tr><td>htmlOptions</td><td>array</td><td></td><td>Tabs HTML attributes.</td></tr>
			<tr><td>events</td><td>array</td><td></td><td>JavaScript event handlers.</td></tr>
		</tbody>
	</table>

	<p class="read-more"><a href="http://twitter.github.com/bootstrap/javascript.html#tabs" rel="no-follow" target="_blank">Tabs documentation</a></p>

	<h3>Examples</h3>

    <?php $this->widget('bootstrap.widgets.TbTabs', array(
    'type'=>'tabs', // 'tabs' or 'pills'
    'htmlOptions'=>array('class'=>'togglable-tabs'),
    'tabs'=>$tabs,
    'events'=>array(
        'show'=>"js:function() { console.log('Tabs show.'); }",
        'shown'=>"js:function() { console.log('Tabs shown.'); }",
    ),
)); ?>

    <h5>Source code</h5>

    <?php echo $phpLighter->highlight("<?php \$this->widget('bootstrap.widgets.TbTabs', array(
	'type'=>'tabs', // 'tabs' or 'pills'
	'tabs'=>array(
		array('label'=>'Home', 'content'=>'Raw denim you probably haven\'t heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.', 'active'=>true),
		array('label'=>'Profile', 'content'=>'Food truck fixie locavore, accusamus mcsweeney\'s marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.'),
		array('label'=>'Dropdown', 'items'=>array(
			array('label'=>'@fat', 'content'=>'Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney\'s organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven\'t heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.'),
			array('label'=>'@mdo', 'content'=>'Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral, mustache readymade thundercats keffiyeh craft beer marfa ethical. Wolf salvia freegan, sartorial keffiyeh echo park vegan.'),
		)),
	),
)); ?>"); ?>

    <div class="row">

        <div class="span6">

            <h4>Tabs on the top</h4>

            <?php $this->widget('bootstrap.widgets.TbTabs', array(
                'htmlOptions'=>array('class'=>'togglable-tabs'),
                'tabs'=>$tabbable,
            )); ?>

            <h4>Tabs on the left</h4>

            <?php $this->widget('bootstrap.widgets.TbTabs', array(
                'placement'=>'left',
                'htmlOptions'=>array('class'=>'togglable-tabs'),
                'tabs'=>$tabbable,
            )); ?>

        </div>

        <div class="span6">

            <h4>Tabs on the bottom</h4>

            <?php $this->widget('bootstrap.widgets.TbTabs', array(
                'placement'=>'below',
                'htmlOptions'=>array('class'=>'togglable-tabs'),
                'tabs'=>$tabbable,
            )); ?>

            <h4>Tabs on the right</h4>

            <?php $this->widget('bootstrap.widgets.TbTabs', array(
                'placement'=>'right',
                'htmlOptions'=>array('class'=>'togglable-tabs'),
                'tabs'=>$tabbable,
            )); ?>

        </div>

    </div>

    <?php echo $phpLighter->highlight("<?php \$this->widget('bootstrap.widgets.TbTabs', array(
	'type'=>'tabs',
	'placement'=>'below', // 'above', 'right', 'below' or 'left'
	'tabs'=>array(
		array('label'=>'Section 1', 'content'=>'<p>I\'m in Section 1.</p>', 'active'=>true),
		array('label'=>'Section 2', 'content'=>'<p>Howdy, I\'m in Section 2.</p>'),
		array('label'=>'Section 3', 'content'=>'<p>What up girl, this is Section 3.</p>'),
	),
)); ?>"); ?>

    <a class="top" href="#top">Back to top &uarr;</a>

</section>

<section id="tbTooltip">

    <h2>Tooltips <small>bootstrap.widgets.TbTooltip</small></h2>

	<p class="read-more"><a href="http://twitter.github.com/bootstrap/javascript.html#tooltips" rel="no-follow" target="_blank">Tooltip documentation</a></p>

	<h3>Examples</h3>

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

    <h5>Source code</h5>

    <?php echo $htmlLighter->highlight("<p class=\"well\">
	Lorem ipsum dolor sit <a href=\"#\" rel=\"tooltip\" title=\"First tooltip\">amet</a>,
	consectetur adipiscing elit.
	Fusce ut velit sem, id elementum elit. Quisque tincidunt magna in quam luctus a ultrices tellus luctus.
	Pellentesque at tellus urna.
	Ut congue, <a href=\"#\" rel=\"tooltip\" title=\"Another tooltip\">nibh eu</a> interdum commodo,
	ligula urna consequat tortor, at vehicula tellus est a orci.
	Maecenas nec ligula sed ipsum posuere sollicitudin pretium ac sapien.
	Sed odio dui, pretium eu pellentesque ac,
	<a href=\"#\" rel=\"tooltip\" title=\"Yet another tooltip\">tempor</a> sed sem.
</p>"); ?>

    <a class="top" href="#top">Back to top &uarr;</a>

</section>

<section id="tbTypeahead">

	<h2>Typeahead <small>bootstrap.widgets.TbTypeahead</small></h2>

	<h3>Properties</h3>

	<table class="table table-bordered table-striped">
		<thead>
			<tr><th>Name</th><th>Type</th><th>Default</th><th>Description</th></tr>
		</thead>
		<tbody>
			<tr><td>options</td><td>array</td><td></td><td>JavaScript plugin options.</td></tr>
		</tbody>
	</table>

	<p class="read-more"><a href="http://twitter.github.com/bootstrap/javascript.html#typeahead" rel="no-follow" target="_blank">Typeahead documentation</a></p>

	<h3>Examples</h3>

	<div class="well">

		<?php $this->widget('bootstrap.widgets.TbTypeahead', array(
            'name'=>'typeahead',
			'options'=>array(
				'source'=>array('Alabama', 'Alaska', 'Arizona', 'Arkansas', 'California', 'Colorado', 'Connecticut', 'Delaware', 'Florida', 'Georgia', 'Hawaii', 'Idaho', 'Illinois', 'Indiana', 'Iowa', 'Kansas', 'Kentucky', 'Louisiana', 'Maine', 'Maryland', 'Massachusetts', 'Michigan', 'Minnesota', 'Mississippi', 'Missouri', 'Montana', 'Nebraska', 'Nevada', 'New Hampshire', 'New Jersey', 'New Mexico', 'New York', 'North Dakota', 'North Carolina', 'Ohio', 'Oklahoma', 'Oregon', 'Pennsylvania', 'Rhode Island', 'South Carolina', 'South Dakota', 'Tennessee', 'Texas', 'Utah', 'Vermont', 'Virginia', 'Washington', 'West Virginia', 'Wisconsin', 'Wyoming'),
				'items'=>4,
				'matcher'=>"js:function(item) {
			        return ~item.toLowerCase().indexOf(this.query.toLowerCase());
			    }",
			),
		)); ?>

	</div>

	<h5>Source code</h5>

<?php echo $phpLighter->highlight("<?php \$this->widget('bootstrap.widgets.TbTypeahead', array(
	'options'=>array(
	    'name'=>'typeahead',
		'source'=>array('Alabama', 'Alaska', 'Arizona', 'Arkansas', 'California', 'Colorado', 'Connecticut', 'Delaware', 'Florida', 'Georgia', 'Hawaii', 'Idaho', 'Illinois', 'Indiana', 'Iowa', 'Kansas', 'Kentucky', 'Louisiana', 'Maine', 'Maryland', 'Massachusetts', 'Michigan', 'Minnesota', 'Mississippi', 'Missouri', 'Montana', 'Nebraska', 'Nevada', 'New Hampshire', 'New Jersey', 'New Mexico', 'New York', 'North Dakota', 'North Carolina', 'Ohio', 'Oklahoma', 'Oregon', 'Pennsylvania', 'Rhode Island', 'South Carolina', 'South Dakota', 'Tennessee', 'Texas', 'Utah', 'Vermont', 'Virginia', 'Washington', 'West Virginia', 'Wisconsin', 'Wyoming'),
		'items'=>4,
		'matcher'=>\"js:function(item) {
	        return ~item.toLowerCase().indexOf(this.query.toLowerCase());
	    }\",
	),
)); ?>"); ?>

	<a class="top" href="#top">Back to top &uarr;</a>

</section>

<section id="comments">

	<h2>Comments</h2>

	<div class="fb-comments" data-href="<?php echo $this->createAbsoluteUrl('index'); ?>" data-num-posts="10" data-width="470"></div>

	<a class="top" href="#top">Back to top &uarr;</a>

</section>

</div>

<?php $this->widget('bootstrap.widgets.TbNavbar', array(
	'fixed'=>'top',
	'brand'=>false,
	'collapse'=>true,
	'htmlOptions'=>array('class'=>'subnav'),
	'items'=>array(
		array(
			'class'=>'bootstrap.widgets.TbMenu',
			'scrollspy'=>'.navbar',
			'items'=>array(
				array('label'=>'Buttons', 'url'=>'#tbButton'),
				array('label'=>'Buttons groups', 'url'=>'#tbButtonGroup'),
				array('label'=>'Navigation', 'items'=>array(
					array('label'=>'Breadcrumb', 'url'=>'#tbBreadcrumbs'),
					array('label'=>'Menu', 'url'=>'#tbMenu'),
					array('label'=>'Navbar', 'url'=>'#tbNavbar'),
				)),
				array('label'=>'Tables', 'items'=>array(
					array('label'=>'Detail view', 'url'=>'#tbDetailView'),
					array('label'=>'Grid view', 'url'=>'#tbGridView'),
				)),
				array('label'=>'Forms', 'url'=>'#tbActiveForm'),
				array('label'=>'Hero unit', 'url'=>'#tbHero'),
				array('label'=>'Thumbnails', 'url'=>'#tbThumbnails'),
				array('label'=>'Alert', 'url'=>'#tbAlert'),
				array('label'=>'Progress', 'url'=>'#tbProgress'),
				array('label'=>'Labels', 'url'=>'#tbLabel'),
				array('label'=>'Badges', 'url'=>'#tbBadge'),
				array('label'=>'Javascript plugins', 'items'=>array(
					array('label'=>'Carousel', 'url'=>'#tbCarousel'),
					array('label'=>'Modal', 'url'=>'#tbModal'),
					array('label'=>'Popover', 'url'=>'#tbPopover'),
					array('label'=>'Tabs', 'url'=>'#tbTabs'),
					array('label'=>'Tooltip', 'url'=>'#tbTooltip'),
					array('label'=>'Typeahead', 'url'=>'#tbTypeahead'),
				)),
			),
		),
	),
)); ?>
