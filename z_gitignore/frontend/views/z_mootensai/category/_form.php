<?php

use yii\bootstrap4\Html;
use kartik\form\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Category */
/* @var $form kartik\form\ActiveForm */

\mootensai\components\JsBlock::widget([
	'viewFile' => '_script',
	'pos' => \yii\web\View::POS_END,
	'viewParams' => [
		'class' => 'Group',
		'relID' => 'group',
		'value' => \yii\helpers\Json::encode($model->groups),
		'isNewRecord' => ($model->isNewRecord) ? 1 : 0
	]
]);
?>

<div class="category-form">

	<?php $form = ActiveForm::begin() ?>

	<?= $form->errorSummary($model) ?>

	<?= $form->field($model, 'category_id')->textInput(['placeholder' => 'Category']) ?>

	<?= $form->field($model, 'name')->textInput([
		'maxlength' => true,
		'placeholder' => 'Name'
	]) ?>

	<?= $form->field($model, 'title')->textInput([
		'maxlength' => true,
		'placeholder' => 'Title'
	]) ?>

	<?= $form->field($model, 'hide')->checkbox() ?>

	<!--
	 -->
	<?php
		$forms = [
			[
				'label' => '<i class="glyphicon glyphicon-book"></i> '
					. Html::encode('Group'),
				'content' => $this->render('_formGroup', [
					'row' => \yii\helpers\ArrayHelper::toArray($model->groups),
				]),
			],
		];
		echo kartik\tabs\TabsX::widget([
			'items' => $forms,
			'position' => kartik\tabs\TabsX::POS_ABOVE,
			'encodeLabels' => false,
			'pluginOptions' => [
				'bordered' => true,
				'sideways' => true,
				'enableCache' => false,
			],
		]);
	?>

	<div class="form-group">
		<?= Html::submitButton(
			$model->isNewRecord ? 'Create' : 'Update',
			['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']
		) ?>

		<?= Html::a(
			Yii::t('app', 'Cancel'),
			 Yii::$app->request->referrer ,
			 ['class'=> 'btn btn-danger']
		) ?>
	</div>

	<?php ActiveForm::end() ?>

</div>
