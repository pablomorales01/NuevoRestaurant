<?php $this->beginContent('//layouts/main'); ?>

<div class="row"> 
  <div class="col-xs-12 col-sm-6 col-md-8">Primero
  <?php  echo $content;?>
  </div>
  <div class="col-xs-6 col-md-4">Segundo
    <ul class="nav nav-pills nav-stacked">
        <li><a href="<?php echo Yii::app()->createUrl('venta/create'); ?>">Ingresar Venta</a></li>
        <li><a href="<?php echo Yii::app()->createUrl('venta/admin'); ?>">Administrar Venta</a></li>
        <li><a href="<?php echo Yii::app()->createUrl('venta/index'); ?>">Lista de ventas</a></li>
        <li><a href="<?php echo Yii::app()->createUrl('mesa/admin'); ?>">Mesas</a></li>

        <!-- prueba de bitches-->
  </ul>
  </div>
</div>

<?php $this->endContent(); ?>