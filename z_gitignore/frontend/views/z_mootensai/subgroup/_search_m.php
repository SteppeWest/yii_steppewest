<?php

use yii\bootstrap4\Html;
use kartik\form\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\SubgroupSearch */
/* @var $form kartik\form\ActiveForm */
?>

<div class="form-subgroup-search">

	<?php $form = ActiveForm::begin([
		'action' => ['index'],
		'method' => 'get',
	]) ?>

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

	<div class="form-group">
		<?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
		<?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
	</div>

	<?php ActiveForm::end() ?>

</div>
