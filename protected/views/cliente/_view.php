<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('RUT_CLIENTE')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->RUT_CLIENTE),array('view','id'=>$data->RUT_CLIENTE)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NOMBRE_CLIENTE')); ?>:</b>
	<?php echo CHtml::encode($data->NOMBRE_CLIENTE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PATERNO_CLIENTE')); ?>:</b>
	<?php echo CHtml::encode($data->PATERNO_CLIENTE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MATERNO_CLIENTE')); ?>:</b>
	<?php echo CHtml::encode($data->MATERNO_CLIENTE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CONTRASENA_CLIENTE')); ?>:</b>
	<?php echo CHtml::encode($data->CONTRASENA_CLIENTE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SEXO_CLIENTE')); ?>:</b>
	<?php echo CHtml::encode($data->SEXO_CLIENTE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TELEFONO_CLIENTE')); ?>:</b>
	<?php echo CHtml::encode($data->TELEFONO_CLIENTE); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('DIRECCION_CLIENTE')); ?>:</b>
	<?php echo CHtml::encode($data->DIRECCION_CLIENTE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('EMAIL_CLIENTE')); ?>:</b>
	<?php echo CHtml::encode($data->EMAIL_CLIENTE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('EDAD_CLIENTE')); ?>:</b>
	<?php echo CHtml::encode($data->EDAD_CLIENTE); ?>
	<br />

	*/ ?>

</div>