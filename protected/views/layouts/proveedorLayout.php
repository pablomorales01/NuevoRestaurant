<?php $this->beginContent('//layouts/main'); ?>

<div class="row"> 
  <div class="col-xs-12 col-sm-6 col-md-8">
  <?php  echo $content;?>
  </div>
  <div class="col-xs-6 col-md-4">
  <br>
    <ul class="nav nav-pills nav-stacked">
    <li><a href="<?php echo Yii::app()->createUrl('proveedor/create'); ?>">Ingresar proveedor</a></li>
      <li><a href="<?php echo Yii::app()->createUrl('registroComprasMp/create'); ?>">Ingresar compra materia prima</a></li>
      <li><a href="<?php echo Yii::app()->createUrl('registroComprasMp/admin'); ?>">Administrar compras materia prima</a></li>
    <li><a href="<?php echo Yii::app()->createUrl('registroComprasPf/create'); ?>">Ingresar compra producto final</a></li>
    <li><a href="<?php echo Yii::app()->createUrl('registroComprasPf/admin'); ?>">Administrar compras producto final</a></li>    
    
    
  </ul>
  </div>
</div>

<?php $this->endContent(); ?>