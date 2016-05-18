<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'compra-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	// 'htmlOptions'=>array('enctype'=>'multipart/form-data'),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

<?php echo $form->textFieldRow($model,'ID_COMPRA',array('class'=>'span5')); ?>
<?php echo $form->textFieldRow($model,'RUT_CLIENTE',array('class'=>'span5','maxlength'=>15)); ?>
<?php echo $form->textFieldRow($model,'ID_BOLETA_COMPRA',array('class'=>'span5','maxlength'=>500)); ?>
<?php echo $form->textFieldRow($model,'FECHA_HORA_COMPRA',array('class'=>'span5')); ?>
<?php echo $form->textFieldRow($model,'TIPO_COMPRA',array('class'=>'span5','maxlength'=>30)); ?>
<?php echo $form->textFieldRow($model,'DINERO_COMPRA',array('class'=>'span5','maxlength'=>30)); ?>
<?php echo $form->textFieldRow($model,'ESTADO_COMPRA',array('class'=>'span5','maxlength'=>50)); ?>


<div class="form-actions">
	<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
</div>

<?php $this->endWidget(); ?>
