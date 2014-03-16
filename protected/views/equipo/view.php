<?php
/* @var $this EquipoController */
/* @var $model Equipo */

$this->breadcrumbs=array(
	'Equipos'=>array('index'),
	$model->id_equipo,
);
$this->pageTitle=Yii::app()->name.' - Ver Equipo';

$this->menu = array(
        array(
        'label' => 'Taxista',
        'url' => '#',
        'linkOptions ' => array('encode' => false, 'class' => 'dropdown-toggle', 'data-toggle' => 'dropdown'),
        'itemOptions ' => array('class' => 'dropdown'),
        'submenuOptions ' => array('class' => 'dropdown-menu'),
        'items' => array(
        array('label'=>'Registrar Taxista', 'url'=>array('usuario/create')),
	array('label'=>'Búsqueda Avanzada', 'url'=>array('usuario/search')),
            )
        ),
        array(
        'label' => 'Equipo',
        'url' => '#',
        'linkOptions ' => array('encode' => false, 'class' => 'dropdown-toggle', 'data-toggle' => 'dropdown'),
        'itemOptions ' => array('class' => 'dropdown'),
        'submenuOptions ' => array('class' => 'dropdown-menu'),
        'items' => array(
        array('label'=>'Registrar Equipo', 'url'=>array('equipo/create')),
        array('label'=>'Editar Equipo', 'url'=>array('update', 'id'=>$model->id_equipo)),
	array('label'=>'Administrar Equipo', 'url'=>array('equipo/admin')),
 
            )
        ),
        array(
        'label' => 'Reporte',
        'url' => '#',
        'linkOptions ' => array('encode' => false, 'class' => 'dropdown-toggle', 'data-toggle' => 'dropdown'),
        'itemOptions ' => array('class' => 'dropdown'),
        'submenuOptions ' => array('class' => 'dropdown-menu'),
        'items' => array(
        array('label'=>'Administrar Reporte', 'url'=>array('solicitud/admin')),
            )
        ),
    );
?>

<h1>View Equipo #<?php echo $model->id_equipo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_equipo',
		'modelo_equipo',
		'marca_equipo',
		'fecha_compra',
		'activo',
	),
)); ?>
