<?php
use yii\bootstrap4\Html;
use yii\bootstrap4\Button;
//use p2m\helpers\FA;

//p2m\sbAdmin\assets\SBAdmin2Asset::register($this);
//p2m\assets\TimelineAsset::register($this);
//p2m\assets\MorrisAsset::register($this);

p2m\assets\P2CoreAsset::register($this);
frontend\assets\MasonryAsset::register($this);

$this->title = 'P2 Portal Dashboard';
$dashboardData = require(__DIR__ . '/../data/_all_data.php');

/* @var $this yii\web\View */
/* @var $form yii\bootstrap4\ActiveForm */
?>
<div class="container site-index">

	<div class="row">
		<div class="col-sm-6">
			<h1>P2 Portal <small></small></h1>
		</div>

		<div class="col-sm-6">
			<div class="float-right">
				<!--
				<a class="btn btn-success" href="/category/create.p2m"><span class="glyphicon glyphicon-plus"></span> New</a>
				 -->
			</div>
		</div>
	</div>

	<!--
	< ?= //$this->render('_category_grid.php', ['gridData' => $dashboardData]) ? >
	 -->

	<?= frontend\widgets\MasonryGrid::widget(['gridData' => $dashboardData]) ?>

</div><!-- /#site-index -->

<!-- ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### -->

<!-- ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### -->

<!-- ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### -->

<!--

		<div class="grid-item card">
			<h4 class="card-header bg-primary text-white">Portal Links</h4>
			<div class="card-body">
				<ul class="list-group">
					<li class="list-group-item">
						<a href="http://phpmyadmin.portal.localhost/" target="_blank" title="phpMyAdmin">phpMyAdmin</a>
					</li>
					<li class="list-group-item">Dapibus ac facilisis in</li>
				</ul>
				<ul class="list-group">
					<li class="list-group-item">
						<a href="http://p2made.localhost/" target="_blank" title="p2made.localhost">p2made.localhost</a>
					</li>
				</ul>
			</div>
		</div>


		<div class="grid-item panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Portal Links</h3>
			</div>
			<div class="panel-body">
				<ul class="list-unstyled">
					<li>
						<a href="http://phpmyadmin.portal.localhost/" target="_blank" title="phpMyAdmin">phpMyAdmin</a>
					</li>
				</ul>
				<ul class="list-unstyled">
					<li>
						<a href="http://p2made.localhost/" target="_blank" title="p2made.localhost">p2made.localhost</a>
					</li>
				</ul>
			</div>
		</div>


<p class="text-primary">.text-primary</p>
<p class="text-secondary">.text-secondary</p>
<p class="text-success">.text-success</p>
<p class="text-danger">.text-danger</p>
<p class="text-warning">.text-warning</p>
<p class="text-info">.text-info</p>
<p class="text-light bg-dark">.text-light</p>
<p class="text-dark">.text-dark</p>
<p class="text-body">.text-body</p>
<p class="text-muted">.text-muted</p>
<p class="text-white bg-dark">.text-white</p>
<p class="text-black-50">.text-black-50</p>
<p class="text-white-50 bg-dark">.text-white-50</p>

<div class="p-3 mb-2 bg-primary text-white">.bg-primary</div>
<div class="p-3 mb-2 bg-secondary text-white">.bg-secondary</div>
<div class="p-3 mb-2 bg-success text-white">.bg-success</div>
<div class="p-3 mb-2 bg-danger text-white">.bg-danger</div>
<div class="p-3 mb-2 bg-warning text-dark">.bg-warning</div>
<div class="p-3 mb-2 bg-info text-white">.bg-info</div>
<div class="p-3 mb-2 bg-light text-dark">.bg-light</div>
<div class="p-3 mb-2 bg-dark text-white">.bg-dark</div>
<div class="p-3 mb-2 bg-white text-dark">.bg-white</div>
<div class="p-3 mb-2 bg-transparent text-dark">.bg-transparent</div>
 -->

<?php
/*
	'portal_links'         => require(__DIR__ . '/data/portal_links.php'),
	'training_yii'         => require(__DIR__ . '/data/training_yii.php'),
	'myfestivals_app'      => require(__DIR__ . '/data/myfestivals_app.php'),
	'p2made_contracting'   => require(__DIR__ . '/data/p2made_contracting.php'),
	'testbed_yii'          => require(__DIR__ . '/data/testbed_yii.php'),
	'yii_cms_tryouts'      => require(__DIR__ . '/data/yii_cms_tryouts.php'),
	'genealogy'            => require(__DIR__ . '/data/genealogy.php'),
	'yii_links'            => require(__DIR__ . '/data/yii_links.php'),
	'tutorials_references' => require(__DIR__ . '/data/tutorials_references.php'),
	'template_sources'     => require(__DIR__ . '/data/template_sources.php'),
	'time_zones'           => require(__DIR__ . '/data/time_zones.php'),
	'outside_docs'         => require(__DIR__ . '/data/outside_docs.php'),
 */
?>
