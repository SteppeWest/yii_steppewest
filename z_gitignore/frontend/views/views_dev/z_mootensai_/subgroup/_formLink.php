<div class="form-group" id="add-link">
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
	'formName' => 'Link',
	'checkboxColumn' => false,
	'actionColumn' => false,
	'attributeDefaults' => [
		'type' => TabularForm::INPUT_TEXT,
	],
	'attributes' => [
		'link_id' => ['type' => TabularForm::INPUT_HIDDEN, 'visible' => false],
		'name' => ['type' => TabularForm::INPUT_TEXT],
		'title' => ['type' => TabularForm::INPUT_TEXT],
		'link' => ['type' => TabularForm::INPUT_TEXT],
		'https' => ['type' => TabularForm::INPUT_CHECKBOX,
			'options' => [
				'style' => 'position : relative; margin-top : -9px'
			]
		],
		'hide' => ['type' => TabularForm::INPUT_CHECKBOX,
			'options' => [
				'style' => 'position : relative; margin-top : -9px'
			]
		],
		'del' => [
			'type' => 'raw',
			'label' => '',
			'value' => function($model, $key) {
				return Html::a('<i class="glyphicon glyphicon-trash"></i>', '#', ['title' =>  'Delete', 'onClick' => 'delRowLink(' . $key . '); return false;', 'id' => 'link-del-btn']);
			},
		],
	],
	'gridSettings' => [
		'panel' => [
			'heading' => false,
			'type' => GridView::TYPE_DEFAULT,
			'before' => false,
			'footer' => false,
			'after' => Html::button('<i class="glyphicon glyphicon-plus"></i>' . 'Add P2m Link', ['type' => 'button', 'class' => 'btn btn-success kv-batch-create', 'onClick' => 'addRowLink()']),
		]
	]
]);
echo  "	</div>\n\n";
?>

