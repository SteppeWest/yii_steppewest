<?php

/**
 * @var yii\web\View $this
 * @var yii\data\ActiveDataProvider $dataProvider
 * @var common\models\LinkSearch $searchModel
 */

use yii\bootstrap4\Html;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;
use kartik\grid\GridView;

$this->title = Yii::t('link', 'Links');
$this->params['breadcrumbs'][] = $this->title;

if (isset($actionColumnTemplates)) {
	$actionColumnTemplate = implode(' ', $actionColumnTemplates);
	$actionColumnTemplateString = $actionColumnTemplate;
}
else {
	Yii::$app->view->params['pageButtons'] = Html::a(
		'<span class="glyphicon glyphicon-plus"></span> ' . 'New',
		['create'],
		['class' => 'btn btn-success']
	);
	$actionColumnTemplateString = "{view} {update} {delete}";
}
$actionColumnTemplateString = '<div class="action-buttons">' . $actionColumnTemplateString . '</div>';

/*
$search = "$('.search-button').click(function(){
	$('.search-form').toggle(1000);
	return false;
});";
$this->registerJs($search);
 */

$gridColumns = [
	//['class' => 'yii\grid\SerialColumn'],
	[
		'attribute' => 'link_id',
		'label' => 'ID',
		'width' => '75px',
	],
	[
		'attribute' => 'subgroup_id',
		'label' => 'Subgroup',
		'value' => function($model){
			return $model->subgroup->name;
		},
	],
	'title',
	[
		'attribute' => 'fullLink',
		'format'=>'raw',
	],
	//'subgroup_id',
	//'name',
	//'link',
	//'https',
	//'hide',
	//[],

	/*
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
	*/

	[
		'class' => 'yii\grid\ActionColumn',
		'contentOptions' => ['nowrap'=>'nowrap']
	],
];
?>
<div class="link-index">

	<!--
	<h1><?= Html::encode($this->title) ?></h1>
	<?php // echo $this->render('_search', ['model' => $searchModel]) ?>

	<p>
		<?= Html::a('Create Link', ['create'], ['class' => 'btn btn-success']) ?>
		<?= Html::a('Advance Search', '#', ['class' => 'btn btn-info search-button']) ?>
	</p>
	<div class="search-form" style="display:none">
		<?=  $this->render('_search', ['model' => $searchModel]) ?>
	</div>
	-->

	<?php // echo $this->render('_search', ['model' =>$searchModel]) ?>

	<?php \yii\widgets\Pjax::begin([
		'id'=>'pjax-main',
		'enableReplaceState' => false,
		'linkSelector' => '#pjax-main ul.pagination a, th a',
		'clientOptions' => ['pjax:success'=>'function(){alert("yo")}']
	]) ?><!-- Pjax::begin -->

	<h1>
		<?= Yii::t('link', 'Links') ?>
		<small>List</small>
	</h1>

	<div class="clearfix crud-navigation">
		<div class="float-left">
			<?= Html::a(
				'<span class="glyphicon glyphicon-plus"></span> ' . 'New',
				['create'],
				['class' => 'btn btn-success']
			) ?><!-- Html::a -->
		</div>

		<div class="float-right">
			<?= \yii\bootstrap\ButtonDropdown::widget([
				'id' => 'giiant-relations',
				'encodeLabel' => false,
				'label' => '<span class="glyphicon glyphicon-paperclip"></span> ' . 'Relations',
				'dropdown' => [
					'options' => ['class' => 'dropdown-menu-right'],
					'encodeLabels' => false,
					'items' => [[
						'url' => ['subgroup/index'],
						'label' => '<i class="glyphicon glyphicon-arrow-left"></i> '
							. Yii::t('link', 'Subgroup'),
					]]
				],
				'options' => ['class' => 'btn-default']
			]) ?><!-- ButtonDropdown -->
		</div>
	</div>

	<hr>

	<div class="table-responsive">
		<?= GridView::widget([
			'dataProvider' => $dataProvider,
			'filterModel' => $searchModel,
			'columns' => $gridColumns,
			'pager' => [
				'class' => yii\widgets\LinkPager::className(),
				'firstPageLabel' => 'First',
				'lastPageLabel' => 'Last',
			],
			'tableOptions' => ['class' => 'table table-striped table-bordered table-hover'],
			'headerRowOptions' => ['class' => 'x'],
		]) ?><!-- GridView -->
	</div>

</div>

<?php \yii\widgets\Pjax::end() ?>
