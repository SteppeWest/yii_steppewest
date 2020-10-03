<?php

use yii\bootstrap4\Html;
use yii\helpers\Url;
use kartik\grid\GridView;
use kartik\detail\DetailView;
use yii\widgets\Pjax;
use dmstr\bootstrap\Tabs;

/**
* @var yii\web\View $this
* @var common\models\Category $model
*/
$copyParams = $model->attributes;

$this->title = Yii::t('category', 'Category');
$this->params['breadcrumbs'][] = ['label' => Yii::t('category', 'Categories'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => (string)$model->name, 'url' => ['view', 'id' => $model->category_id]];
$this->params['breadcrumbs'][] = 'View';
?>
<div class="giiant-crud category-view">

	<!-- flash message -->
	<?php if (\Yii::$app->session->getFlash('deleteError') !== null) : ?>
		<span class="alert alert-info alert-dismissible" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span></button>
			<?= \Yii::$app->session->getFlash('deleteError') ?>
		</span>
	<?php endif; ?>

	<h1>
		<?= Yii::t('category', 'Category') ?>
		<small>
			<?= Html::encode($model->name) ?>
		</small>
	</h1>


	<div class="clearfix crud-navigation">

		<!-- menu buttons -->
		<div class='float-left'>
			<?= Html::a(
			'<span class="glyphicon glyphicon-pencil"></span> ' . 'Edit',
			[ 'update', 'id' => $model->category_id],
			['class' => 'btn btn-info']) ?>

			<?= Html::a(
			'<span class="glyphicon glyphicon-copy"></span> ' . 'Copy',
			['create', 'id' => $model->category_id, 'Category'=>$copyParams],
			['class' => 'btn btn-success']) ?>

			<?= Html::a(
			'<span class="glyphicon glyphicon-plus"></span> ' . 'New',
			['create'],
			['class' => 'btn btn-success']) ?>
		</div>

		<div class="float-right">
			<?= Html::a('<span class="glyphicon glyphicon-list"></span> '
			. 'Full list', ['index'], ['class'=>'btn btn-default']) ?>
		</div>

	</div>

	<hr>

	<?php $this->beginBlock('common\models\Category') ?>

	
	<?= DetailView::widget([
	'model' => $model,
	'attributes' => [
			'name',
		'hide',
		'title',
	],
	]) ?>

	
	<hr>

	<?= Html::a('<span class="glyphicon glyphicon-trash"></span> ' . 'Delete', ['delete', 'id' => $model->category_id],
	[
	'class' => 'btn btn-danger',
	'data-confirm' => '' . 'Are you sure to delete this item?' . '',
	'data-method' => 'post',
	]) ?>
	<?php $this->endBlock() ?>


	
<?php $this->beginBlock('Groups') ?>
<div style='position: relative'>
<div style='position:absolute; right: 0px; top: 0px;'>
  <?= Html::a(
			'<span class="glyphicon glyphicon-list"></span> ' . 'List All' . ' Groups',
			['group/index'],
			['class'=>'btn text-muted btn-xs']
		) ?>
  <?= Html::a(
			'<span class="glyphicon glyphicon-plus"></span> ' . 'New' . ' Group',
			['group/create', 'Group' => ['id' => $model->category_id]],
			['class'=>'btn btn-success btn-xs']
		) ?>
</div>
</div>
<?php Pjax::begin(['id'=>'pjax-Groups', 'enableReplaceState'=> false, 'linkSelector'=>'#pjax-Groups ul.pagination a, th a']) ?>
<?=
 '<div class="table-responsive">'
 . \yii\grid\GridView::widget([
	'layout' => '{summary}<div class="text-center">{pager}</div>{items}<div class="text-center">{pager}</div>',
	'dataProvider' => new \yii\data\ActiveDataProvider([
		'query' => $model->getGroups(),
		'pagination' => [
			'pageSize' => 20,
			'pageParam'=>'page-groups',
		]
	]),
	'pager'		=> [
		'class'		 => yii\widgets\LinkPager::className(),
		'firstPageLabel' => 'First',
		'lastPageLabel'  => 'Last'
	],
	'columns' => [
 [
	'class'	 => 'yii\grid\ActionColumn',
	'template'   => '{view} {update}',
	'contentOptions' => ['nowrap'=>'nowrap'],
	'urlCreator' => function ($action, $model, $key, $index) {
		// using the column name as key, not mapping to 'id' like the standard generator
		$params = is_array($key) ? $key : [$model->primaryKey()[0] => (string) $key];
		$params[0] = 'group' . '/' . $action;
		$params['Group'] = ['category_id' => $model->primaryKey()[0]];
		return $params;
	},
	'buttons'	=> [
		
	],
	'controller' => 'group'
],
		'group_id',
		'name',
		'title',
		'hide',
]
])
 . '</div>' 
?>
<?php Pjax::end() ?>
<?php $this->endBlock() ?>


	<?= Tabs::widget(
				[
					'id' => 'relation-tabs',
					'encodeLabels' => false,
					'items' => [
 [
	'label'   => '<b class=""># '.Html::encode($model->category_id).'</b>',
	'content' => $this->blocks['common\models\Category'],
	'active'  => true,
],
[
	'content' => $this->blocks['Groups'],
	'label'   => '<small>Groups <span class="badge badge-default">'. $model->getGroups()->count() . '</span></small>',
	'active'  => false,
],
 ]
				]
	);
	?>
</div>
