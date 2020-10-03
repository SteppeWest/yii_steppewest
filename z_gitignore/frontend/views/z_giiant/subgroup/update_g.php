<?php

use yii\bootstrap4\Html;

/**
* @var yii\web\View $this
* @var common\models\Subgroup $model
*/

$this->title = Yii::t('subgroup', 'Subgroup');
$this->params['breadcrumbs'][] = ['label' => Yii::t('subgroup', 'Subgroup'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => (string)$model->name, 'url' => ['view', 'subgroup_id' => $model->subgroup_id]];
$this->params['breadcrumbs'][] = 'Edit';
?>
<div class="giiant-crud subgroup-update">

	<h1>
		<?= Yii::t('subgroup', 'Subgroup') ?>
		<small>
						<?= Html::encode($model->name) ?>
		</small>
	</h1>

	<div class="crud-navigation">
		<?= Html::a('<span class="glyphicon glyphicon-file"></span> ' . 'View', ['view', 'subgroup_id' => $model->subgroup_id], ['class' => 'btn btn-default']) ?>
	</div>

	<hr>

	<?php echo $this->render('_form', [
	'model' => $model,
	]) ?>

</div>
