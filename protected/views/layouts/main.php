<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->
    <!--<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.css.map" />-->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.css" />
	<!--<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/jquery-ui-1.10.3.custom.css">-->

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>

</head>
<body>

<div class="container" id="page">
	<div id="header">
		<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/logopenco.png" width="350" height="150">
	</div><!-- header -->

	<!--Nuevo Menú-->

	<?php
    if(Yii::app()->user->name == 'Super administrador')
    {
        $this->widget('bootstrap.widgets.BsNavbar', array(
    'collapse' => true,
    'brandLabel' => BsHtml::icon(BsHtml::GLYPHICON_HOME),
    'brandUrl' => Yii::app()->homeUrl,
    'items' => array(

        //crenado botones de al lado del Home
        array(  'class' => 'bootstrap.widgets.BsNav',
                'type' => 'navbar',
                'activateParents' => true,
                'items' => array(
                
                array('label' => 'Restaurant', 'url' => array('/Restaurant/admin'), 'icon' => BsHtml::GLYPHICON_CUTLERY
                        ),
                array('label' => 'Imagen', 'url' => array('/imagen/create'), 'icon' => BsHtml::GLYPHICON_PICTURE
                    )
                //Final del array items.
                )
                //Final del array de crear Botones.
                ),

        array(  'class' => 'bootstrap.widgets.BsNav',
                'type' => 'navbar',
                'activateParents' => true,
                'items' => array(

                array('label' => 'Perfil', 'url' => array('/Usuario/perfil/'.Yii::app()->user->ID), 'icon' => BsHtml::GLYPHICON_USER
                        ),                
                array('label' => 'Acceso a usuarios', 'url' => array('/site/login'),
                    'pull' => BsHtml::NAVBAR_NAV_PULL_RIGHT,
                    'icon' => BsHtml::GLYPHICON_LOG_IN,
                    'visible' => Yii::app()->user->isGuest
                ),
                array('label' => 'Salir (' . Yii::app()->user->name . ')',
                    'pull' => BsHtml::NAVBAR_NAV_PULL_RIGHT,
                    'url' => array('/site/logout'),
                    'icon' => BsHtml::GLYPHICON_LOG_OUT,
                    'visible' => !Yii::app()->user->isGuest
                )
            ),
            'htmlOptions' => array(
                'pull' => BsHtml::NAVBAR_NAV_PULL_RIGHT
                )
            )
        )
    ));
    }
    else if(Yii::app()->user->name == 'Administrador')
    {
    $restaurant = Restaurant::model()->findByAttributes(array('RESTO_ID'=>Yii::app()->user->RESTAURANT)); 
    echo '<h1 align="right">Restaurant '.$restaurant->RESTONOMBRE.'</h1>';
    $this->widget('bootstrap.widgets.BsNavbar', array(
    'collapse' => true,
    'brandLabel' => BsHtml::icon(BsHtml::GLYPHICON_HOME),
    'brandUrl' => Yii::app()->homeUrl,
    'items' => array(

        //crenado botones de al lado del Home
        array(  'class' => 'bootstrap.widgets.BsNav',
                'type' => 'navbar',
                'activateParents' => true,
                'items' => array(
                array('label' => 'Bodega', 'url' => array('/Bodega/admin'), 'icon' => BsHtml::GLYPHICON_SHOPPING_CART
                        ),
                array('label' => 'Caja', 'url' => array('/venta/admin'), 'icon' => BsHtml::GLYPHICON_USD
                        ),
                array('label' => 'Cocina', 'url' => array('/receta/admin'), 'icon' => BsHtml::GLYPHICON_GLASS
                        ),
                array('label' => 'Garzón', 'url' => array('/comanda/admin'), 'icon' => BsHtml::GLYPHICON_LIST_ALT
                        ),
                array('label' => 'Compras', 'url' => array('/proveedor/admin'), 'icon' => BsHtml::GLYPHICON_BRIEFCASE
                        ),

                //Final del array items.
                )
                //Final del array de crear Botones.
                ),

        array(  'class' => 'bootstrap.widgets.BsNav',
                'type' => 'navbar',
                'activateParents' => true,
                'items' => array(

                array('label' => 'Perfil', 'url' => array('/Usuario/perfil/'.Yii::app()->user->ID), 'icon' => BsHtml::GLYPHICON_USER
                        ),                
                array('label' => 'Acceso a usuarios', 'url' => array('/site/login'),
                    'pull' => BsHtml::NAVBAR_NAV_PULL_RIGHT,
                    'icon' => BsHtml::GLYPHICON_LOG_IN,
                    'visible' => Yii::app()->user->isGuest
                ),
                array('label' => 'Salir (' . Yii::app()->user->name . ')',
                    'pull' => BsHtml::NAVBAR_NAV_PULL_RIGHT,
                    'url' => array('/site/logout'),
                    'icon' => BsHtml::GLYPHICON_LOG_OUT,
                    'visible' => !Yii::app()->user->isGuest
                )
            ),
            'htmlOptions' => array(
                'pull' => BsHtml::NAVBAR_NAV_PULL_RIGHT
                )
            )
        )
    ));
    }
    else if(Yii::app()->user->name == 'Bodega')
    {
    $restaurant = Restaurant::model()->findByAttributes(array('RESTO_ID'=>Yii::app()->user->RESTAURANT)); 
    echo '<h1 align="right">Restaurant '.$restaurant->RESTONOMBRE.'</h1>';
        $this->widget('bootstrap.widgets.BsNavbar', array(
    'collapse' => true,
    'brandLabel' => BsHtml::icon(BsHtml::GLYPHICON_HOME),
    'brandUrl' => Yii::app()->homeUrl,
    'items' => array(

        //crenado botones de al lado del Home
        array(  'class' => 'bootstrap.widgets.BsNav',
                'type' => 'navbar',
                'activateParents' => true,
                'items' => array(
                array('label' => 'Bodega', 'url' => array('/Bodega/admin'), 'icon' => BsHtml::GLYPHICON_SHOPPING_CART
                        ),

                //Final del array items.
                )
                //Final del array de crear Botones.
                ),

        array(  'class' => 'bootstrap.widgets.BsNav',
                'type' => 'navbar',
                'activateParents' => true,
                'items' => array(

                array('label' => 'Perfil', 'url' => array('/Usuario/perfil/'.Yii::app()->user->ID), 'icon' => BsHtml::GLYPHICON_USER
                        ),                
                array('label' => 'Acceso a usuarios', 'url' => array('/site/login'),
                    'pull' => BsHtml::NAVBAR_NAV_PULL_RIGHT,
                    'icon' => BsHtml::GLYPHICON_LOG_IN,
                    'visible' => Yii::app()->user->isGuest
                ),
                array('label' => 'Salir (' . Yii::app()->user->name . ')',
                    'pull' => BsHtml::NAVBAR_NAV_PULL_RIGHT,
                    'url' => array('/site/logout'),
                    'icon' => BsHtml::GLYPHICON_LOG_OUT,
                    'visible' => !Yii::app()->user->isGuest
                )
            ),
            'htmlOptions' => array(
                'pull' => BsHtml::NAVBAR_NAV_PULL_RIGHT
                )
            )
        )
    ));
    }
    else if(Yii::app()->user->name == 'Cocina')
    {
    $restaurant = Restaurant::model()->findByAttributes(array('RESTO_ID'=>Yii::app()->user->RESTAURANT)); 
    echo '<h1 align="right">Restaurant '.$restaurant->RESTONOMBRE.'</h1>';
        $this->widget('bootstrap.widgets.BsNavbar', array(
    'collapse' => true,
    'brandLabel' => BsHtml::icon(BsHtml::GLYPHICON_HOME),
    'brandUrl' => Yii::app()->homeUrl,
    'items' => array(

        //crenado botones de al lado del Home
        array(  'class' => 'bootstrap.widgets.BsNav',
                'type' => 'navbar',
                'activateParents' => true,
                'items' => array(
                
                array('label' => 'Cocina', 'url' => array('/receta/admin'), 'icon' => BsHtml::GLYPHICON_GLASS
                        ),

                //Final del array items.
                )
                //Final del array de crear Botones.
                ),

        array(  'class' => 'bootstrap.widgets.BsNav',
                'type' => 'navbar',
                'activateParents' => true,
                'items' => array(

                array('label' => 'Perfil', 'url' => array('/Usuario/perfil/'.Yii::app()->user->ID), 'icon' => BsHtml::GLYPHICON_USER
                        ),                
                array('label' => 'Acceso a usuarios', 'url' => array('/site/login'),
                    'pull' => BsHtml::NAVBAR_NAV_PULL_RIGHT,
                    'icon' => BsHtml::GLYPHICON_LOG_IN,
                    'visible' => Yii::app()->user->isGuest
                ),
                array('label' => 'Salir (' . Yii::app()->user->name . ')',
                    'pull' => BsHtml::NAVBAR_NAV_PULL_RIGHT,
                    'url' => array('/site/logout'),
                    'icon' => BsHtml::GLYPHICON_LOG_OUT,
                    'visible' => !Yii::app()->user->isGuest
                )
            ),
            'htmlOptions' => array(
                'pull' => BsHtml::NAVBAR_NAV_PULL_RIGHT
                )
            )
        )
    ));
    }
    else if(Yii::app()->user->name == 'Cajero')
    {
    $restaurant = Restaurant::model()->findByAttributes(array('RESTO_ID'=>Yii::app()->user->RESTAURANT)); 
    echo '<h1 align="right">Restaurant '.$restaurant->RESTONOMBRE.'</h1>';

    $this->widget('bootstrap.widgets.BsNavbar', array(
    'collapse' => true,
    'brandLabel' => BsHtml::icon(BsHtml::GLYPHICON_HOME),
    'brandUrl' => Yii::app()->homeUrl,
    'items' => array(

        //crenado botones de al lado del Home
        array(  'class' => 'bootstrap.widgets.BsNav',
                'type' => 'navbar',
                'activateParents' => true,
                'items' => array(
                
                array('label' => 'Caja', 'url' => array('/venta/admin'), 'icon' => BsHtml::GLYPHICON_USD
                        )
                //Final del array items.
                )
                //Final del array de crear Botones.
                ),

        array(  'class' => 'bootstrap.widgets.BsNav',
                'type' => 'navbar',
                'activateParents' => true,
                'items' => array(

                array('label' => 'Perfil', 'url' => array('/Usuario/perfil/'.Yii::app()->user->ID), 'icon' => BsHtml::GLYPHICON_USER
                        ),                
                array('label' => 'Acceso a usuarios', 'url' => array('/site/login'),
                    'pull' => BsHtml::NAVBAR_NAV_PULL_RIGHT,
                    'icon' => BsHtml::GLYPHICON_LOG_IN,
                    'visible' => Yii::app()->user->isGuest
                ),
                array('label' => 'Salir (' . Yii::app()->user->name . ')',
                    'pull' => BsHtml::NAVBAR_NAV_PULL_RIGHT,
                    'url' => array('/site/logout'),
                    'icon' => BsHtml::GLYPHICON_LOG_OUT,
                    'visible' => !Yii::app()->user->isGuest
                )
            ),
            'htmlOptions' => array(
                'pull' => BsHtml::NAVBAR_NAV_PULL_RIGHT
                )
            )
        )
    ));
    }
    else if(Yii::app()->user->name == 'Garzón')
    {
    $restaurant = Restaurant::model()->findByAttributes(array('RESTO_ID'=>Yii::app()->user->RESTAURANT)); 
    echo '<h1 align="right">Restaurant '.$restaurant->RESTONOMBRE.'</h1>';

    $this->widget('bootstrap.widgets.BsNavbar', array(
    'collapse' => true,
    'brandLabel' => BsHtml::icon(BsHtml::GLYPHICON_HOME),
    'brandUrl' => Yii::app()->homeUrl,
    'items' => array(

        //crenado botones de al lado del Home
        array(  'class' => 'bootstrap.widgets.BsNav',
                'type' => 'navbar',
                'activateParents' => true,
                'items' => array(
                array('label' => 'Garzón', 'url' => array('/comanda/admin'), 'icon' => BsHtml::GLYPHICON_LIST_ALT
                        ),

                //Final del array items.
                )
                //Final del array de crear Botones.
                ),

        array(  'class' => 'bootstrap.widgets.BsNav',
                'type' => 'navbar',
                'activateParents' => true,
                'items' => array(

                array('label' => 'Perfil', 'url' => array('/Usuario/perfil/'.Yii::app()->user->ID), 'icon' => BsHtml::GLYPHICON_USER
                        ),                
                array('label' => 'Acceso a usuarios', 'url' => array('/site/login'),
                    'pull' => BsHtml::NAVBAR_NAV_PULL_RIGHT,
                    'icon' => BsHtml::GLYPHICON_LOG_IN,
                    'visible' => Yii::app()->user->isGuest
                ),
                array('label' => 'Salir (' . Yii::app()->user->name . ')',
                    'pull' => BsHtml::NAVBAR_NAV_PULL_RIGHT,
                    'url' => array('/site/logout'),
                    'icon' => BsHtml::GLYPHICON_LOG_OUT,
                    'visible' => !Yii::app()->user->isGuest
                )
            ),
            'htmlOptions' => array(
                'pull' => BsHtml::NAVBAR_NAV_PULL_RIGHT
                )
            )
        )
    ));
    }
    else {
        $this->widget('bootstrap.widgets.BsNavbar', array(
    'collapse' => true,
    'brandLabel' => BsHtml::icon(BsHtml::GLYPHICON_HOME),
    'brandUrl' => Yii::app()->homeUrl,
    'items' => array(

        //crenado botones de al lado del Home
        array(  'class' => 'bootstrap.widgets.BsNav',
                'type' => 'navbar',
                'activateParents' => true,
                'items' => array(

                //Final del array items.
                )
                //Final del array de crear Botones.
                ),

        array(  'class' => 'bootstrap.widgets.BsNav',
                'type' => 'navbar',
                'activateParents' => true,
                'items' => array(
                
                array('label' => 'Acceso a usuarios', 'url' => array('/site/login'),
                    'pull' => BsHtml::NAVBAR_NAV_PULL_RIGHT,
                    'icon' => BsHtml::GLYPHICON_LOG_IN,
                    'visible' => Yii::app()->user->isGuest
                ),
                array('label' => 'Salir (' . Yii::app()->user->name . ')',
                    'pull' => BsHtml::NAVBAR_NAV_PULL_RIGHT,
                    'url' => array('/site/logout'),
                    'icon' => BsHtml::GLYPHICON_LOG_OUT,
                    'visible' => !Yii::app()->user->isGuest
                )
            ),
            'htmlOptions' => array(
                'pull' => BsHtml::NAVBAR_NAV_PULL_RIGHT
                )
            )
        )
    ));
    }

?> <!--Fin de Todos los Menú-->
    

	<!--Fin Nuevo Menú-->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by Elizabeth Marquez - Pablo Morales.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

 <!--<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.9.1.min.js" type="text/javascript"></script>-->
 <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.js" type="text/javascript"></script>
 <!--<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>-->
 <!--<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/demo.js" type="text/javascript"></script>-->
 <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.Rut.min.js"></script>
</body>
</html>
