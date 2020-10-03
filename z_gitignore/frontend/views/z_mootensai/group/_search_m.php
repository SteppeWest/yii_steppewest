<?php

use yii\bootstrap4\Html;
use kartik\form\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\GroupSearch */
/* @var $form kartik\form\ActiveForm */
?>

<div class="form-group-search">

	<?php $form = ActiveForm::begin([
		'action' => ['index'],
		'method' => 'get',
	]) ?>

	<?= $form->field($model, 'group_id')->textInput(['placeholder' => 'Group']) ?>

	<?= $form->field($model, 'category_id')->widget(\kartik\widgets\Select2::classname(), [
		'data' => \yii\helpers\ArrayHelper::map(\common\models\Category::find()->orderBy('category_id')->asArray()->all(), 'category_id', 'name'),
		'options' => ['placeholder' => 'Choose P2m category'],
		'pluginOptions' => [
			'allowClear' => true
		],
	]) ?>

	<?= $form->field($model, 'name')->textInput(['maxlength' => true, 'placeholder' => 'Name']) ?>

	<?= $form->field($model, 'title')->textInput(['maxlength' => true, 'placeholder' => 'Title']) ?>

	<?= $form->field($model, 'hide')->checkbox() ?>

	<div class="form-group">
		<?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
		<?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
	</div>

	<?php ActiveForm::end() ?>

</div>
