<?php

Yii::import('zii.widgets.CPortlet');

class UserSearch extends CPortlet
{
	public function init()
	{
		$this->title=CHtml::encode("Search Notes");
		parent::init();
	}

	protected function renderContent()
	{
		$this->render('userSearch');
	}
}