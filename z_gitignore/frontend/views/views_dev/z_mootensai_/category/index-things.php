<?php

use yii\bootstrap4\Html;
use yii\helpers\Url;
use kartik\grid\GridView;
use yii\widgets\Pjax;
use common\widgets\ActionColumn;
/* @var $this yii\web\View */
/* @var $searchModel common\models\CategorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Categories';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-index">

	<h1><?= Html::encode($this->title) ?></h1>

	<p>
		<?= Html::a('Create Category', ['create'], ['class' => 'btn btn-success']) ?>
	</p>

	<?php Pjax::begin() ?>
	<?php // echo $this->render('_search', ['model' => $searchModel]) ?>

	<?= GridView::widget([
		'dataProvider' => $dataProvider,
		'filterModel' => $searchModel,
		'columns' => [
			['class' => 'yii\grid\SerialColumn'],

			'category_id',
			'name',
			'title',
			'hide',

			['class' => 'common\widgets\ActionColumn'],
		],
	]) ?>

	<?php Pjax::end() ?>

</div>

http://portal.localhost/category/index.p2m
http://portal.localhost/category/1.p2m
http://portal.localhost/category/update/1.p2m
http://portal.localhost/category/delete/1.p2m

http://portal.localhost/index.php?r=category%2Fview&id=1
http://portal.localhost/index.php?r=category%2Fupdate&id=1
http://portal.localhost/index.php?r=category%2Fdelete&id=1
