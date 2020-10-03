<?php

use yii\bootstrap4\Html;
use kartik\detail\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model common\models\Link */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Link', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

$gridColumns = [
	'link_id',
	[
		'attribute' => 'subgroup.name',
		'label' => 'Subgroup',
	],
	'name',
	'title',
	'link',
	'https',
	'hide',
];
?>
<div class="link-view">

	<div class="row">
		<div class="col-sm-9">
			<h2><?= 'Link'.' '. Html::encode($this->title) ?></h2>
		</div>
		<div class="col-sm-3" style="margin-top: 15px">

			<?= Html::a(
				'Update',
				['update', 'id' => $model->link_id],
				['class' => 'btn btn-primary']
			) ?>

			<?= Html::a(
				'Delete',
				['delete', 'id' => $model->link_id],
				[
					'class' => 'btn btn-danger',
					'data' => [
						'confirm' => 'Are you sure you want to delete this item?',
						'method' => 'post'
					]
				]
			) ?>
		</div>
	</div>

	<div class="row">
		<?php echo DetailView::widget([
			'model' => $model,
			'attributes' => $gridColumns
		]) ?>
	</div>
</div>
