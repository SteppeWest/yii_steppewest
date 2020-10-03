<?php

use yii\bootstrap4\Html;
use kartik\form\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\LinkSearch */
/* @var $form kartik\form\ActiveForm */
?>

<div class="form-link-search">

	<?php $form = ActiveForm::begin([
		'action' => ['index'],
		'method' => 'get',
	]) ?>

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

	<?php /* echo $form->field($model, 'https')->checkbox() */ ?>

	<?php /* echo $form->field($model, 'hide')->checkbox() */ ?>

	<div class="form-group">
		<?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
		<?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
	</div>

	<?php ActiveForm::end() ?>

</div>
