<?php
$currController 	= Yii::app()->controller->id;
$currControllers	= explode('/', $currController);
$currAction			= Yii::app()->controller->action->id;
$currRoute 			= Yii::app()->controller->getRoute();
$currRoutes			= explode('/', $currRoute);

$menu=
	array(
		array('label'=>'Home', 'url'=>array('/site/index'), 'icon'=>'fa fa-home','active'=>($currController=='site' and $currAction=='index' )),
		array('label'=>'Cuentas de usuario', 'url'=>'#', 'icon'=>'fa fa-users', 'visible'=>!Yii::app()->user->isGuest, 'active'=> false ,'items'=>array(
			array('label'=>'Administrador', 'url'=>'#', 'icon'=>'fa fa-user', 'visible'=>!Yii::app()->user->isGuest,'items'=>array(
				array('label'=>'Crear nueva cuenta', 'url'=>'index.php?r=administrador/create', 'icon'=>'fa fa-plus', 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Ver cuentas', 'url'=>'index.php?r=administrador/index', 'icon'=>'fa fa-file-text-o', 'visible'=>!Yii::app()->user->isGuest),
			)),
			array('label'=>'Encargado Cocina', 'url'=>'#', 'icon'=>'fa fa-user', 'visible'=>!Yii::app()->user->isGuest,'items'=>array(
				array('label'=>'Crear nueva cuenta', 'url'=>'index.php?r=encargado_cocina/create', 'icon'=>'fa fa-user-plus', 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Ver cuentas', 'url'=>'index.php?r=encargado_cocina/index', 'icon'=>'fa fa-file-text-o', 'visible'=>!Yii::app()->user->isGuest),
			)),
			array('label'=>'Repartidor', 'url'=>'#', 'icon'=>'fa fa-user', 'visible'=>!Yii::app()->user->isGuest,'items'=>array(
				array('label'=>'Crear nueva cuenta', 'url'=>'index.php?r=repartidor/create', 'icon'=>'fa fa-user-plus', 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Ver cuentas', 'url'=>'index.php?r=repartidor/index', 'icon'=>'fa fa-file-text-o', 'visible'=>!Yii::app()->user->isGuest),
			)),
		)),
		array('label'=>'Admin', 'url'=>'#', 'icon'=>'fa fa-gear', 'visible'=>!Yii::app()->user->isGuest, 'active'=> false ,'items'=>array(
			array('label'=>'Generator Code', 'url'=>array('/gii/heart'), 'icon'=>'fa fa-refresh fa-fw', 'visible'=>!Yii::app()->user->isGuest),
			//'---',
			//array('label'=>'NAV HEADER'),
		)),
		array('label'=>'Pages', 'url'=>'#', 'icon'=>'fa fa-sitemap' , 'active'=>($currController=='site' and $currAction!='index') , 'items'=>array(
			array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about'),'active'=>($currController=='site' and $currAction=='page' )),
			array('label'=>'Contact', 'url'=>array('/site/contact'),'active'=>($currController=='site' and $currAction=='contact' )),
			//'---',
			//array('label'=>'NAV HEADER'),
		)),
	);	
?>	