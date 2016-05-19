<center>

	<?php

	//echo CHtml::link(CHtml::image(Yii::app()->request->baseUrl . '/images/logo-pequeño.png'));
	?>
	<div class="form">
		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'login-form',
			'enableClientValidation'=>true,
			'clientOptions'=>array(
				'validateOnSubmit'=>true,
			),
		)); ?>
		<table>
			<tr>
				<td WIDTH=300>
					<center><h3>Ingresar</h3>
						<span class="label label-info">Ambos campos son obligatorios   <span class="required">*</span></span><br><br></center>
				</td>
			</tr>
			<tr>
				<td WIDTH=300>
					<center>
						<?php echo $form->labelEx($model,'username'); ?>
						<?php echo $form->textField($model,'username'); ?>
						<?php echo $form->error($model,'username'); ?>
					</center>
				</td></tr>
			<tr>
				<td WIDTH=300>
					<center>
						<?php echo $form->labelEx($model,'password'); ?>
						<?php echo $form->passwordField($model,'password'); ?>
						<?php echo $form->error($model,'password'); ?>
					</center>
				</td></tr>
			<tr>

				<td WIDTH=300>
					<center>
						<?php echo $form->checkBox($model,'rememberMe'); ?>
						<?php echo $form->label($model,'rememberMe'); ?>
						<?php echo $form->error($model,'rememberMe'); ?>
					</center>
				</td></tr>
			<tr>
				<td WIDTH=300>
					<center>
						<button id="btn-signup" type="submit" class="btn btn-info"><i class="icon-hand-right"></i> &nbsp Entrar</button>
						<?php //echo CHtml::submitButton('Login'); ?>
					</center>
				</td></tr>
		</table>
		<?php $this->endWidget(); ?>
	</div><!-- form -->
</center>