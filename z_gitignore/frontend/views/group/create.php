<?php
/**
 * @var $this yii\web\View
 * @var $model common\models\Group
 */

use yii\bootstrap4\Html;

$this->title = 'Create Group';
$this->params['breadcrumbs'][] = ['label' => 'Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container giiant-crud group-create">

	<div class="row">
		<div class="col-sm-6">
			<h1><?= Html::encode($this->title) ?></h1>
		</div>

		<div class="col-sm-6">
			<div class="crud-navigation float-right">
				<?= Html::a(
					'<span class="glyphicon glyphicon-file"></span> ' . 'View',
					['view', 'id' => $model->group_id],
					['class' => 'btn btn-default']
				) ?>
			</div>
		</div>
	</div>

	<?= $this->render('_form', ['model' => $model]) ?>

</div>
