<?php

use yii\bootstrap4\Html;

/**
* @var yii\web\View $this
* @var common\models\Link $model
*/

$this->title = Yii::t('link', 'Link');
$this->params['breadcrumbs'][] = ['label' => Yii::t('link', 'Link'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => (string)$model->name, 'url' => ['view', 'link_id' => $model->link_id]];
$this->params['breadcrumbs'][] = 'Edit';
?>
<div class="giiant-crud link-update">

	<h1>
		(G) <?= Yii::t('link', 'Link') ?>
		<small>
						<?= Html::encode($model->name) ?>
		</small>
	</h1>

	<div class="crud-navigation">
		<?= Html::a('<span class="glyphicon glyphicon-file"></span> ' . 'View', ['view', 'link_id' => $model->link_id], ['class' => 'btn btn-default']) ?>
	</div>

	<hr>

	<?php echo $this->render('_form', [
	'model' => $model,
	]) ?>

</div>
