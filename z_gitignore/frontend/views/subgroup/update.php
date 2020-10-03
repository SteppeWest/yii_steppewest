<?php
/**
 * @var $this yii\web\View
 * @var $model common\models\Subgroup
 */

use yii\bootstrap4\Html;

$this->title = 'Update ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Subgroups', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->subgroup_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="container giiant-crud subgroup-updates">

	<div class="row">
		<div class="col-sm-6">
			<h1>
				Update: <small>
					<?= Html::encode($model->title) ?>
				</small>
			</h1>
		</div>

		<div class="col-sm-6">
			<div class="crud-navigation float-right">
				<?= Html::a(
					'<span class="glyphicon glyphicon-file"></span> ' . 'View',
					['view', 'id' => $model->subgroup_id],
					['class' => 'btn btn-default']
				) ?>
			</div>
		</div>
	</div>

	<?= $this->render('_form', ['model' => $model]) ?>

</div>
