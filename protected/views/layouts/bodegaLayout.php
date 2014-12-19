<?php $this->beginContent('//layouts/main'); ?>

<div class="row"> 
  <div class="col-xs-12 col-sm-6 col-md-8">Primero
  <?php  echo $content;?>
  </div>
  <div class="col-xs-6 col-md-4">Segundo
    <ul class="nav nav-pills nav-stacked">
    <li><a href="<?php echo Yii::app()->createUrl('bodega/create'); ?>">Ingresar bodega</a></li>
    <li><a href="<?php echo Yii::app()->createUrl('bodega/admin'); ?>">Administrar bodegas</a></li>
      <li><a href="<?php echo Yii::app()->createUrl('materiaPrima/admin'); ?>">Materia prima</a></li>
    <li><a href="<?php echo Yii::app()->createUrl('productoVenta/admin'); ?>">Productos</a></li>
    
    
  </ul>
  </div>
</div>

<?php $this->endContent(); ?>