<?php

/* @var $this yii\web\View */
/* @var $searchModel common\models\CategorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

use yii\bootstrap4\Html;
use kartik\export\ExportMenu;
use kartik\grid\GridView;

$this->title = 'Category';
$this->params['breadcrumbs'][] = $this->title;
$search = "$('.search-button').click(function(){
	$('.search-form').toggle(1000);
	return false;
});";
$this->registerJs($search);

$gridColumns = [
	['class' => 'yii\grid\SerialColumn'],
	'category_id',
	'name',
	'title',
	'hide',
	[
		'class' => 'yii\grid\ActionColumn',
		'contentOptions' => ['nowrap'=>'nowrap']
	],
];
?>
<div class="category-index">

	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<h1>(M) <?= Html::encode($this->title) ?></h1>
				<?php // echo $this->render('_search', ['model' => $searchModel]) ?>
			</div>
			<div class="col-sm-6">
				<p class="float-right">
					<?= Html::a('Create Category', ['create'], ['class' => 'btn btn-success']) ?>
					<?= Html::a('Advance Search', '#', ['class' => 'btn btn-info search-button']) ?>
				</p>
			</div>
		</div>
	</div>




	<div class="search-form" style="display:none">
		<?=  $this->render('_search', ['model' => $searchModel]) ?>
	</div>

	<?= GridView::widget([
		'dataProvider' => $dataProvider,
		'filterModel' => $searchModel,
		'columns' => $gridColumns,
		'pjax' => false,
		//'pjaxSettings' => ['options' => ['id' => 'kv-pjax-container-category']],
		'panel' => [
			'type' => GridView::TYPE_PRIMARY,
			'heading' => '<span class="glyphicon glyphicon-book"></span>  ' . Html::encode($this->title),
		],
		'export' => false,
		// your toolbar can include the additional full export menu
		'toolbar' => [
			'{export}',
			ExportMenu::widget([
				'dataProvider' => $dataProvider,
				'columns' => $gridColumn,
				'target' => ExportMenu::TARGET_BLANK,
				'fontAwesome' => true,
				'dropdownOptions' => [
					'label' => 'Full',
					'class' => 'btn btn-default',
					'itemsBefore' => [
						'<li class="dropdown-header">Export All Data</li>',
					],
				],
				'exportConfig' => [
					ExportMenu::FORMAT_PDF => false
				]
			]) ,
		],
	]) ?>

</div>

<!-- ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ #####

	##### ^ ##### ^ ##### ^ ##### ^ ##### ^ #####

	##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### -->

	<div class="container">
		<div class="row">
			<div class="col-sm-6">
			</div>
			<div class="col-sm">
			</div>
			<div class="col-sm">
			</div>
		</div>
	</div>

