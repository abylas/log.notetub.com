<?php
$this->breadcrumbs=array(
	'notespic'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List notespic', 'url'=>array('index')),
	array('label'=>'Create notespic', 'url'=>array('create')),
	array('label'=>'Update notespic', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete notespic', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage notespic', 'url'=>array('admin')),
);
?>

<h1>View notespic #<?php echo $model->id; ?></h1>

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
		'notes_id',
	),
)); ?>
