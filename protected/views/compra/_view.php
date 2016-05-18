<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('ID_COMPRA')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID_COMPRA),array('view','id'=>$data->ID_COMPRA)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('RUT_CLIENTE')); ?>:</b>
	<?php echo CHtml::encode($data->RUT_CLIENTE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_BOLETA_COMPRA')); ?>:</b>
	<?php echo CHtml::encode($data->ID_BOLETA_COMPRA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FECHA_HORA_COMPRA')); ?>:</b>
	<?php echo CHtml::encode($data->FECHA_HORA_COMPRA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TIPO_COMPRA')); ?>:</b>
	<?php echo CHtml::encode($data->TIPO_COMPRA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DINERO_COMPRA')); ?>:</b>
	<?php echo CHtml::encode($data->DINERO_COMPRA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ESTADO_COMPRA')); ?>:</b>
	<?php echo CHtml::encode($data->ESTADO_COMPRA); ?>
	<br />


</div>