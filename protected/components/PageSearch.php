<?php

Yii::import('zii.widgets.CPortlet');

class PageSearch extends CPortlet
{
	public $title='';

	public $strangerId;
	
	protected function renderContent()
	{
		$strangerModel = User::model()->find('id=:userID', array(':userID'=>$this->strangerId));
		
		echo CHtml::beginForm(array('note/searchPage'), 'get', array('style'=> 'inline')) .
        CHtml::textField('item', '', array('placeholder'=> 'Search '.$strangerModel->username. ' \'s Notes','style'=>'width:140px;')) .
        CHtml::submitButton('Search') .
        CHtml::endForm('');
        
	}
}