<?php

Yii::import('zii.widgets.CPortlet');

class SearchBlock extends CPortlet
{
	public $title='';

	protected function renderContent()
	{
		
		echo CHtml::beginForm(array('search/search'), 'get', array('style'=> 'inline')) .
        CHtml::textField('q', '', array('placeholder'=> 'search...','style'=>'width:140px;')) .
        CHtml::submitButton('Search') .
        CHtml::endForm('');

        
		 echo CHtml::beginForm(array('search/create')) .
        CHtml::submitButton('Update Search Index') .
        CHtml::endForm('');
		
        
        
	}
}