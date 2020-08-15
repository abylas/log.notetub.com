———————————————————————————————————————
<div class="notes">
    <div class="name">
        <?php
        echo "<br/>\n";

        $this->beginWidget('CMarkdown'
        );

        echo nl2br($data->name);
        $this->endWidget();
        ?>
    </div>
    <div class="nav">
        <b>Tags:</b>
        <?php echo implode(', ', $data->tagLinks);

        echo "<br/>\n";

        ?>
        <br/>


        <?php echo CHtml::link('Permalink', $data->url);

        echo "<br/>\n";
        echo "<br/>\n";

        echo date("F jS, Y,  H:m:s", strtotime($data->create_time));;

        ?>


        <?php
        $image_id=null;
        if($notespicmodel!= null)
        {// update
            $img = $notespicmodel->path .'/'. $notespicmodel->name.'.'.$notespicmodel->extension;
            $image_id=$notespicmodel->id;
        }
        else {				// create
            $img = "images/fish_2.jpg";  //"files/images/profilePic/default/def.png";
        }
        ?>

        <a href ="	<?php  if($image_id!=null){

            echo CHtml::encode(Yii::app()->createUrl('notespic/update', array("id"=>$image_id)));
        }
        else{
            echo CHtml::encode(Yii::app()->createUrl('notespic/create'));
        }?>
		">
            <?php echo CHtml::tag("img", array(
                "src"=>$img,
            ));
            ?>

        </a>




        <!--        --><?php //echo CHtml::link("Comments ({$data->commentCount})",$data->url.'#comments'); ?><!-- |-->
<!--        Last updated on --><?php //echo date('F j, Y',$data->update_time); ?>
    </div>
</div>

<br>
<br>

———————————————————————————————————————-

