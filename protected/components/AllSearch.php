<?php

Yii::import('zii.widgets.CPortlet');

class AllSearch extends CPortlet
{
	public $title='';

	protected function renderContent()
	{
		
		echo CHtml::beginForm(array('note/searchAll'), 'get', array('style'=> 'inline')) .
        CHtml::textField('item', '', array('placeholder'=> 'Search these notes','style'=>'width:140px;')) .
        CHtml::submitButton('Search') .
        CHtml::endForm('');
        
	}
}