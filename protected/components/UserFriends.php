<?php
Yii::import('zii.widgets.CPortlet');


/**
 * 
 * This class should enable the search for people portlet and show pics of all the friends.
 * @author micks
 *
 */
class UserFriends extends CPortlet
{
	public function init()
	{
		$this->title=CHtml::encode(Yii::app()->user->name."'s Friends");
		parent::init();
	}

	protected function renderContent()
	{	
		// right going for search for people part. let's see if I can lookup something directly first.
		$people_Count = User::model()->count();
		
		 User::model()->friends;
//		$picRowExists = Photo::model()->exists('user_id=:userID', array(':userID'=>Yii::app()->user->id));
//		if($picRowExists){ // one with photo, and update link in view 
//						// should also add a model with the photo to be displayed in this view.
//					$model = Photo::model()->find('user_id=:userID', array(':userID'=>Yii::app()->user->id));
//					$this->render('userUploadPhoto', array(	
//					'model'=>$model,
//					));			
//		}
//		else {
					$this->render('userFriends', array(
					'model'=>$people_Count,					
					)); // one with default image and upload photo link			
			
//		}
	}
}