<?php 


$imgSearch = "images/search.jpg";

echo CHtml::tag("img", array(
				"src"=>$imgSearch,
			));


?>

<ul>
	<li><?php echo CHtml::link('Search',Yii::app()->createUrl('notes/review', array("time"=>'3 Days'))); ?></li>
</ul>