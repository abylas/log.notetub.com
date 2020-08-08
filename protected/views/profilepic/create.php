<?php
$this->breadcrumbs=array(
	'Profilepics'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Profilepic', 'url'=>array('index')),
	array('label'=>'Manage Profilepic', 'url'=>array('admin')),
);
?>

<h1>Upload Profile Photo</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>