<?php $this->beginContent('//layouts/main'); ?>

<div class="row"> 
  <div class="col-xs-12 col-sm-6 col-md-8">
  <?php  echo $content;?>
  </div>
  <div class="col-xs-6 col-md-4">
  <br>
    <ul class="nav nav-pills nav-stacked">
        <li><a href="<?php echo Yii::app()->createUrl('comanda/create'); ?>">Ingresar Comanda</a></li>
        <li><a href="<?php echo Yii::app()->createUrl('comanda/admin'); ?>">Administrar comanda</a></li>

  </ul>
  </div>
</div>

<?php $this->endContent(); ?>