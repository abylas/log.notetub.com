<?php $this->beginContent('//layouts/main'); ?>
<div class="container">
	<div class="span-6">
		<div id="sidebar">
            <?php
            $this->beginWidget('zii.widgets.CPortlet', array(
                'title'=>'Operations',
            ));
            $this->widget('zii.widgets.CMenu', array(
                'items'=>$this->menu,
                'htmlOptions'=>array('class'=>'operations'),
            ));
            $this->endWidget();
            ?>
<!--				--><?php //if(!Yii::app()->user->isGuest) $this->widget('UserPhoto'); ?>
				<?php // if(!Yii::app()->user->isGuest) $this->widget('UserFriends'); ?>
		 		
		 		<?php  // if(!Yii::app()->user->isGuest) $this->widget('SearchBlock'); ?>
				 <?php  // if(!Yii::app()->user->isGuest) $this->widget('OwnSearch'); ?>
		 		 <?php  //if(!Yii::app()->user->isGuest) $this->widget('UserSearch'); ?>
				 <?php  //if(!Yii::app()->user->isGuest) $this->widget('UserReview'); ?>
			 <?php  // if(!Yii::app()->user->isGuest) $this->widget('TagCloud', array(
        			// 'maxTags'=>Yii::app()->params['tagCloudCount'],
    		// ));  ?> 
		</div><!-- sidebar -->
	</div>
	<div id="content" class="span-16">
		<?php echo $content; ?>
	</div><!-- content -->
</div>
<?php $this->endContent(); ?>
