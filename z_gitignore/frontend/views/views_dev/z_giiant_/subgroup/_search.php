<?php

use yii\bootstrap4\Html;
use kartik\form\ActiveForm;

/**
* @var yii\web\View $this
* @var common\models\SubgroupSearch $model
* @var kartik\form\ActiveForm $form
*/
?>

<div class="subgroup-search">

	<?php $form = ActiveForm::begin([
	'action' => ['index'],
	'method' => 'get',
	]) ?>

			<?= $form->field($model, 'subgroup_id') ?>

		<?= $form->field($model, 'group_id') ?>

		<?= $form->field($model, 'name') ?>

		<?= $form->field($model, 'title') ?>

		<?= $form->field($model, 'hide') ?>

	<div class="form-group">
		<?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
		<?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
	</div>

	<?php ActiveForm::end() ?>

</div>
