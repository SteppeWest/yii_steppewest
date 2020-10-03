<?php

use yii\bootstrap4\Html;

/**
* @var yii\web\View $this
* @var common\models\Category $model
*/

$this->title = Yii::t('category', 'Category');
$this->params['breadcrumbs'][] = ['label' => Yii::t('category', 'Category'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => (string)$model->name, 'url' => ['view', 'id' => $model->category_id]];
$this->params['breadcrumbs'][] = 'Edit';
?>
<div class="giiant-crud category-update">

	<h1>
		<?= Yii::t('category', 'Category') ?>
		<small>
						<?= Html::encode($model->name) ?>
		</small>
	</h1>

	<div class="crud-navigation">
		<?= Html::a('<span class="glyphicon glyphicon-file"></span> ' . 'View', ['view', 'id' => $model->category_id], ['class' => 'btn btn-default']) ?>
	</div>

	<hr>

	<?php echo $this->render('_form', [
	'model' => $model,
	]) ?>

</div>
