<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'notespic-form',
    'enableAjaxValidation'=>false,
    'htmlOptions' => array('enctype' => 'multipart/form-data'), // ADD THIS
)); ?>

 
<?php echo $form->errorSummary($model); ?>
    
<div class="row">
<?php echo $form->labelEx($model,'uploadedFile'); ?>
<?php echo $form->fileField($model,'uploadedFile'); ?>
<?php echo $form->error($model,'uploadedFile'); ?>
</div>

 <div class="row submit">
        <?php echo CHtml::submitButton('Upload'); ?>
    </div>
     
<?php $this->endWidget(); ?>



</div><!-- form -->