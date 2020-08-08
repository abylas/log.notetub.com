<?php

Yii::import('zii.widgets.CPortlet');

class OwnSearch extends CPortlet
{
	public $title='';

	protected function renderContent()
	{
		
		echo CHtml::beginForm(array('note/searchOwn'), 'get', array('style'=> 'inline')) .
        CHtml::textField('item', '', array('placeholder'=> 'Search own notes','style'=>'width:140px;')) .
        CHtml::submitButton('Search') .
        CHtml::endForm('');
        
	}
}