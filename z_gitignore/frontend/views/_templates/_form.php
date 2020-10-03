<?php
/**
 * @var yii\web\View $this
 * @var common\models\<<Self>> $model
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
		'class' => '<<Child>>',
		'relID' => '<<child>>',
		'value' => \yii\helpers\Json::encode($model-><<child>>s),
		'isNewRecord' => ($model->isNewRecord) ? 1 : 0
	]
]);
?>
<div class="<<self>>-form">

	<?php //$form = ActiveForm::begin() ?>
	<?php $form = ActiveForm::begin([
		'id' => '<<Self>>',
		'type' => ActiveForm::TYPE_HORIZONTAL,
		'formConfig' => ['labelSpan' => 3],
	])?>

	<?= $form->errorSummary($model) ?>

	<div class="row">
		<div class="col-sm-6">

			<div class="form-group">
				<?= $form->field($model, '<<self>>_id')
					->textInput(['placeholder' => '<<Self>>']) ?>

				<!-- attribute <<parent>>_id -->
				<?= $form->field($model, '<<parent>>_id')
					->textInput(['placeholder' => '<<Parent>>']) ?>

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
							. Html::encode('<<Child>>'),
						'content' => $this->render('_form<<Child>>', [
							'row' => \yii\helpers\ArrayHelper::toArray($model-><<child>>s),
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

<!-- ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ #####

	##### ^ ##### ^ ##### ^ ##### ^ ##### ^ #####

	##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### -->

