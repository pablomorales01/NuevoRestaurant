<?php
/* @var $this BodegaController */
/* @var $model Bodega */

$this->breadcrumbs=array(
	'productos'=>array('index'),
	'Manage',
);


Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#productos-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar productos</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'productos-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'producto',
		'bodega',
		'tipo',
         array(
            'class' => 'CButtonColumn',
            'template'=>'{view} {update} {delete}', // botones a mostrar
            'buttons'=>array(
			'update' => array( //botón para la acción nueva
		   // 'label'=>'Editar', // titulo del enlace del botón nuevo
		    'url'=> 'Yii::app()->createUrl("bodega/redirigir",array("id"=>$data->id,"producto"=>$data->producto,"tipo"=>$data->tipo,"accion"=>"editar"))', //url de la acción nueva
		    //'visible'=>'($data->fecha_entrega===null)?true:false;'
		    ),
		    'view' => array( //botón para la acción nueva
		  //  'label'=>'Ver', // titulo del enlace del botón nuevo
		    'url'=> 'Yii::app()->createUrl("bodega/redirigir",array("id"=>$data->id,"producto"=>$data->producto,"tipo"=>$data->tipo,"accion"=>"ver"))', //url de la acción nueva
		    //'visible'=>'($data->fecha_entrega===null)?true:false;'
		    ),
		    'delete' => array( //botón para la acción nueva
		   // 'label'=>'Eliminar', // titulo del enlace del botón nuevo
		    'url'=> 'Yii::app()->createUrl("bodega/redirigir",array("id"=>$data->id,"producto"=>$data->producto,"tipo"=>$data->tipo,"accion"=>"eliminar"))', //url de la acción nueva
		    //'visible'=>'($data->fecha_entrega===null)?true:false;'
		    ),
			),
          ),
	),
));
 ?>

