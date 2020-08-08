<?php
$this->breadcrumbs=array(
	'Profilepics'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Profilepic', 'url'=>array('index')),
	array('label'=>'Create Profilepic', 'url'=>array('create')),
	array('label'=>'Update Profilepic', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Profilepic', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Profilepic', 'url'=>array('admin')),
);
?>

<h1>View Profilepic #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'extension',
		'path',
		'filename',
		'byteSize',
		'mimeType',
		'created',
		'user_id',
	),
)); ?>
