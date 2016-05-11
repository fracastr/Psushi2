<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'sucursal-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	// 'htmlOptions'=>array('enctype'=>'multipart/form-data'),
)); ?>

	<p class="note">Los campos marcados con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model,'Por favor, corrija los siguientes errores'); ?>
<table>
	<tr>
		<td width="200">
	<?php echo $form->textFieldRow($model,'ID_SUCURSAL',array('class'=>'span5')); ?>
		</td></tr>
	<tr>
		<td width="200">
	<?php echo $form->textFieldRow($model,'NOMBRE_SUCURSAL',array('class'=>'span5','maxlength'=>50)); ?>
		</td>
		<td width="200">
	<?php echo $form->textFieldRow($model,'DIRECCION_SUCURSAL',array('class'=>'span5','maxlength'=>50)); ?>
		</td>
	</tr>
</table>

<div class="form-actions">
	<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Crear' : 'Actualizar',
		)); ?>
</div>

<?php $this->endWidget(); ?>
