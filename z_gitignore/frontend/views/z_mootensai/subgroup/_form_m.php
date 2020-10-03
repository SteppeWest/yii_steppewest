<?php

use yii\bootstrap4\Html;
use kartik\form\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Subgroup */
/* @var $form kartik\form\ActiveForm */

\mootensai\components\JsBlock::widget(['viewFile' => '_script', 'pos'=> \yii\web\View::POS_END,
	'viewParams' => [
		'class' => 'Link',
		'relID' => 'link',
		'value' => \yii\helpers\Json::encode($model->links),
		'isNewRecord' => ($model->isNewRecord) ? 1 : 0
	]
]);
?>

<div class="subgroup-form">

	<?php $form = ActiveForm::begin() ?>

	<?= $form->errorSummary($model) ?>

	<?= $form->field($model, 'subgroup_id')->textInput(['placeholder' => 'Subgroup']) ?>

	<?= $form->field($model, 'group_id')->widget(\kartik\widgets\Select2::classname(), [
		'data' => \yii\helpers\ArrayHelper::map(\common\models\Group::find()->orderBy('group_id')->asArray()->all(), 'group_id', 'name'),
		'options' => ['placeholder' => 'Choose P2m group'],
		'pluginOptions' => [
			'allowClear' => true
		],
	]) ?>

	<?= $form->field($model, 'name')->textInput(['maxlength' => true, 'placeholder' => 'Name']) ?>

	<?= $form->field($model, 'title')->textInput(['maxlength' => true, 'placeholder' => 'Title']) ?>

	<?= $form->field($model, 'hide')->checkbox() ?>

	<?php
	$forms = [
		[
			'label' => '<i class="glyphicon glyphicon-book"></i> ' . Html::encode('Link'),
			'content' => $this->render('_formLink', [
				'row' => \yii\helpers\ArrayHelper::toArray($model->links),
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
		<?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
		<?= Html::a(Yii::t('app', 'Cancel'), Yii::$app->request->referrer , ['class'=> 'btn btn-danger']) ?>
	</div>

	<?php ActiveForm::end() ?>

</div>
