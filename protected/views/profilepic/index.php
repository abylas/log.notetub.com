<?php
$this->breadcrumbs=array(
	'Profilepics',
);

$this->menu=array(
	array('label'=>'Create Profilepic', 'url'=>array('create')),
	array('label'=>'Manage Profilepic', 'url'=>array('admin')),
);
?>

<h1>Profilepics</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
