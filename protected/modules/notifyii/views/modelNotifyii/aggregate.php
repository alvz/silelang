<?php
/* @var $this NotifyiiController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
    'Notifyii',
);

$this->menu=array(
    array('label'=>'Create Notifyii', 'url'=>array('create')),
    array('label'=>'Manage Notifyii', 'url'=>array('admin')),
);
?>

<h1>List Notifications</h1>


<?php $this->widget('zii.widgets.CListView', array(
    'dataProvider' => $dataProvider,
    'itemView' => '_view_aggregate',
)); ?>
