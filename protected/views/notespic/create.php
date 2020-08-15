<?php
$this->breadcrumbs=array(
	'notespics'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List notespics', 'url'=>array('index')),
	array('label'=>'Manage notespics', 'url'=>array('admin')),
);
?>

<h1>Upload notes Photo</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>