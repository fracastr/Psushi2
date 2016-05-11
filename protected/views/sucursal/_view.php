<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('ID_SUCURSAL')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID_SUCURSAL),array('view','id'=>$data->ID_SUCURSAL)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NOMBRE_SUCURSAL')); ?>:</b>
	<?php echo CHtml::encode($data->NOMBRE_SUCURSAL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DIRECCION_SUCURSAL')); ?>:</b>
	<?php echo CHtml::encode($data->DIRECCION_SUCURSAL); ?>
	<br />


</div>