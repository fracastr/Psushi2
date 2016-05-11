<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'cliente-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	// 'htmlOptions'=>array('enctype'=>'multipart/form-data'),
)); ?>

	<p class="note">Los campos marcados con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model, 'Por favor, corregir los siguientes errores'); ?>
	<table>
		<tr>
			<td width="200">
				<?php echo $form->textFieldRow($model,'RUT_CLIENTE',array('class'=>'span5','maxlength'=>15)); ?>
			</td>
			<td width="200">
				<?php echo $form->textFieldRow($model,'NOMBRE_CLIENTE',array('class'=>'span5','maxlength'=>30)); ?>
			</td>
		</tr>
		
		<tr>
			<td width="200">
				<?php echo $form->textFieldRow($model,'PATERNO_CLIENTE',array('class'=>'span5','maxlength'=>30)); ?>
			</td>
			<td width="200">
				<?php echo $form->textFieldRow($model,'MATERNO_CLIENTE',array('class'=>'span5','maxlength'=>30)); ?>
			</td>
		</tr>
		
		<tr>
			<td width="200">
				<?php echo $form->textFieldRow($model,'EDAD_CLIENTE',array('class'=>'span5'));  ?>
			</td>
			<td width="200">
				<?php echo $form->textFieldRow($model,'SEXO_CLIENTE',array('class'=>'span5','maxlength'=>1)); ?>
			</td>
		</tr>
		
		<tr>
			<td width="200">
				<?php echo $form->textFieldRow($model,'TELEFONO_CLIENTE',array('class'=>'span5')); ?>
			</td>
			<td width="200">
					<?php echo $form->textFieldRow($model,'DIRECCION_CLIENTE',array('class'=>'span5','maxlength'=>50)); ?>
			</td>
		</tr>
		
		<tr>
			<td width="200">
				<?php echo $form->textFieldRow($model,'EMAIL_CLIENTE',array('class'=>'span5','maxlength'=>100)); ?>
			</td>
		</tr>

		<tr>
			<td width="200">
				<?php echo $form->textFieldRow($model,'CONTRASENA_CLIENTE',array('class'=>'span5','maxlength'=>100)); ?>
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
