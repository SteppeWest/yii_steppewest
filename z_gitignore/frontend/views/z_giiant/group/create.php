<?php

use yii\bootstrap4\Html;

/**
* @var yii\web\View $this
* @var common\models\Group $model
*/

$this->title = Yii::t('group', 'Group');
$this->params['breadcrumbs'][] = ['label' => Yii::t('group', 'Groups'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="giiant-crud group-create">

	<h1>
		(G) <?= Yii::t('group', 'Group') ?>
		<small>
						<?= Html::encode($model->name) ?>
		</small>
	</h1>

	<div class="clearfix crud-navigation">
		<div class="float-left">
			<?=			Html::a(
			'Cancel',
			\yii\helpers\Url::previous(),
			['class' => 'btn btn-default']) ?>
		</div>
	</div>

	<hr>

	<?= $this->render('_form', [
	'model' => $model,
	]) ?>

</div>
