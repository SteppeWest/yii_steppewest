<?php
/**
 * @var yii\web\View $this
 * @var yii\data\ActiveDataProvider $dataProvider
 * @var common\models\GroupSearch $searchModel
 */

use yii\bootstrap4\Html;
use yii\helpers\Url;
use kartik\grid\GridView;

$this->title = Yii::t('group', 'Groups');
$this->params['breadcrumbs'][] = $this->title;

if (isset($actionColumnTemplates)) {
	$actionColumnTemplate = implode(' ', $actionColumnTemplates);
	$actionColumnTemplateString = $actionColumnTemplate;
} else {
	Yii::$app->view->params['pageButtons'] = Html::a(
		'<span class="glyphicon glyphicon-plus"></span> ' . 'New',
		['create'],
		['class' => 'btn btn-success']
	);
	$actionColumnTemplateString = "{view} {update} {delete}";
}
$actionColumnTemplateString = '<div class="action-buttons">'
	. $actionColumnTemplateString . '</div>';
?>
<div class="giiant-crud group-index">

	<?php
//			echo $this->render('_search', ['model' =>$searchModel]);
		?>


	<?php \yii\widgets\Pjax::begin(['id'=>'pjax-main', 'enableReplaceState'=> false, 'linkSelector'=>'#pjax-main ul.pagination a, th a', 'clientOptions' => ['pjax:success'=>'function(){alert("yo")}']]) ?>

	<h1>
		(G) <?= Yii::t('group', 'Groups') ?>
		<small>List</small>
	</h1>
	<div class="clearfix crud-navigation">
		<div class="float-left">
			<?= Html::a('<span class="glyphicon glyphicon-plus"></span> ' . 'New', ['create'], ['class' => 'btn btn-success']) ?>
		</div>

		<div class="float-right">


			<?=
			\yii\bootstrap\ButtonDropdown::widget(
			[
			'id' => 'giiant-relations',
			'encodeLabel' => false,
			'label' => '<span class="glyphicon glyphicon-paperclip"></span> ' . 'Relations',
			'dropdown' => [
			'options' => [
			'class' => 'dropdown-menu-right'
			],
			'encodeLabels' => false,
			'items' => [
			[
				'url' => ['category/index'],
				'label' => '<i class="glyphicon glyphicon-arrow-left"></i> ' . Yii::t('group', 'Category'),
			],
								[
				'url' => ['subgroup/index'],
				'label' => '<i class="glyphicon glyphicon-arrow-right"></i> ' . Yii::t('group', 'Subgroup'),
			],

]
			],
			'options' => [
			'class' => 'btn-default'
			]
			]
			);
			?>
		</div>
	</div>

	<hr>

	<div class="table-responsive">
		<?= GridView::widget([
		'dataProvider' => $dataProvider,
		'pager' => [
		'class' => yii\widgets\LinkPager::className(),
		'firstPageLabel' => 'First',
		'lastPageLabel' => 'Last',
		],
					'filterModel' => $searchModel,
				'tableOptions' => ['class' => 'table table-striped table-bordered table-hover'],
		'headerRowOptions' => ['class'=>'x'],
		'columns' => [
				[
			'class' => 'yii\grid\ActionColumn',
			'template' => $actionColumnTemplateString,
			'buttons' => [
				'view' => function ($url, $model, $key) {
					$options = [
						'title' => Yii::t('cruds', 'View'),
						'aria-label' => Yii::t('cruds', 'View'),
						'data-pjax' => '0',
					];
					return Html::a('<span class="glyphicon glyphicon-eye-open"></span>', $url, $options);
				}
			],
			'urlCreator' => function($action, $model, $key, $index) {
				// using the column name as key, not mapping to 'id' like the standard generator
				$params = is_array($key) ? $key : [$model->primaryKey()[0] => (string) $key];
				$params[0] = \Yii::$app->controller->id ? \Yii::$app->controller->id . '/' . $action : $action;
				return Url::toRoute($params);
			},
			'contentOptions' => ['nowrap'=>'nowrap']
		],
			'category_id',
			'name',
			'title',
			'hide',
				]
		]) ?>
	</div>

</div>
<?php \yii\widgets\Pjax::end() ?>

<!-- ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ #####

	##### ^ ##### ^ ##### ^ ##### ^ ##### ^ #####

	##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### -->

