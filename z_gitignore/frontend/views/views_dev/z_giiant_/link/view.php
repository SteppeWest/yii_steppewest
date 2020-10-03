<?php
/**
* @var yii\web\View $this
* @var common\models\Link $model
*/

use yii\bootstrap4\Html;
use yii\helpers\Url;
use kartik\grid\GridView;
use kartik\detail\DetailView;
use yii\widgets\Pjax;
use dmstr\bootstrap\Tabs;

$copyParams = $model->attributes;

$this->title = Yii::t('link', 'Link');
$this->params['breadcrumbs'][] = ['label' => 'Link', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

/*
$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('link', 'Links'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => (string)$model->name, 'url' => ['view', 'link_id' => $model->link_id]];
$this->params['breadcrumbs'][] = 'View';
 */

$detailItems = [
	['attribute' => 'link_id', 'label' => 'ID'],
	['attribute' => 'subgroupTitle', 'label' => 'Subgroup'],
	['attribute' => 'fullLink', 'label' => 'Link', 'format'=>'raw'],
	/*
	'link_id',
	'title',
	'name',
	'link',
	'https',
	'hide',
	*/
];
?>
<div class="link-view">

	<!-- flash message -->
	<?php if (\Yii::$app->session->getFlash('deleteError') !== null) : ?>
		<span class="alert alert-info alert-dismissible" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span></button>
			<?= \Yii::$app->session->getFlash('deleteError') ?>
		</span>
	<?php endif; ?>

	<h1>
		<?= Yii::t('link', 'Link') ?>
		<small>
			<?= Html::encode($model->name) ?>
		</small>
	</h1>

	<div class="clearfix crud-navigation">

		<!-- menu buttons -->
		<div class='float-left'>
			<?= Html::a(
				'<span class="glyphicon glyphicon-pencil"></span> ' . 'Edit',
				['update', 'link_id' => $model->link_id],
				['class' => 'btn btn-info']
			) ?>

			<?= Html::a(
				'<span class="glyphicon glyphicon-copy"></span> ' . 'Copy',
				['create', 'link_id' => $model->link_id, 'Link'=>$copyParams],
				['class' => 'btn btn-success']
			) ?>

			<?= Html::a(
				'<span class="glyphicon glyphicon-plus"></span> ' . 'New',
				['create'],
				['class' => 'btn btn-success']
			) ?>
		</div>

		<div class="float-right">
			<?= Html::a(
				'<span class="glyphicon glyphicon-list"></span> '
				. 'Full list', ['index'], ['class'=>'btn btn-default']
			) ?>
		</div>

	</div>

	<hr>

	<?php $this->beginBlock('common\models\Link') ?>

	<div class="container">
		<div class="row">
			<div class="col col-sm-4">
	<?php echo DetailView::widget([
		'model' => $model,
		'attributes' => $detailItems
	]) ?>
			</div>
			<div class="col col-sm-4">
			</div>
			<div class="col col-sm-4">
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col col-sm-6">
			</div>
			<div class="col col-sm-3">
			</div>
			<div class="col col-sm-3">
			</div>
		</div>
	</div>


	<!--
	<?= DetailView::widget([
		'model' => $model,
		'attributes' => [
			'subgroup_id',
			'title',
			'link',
			'https',
			'hide',
			'name',
		],
	]) ?>
	-->

	<hr>

	<?= Html::a(
		'<span class="glyphicon glyphicon-trash"></span> ' . 'Delete',
		['delete', 'link_id' => $model->link_id],
		[
			'class' => 'btn btn-danger',
			'data-confirm' => '' . 'Are you sure to delete this item?' . '',
			'data-method' => 'post'
		]
	) ?>

	<?php $this->endBlock() ?>

	<?php $this->beginBlock('Subgroup') ?>

	<div style='position: relative'>
		<div style='position:absolute; right: 0px; top: 0px;'>
			<?= Html::a(
				'<span class="glyphicon glyphicon-list"></span> ' . 'List All' . ' Subgroup',
				['subgroup/index'],
				['class'=>'btn text-muted btn-xs']
			) ?>

			<?= Html::a(
				'<span class="glyphicon glyphicon-plus"></span> ' . 'New' . ' Subgroup',
				['subgroup/create', 'Subgroup' => ['subgroup_id' => $model->link_id]],
				['class'=>'btn btn-success btn-xs']
			) ?>
		</div>
	</div>

	<?php Pjax::begin([
		'id' => 'pjax-Subgroup',
		'enableReplaceState' => false,
		'linkSelector' => '#pjax-Subgroup ul.pagination a, th a'
	]) ?>

	<?= '<div class="table-responsive">' . \yii\grid\GridView::widget([
		'layout' => '{summary}<div class="text-center">{pager}</div>{items}'
			. '<div class="text-center">{pager}</div>',
		'dataProvider' => new \yii\data\ActiveDataProvider([
			'query' => $model->getSubgroup(),
			'pagination' => ['pageSize' => 20, 'pageParam'=>'page-subgroup']
		]),
		'pager' => [
			'class' => yii\widgets\LinkPager::className(),
			'firstPageLabel' => 'First',
			'lastPageLabel' => 'Last'
		],
		'columns' => [
			[
				'class' => 'yii\grid\ActionColumn',
				'template' => '{view} {update}',
				'contentOptions' => ['nowrap' => 'nowrap'],
				'urlCreator' => function ($action, $model, $key, $index) {
					// using the column name as key, not mapping to
					// 'id' like the standard generator
					$params = is_array($key)
						? $key
						: [$model->primaryKey()[0] => (string) $key];
					$params[0] = 'subgroup' . '/' . $action;
					$params['Subgroup'] = ['subgroup_id' => $model->primaryKey()[0]];
					return $params;
				},
				'buttons' => [],
				'controller' => 'subgroup'
			],
			'group_id',
			'name',
			'title',
			'hide'
		]
	]) . '</div>' ?>

	<?php Pjax::end() ?>

	<?php $this->endBlock() ?>

	<?= Tabs::widget([
		'id' => 'relation-tabs',
		'encodeLabels' => false,
		'items' => [
			[
				'label' => '<b class=""># ' . Html::encode($model->link_id) . '</b>',
				'content' => $this->blocks['common\models\Link'],
				'active'  => true
			],
			[
				'content' => $this->blocks['Subgroup'],
				'label' => '<small>Subgroup <span class="badge badge-default">'
					. $model->getSubgroup()->count() . '</span></small>',
				'active' => false
			]
		]
	]);?>

</div>

<!-- ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ #####

	##### ^ ##### ^ ##### ^ ##### ^ ##### ^ #####

	##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### -->

