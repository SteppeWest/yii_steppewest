<?php

use yii\bootstrap4\Html;

/**
* @var yii\web\View $this
* @var common\models\Subgroup $model
*/

$this->title = Yii::t('subgroup', 'Subgroup');
$this->params['breadcrumbs'][] = ['label' => Yii::t('subgroup', 'Subgroups'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="giiant-crud subgroup-create">

	<h1>
		(G) <?= Yii::t('subgroup', 'Subgroup') ?>
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
