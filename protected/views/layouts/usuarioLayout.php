<?php $this->beginContent('//layouts/main'); ?>

<div class="row"> 
  <div class="col-xs-12 col-sm-6 col-md-8">Primero
  <?php  echo $content;?>
  </div>
  <div class="col-xs-6 col-md-4">Segundo
    <ul class="nav nav-pills nav-stacked">
        <li><a href="<?php echo Yii::app()->createUrl('Usuario/create'); ?>">Ingresar Usuario</a></li>
        <li><a href="<?php echo Yii::app()->createUrl('Usuario/admin'); ?>">Administrar Usuario</a></li>
        <li><a href="<?php echo Yii::app()->createUrl('Usuario/index'); ?>">Ver Usuarios</a></li>
        <li><a href="<?php echo Yii::app()->createUrl('Tiporol/admin'); ?>">Ver Roles</a></li>
        <li><a href="<?php echo Yii::app()->createUrl('restaurant/admin'); ?>">Ver Restaurantes</a></li>
  </ul>

  <?php  
  //Menu General
/*
  $this->menu=array(
	array('label'=>'Lista Usuario', 'url'=>array('index')),
	array('label'=>'Administrar Usuario', 'url'=>array('admin')),
  array('label'=>'Crear Usuario', 'url'=>array('create')),
	);*/
  ?>
  </div>
</div>

<?php $this->endContent(); ?>