<div class="form">

<ul>

<? $count = $model;?>

	<li><?php echo $count; ?></li>
	
	<li>
	<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'site-form',
			'enableAjaxValidation'=>false,
	)); ?>
	</li>

	<li>
	<?php 
	$this->widget('zii.widgets.jui.CJuiAutoComplete', array(
        'attribute'=>'username',
        'model'=>$model,
        'sourceUrl'=>array('site/aclist'),
        'name'=>'my_input_name',
        'options'=>array(
        'delay'=>300,
        'minLength'=>1,
        'showAnim'=>'fold',
        'select'=>"js:function(event, ui) {
			top.location = 'index.php?r=user/profile';
        }"),	
        'htmlOptions'=>array(
          'size'=>20,
          'maxlength'=>20,
		),		
	)); ?>

	</li>
	
<?php $this->endWidget(); ?>
	
</ul>		
</div> <!-- form -->




