<?php
/**
 * @var yii\web\View $this
 * @var common\models\Category $model
 * @var kartik\form\ActiveForm $form
 */

use yii\bootstrap4\Html;
use kartik\form\ActiveForm;
use \dmstr\bootstrap\Tabs;
use yii\helpers\StringHelper;

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

	<?php //$form = ActiveForm::begin() ?>
	<?php $form = ActiveForm::begin([
		'id' => 'Category',
		'type' => ActiveForm::TYPE_HORIZONTAL,
		'formConfig' => ['labelSpan' => 3],
	])?>

	<?= $form->errorSummary($model) ?>

	<div class="row">
		<div class="col-sm-6">

			<div class="form-group">
				<!-- attribute name -->
				<?= $form->field($model, 'name')
					->textInput(['maxlength' => true, 'placeholder' => 'Name']) ?>

				<!-- attribute title -->
				<?= $form->field($model, 'title')
					->textInput(['maxlength' => true, 'placeholder' => 'Title']) ?>

				<!-- attribute hide -->
				<?= $form->field($model, 'hide')->checkbox() ?>
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

		<div class="col-sm-6">

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

		</div>
	</div>

	<?php ActiveForm::end() ?>

</div>
