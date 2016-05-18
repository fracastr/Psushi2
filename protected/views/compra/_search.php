<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

		<?php echo $form->textFieldRow($model,'ID_COMPRA',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'RUT_CLIENTE',array('class'=>'span5','maxlength'=>15)); ?>

		<?php echo $form->textFieldRow($model,'ID_BOLETA_COMPRA',array('class'=>'span5','maxlength'=>500)); ?>

		<?php echo $form->textFieldRow($model,'FECHA_HORA_COMPRA',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'TIPO_COMPRA',array('class'=>'span5','maxlength'=>30)); ?>

		<?php echo $form->textFieldRow($model,'DINERO_COMPRA',array('class'=>'span5','maxlength'=>30)); ?>

		<?php echo $form->textFieldRow($model,'ESTADO_COMPRA',array('class'=>'span5','maxlength'=>50)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType' => 'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
