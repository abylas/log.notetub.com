<?php
$this->breadcrumbs=array(
	'notespic',
);

$this->menu=array(
	array('label'=>'Create notespic', 'url'=>array('create')),
	array('label'=>'Manage notespic', 'url'=>array('admin')),
);
?>

<h1>Notespic</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
