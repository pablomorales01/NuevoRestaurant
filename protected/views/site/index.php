<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<!--<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>-->
<div class="row">
  <div class="col-xs-12 col-sm-2 col-md-3">	<!--Menú -->
	<div class="clearfix">

<ul id="menu" class="ui-menu ui-widget ui-widget-content ui-corner-all" role="menu" tabindex="0" aria-activedescendant="ui-id-18">
	            <li class="ui-menu-item" role="presentation"><a href="#" id="ui-id-17" class="ui-corner-all" tabindex="-1" role="menuitem">Aberdeen</a></li>
	            <li class="ui-menu-item" role="presentation"><a href="#" id="ui-id-18" class="ui-corner-all" tabindex="-1" role="menuitem">Ada</a></li>
	            <li class="ui-menu-item" role="presentation"><a href="#" id="ui-id-19" class="ui-corner-all" tabindex="-1" role="menuitem">Adamsville</a></li>
	            <li class="ui-menu-item" role="presentation"><a href="#" id="ui-id-20" class="ui-corner-all" tabindex="-1" role="menuitem">Addyston</a></li>
	            <li class="ui-menu-item" role="presentation">
	                <a href="#" aria-haspopup="true" id="ui-id-21" class="ui-corner-all" tabindex="-1" role="menuitem"><span class="ui-menu-icon ui-icon ui-icon-carat-1-e"></span>Delphi</a>
	                <ul class="ui-menu ui-widget ui-widget-content ui-corner-all" role="menu" aria-expanded="false" style="display: none; top: 9826px; left: 212px;" aria-hidden="true">
	                    <li class="ui-menu-item" role="presentation"><a href="#" id="ui-id-24" class="ui-corner-all" tabindex="-1" role="menuitem">Ada</a></li>
	                    <li class="ui-menu-item" role="presentation"><a href="#" id="ui-id-25" class="ui-corner-all" tabindex="-1" role="menuitem">Saarland</a></li>
	                    <li class="ui-menu-item" role="presentation"><a href="#" id="ui-id-26" class="ui-corner-all" tabindex="-1" role="menuitem">Salzburg</a></li>
	                </ul>
	            </li>
	            <li class="ui-menu-item" role="presentation"><a href="#" id="ui-id-22" class="ui-corner-all" tabindex="-1" role="menuitem">Saarland</a></li>
	            <li class="ui-menu-item" role="presentation">
	                <a href="#" aria-haspopup="true" id="ui-id-23" class="ui-corner-all" tabindex="-1" role="menuitem"><span class="ui-menu-icon ui-icon ui-icon-carat-1-e"></span>Salzburg</a>
	                <ul class="ui-menu ui-widget ui-widget-content ui-corner-all" role="menu" aria-hidden="true" aria-expanded="false" style="display: none;">
	                    <li class="ui-menu-item" role="presentation">
	                        <a href="#" aria-haspopup="true" id="ui-id-27" class="ui-corner-all" tabindex="-1" role="menuitem"><span class="ui-menu-icon ui-icon ui-icon-carat-1-e"></span>Delphi</a>
	                        <ul class="ui-menu ui-widget ui-widget-content ui-corner-all" role="menu" aria-hidden="true" aria-expanded="false" style="display: none;">
	                            <li class="ui-menu-item" role="presentation"><a href="#" id="ui-id-30" class="ui-corner-all" tabindex="-1" role="menuitem">Ada</a></li>
	                            <li class="ui-menu-item" role="presentation"><a href="#" id="ui-id-31" class="ui-corner-all" tabindex="-1" role="menuitem">Saarland</a></li>
	                            <li class="ui-menu-item" role="presentation"><a href="#" id="ui-id-32" class="ui-corner-all" tabindex="-1" role="menuitem">Salzburg</a></li>
	                        </ul>
	                    </li>
	                    <li class="ui-menu-item" role="presentation">
	                        <a href="?Delphi" aria-haspopup="true" id="ui-id-28" class="ui-corner-all" tabindex="-1" role="menuitem"><span class="ui-menu-icon ui-icon ui-icon-carat-1-e"></span>Delphi</a>
	                        <ul class="ui-menu ui-widget ui-widget-content ui-corner-all" role="menu" aria-hidden="true" aria-expanded="false" style="display: none;">
	                            <li class="ui-menu-item" role="presentation"><a href="#" id="ui-id-33" class="ui-corner-all" tabindex="-1" role="menuitem">Ada</a></li>
	                            <li class="ui-menu-item" role="presentation"><a href="#" id="ui-id-34" class="ui-corner-all" tabindex="-1" role="menuitem">Saarland</a></li>
	                            <li class="ui-menu-item" role="presentation"><a href="#" id="ui-id-35" class="ui-corner-all" tabindex="-1" role="menuitem">Salzburg</a></li>
	                        </ul>
	                    </li>
	                    <li class="ui-menu-item" role="presentation"><a href="#" id="ui-id-29" class="ui-corner-all" tabindex="-1" role="menuitem">Perch</a></li>
	                </ul>
	            </li>
	        </ul>
	    </div>
	    <!--FIN Menú -->
	    </div>
  <div class="col-xs-12 col-sm-8 col-md-8"><section>
	    
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

	    

	    

    </div>
