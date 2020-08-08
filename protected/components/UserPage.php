<?php
Yii::import('zii.widgets.CPortlet');

class UserPage extends CPortlet
{
	public $strangerId;
	
	public function init()
	{
		$strangerModel = User::model()->find('id=:userID', array(':userID'=>$this->strangerId));
		
		$profile = Profile::model()->find('user_id=:userID', array(':userID'=>$this->strangerId));
		$this->title=CHtml::link($profile->firstname .' '.$profile->lastname,   //Yii::app()->user->name,
		
		//$this->title=CHtml::encode($strangerModel->username ,
								Yii::app()->createUrl('note/page', array("id"=>$this->strangerId)));
		parent::init();
	}

	protected function renderContent()
	{
//		$picRowExists = Profilepic::model()->exists('user_id=:userID', array(':userID'=>Yii::app()->user->id));
//		if($picRowExists){ // one with photo, and update link in view 
						// should also add a model with the photo to be displayed in this view.
					$model = Profilepic::model()->find('user_id=:userID', array(':userID'=>$this->strangerId));
					$this->render('userPagePhoto', array(	
					'model'=>$model,
					'strangerId'=>$this->strangerId,
					));			
//		}
//		else {
//					$this->render('userCreatePhoto'); // one with default image and upload photo link, need to add that default image here.			
			
//		}
	}
}