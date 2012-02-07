<?php

class SiteController extends Controller
{
	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		$gridDataProvider = new CArrayDataProvider(array(
			array('id'=>1, 'firstName'=>'Mark', 'lastName'=>'Otto', 'language'=>'CSS'),
			array('id'=>2, 'firstName'=>'Jacob', 'lastName'=>'Thornton', 'language'=>'JavaScript'),
			array('id'=>3, 'firstName'=>'Stu', 'lastName'=>'Dent', 'language'=>'HTML'),
		));

		$gridColumns = array(
			array('name'=>'id', 'header'=>'#'),
			array('name'=>'firstName', 'header'=>'First name'),
			array('name'=>'lastName', 'header'=>'Last name'),
			array('name'=>'language', 'header'=>'Language'),
			array(
				'class'=>'BootButtonColumn',
				'viewButtonUrl'=>null,
				'viewButtonOptions'=>array('rel'=>'tooltip'),
				'updateButtonUrl'=>null,
				'updateButtonOptions'=>array('rel'=>'tooltip'),
				'deleteButtonUrl'=>null,
				'deleteButtonOptions'=>array('rel'=>'tooltip'),
			)
		);

		$rawData = array();
		for ($i = 0; $i < 200; $i++)
			$rawData[] = array('id'=>$i + 1);

		$listDataProvider = new CArrayDataProvider($rawData, array(
			'pagination'=>array('pageSize'=>10),
		));

		$this->render('index', array(
			'gridDataProvider'=>$gridDataProvider,
			'gridColumns'=>$gridColumns,
			'listDataProvider'=>$listDataProvider,
		));
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
	    if($error=Yii::app()->errorHandler->error)
	    {
	    	if(Yii::app()->request->isAjaxRequest)
	    		echo $error['message'];
	    	else
	        	$this->render('error', $error);
	    }
	}
}