<?php

use yii\bootstrap4\Html;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\SubgroupSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Subgroups';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="subgroup-index">

	<h1><?= Html::encode($this->title) ?></h1>

	<p>
		<?= Html::a('Create Subgroup', ['create'], ['class' => 'btn btn-success']) ?>
	</p>

	<?php // echo $this->render('_search', ['model' => $searchModel]) ?>

	<?= GridView::widget([
		'dataProvider' => $dataProvider,
		'filterModel' => $searchModel,
		'columns' => [
			['class' => 'yii\grid\SerialColumn'],

			'subgroup_id',
			'group_id',
			'name',
			'title',
			'hide',

			['class' => 'yii\grid\ActionColumn'],
		],
	]) ?>


</div>
