<?php

Yii::import('zii.widgets.CPortlet');

class All extends CPortlet
{
	public function init()
	{
		parent::init();
	}

	protected function renderContent()
	{
		 $this->render('all');
	}
}