<?php

use yii\bootstrap4\Html;

/**
* @var yii\web\View $this
* @var common\models\Group $model
*/

$this->title = Yii::t('group', 'Group');
$this->params['breadcrumbs'][] = ['label' => Yii::t('group', 'Group'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => (string)$model->name, 'url' => ['view', 'group_id' => $model->group_id]];
$this->params['breadcrumbs'][] = 'Edit';
?>
<div class="giiant-crud group-update">

	<h1>
		(G) <?= Yii::t('group', 'Group') ?>
		<small>
						<?= Html::encode($model->name) ?>
		</small>
	</h1>

	<div class="crud-navigation">
		<?= Html::a('<span class="glyphicon glyphicon-file"></span> ' . 'View', ['view', 'group_id' => $model->group_id], ['class' => 'btn btn-default']) ?>
	</div>

	<hr>

	<?php echo $this->render('_form', [
	'model' => $model,
	]) ?>

</div>
