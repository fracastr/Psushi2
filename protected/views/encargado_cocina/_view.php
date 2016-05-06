<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('RUT_PERSONAL')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->RUT_PERSONAL),array('view','id'=>$data->RUT_PERSONAL)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_SUCURSAL')); ?>:</b>
	<?php echo CHtml::encode($data->ID_SUCURSAL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NOMBRE_PERSONAL')); ?>:</b>
	<?php echo CHtml::encode($data->NOMBRE_PERSONAL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PATERNO_PERSONAL')); ?>:</b>
	<?php echo CHtml::encode($data->PATERNO_PERSONAL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MATERNO_PERSONAL')); ?>:</b>
	<?php echo CHtml::encode($data->MATERNO_PERSONAL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CONTRASENA_PERSONAL')); ?>:</b>
	<?php echo CHtml::encode($data->CONTRASENA_PERSONAL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SEXO_PERSONAL')); ?>:</b>
	<?php echo CHtml::encode($data->SEXO_PERSONAL); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('TELEFONO_PERSONAL')); ?>:</b>
	<?php echo CHtml::encode($data->TELEFONO_PERSONAL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DIRECCION_PERSONAL')); ?>:</b>
	<?php echo CHtml::encode($data->DIRECCION_PERSONAL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('EMAIL_PERSONAL')); ?>:</b>
	<?php echo CHtml::encode($data->EMAIL_PERSONAL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('AUTORIZADO_PERSONAL')); ?>:</b>
	<?php echo CHtml::encode($data->AUTORIZADO_PERSONAL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CARGO_PERSONAL')); ?>:</b>
	<?php echo CHtml::encode($data->CARGO_PERSONAL); ?>
	<br />

	*/ ?>

</div>