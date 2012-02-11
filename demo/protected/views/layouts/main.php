<!doctype html>
<html xmlns:fb="http://www.facebook.com/2008/fbml" xml:lang="en" lang="en">
<head prefix="og: http://ogp.me/ns# <?php echo Yii::app()->fb->appNamespace; ?>: http://ogp.me/ns/apps/<?php echo Yii::app()->fb->appNamespace; ?>#">
	<?php Yii::app()->controller->widget('ext.seo.widgets.SeoHead', array(
		'defaultDescription'=>Yii::app()->params['appDescription'],
		'httpEquivs'=>array('Content-Type'=>'text/html; charset=utf-8', 'Content-Language'=>'en-US'),
		'title'=>array('class'=>'ext.seo.widgets.SeoTitle', 'separator'=>' :: '),
	)); ?>
	<link rel="stylesheet/less" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/less/styles.less" />
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/less-1.2.1.min.js"></script>
	<!--[if lt IE 9]>
		<script type="text/javascript" src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<script type="text/javascript">

		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-29040179-1']);
		_gaq.push(['_trackPageview']);

		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();

	</script>
</head>

<body id="top">

<div id="fb-root"></div>
<script type="text/javascript">
	(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
</script>

<?php $this->widget('BootNavbar',array(
	'brand'=>CHtml::encode(Yii::app()->name),
	'collapse'=>true,
	'items'=>array(
		array(
			'class'=>'BootMenu',
			'items'=>array(
				array('label'=>'Demo', 'url'=>array('site/index')),
				array('label'=>'Setup', 'url'=>array('site/setup')),
			),
		),
		'
		<div class="add-this pull-right">
			<!-- AddThis Button BEGIN -->
			<div class="addthis_toolbox addthis_default_style">
			<a class="addthis_button_facebook"></a>
			<a class="addthis_button_twitter"></a>
			<a class="addthis_button_google"></a>
			<a class="addthis_button_email"></a>
			<a class="addthis_button_compact"></a>
			<a class="addthis_counter addthis_bubble_style"></a>
			</div>
			<!-- AddThis Button END -->
		</div>'
	),
)); ?>

<div class="container">

	<div class="hero-unit">
		<h1><?php echo CHtml::encode(Yii::app()->name); ?></h1>
		<p>
			Bringing together the
			<?php echo CHtml::link('Yii PHP framework', 'http://www.yiiframework.com'); ?> and
			<?php echo CHtml::link('Bootstrap', 'http://twitter.github.com/bootstrap/'); ?>, Twitter's new web development toolkit.
			Now with support for Bootstrap 2!
			<?php echo CHtml::link('Yii-Bootstrap', 'http://www.yiiframework.com/extension/bootstrap/'); ?>
			is an extension for Yii that focuses on server-side that allows you to easily use Bootstrap in your Yii applications.
			These widgets have all been developed with care to work seemlessly together with Bootstrap and its jQuery plugins.
		</p>
	</div>

	<?php if (!empty($this->breadcrumbs)):?>
		<?php $this->widget('bootstrap.widgets.BootCrumb', array(
			'links'=>$this->breadcrumbs,
		)); ?>
	<?php endif?>

	<?php echo $content; ?>

	<hr />

	<footer>

		<p class="powered">
			Powered by <?php echo CHtml::link('Yii PHP framework 1.1.9', 'http://www.yiiframework.com', array('target'=>'_blank')); ?> //
			<?php echo CHtml::link('jQuery 1.7.1', 'http://www.jquery.com', array('target'=>'_blank')); ?> //
			<?php echo CHtml::link('Yii-Bootstrap 0.9.8', 'http://www.yiiframework.com/extension/bootstrap', array('target'=>'_blank')); ?> //
			<?php echo CHtml::link('Yii-SEO 0.9.3', 'http://www.yiiframework.com/extension/seo', array('target'=>'_blank')); ?> //
			<?php echo CHtml::link('Yii-Facebook 0.9.1', '#', array('rel'=>'tooltip', 'title'=>'Link available soon')); ?> //
			<?php echo CHtml::link('Bootstrap 2', 'http://twitter.github.com/bootstrap', array('target'=>'_blank')); ?> //
			<?php echo CHtml::link('LESS 1.2.1', 'http://www.lesscss.org', array('target'=>'_blank')); ?>
		</p>

		<p class="copy">
			&copy; Christoffer Niska 2011
		</p>

	</footer>

</div>

<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=ra-4f362fc83fc39768"></script>

</body>
</html>
