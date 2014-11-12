<?php $this->beginContent('//layouts/main'); ?>

<div class="row"> 
  <div class="col-xs-12 col-sm-6 col-md-8">Primero
  <?php  echo $content;?>
  </div>
  <div class="col-xs-6 col-md-4">Segundo
    <ul class="nav nav-pills nav-stacked">
        <li><a href="<?php echo Yii::app()->createUrl('bodega/create'); ?>">Ingresar Bodega</a></li>
        <li><a href="<?php echo Yii::app()->createUrl('bodega/admin'); ?>">Administrar Bodegas</a></li>
        <li><a href="<?php echo Yii::app()->createUrl('bodega/index'); ?>">Lista de Bodegas</a></li>
        <li><a href="<?php echo Yii::app()->createUrl('materiaPrima/create'); ?>">Ingresar Materia Prima</a></li>
  </ul>
  </div>
</div>

<?php $this->endContent(); ?>