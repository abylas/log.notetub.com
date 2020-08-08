<?php

Yii::import('zii.widgets.CPortlet');

class SearchPeople extends CPortlet
{
	public $title='';

	protected function renderContent()
	{
		
		echo CHtml::beginForm(array('note/searchPeople'), 'get', array('style'=> 'inline')) .
        CHtml::textField('item', '', array('placeholder'=> 'Find people','style'=>'width:140px;')) .
        CHtml::submitButton('Find People') .
        CHtml::endForm('');
        
	}
}