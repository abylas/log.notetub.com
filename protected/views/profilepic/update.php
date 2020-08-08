<?php
$this->breadcrumbs=array(
	'Profilepics'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Profilepic', 'url'=>array('index')),
	array('label'=>'Create Profilepic', 'url'=>array('create')),
	array('label'=>'View Profilepic', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Profilepic', 'url'=>array('admin')),
);
?>

<h1>Change Profile Photo</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>