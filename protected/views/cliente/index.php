<?php
/* @var $this ClienteController */
/* @var $dataProvider CActiveDataProvider */


$menu=array();
require(dirname(__FILE__).DIRECTORY_SEPARATOR.'_menu.php');
$this->menu=array(
	array('label'=>'Cliente','url'=>array('index'),'icon'=>'fa fa-list-alt', 'items' => $menu)	
);

Yii::app()->clientScript->registerScript('search', "
	$('.search-button').click(function(){
		$('.search-form').toggle();
		return false;
	});
	$('.search-form form').submit(function(){
		$.fn.yiiGridView.update('cliente-grid', {
			data: $(this).serialize()
		});
		return false;
	});
");

Yii::app()->clientScript->registerScript('refreshGridView', "
	// automatically refresh grid on 5 seconds
	//setInterval(\"$.fn.yiiGridView.update('cliente-grid')\",5000);
");

?>


<?php /** $this->widget('bootstrap.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); **/ ?>
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

<div class="search-form" style="display:none">
	<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->
<div class="page-header" align="right">
	<h1>Clientes</h1>
</div>

<?php echo CHtml::beginForm(array('export')); ?>
<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'cliente-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'type' => 'striped hover', //bordered condensed
	'columns'=>array(
		array(
	        'name'=> 'RUT_CLIENTE',
	        'value' => '($data->RUT_CLIENTE)',
	        'headerHtmlOptions' => array('style' => 'text-align:center;'),
	    ),
		
		array(
	        'name'=> 'NOMBRE_CLIENTE',
	        'value' => '($data->NOMBRE_CLIENTE)',
	        'headerHtmlOptions' => array('style' => 'text-align:center;'),
	    ),
		
		array(
	        'name'=> 'PATERNO_CLIENTE',
	        'value' => '($data->PATERNO_CLIENTE)',
	        'headerHtmlOptions' => array('style' => 'text-align:center;'),
	    ),
		
		array(
	        'name'=> 'MATERNO_CLIENTE',
	        'value' => '($data->MATERNO_CLIENTE)',
	        'headerHtmlOptions' => array('style' => 'text-align:center;'),
	    ),
		
		array(
	        'name'=> 'CONTRASENA_CLIENTE',
	        'value' => '($data->CONTRASENA_CLIENTE)',
	        'headerHtmlOptions' => array('style' => 'text-align:center;'),
	    ),
		
		array(
	        'name'=> 'SEXO_CLIENTE',
	        'value' => '($data->SEXO_CLIENTE)',
	        'headerHtmlOptions' => array('style' => 'text-align:center;'),
	    ),
		
		//'TELEFONO_CLIENTE',
		//'DIRECCION_CLIENTE',
		//'EMAIL_CLIENTE',
		//'EDAD_CLIENTE',

		/*
		//Contoh
		array(
	        'header' => 'Level',
	        'name'=> 'ref_level_id',
	        'type'=>'raw',
	        'value' => '($data->Level->name)',
	        // 'value' => '($data->status)?"on":"off"',
	        // 'value' => '@Admin::model()->findByPk($data->createdBy)->username',
	    ),
	    */
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
			'header'=>'actualizar',
			'template'=>'{update}',
			'buttons'=>array
            (
				'update'=>array(
					'icon'=>'fa fa-pencil',
					'label'=>'Actualizar este elemento',

				),
				'delete'=>array(
					'icon'=>'fa fa-trash-o',
					'label'=>'Eliminar',

				),
                            )
		),

		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
			'header'=>'Eliminar',
			'template'=>'{delete}',
			'buttons'=>array
			(
				'update'=>array(
					'icon'=>'fa fa-pencil',
					'label'=>'Actualizar',

				),
				'delete'=>array(
					'icon'=>'fa fa-trash-o',
					'label'=>'Eliminar',

				),

			)
		),
	),
)); ?>

<br>

<?php echo CHtml::endForm(); ?>

<?php  $this->beginWidget(
    'bootstrap.widgets.TbModal',
    array('id' => 'myModal')
); ?>
 
    <div class="modal-header">
        <a class="close" data-dismiss="modal">&times;</a>
        <h4 id="myModalHeader">Modal header</h4>
    </div>
 
    <div class="modal-body" id="myModalBody">
        <p>One fine body...</p>
    </div>
 
    <div class="modal-footer">
        <?php  $this->widget(
            'bootstrap.widgets.TbButton',
            array(
                'label' => 'Close',
                'url' => '#',
                'htmlOptions' => array('data-dismiss' => 'modal'),
            )
        ); ?>
    </div>
 
<?php  $this->endWidget(); ?>
