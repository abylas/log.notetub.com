<?php

Yii::import('zii.widgets.CPortlet');

class Linking extends CPortlet
{
	public function init()
	{
		parent::init();
	}

	protected function renderContent()
	{
		 $this->render('linking');
	}
}