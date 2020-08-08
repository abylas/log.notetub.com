


<?php
$img = "images/mln4.jpg";

echo CHtml::tag("img", array(
				"src"=>$img,
			));

?>

<ul>
	<li><?php echo CHtml::link('Last 3 days',Yii::app()->createUrl('note/review', array("time"=>'3 Days'))); ?></li>
	<li><?php echo CHtml::link('Last 1 Week',Yii::app()->createUrl('note/review', array("time"=>'1 Week'))); ?></li>
	<li><?php echo CHtml::link('Last 2 Weeks',Yii::app()->createUrl('note/review', array("time"=>'2 Weeks'))); ?></li>
	<li><?php echo CHtml::link('Last 1 Month',Yii::app()->createUrl('note/review', array("time"=>'1 Month'))); ?></li>
	<li><?php echo CHtml::link('Last 3 months',Yii::app()->createUrl('note/review', array("time"=>'3 months'))); ?></li>
	<li><?php //echo CHtml::link('Last 1 Year',Yii::app()->createUrl('note/review', array("time"=>'1 Year'))); ?></li>
</ul>