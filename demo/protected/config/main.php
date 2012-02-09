<?php

// Set the path of Bootstrap to be the root of the project.
Yii::setPathOfAlias('bootstrap', realpath(dirname(__FILE__).'/../../../'));

// Application configuration.
return array(
	'basePath'=>realpath(dirname(__FILE__).'/..'),
	'name'=>'Bootstrap Demo',

	'preload'=>array('log'),

	'import'=>array(
		'application.models.*',
		'application.components.*',
		'bootstrap.widgets.*',
	),

	'modules'=>array(
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'boot',
			'ipFilters'=>array('127.0.0.1','::1'),
		),
	),

	'components'=>array(
		'bootstrap'=>array(
			'class'=>'bootstrap.components.Bootstrap',
			'coreCss'=>false,
			'responsiveCss'=>false,
		),
		'errorHandler'=>array(
			'errorAction'=>'site/error',
		),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
		'user'=>array(
			'allowAutoLogin'=>true,
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		'adminEmail'=>'webmaster@example.com',
	),
);