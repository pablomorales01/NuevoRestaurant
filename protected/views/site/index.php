<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<!--<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>-->
<div class="row">
  <div class="col-xs-12 col-sm-2 col-md-2">	<!--Menú -->
	<div class="clearfix">

<ul id="menu" class="ui-menu ui-widget ui-widget-content ui-corner-all" role="menu" tabindex="0" aria-activedescendant="ui-id-18">
	            <?php foreach ($model as $resto) {  				  	
  				echo '<li><a href="site/resto?nombre='.$resto->RESTONOMBRE.'">';
	            echo $resto->RESTONOMBRE; echo '</a></li>';
	            }
	            ?>
	        </ul>
	    </div>
	    <!--FIN Menú -->
	    </div>
  <div class="col-xs-12 col-sm-8 col-md-10"><section>
	    
	    <article>
	    <!--Slides-->
	    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		  <!-- Indicators -->
		  <ol class="carousel-indicators">
		    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
		    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
		  </ol>

		  <!-- Wrapper for slides -->
		  <div class="carousel-inner">
		    <div class="item active">
		      <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/comida.jpg" class="img-responsive" alt="Responsive image"> <!-- alt = texto-->
		      <div class="carousel-caption">
		        ...
		      </div>
		    </div>
		    <div class="item">
		      <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/penco.jpg" class="img-responsive" alt="Responsive image">
		      <div class="carousel-caption">
		        ...
		      </div>
		    </div>
		    ...
		    <!--<div class="item active">
		      <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/logopenco.jpg" class="img-responsive" alt="Responsive image">
		      <div class="carousel-caption">
		        ...
		      </div>
		    </div>-->
		  </div>

		  <!-- Controls -->
		  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
		    <span class="glyphicon glyphicon-chevron-left"></span>
		  </a>
		  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
		    <span class="glyphicon glyphicon-chevron-right"></span>
		  </a>
		</div>
		</article>
	    <!--FIN Slides-->
	    </section>
	    </div>
</div>
