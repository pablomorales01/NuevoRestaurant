<?php $this->beginContent('//layouts/main'); ?>

<div class="row"> 
  <div class="col-xs-12 col-sm-6 col-md-8">Primero
  <?php  echo $content;?>
  </div>
  <div class="col-xs-6 col-md-4">Segundo
    <ul class="nav nav-pills nav-stacked">
    <!--ingeso de bodega-->
        <li><a href="<?php echo Yii::app()->createUrl('bodega/create'); ?>">Ingresar Bodega</a></li>
    <!-- ingreso producto final -->
    <!-- ingreso materia prima -->
      <li><a href="<?php echo Yii::app()->createUrl(''); ?>">Ingresar producto</a></li>
    <!-- ingreso tipo de materia prima -->
    <li><a href="<?php echo Yii::app()->createUrl('tipoMateriaPrima/create'); ?>">Ingresar un tipo de materia prima</a></li>
    
  </ul>
  </div>
</div>

<?php $this->endContent(); ?>