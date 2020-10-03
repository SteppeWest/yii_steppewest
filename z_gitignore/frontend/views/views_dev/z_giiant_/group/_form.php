<?php

use yii\bootstrap4\Html;
use kartik\form\ActiveForm;
use \dmstr\bootstrap\Tabs;
use yii\helpers\StringHelper;

/**
* @var yii\web\View $this
* @var common\models\Group $model
* @var kartik\form\ActiveForm $form
*/

?>

<div class="group-form">

	<?php $form = ActiveForm::begin([
	'id' => 'Group',
	'layout' => 'horizontal',
	'enableClientValidation' => true,
	'errorSummaryCssClass' => 'error-summary alert alert-danger',
	'fieldConfig' => [
			'template' => "{label}\n{beginWrapper}\n{input}\n{hint}\n{error}\n{endWrapper}",
			'horizontalCssClasses' => [
				'label' => 'col-sm-2',
				#'offset' => 'col-sm-offset-4',
				'wrapper' => 'col-sm-8',
				'error' => '',
				'hint' => '',
			],
		],
	]
	);
	?>

	<div class="">
		<?php $this->beginBlock('main') ?>

		<p>
			

<!-- attribute category_id -->
			<?= $form->field($model, 'category_id')->textInput() ?>

<!-- attribute name -->
			<?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

<!-- attribute title -->
			<?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

<!-- attribute hide -->
			<?= $form->field($model, 'hide')->textInput() ?>
		</p>
		<?php $this->endBlock() ?>
		
		<?=
	Tabs::widget(
				[
					'encodeLabels' => false,
					'items' => [ 
						[
	'label'   => Yii::t('group', 'Group'),
	'content' => $this->blocks['main'],
	'active'  => true,
],
					]
				]
	);
	?>
		<hr>

		<?php echo $form->errorSummary($model) ?>

		<?= Html::submitButton(
		'<span class="glyphicon glyphicon-check"></span> ' .
		($model->isNewRecord ? 'Create' : 'Save'),
		[
		'id' => 'save-' . $model->formName(),
		'class' => 'btn btn-success'
		]
		);
		?>

		<?php ActiveForm::end() ?>

	</div>

</div>

