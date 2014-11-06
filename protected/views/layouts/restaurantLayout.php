<?php $this->beginContent('//layouts/main'); ?>

<div class="row"> 
  <div class="col-xs-12 col-sm-6 col-md-8">Primero
  <?php  echo $content;?>
  </div>
  <div class="col-xs-6 col-md-4">Segundo
    <ul class="nav nav-pills nav-stacked">
        <li><a href="<?php echo Yii::app()->createUrl('restaurant/create'); ?>">Ingresar Restaurant</a></li>
        <li><a href="<?php echo Yii::app()->createUrl('restaurant/admin'); ?>">Administrar Restaurant</a></li>
        <li><a href="<?php echo Yii::app()->createUrl('restaurant/index'); ?>">Lista de Restaurantes</a></li>
  </ul>
  </div>
</div>

<?php $this->endContent(); ?>