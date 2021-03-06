<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Iniciar sesión';
$this->breadcrumbs=array(
	'Iniciar sesión',
);
?>

<div class="clearfix">
<div class="pull-left" id='imagen'>
	<?php 
		echo CHtml::image(Yii::app()->baseUrl.'/images/logo.jpg','', array('width' =>300, 'height'=>300 ));
	?>
</div>
<div class="pull-right login">
<div class="pull-left">
<h1>Iniciar sesión</h1>

<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>
	
	<p class="note">Los campos con <span class="required">*</span> son requeridos.</p>

	<div class="row"> 
		<div class="login-form pull-left">
			<?php echo $form->labelEx($model,'username'); ?>
			<?php echo $form->textField($model,'username'); ?>
		</div>

		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row"> 	
		<div class="login-form pull-left">
			<?php echo $form->labelEx($model,'password'); ?>
			<?php echo $form->passwordField($model,'password'); ?>
		</div>

		<?php echo $form->error($model,'password'); ?>
	</div>

    <?php /*
	<div class="row rememberMe">
		<?php echo $form->checkBox($model,'rememberMe'); ?>
		<?php echo $form->label($model,'rememberMe'); ?>
		<?php echo $form->error($model,'rememberMe'); ?>
	</div> 
    */?>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Login'); ?>
	</div>

	

<?php $this->endWidget(); ?>
</div><!-- form -->
<div></div>
</div>
</div>
</div>