<?php
/**
 * @var yii\web\View $this
 * @var common\models\Link $model
 * @var kartik\form\ActiveForm $form
 */

use yii\bootstrap4\Html;
use kartik\form\ActiveForm;
use \dmstr\bootstrap\Tabs;
use yii\helpers\StringHelper;
?>
<div class="link-form">

	<?php //$form = ActiveForm::begin() ?>
	<?php $form = ActiveForm::begin([
		'id' => 'Link',
		'type' => ActiveForm::TYPE_HORIZONTAL,
		'formConfig' => ['labelSpan' => 3],
	])?>

	<?= $form->errorSummary($model) ?>

	<div class="row">
		<div class="col-sm-6">

			<div class="form-group">
				<!-- attribute subgroup_id -->
				<?= $form->field($model, 'subgroup_id')
					->textInput(['placeholder' => 'Subgroup']) ?>

				<!-- attribute name -->
				<?= $form->field($model, 'name')
					->textInput(['maxlength' => true, 'placeholder' => 'Name']) ?>

				<!-- attribute title -->
				<?= $form->field($model, 'title')
					->textInput(['maxlength' => true, 'placeholder' => 'Title']) ?>

				<!-- attribute link -->
				<?= $form->field($model, 'link')
					->textInput(['maxlength' => true, 'placeholder' => 'Link']) ?>

				<!-- attribute https -->
				<?= $form->field($model, 'https')->checkbox(['custom' => true, 'switch' => true]) ?>

				<!-- attribute hide -->
				<?= $form->field($model, 'hide')->checkbox(['custom' => true, 'switch' => true]) ?>
			</div>

			<div class="form-group">
				<?= Html::submitButton(
					'<span class="glyphicon glyphicon-check"></span> '
						. ($model->isNewRecord ? 'Create' : 'Save'),
					[
						'id' => 'save-' . $model->formName(),
						'class' => 'btn btn-success'
					]
				) ?>
			</div>

		</div>
	</div>

	<?php ActiveForm::end() ?>

</div>
