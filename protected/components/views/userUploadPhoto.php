
	<?php 
	$image_id=null;
			if($model!= null)
			{// update
				$img = $model->path .'/'. $model->name.'.'.$model->extension;
				$image_id=$model->id;					
			}
			else {				// create
			$img = "images/fish_2.jpg";  //"files/images/profilePic/default/def.png";
			}
			?>

		<a href ="	<?php  if($image_id!=null){
			
			echo CHtml::encode(Yii::app()->createUrl('profilepic/update', array("id"=>$image_id)));
		}
		else{
			echo CHtml::encode(Yii::app()->createUrl('profilepic/create'));			
		}?>
		">									
		<?php echo CHtml::tag("img", array(
				"src"=>$img,
			));
			?>
		
		</a>	
		