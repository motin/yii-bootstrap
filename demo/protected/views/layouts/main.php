<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	<link rel="stylesheet/less" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/less/styles.less">
	<link rel="stylesheet/css" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/js/syntaxhighlighter/scripts/shCore.css">
	<link rel="stylesheet/css" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/js/syntaxhighlighter/styles/shThemeDefault.css">
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/less-1.2.1.min.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/syntaxhighlighter/styles/shCore.js"></script>
	<?php Yii::app()->bootstrap->registerCss(); ?>
	<?php Yii::app()->bootstrap->registerCoreScript(); ?>
</head>

<body>

<?php $this->widget('BootNavbar',array(
	'brand'=>CHtml::encode(Yii::app()->name),
	'items'=>array(
		array(
			'htmlOptions'=>array('class'=>'pull-right'),
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/site/index')),
				array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Contact', 'url'=>array('/site/contact')),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		),
	),
)); ?>

<div class="container">

	<div class="hero-unit">
		<h1><?php echo CHtml::encode(Yii::app()->name); ?></h1>
	</div>

	<?php if (!empty($this->breadcrumbs)):?>
		<?php $this->widget('bootstrap.widgets.BootCrumb', array(
			'links'=>$this->breadcrumbs,
		)); ?>
	<?php endif?>

	<div class="row">
		<?php echo $content; ?>
	</div>

	<hr />

	<div class="footer">
		&copy; Company <?php echo date('Y'); ?>
	</div>

</div>

<?php Yii::app()->clientScript->registerScript('SyntaxHighlighter', "SyntaxHighlighter.all();"); ?>

</body>
</html>
