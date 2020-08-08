<?php

Yii::import('zii.widgets.CPortlet');

class UserReview extends CPortlet
{
	public function init()
	{
		$this->title=CHtml::encode("Flashback");
		parent::init();
	}

	protected function renderContent()
	{
		$this->render('userReview');
	}
}