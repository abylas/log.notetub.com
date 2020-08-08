<?php
Yii::import('zii.widgets.CPortlet');

class UserPhoto extends CPortlet
{
	public function init()
	{
		$profile = Profile::model()->find('user_id=:userID', array(':userID'=>Yii::app()->user->id));
		$this->title=CHtml::link($profile->firstname .' '.$profile->lastname,   //Yii::app()->user->name,
								Yii::app()->createUrl('notes/profile'));
		parent::init();
	}

	protected function renderContent()
	{
//		$picRowExists = Profilepic::model()->exists('user_id=:userID', array(':userID'=>Yii::app()->user->id));
//		if($picRowExists){ // one with photo, and update link in view 
						// should also add a model with the photo to be displayed in this view.
					$model = Profilepic::model()->find('user_id=:userID', array(':userID'=>Yii::app()->user->id));
					$this->render('userUploadPhoto', array(	
					'model'=>$model,
					));			
//		}
//		else {
//					$this->render('userCreatePhoto'); // one with default image and upload photo link, need to add that default image here.			
			
//		}
	}
}