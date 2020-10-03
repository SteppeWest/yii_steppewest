<?php

/* @var $this yii\web\View */
/* @var $searchModel common\models\LinkSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

use yii\bootstrap4\Html;
use yii\helpers\ArrayHelper;
use kartik\export\ExportMenu;
use kartik\grid\GridView;

$this->title = 'Link';
$this->params['breadcrumbs'][] = $this->title;
$search = "$('.search-button').click(function(){
	$('.search-form').toggle(1000);
	return false;
});";
$this->registerJs($search);

$gridColumns = [
	['class' => 'yii\grid\SerialColumn'],
	[
		'attribute' => 'link_id',
		'label' => 'ID',
		'width' => '75px',
	],
	//'link_id',
	[
		'attribute' => 'subgroup_id',
		'label' => 'Subgroup',
		'value' => function($model){
			return $model->subgroup->name;
		},
		'filterType' => GridView::FILTER_SELECT2,
		'filter' => ArrayHelper::map(
			\common\models\Subgroup::find()->asArray()->all(),
			'subgroup_id', 'name'
		),
		'filterWidgetOptions' => [
			'pluginOptions' => ['allowClear' => true],
		],
		'filterInputOptions' => [
			'placeholder' => 'P2m subgroup',
			'id' => 'grid-link-search-subgroup_id'
		]
	],
	[
		'attribute' => 'fullLink',
		'format'=>'raw',
	],
	//'title',
	//'link',
	//[],
	['class' => 'yii\grid\ActionColumn'],
];
?>
<div class="link-index">

	<h1><?= Html::encode($this->title) ?></h1>
	<?php // echo $this->render('_search', ['model' => $searchModel]) ?>

	<p>
		<?= Html::a('Create Link', ['create'], ['class' => 'btn btn-success']) ?>
		<?= Html::a('Advance Search', '#', ['class' => 'btn btn-info search-button']) ?>
	</p>
	<div class="search-form" style="display:none">
		<?=  $this->render('_search', ['model' => $searchModel]) ?>
	</div>
	<?= GridView::widget([
		'dataProvider' => $dataProvider,
		'filterModel' => $searchModel,
		'columns' => $gridColumns,
		'pjax' => true,
		'pjaxSettings' => ['options' => ['id' => 'kv-pjax-container-link']],
		'panel' => [
			'type' => GridView::TYPE_PRIMARY,
			'heading' => '<span class="glyphicon glyphicon-book"></span>  ' . Html::encode($this->title),
		],
		'export' => false,
	]) ?>

</div>
