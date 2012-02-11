<?php

// Set the path of Bootstrap to be the root of the project.
Yii::setPathOfAlias('bootstrap', realpath(dirname(__FILE__).'/../../../'));

// Application configuration.
return array(
	'basePath'=>realpath(dirname(__FILE__).'/..'),
	'name'=>'Yii-Bootstrap',

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
			'responsiveCss'=>true,
		),
		'errorHandler'=>array(
			'errorAction'=>'site/error',
		),
		'fb'=>array(
			'class'=>'ext.facebook.components.FacebookConnect',
			'appID'=>'106265262835735',
			'appSecret'=>'941d6e0fa554b725ec258311e4ddc4b6',
			'appNamespace'=>'yii-bootstrap',
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
		'urlManager'=>array(
			'showScriptName'=>false,
			'urlFormat'=>'path',
			'urlSuffix'=>'.html',
			'rules'=>array(
				'demo'=>'site/index',
				'setup'=>'site/setup',
			),
		),
		'user'=>array(
			'allowAutoLogin'=>true,
		),
	),

	// Application-level parameters
	'params'=>array(
	),
);