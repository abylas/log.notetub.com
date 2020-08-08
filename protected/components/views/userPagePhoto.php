<?php 
	$image_id=null;
			if($model!= null)
			{// update
				$img = $model->path .'/'. $model->name.'.'.$model->extension;
				$image_id=$model->id;					
			}
			else {				// create
			$img = "images/fish_2.jpg";  //"files/images/profilePic/default/def.png";
			}?>
	

			<a href ="	<?php  echo Yii::app()->createUrl('note/page', array("id"=>$strangerId));?>
										">  
		<?php 		
		echo CHtml::tag("img", array(
				"src"=>$img,
		));
						echo "<br>";
		
						?>
		</a>

			
			
			
			
			