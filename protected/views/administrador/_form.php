<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'administrador-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	// 'htmlOptions'=>array('enctype'=>'multipart/form-data'),
)); ?>

	<p class="note">Los campos marcados con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

<?php echo $form->textFieldRow($model,'RUT_PERSONAL',array('class'=>'span5','maxlength'=>15)); ?>
<?php echo $form->textFieldRow($model,'ID_SUCURSAL',array('class'=>'span5')); ?>
<?php echo $form->textFieldRow($model,'NOMBRE_PERSONAL',array('class'=>'span5','maxlength'=>30)); ?>
<?php echo $form->textFieldRow($model,'PATERNO_PERSONAL',array('class'=>'span5','maxlength'=>30)); ?>
<?php echo $form->textFieldRow($model,'MATERNO_PERSONAL',array('class'=>'span5','maxlength'=>30)); ?>
<?php echo $form->textFieldRow($model,'CONTRASENA_PERSONAL',array('class'=>'span5','maxlength'=>30)); ?>
<?php echo $form->textFieldRow($model,'SEXO_PERSONAL',array('class'=>'span5','maxlength'=>1)); ?>
<?php echo $form->textFieldRow($model,'TELEFONO_PERSONAL',array('class'=>'span5')); ?>
<?php echo $form->textFieldRow($model,'DIRECCION_PERSONAL',array('class'=>'span5','maxlength'=>50)); ?>
<?php echo $form->textFieldRow($model,'EMAIL_PERSONAL',array('class'=>'span5','maxlength'=>100)); ?>
<?php echo $form->textFieldRow($model,'AUTORIZADO_PERSONAL',array('class'=>'span5')); ?>
<?php echo $form->textFieldRow($model,'CARGO_PERSONAL',array('class'=>'span5','maxlength'=>30)); ?>


<div class="form-actions">
	<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
</div>

<?php $this->endWidget(); ?>
