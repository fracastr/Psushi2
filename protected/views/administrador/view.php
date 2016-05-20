<?php
/* @var $this AdministradorController */
/* @var $model Administrador */
?>
<div class="page-header" align="right">
	<h2>Detalles de la cuenta <small> Administrador</small></h2>
</div>
<?php
$menu=array();
require(dirname(__FILE__).DIRECTORY_SEPARATOR.'_menu.php');


$menu2=array(
	array('label'=>'Administrador','url'=>array('index'),'icon'=>'fa fa-list-alt', 'items' => $menu)	
);

if(!isset($_GET['asModal'])){
?>

<?php
}
?>

		<?php $this->widget('bootstrap.widgets.TbAlert', array(
		    'block'=>false, // display a larger alert block?
		    'fade'=>true, // use transitions?
		    'closeText'=>'&times;', // close link text - if set to false, no close link is displayed
		    'alerts'=>array( // configurations per alert type
		        'success'=>array('block'=>true, 'fade'=>true, 'closeText'=>'&times;'), //success, info, warning, error or danger
		        'info'=>array('block'=>true, 'fade'=>true, 'closeText'=>'&times;'), //success, info, warning, error or danger
		        'warning'=>array('block'=>true, 'fade'=>true, 'closeText'=>'&times;'), //success, info, warning, error or danger
		        'error'=>array('block'=>true, 'fade'=>true, 'closeText'=>'&times;'), //success, info, warning, error or danger
		        'danger'=>array('block'=>true, 'fade'=>true, 'closeText'=>'&times;'), //success, info, warning, error or danger
		    ),
		));
		?>		
<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
			'RUT_PERSONAL',
		'ID_SUCURSAL',
		'NOMBRE_PERSONAL',
		'PATERNO_PERSONAL',
		'MATERNO_PERSONAL',
		'CONTRASENA_PERSONAL',
		'SEXO_PERSONAL',
		'TELEFONO_PERSONAL',
		'DIRECCION_PERSONAL',
		'EMAIL_PERSONAL',
		'AUTORIZADO_PERSONAL',
		//'CARGO_PERSONAL',
		/*
		//CONTOH
		array(
	        'header' => 'Level',
	        'name'=> 'ref_level_id',
	        'type'=>'raw',
	        'value' => ($model->Level->name),
	        // 'value' => ($model->status)?"on":"off",
	        // 'value' => @Admin::model()->findByPk($model->createdBy)->username,
	    ),

	    */
	),
)); ?>

<?php
if(!isset($_GET['asModal'])){
	}
?>