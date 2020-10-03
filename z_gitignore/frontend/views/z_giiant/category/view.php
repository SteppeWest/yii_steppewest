<?php
/**
 * @var yii\web\View $this
 * @var common\models\Category $model
 */

use yii\bootstrap4\Html;
use yii\helpers\Url;
use kartik\detail\DetailView;
use yii\widgets\Pjax;
use kartik\grid\GridView;
use dmstr\bootstrap\Tabs;

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
	<?php endif; ?><!-- / flash message -->

	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<h1>
					(G) <?= Yii::t('category', 'Category') ?>
					<small>
						<?= Html::encode($model->name) ?>
					</small>
				</h1>
			</div>
			<div class="col-sm-6 crud-navigation">

				<div class="float-right">
					<?= Html::a(
						'<span class="glyphicon glyphicon-pencil"></span> ' . 'Edit',
						[ 'update', 'id' => $model->category_id],
						['class' => 'btn btn-info']
					) ?>

					<?= Html::a(
						'<span class="glyphicon glyphicon-copy"></span> ' . 'Copy',
						['create', 'id' => $model->category_id, 'Category'=>$copyParams],
						['class' => 'btn btn-success']
					) ?>

					<?= Html::a(
						'<span class="glyphicon glyphicon-plus"></span> ' . 'New',
						['create'],
						['class' => 'btn btn-success']
					) ?>
					<?= Html::a(
						'<span class="glyphicon glyphicon-list"></span> ' . 'Full list',
						['index'],
						['class'=>'btn btn-default']
					) ?>
				</div>

			</div>
		</div>

		<?php $this->beginBlock('common\models\Category') ?>

		<div class="row">
			<div class="col-sm-12">

				<hr>

				<?= DetailView::widget([
					'model' => $model,
					'attributes' => [
						'name',
						'hide',
						'title',
					]
				]) ?>

			</div>
		</div>

		<div class="row">
			<div class="col-sm-12">

				<hr>

				<?= Html::a(
					'<span class="glyphicon glyphicon-trash"></span> ' . 'Delete',
					['delete', 'id' => $model->category_id],
					[
						'class' => 'btn btn-danger float-right',
						'data-confirm' => '' . 'Are you sure to delete this item?' . '',
						'data-method' => 'post',
					]
				) ?>

			</div>
		</div>

		<?php $this->endBlock() ?>

	</div>









	<?= Tabs::widget([
		'id' => 'relation-tabs',
		'encodeLabels' => false,
		'items' => [
			[
				'label' => '<b class=""># ' . Html::encode($model->category_id) . '</b>',
				'content' => $this->blocks['common\models\Category'],
				'active' => true,
			],
		]
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

