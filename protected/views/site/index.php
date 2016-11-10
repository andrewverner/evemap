<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<div class="form">

	<?php $form=$this->beginWidget('CActiveForm', array(
		'id'=>'solar-system-distance-form',
		// Please note: When you enable ajax validation, make sure the corresponding
		// controller action is handling ajax validation correctly.
		// See class documentation of CActiveForm for details on this,
		// you need to use the performAjaxValidation()-method described there.
		'enableAjaxValidation'=>false,
	)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'systemName1'); ?>
		<?php echo $form->textField($model,'systemName1'); ?>
		<?php echo $form->error($model,'systemName1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'systemName2'); ?>
		<?php echo $form->textField($model,'systemName2'); ?>
		<?php echo $form->error($model,'systemName2'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit'); ?>
	</div>

	<?php if ($distance) : ?>
		<h2><?php echo $distance; ?></h2>
	<?php endif; ?>

	<?php $this->endWidget(); ?>

</div><!-- form -->
