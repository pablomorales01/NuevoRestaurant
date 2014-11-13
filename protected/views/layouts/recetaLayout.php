<?php $this->beginContent('//layouts/main'); ?>

<div class="row"> 
  <div class="col-xs-12 col-sm-6 col-md-8">Primero
  <?php  echo $content;?>
  </div>
  <div class="col-xs-6 col-md-4">Segundo
    <ul class="nav nav-pills nav-stacked">
        <li><a href="<?php echo Yii::app()->createUrl('receta/create'); ?>">Ingresar Receta</a></li>
        <li><a href="<?php echo Yii::app()->createUrl('receta/admin'); ?>">Administrar Receta</a></li>
        <li><a href="<?php echo Yii::app()->createUrl('receta/index'); ?>">Lista de Recetas</a></li>
  </ul>
  </div>
</div>

<?php $this->endContent(); ?>