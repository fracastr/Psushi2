<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

		<?php echo $form->textFieldRow($model,'RUT_CLIENTE',array('class'=>'span5','maxlength'=>15)); ?>

		<?php echo $form->textFieldRow($model,'NOMBRE_CLIENTE',array('class'=>'span5','maxlength'=>30)); ?>

		<?php echo $form->textFieldRow($model,'PATERNO_CLIENTE',array('class'=>'span5','maxlength'=>30)); ?>

		<?php echo $form->textFieldRow($model,'MATERNO_CLIENTE',array('class'=>'span5','maxlength'=>30)); ?>

		<?php echo $form->textFieldRow($model,'CONTRASENA_CLIENTE',array('class'=>'span5','maxlength'=>30)); ?>

		<?php echo $form->textFieldRow($model,'SEXO_CLIENTE',array('class'=>'span5','maxlength'=>1)); ?>

		<?php echo $form->textFieldRow($model,'TELEFONO_CLIENTE',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'DIRECCION_CLIENTE',array('class'=>'span5','maxlength'=>50)); ?>

		<?php echo $form->textFieldRow($model,'EMAIL_CLIENTE',array('class'=>'span5','maxlength'=>100)); ?>

		<?php echo $form->textFieldRow($model,'EDAD_CLIENTE',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType' => 'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
