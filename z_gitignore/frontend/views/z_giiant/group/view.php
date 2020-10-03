<?php

use yii\bootstrap4\Html;
use yii\helpers\Url;
use kartik\grid\GridView;
use kartik\detail\DetailView;
use yii\widgets\Pjax;
use dmstr\bootstrap\Tabs;

/**
* @var yii\web\View $this
* @var common\models\Group $model
*/
$copyParams = $model->attributes;

$this->title = Yii::t('group', 'Group');
$this->params['breadcrumbs'][] = ['label' => Yii::t('group', 'Groups'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => (string)$model->name, 'url' => ['view', 'group_id' => $model->group_id]];
$this->params['breadcrumbs'][] = 'View';
?>
<div class="giiant-crud group-view">

	<!-- flash message -->
	<?php if (\Yii::$app->session->getFlash('deleteError') !== null) : ?>
		<span class="alert alert-info alert-dismissible" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span></button>
			<?= \Yii::$app->session->getFlash('deleteError') ?>
		</span>
	<?php endif; ?>

	<h1>
		(G) <?= Yii::t('group', 'Group') ?>
		<small>
			<?= Html::encode($model->name) ?>
		</small>
	</h1>


	<div class="clearfix crud-navigation">

		<!-- menu buttons -->
		<div class='float-left'>
			<?= Html::a(
			'<span class="glyphicon glyphicon-pencil"></span> ' . 'Edit',
			[ 'update', 'group_id' => $model->group_id],
			['class' => 'btn btn-info']) ?>

			<?= Html::a(
			'<span class="glyphicon glyphicon-copy"></span> ' . 'Copy',
			['create', 'group_id' => $model->group_id, 'Group'=>$copyParams],
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

	<?php $this->beginBlock('common\models\Group') ?>


	<?= DetailView::widget([
	'model' => $model,
	'attributes' => [
			'category_id',
		'name',
		'title',
		'hide',
	],
	]) ?>


	<hr>

	<?= Html::a('<span class="glyphicon glyphicon-trash"></span> ' . 'Delete', ['delete', 'group_id' => $model->group_id],
	[
	'class' => 'btn btn-danger',
	'data-confirm' => '' . 'Are you sure to delete this item?' . '',
	'data-method' => 'post',
	]) ?>
	<?php $this->endBlock() ?>



<?php $this->beginBlock('Category') ?>
<div style='position: relative'>
<div style='position:absolute; right: 0px; top: 0px;'>
  <?= Html::a(
			'<span class="glyphicon glyphicon-list"></span> ' . 'List All' . ' Category',
			['category/index'],
			['class'=>'btn text-muted btn-xs']
		) ?>
  <?= Html::a(
			'<span class="glyphicon glyphicon-plus"></span> ' . 'New' . ' Category',
			['category/create', 'Category' => ['category_id' => $model->group_id]],
			['class'=>'btn btn-success btn-xs']
		) ?>
</div>
</div>
<?php Pjax::begin(['id'=>'pjax-Category', 'enableReplaceState'=> false, 'linkSelector'=>'#pjax-Category ul.pagination a, th a']) ?>
<?=
 '<div class="table-responsive">'
 . \yii\grid\GridView::widget([
	'layout' => '{summary}<div class="text-center">{pager}</div>{items}<div class="text-center">{pager}</div>',
	'dataProvider' => new \yii\data\ActiveDataProvider([
		'query' => $model->getCategory(),
		'pagination' => [
			'pageSize' => 20,
			'pageParam'=>'page-category',
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
		$params[0] = 'category' . '/' . $action;
		$params['Category'] = ['category_id' => $model->primaryKey()[0]];
		return $params;
	},
	'buttons'	=> [

	],
	'controller' => 'category'
],
		'name',
		'title',
		'hide',
]
])
 . '</div>'
?>
<?php Pjax::end() ?>
<?php $this->endBlock() ?>


<?php $this->beginBlock('Subgroups') ?>
<div style='position: relative'>
<div style='position:absolute; right: 0px; top: 0px;'>
  <?= Html::a(
			'<span class="glyphicon glyphicon-list"></span> ' . 'List All' . ' Subgroups',
			['subgroup/index'],
			['class'=>'btn text-muted btn-xs']
		) ?>
  <?= Html::a(
			'<span class="glyphicon glyphicon-plus"></span> ' . 'New' . ' Subgroup',
			['subgroup/create', 'Subgroup' => ['group_id' => $model->group_id]],
			['class'=>'btn btn-success btn-xs']
		) ?>
</div>
</div>
<?php Pjax::begin(['id'=>'pjax-Subgroups', 'enableReplaceState'=> false, 'linkSelector'=>'#pjax-Subgroups ul.pagination a, th a']) ?>
<?=
 '<div class="table-responsive">'
 . \yii\grid\GridView::widget([
	'layout' => '{summary}<div class="text-center">{pager}</div>{items}<div class="text-center">{pager}</div>',
	'dataProvider' => new \yii\data\ActiveDataProvider([
		'query' => $model->getSubgroups(),
		'pagination' => [
			'pageSize' => 20,
			'pageParam'=>'page-subgroups',
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
		$params[0] = 'subgroup' . '/' . $action;
		$params['Subgroup'] = ['group_id' => $model->primaryKey()[0]];
		return $params;
	},
	'buttons'	=> [

	],
	'controller' => 'subgroup'
],
		'subgroup_id',
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
	'label'   => '<b class=""># '.Html::encode($model->group_id).'</b>',
	'content' => $this->blocks['common\models\Group'],
	'active'  => true,
],
[
	'content' => $this->blocks['Category'],
	'label'   => '<small>Category <span class="badge badge-default">'. $model->getCategory()->count() . '</span></small>',
	'active'  => false,
],
[
	'content' => $this->blocks['Subgroups'],
	'label'   => '<small>Subgroups <span class="badge badge-default">'. $model->getSubgroups()->count() . '</span></small>',
	'active'  => false,
],
 ]
				]
	);
	?>
</div>
