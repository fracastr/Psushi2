<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'administrador-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	// 'htmlOptions'=>array('enctype'=>'multipart/form-data'),
)); ?>

<p class="note" xmlns="http://www.w3.org/1999/html">Los campos marcados con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>
<table>
	<tr>
		<td width="200">
		<?php echo $form->textFieldRow($model,'RUT_PERSONAL',array('class'=>'span5','maxlength'=>15)); ?>
		</td>
		<td width="200">
		dropdown de las sucursales<?php echo $form->textFieldRow($model,'ID_SUCURSAL',array('class'=>'span5')); ?>
		</td>
	</tr>
	<tr>
		<td width="200">
		<?php echo $form->textFieldRow($model,'NOMBRE_PERSONAL',array('class'=>'span5','maxlength'=>30)); ?>
		</td>
	</tr>
	<tr>
		<td width="200">
		<?php echo $form->textFieldRow($model,'PATERNO_PERSONAL',array('class'=>'span5','maxlength'=>30)); ?>
		</td>
		<td width="200">
		<?php echo $form->textFieldRow($model,'MATERNO_PERSONAL',array('class'=>'span5','maxlength'=>30)); ?>
		</td>
	</tr>
	<tr>
		<td width="200">
		<?php echo $form->textFieldRow($model,'SEXO_PERSONAL',array('class'=>'span5','maxlength'=>1)); ?>
		</td>
		<td width="200">
		<?php echo $form->textFieldRow($model,'TELEFONO_PERSONAL',array('class'=>'span5')); ?>
		</td>
	</tr>
	<tr>
		<td width="200">
		<?php echo $form->textFieldRow($model,'DIRECCION_PERSONAL',array('class'=>'span5','maxlength'=>50)); ?>
		</td>
		<td width="200">
		<?php echo $form->textFieldRow($model,'EMAIL_PERSONAL',array('class'=>'span5','maxlength'=>100)); ?>
		</td>
	</tr>
	<tr>
		
		<?php //echo $form->textFieldRow($model,'AUTORIZADO_PERSONAL',array('class'=>'span5')); ?>
		<td WIDTH=200>Ingreso Autorizado<?php echo $form->checkBox($model,'AUTORIZADO_PERSONAL',array('class'=>'span5','maxlength'=>2, 'style'=> 'width:20px','value'=>'1', 'uncheckValue'=>'2')); ?></td>
		
	</tr>
	<tr>
		<td WIDTH=200>
			<button class="btn btn-default" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
				Cambiar contraseña
			</button>
			<div class="collapse" id="collapseExample">
				<div class="well">
					<?php echo $form->textFieldRow($model,'CONTRASENA_PERSONAL',array('class'=>'span5','maxlength'=>30)); ?>
				</div>
			</div>
		</td>
			
	</tr>
		<!-- <?php // echo $form->textFieldRow($model,'CARGO_PERSONAL',array('class'=>'span5','maxlength'=>30)); ?> -->
</table>

<div class="form-actions">
	<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Crear' : 'Guardar',
		)); ?>
</div>

<?php $this->endWidget(); ?>
