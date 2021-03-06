<?php

Yii::import('zii.widgets.CPortlet');

class TagCloud extends CPortlet
{
	public $title='Top Tags';
	public $maxTags=20;

	protected function renderContent()
	{
		$tags=Tag::model()->findTagWeights($this->maxTags);

		foreach($tags as $tag=>$weight)
		{
			$link=CHtml::link(CHtml::encode($tag), array('notes/tag','tag'=>$tag));
			echo CHtml::tag('span', array(
				'class'=>'tag',
			//	'style'=>"font-size:{$weight}pt",
			), $link)."\n";
		}
	}
}