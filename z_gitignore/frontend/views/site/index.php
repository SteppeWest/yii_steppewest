<?php
use yii\bootstrap4\Html;
use yii\bootstrap4\Button;

p2m\assets\P2CoreAsset::register($this);
frontend\assets\MasonryAsset::register($this);

$this->title = 'P2 Portal Dashboard';

/* @var $this yii\web\View */
/* @var $form yii\bootstrap4\ActiveForm */
?>
<div class="container site-index">

<!--
	<div class="row">
		<div class="col-sm-12">
			<h2>P2 Portal:<small>
				home
			</small></h2>
		</div>
	</div>
 -->

	<div class="row">
		<div class="col-sm-12">
			<h2>P2 Portal: <small>
				<?= Html::encode($model->title) ?>
			</small></h2>
		</div>
	</div>

	<div class="row">
		<div class="col-sm-12">
			<?= \frontend\widgets\PortalGrid::widget([
				'dataProvider' => $providerGroup
			]) ?>
		</div>
	</div>

</div><!-- /#site-index -->

<!-- ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### -->

<!-- ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### -->

<!-- ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### -->

