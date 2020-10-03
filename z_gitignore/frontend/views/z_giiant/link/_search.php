<?php

use yii\bootstrap4\Html;
use kartik\form\ActiveForm;

/**
* @var yii\web\View $this
* @var common\models\LinkSearch $model
* @var kartik\form\ActiveForm $form
*/
?>

<div class="link-search">

	<?php $form = ActiveForm::begin([
	'action' => ['index'],
	'method' => 'get',
	]) ?>

			<?= $form->field($model, 'link_id') ?>

		<?= $form->field($model, 'subgroup_id') ?>

		<?= $form->field($model, 'name') ?>

		<?= $form->field($model, 'title') ?>

		<?= $form->field($model, 'link') ?>

		<?php // echo $form->field($model, 'https') ?>

		<?php // echo $form->field($model, 'hide') ?>

	<div class="form-group">
		<?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
		<?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
	</div>

	<?php ActiveForm::end() ?>

</div>
