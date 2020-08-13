<?php
$this->breadcrumbs=array(
	'notespic'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List notespic', 'url'=>array('index')),
	array('label'=>'Create notespic', 'url'=>array('create')),
	array('label'=>'View notespic', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage notespic', 'url'=>array('admin')),
);
?>

<h1>Change notespic</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>