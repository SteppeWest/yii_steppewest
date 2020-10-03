<?php

use yii\bootstrap4\Html;
use kartik\form\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Link */
/* @var $form kartik\form\ActiveForm */

?>

<div class="link-form">

	<?php $form = ActiveForm::begin() ?>

	<?= $form->errorSummary($model) ?>

	<?= $form->field($model, 'link_id')->textInput(['placeholder' => 'Link']) ?>

	<?= $form->field($model, 'subgroup_id')->widget(\kartik\widgets\Select2::classname(), [
		'data' => \yii\helpers\ArrayHelper::map(\common\models\Subgroup::find()->orderBy('subgroup_id')->asArray()->all(), 'subgroup_id', 'name'),
		'options' => ['placeholder' => 'Choose P2m subgroup'],
		'pluginOptions' => [
			'allowClear' => true
		],
	]) ?>

	<?= $form->field($model, 'name')->textInput(['maxlength' => true, 'placeholder' => 'Name']) ?>

	<?= $form->field($model, 'title')->textInput(['maxlength' => true, 'placeholder' => 'Title']) ?>

	<?= $form->field($model, 'link')->textInput(['maxlength' => true, 'placeholder' => 'Link']) ?>

	<?= $form->field($model, 'https')->checkbox() ?>

	<?= $form->field($model, 'hide')->checkbox() ?>

	<div class="form-group">
		<?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
		<?= Html::a(Yii::t('app', 'Cancel'), Yii::$app->request->referrer , ['class'=> 'btn btn-danger']) ?>
	</div>

	<?php ActiveForm::end() ?>

</div>
