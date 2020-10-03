<?php

use yii\bootstrap4\Html;
use yii\helpers\Url;
use kartik\grid\GridView;
use kartik\detail\DetailView;
use yii\widgets\Pjax;
use dmstr\bootstrap\Tabs;

/**
* @var yii\web\View $this
* @var common\models\Subgroup $model
*/
$copyParams = $model->attributes;

$this->title = Yii::t('subgroup', 'Subgroup');
$this->params['breadcrumbs'][] = ['label' => Yii::t('subgroup', 'Subgroups'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => (string)$model->name, 'url' => ['view', 'subgroup_id' => $model->subgroup_id]];
$this->params['breadcrumbs'][] = 'View';
?>
<div class="giiant-crud subgroup-view">

	<!-- flash message -->
	<?php if (\Yii::$app->session->getFlash('deleteError') !== null) : ?>
		<span class="alert alert-info alert-dismissible" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span></button>
			<?= \Yii::$app->session->getFlash('deleteError') ?>
		</span>
	<?php endif; ?>

	<h1>
		(G) <?= Yii::t('subgroup', 'Subgroup') ?>
		<small>
			<?= Html::encode($model->name) ?>
		</small>
	</h1>


	<div class="clearfix crud-navigation">

		<!-- menu buttons -->
		<div class='float-left'>
			<?= Html::a(
			'<span class="glyphicon glyphicon-pencil"></span> ' . 'Edit',
			[ 'update', 'subgroup_id' => $model->subgroup_id],
			['class' => 'btn btn-info']) ?>

			<?= Html::a(
			'<span class="glyphicon glyphicon-copy"></span> ' . 'Copy',
			['create', 'subgroup_id' => $model->subgroup_id, 'Subgroup'=>$copyParams],
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

	<?php $this->beginBlock('common\models\Subgroup') ?>


	<?= DetailView::widget([
	'model' => $model,
	'attributes' => [
			'group_id',
		'name',
		'title',
		'hide',
	],
	]) ?>


	<hr>

	<?= Html::a('<span class="glyphicon glyphicon-trash"></span> ' . 'Delete', ['delete', 'subgroup_id' => $model->subgroup_id],
	[
	'class' => 'btn btn-danger',
	'data-confirm' => '' . 'Are you sure to delete this item?' . '',
	'data-method' => 'post',
	]) ?>
	<?php $this->endBlock() ?>



<?php $this->beginBlock('Links') ?>
<div style='position: relative'>
<div style='position:absolute; right: 0px; top: 0px;'>
  <?= Html::a(
			'<span class="glyphicon glyphicon-list"></span> ' . 'List All' . ' Links',
			['link/index'],
			['class'=>'btn text-muted btn-xs']
		) ?>
  <?= Html::a(
			'<span class="glyphicon glyphicon-plus"></span> ' . 'New' . ' Link',
			['link/create', 'Link' => ['subgroup_id' => $model->subgroup_id]],
			['class'=>'btn btn-success btn-xs']
		) ?>
</div>
</div>
<?php Pjax::begin(['id'=>'pjax-Links', 'enableReplaceState'=> false, 'linkSelector'=>'#pjax-Links ul.pagination a, th a']) ?>
<?=
 '<div class="table-responsive">'
 . \yii\grid\GridView::widget([
	'layout' => '{summary}<div class="text-center">{pager}</div>{items}<div class="text-center">{pager}</div>',
	'dataProvider' => new \yii\data\ActiveDataProvider([
		'query' => $model->getLinks(),
		'pagination' => [
			'pageSize' => 20,
			'pageParam'=>'page-links',
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
		$params[0] = 'link' . '/' . $action;
		$params['Link'] = ['subgroup_id' => $model->primaryKey()[0]];
		return $params;
	},
	'buttons'	=> [

	],
	'controller' => 'link'
],
		'link_id',
		'name',
		'title',
		'link',
		'https',
		'hide',
]
])
 . '</div>'
?>
<?php Pjax::end() ?>
<?php $this->endBlock() ?>


<?php $this->beginBlock('Group') ?>
<div style='position: relative'>
<div style='position:absolute; right: 0px; top: 0px;'>
  <?= Html::a(
			'<span class="glyphicon glyphicon-list"></span> ' . 'List All' . ' Group',
			['group/index'],
			['class'=>'btn text-muted btn-xs']
		) ?>
  <?= Html::a(
			'<span class="glyphicon glyphicon-plus"></span> ' . 'New' . ' Group',
			['group/create', 'Group' => ['group_id' => $model->subgroup_id]],
			['class'=>'btn btn-success btn-xs']
		) ?>
</div>
</div>
<?php Pjax::begin(['id'=>'pjax-Group', 'enableReplaceState'=> false, 'linkSelector'=>'#pjax-Group ul.pagination a, th a']) ?>
<?=
 '<div class="table-responsive">'
 . \yii\grid\GridView::widget([
	'layout' => '{summary}<div class="text-center">{pager}</div>{items}<div class="text-center">{pager}</div>',
	'dataProvider' => new \yii\data\ActiveDataProvider([
		'query' => $model->getGroup(),
		'pagination' => [
			'pageSize' => 20,
			'pageParam'=>'page-group',
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
		$params['Group'] = ['group_id' => $model->primaryKey()[0]];
		return $params;
	},
	'buttons'	=> [

	],
	'controller' => 'group'
],
		'category_id',
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
	'label'   => '<b class=""># '.Html::encode($model->subgroup_id).'</b>',
	'content' => $this->blocks['common\models\Subgroup'],
	'active'  => true,
],
[
	'content' => $this->blocks['Links'],
	'label'   => '<small>Links <span class="badge badge-default">'. $model->getLinks()->count() . '</span></small>',
	'active'  => false,
],
[
	'content' => $this->blocks['Group'],
	'label'   => '<small>Group <span class="badge badge-default">'. $model->getGroup()->count() . '</span></small>',
	'active'  => false,
],
 ]
				]
	);
	?>
</div>
