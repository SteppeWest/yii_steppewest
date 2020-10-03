<div class="form-group" id="add-group">
<?php
use kartik\grid\GridView;
use kartik\builder\TabularForm;
use yii\data\ArrayDataProvider;
use yii\bootstrap4\Html;
use yii\widgets\Pjax;

$dataProvider = new ArrayDataProvider([
	'allModels' => $row,
	'pagination' => [
		'pageSize' => -1
	]
]);
echo TabularForm::widget([
	'dataProvider' => $dataProvider,
	'formName' => 'Group',
	'checkboxColumn' => false,
	'actionColumn' => false,
	'attributeDefaults' => [
		'type' => TabularForm::INPUT_TEXT,
	],
	'attributes' => [
		'group_id' => ['type' => TabularForm::INPUT_HIDDEN, 'visible' => false],
		'name' => ['type' => TabularForm::INPUT_TEXT],
		'title' => ['type' => TabularForm::INPUT_TEXT],
		'hide' => ['type' => TabularForm::INPUT_CHECKBOX,
			'options' => [
				'style' => 'position : relative; margin-top : -9px'
			]
		],
		'del' => [
			'type' => 'raw',
			'label' => '',
			'value' => function($model, $key) {
				return Html::a(
					'<i class="glyphicon glyphicon-trash"></i>',
					'#',
					[
						'title' =>  'Delete',
						'onClick' => 'delRowGroup(' . $key . '); return false;',
						'id' => 'group-del-btn'
					]
				);
			},
		],
	],
	'gridSettings' => [
		'panel' => [
			'heading' => false,
			'type' => GridView::TYPE_DEFAULT,
			'before' => false,
			'footer' => false,
			'after' => Html::button(
				'<i class="glyphicon glyphicon-plus"></i>' . 'Add P2m Group',
				[
					'type' => 'button',
					'class' => 'btn btn-success kv-batch-create',
					'onClick' => 'addRowGroup()'
				]
			),
		]
	]
]);
?>
</div>
