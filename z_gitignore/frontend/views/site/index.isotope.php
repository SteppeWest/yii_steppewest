<?php
use yii\bootstrap4\Html;
use yii\bootstrap4\Button;
use frontend\widgets\MasonryItem;

//p2m\sbAdmin\assets\SBAdmin2Asset::register($this);
//p2m\assets\TimelineAsset::register($this);
//p2m\assets\MorrisAsset::register($this);

p2m\assets\P2CoreAsset::register($this);
frontend\assets\MasonryAsset::register($this);

$this->title = 'P2 Portal Dashboard';
$dashboardData = [
	'portal_links'         => require(__DIR__ . '/../data/portal_links.php'),
	'training_yii'         => require(__DIR__ . '/../data/training_yii.php'),
	'myfestivals_app'      => require(__DIR__ . '/../data/myfestivals_app.php'),
	'p2made_contracting'   => require(__DIR__ . '/../data/p2made_contracting.php'),
	'testbed_yii'          => require(__DIR__ . '/../data/testbed_yii.php'),
	'yii_cms_tryouts'      => require(__DIR__ . '/../data/yii_cms_tryouts.php'),
	'genealogy'            => require(__DIR__ . '/../data/genealogy.php'),
	'yii_links'            => require(__DIR__ . '/../data/yii_links.php'),
	'tutorials_references' => require(__DIR__ . '/../data/tutorials_references.php'),
	'template_sources'     => require(__DIR__ . '/../data/template_sources.php'),
	'time_zones'           => require(__DIR__ . '/../data/time_zones.php'),
	'outside_docs'         => require(__DIR__ . '/../data/outside_docs.php'),
];

/* @var $this yii\web\View */
/* @var $form yii\bootstrap4\ActiveForm */
?>
<div class="container site-index">

	<div class="grid">

		<!-- < ?= //MasonryItem::widget(['panelData' => $dashboardData['portal_links']]) ?> -->

		<!--
		<div class="grid-item panel panel-default">
			<?php $panelData = $dashboardData['portal_links']; ?>
			<div class="panel-heading">
				<h3 class="panel-title"><?= $panelData['title'] ?></h3>
			</div>
			<div class="panel-body">
			<?php foreach ($panelData['subgroups'] as $item_group) { ?>
				<ul class="list-unstyled">
				<?php foreach ($item_group as $item) { ?>
					<li><a href="<?= $item['url'] ?>" target="_blank" title="<?= $item['name'] ?>"><?= $item['name'] ?></a></li>
				<?php } ?>
				</ul>
			<?php } ?>
			</div>
		</div>
		 -->

		<div class="grid-item panel panel-default">
			<?php $panelData = $dashboardData['training_yii']; ?>
			<div class="panel-heading">
				<h3 class="panel-title"><?= $panelData['title'] ?></h3>
			</div>
			<div class="panel-body">
			<?php foreach ($panelData['subgroups'] as $item_group) { ?>
				<ul class="list-unstyled">
				<?php foreach ($item_group as $item) { ?>
					<li><a href="<?= $item['url'] ?>" target="_blank" title="<?= $item['name'] ?>"><?= $item['name'] ?></a></li>
				<?php } ?>
				</ul>
			<?php } ?>
			</div>
		</div>

		<div class="grid-item panel panel-default">
			<?php $panelData = $dashboardData['myfestivals_app']; ?>
			<div class="panel-heading">
				<h3 class="panel-title"><?= $panelData['title'] ?></h3>
			</div>
			<div class="panel-body">
			<?php foreach ($panelData['subgroups'] as $item_group) { ?>
				<ul class="list-unstyled">
				<?php foreach ($item_group as $item) { ?>
					<li><a href="<?= $item['url'] ?>" target="_blank" title="<?= $item['name'] ?>"><?= $item['name'] ?></a></li>
				<?php } ?>
				</ul>
			<?php } ?>
			</div>
		</div>

		<div class="grid-item panel panel-default">
			<?php $panelData = $dashboardData['p2made_contracting']; ?>
			<div class="panel-heading">
				<h3 class="panel-title"><?= $panelData['title'] ?></h3>
			</div>
			<div class="panel-body">
			<?php foreach ($panelData['subgroups'] as $item_group) { ?>
				<ul class="list-unstyled">
				<?php foreach ($item_group as $item) { ?>
					<li><a href="<?= $item['url'] ?>" target="_blank" title="<?= $item['name'] ?>"><?= $item['name'] ?></a></li>
				<?php } ?>
				</ul>
			<?php } ?>
			</div>
		</div>

		<div class="grid-item panel panel-default">
			<?php $panelData = $dashboardData['testbed_yii']; ?>
			<div class="panel-heading">
				<h3 class="panel-title"><?= $panelData['title'] ?></h3>
			</div>
			<div class="panel-body">
			<?php foreach ($panelData['subgroups'] as $item_group) { ?>
				<ul class="list-unstyled">
				<?php foreach ($item_group as $item) { ?>
					<li><a href="<?= $item['url'] ?>" target="_blank" title="<?= $item['name'] ?>"><?= $item['name'] ?></a></li>
				<?php } ?>
				</ul>
			<?php } ?>
			</div>
		</div>

		<div class="grid-item panel panel-default">
			<?php $panelData = $dashboardData['genealogy']; ?>
			<div class="panel-heading">
				<h3 class="panel-title"><?= $panelData['title'] ?></h3>
			</div>
			<div class="panel-body">
			<?php foreach ($panelData['subgroups'] as $item_group) { ?>
				<ul class="list-unstyled">
				<?php foreach ($item_group as $item) { ?>
					<li><a href="<?= $item['url'] ?>" target="_blank" title="<?= $item['name'] ?>"><?= $item['name'] ?></a></li>
				<?php } ?>
				</ul>
			<?php } ?>
			</div>
		</div>

		<div class="grid-item panel panel-default">
			<?php $panelData = $dashboardData['yii_links']; ?>
			<div class="panel-heading">
				<h3 class="panel-title"><?= $panelData['title'] ?></h3>
			</div>
			<div class="panel-body">
			<?php foreach ($panelData['subgroups'] as $item_group) { ?>
				<ul class="list-unstyled">
				<?php foreach ($item_group as $item) { ?>
					<li><a href="<?= $item['url'] ?>" target="_blank" title="<?= $item['name'] ?>"><?= $item['name'] ?></a></li>
				<?php } ?>
				</ul>
			<?php } ?>
			</div>
		</div>

		<div class="grid-item panel panel-default">
			<?php $panelData = $dashboardData['tutorials_references']; ?>
			<div class="panel-heading">
				<h3 class="panel-title"><?= $panelData['title'] ?></h3>
			</div>
			<div class="panel-body">
			<?php foreach ($panelData['subgroups'] as $item_group) { ?>
				<ul class="list-unstyled">
				<?php foreach ($item_group as $item) { ?>
					<li><a href="<?= $item['url'] ?>" target="_blank" title="<?= $item['name'] ?>"><?= $item['name'] ?></a></li>
				<?php } ?>
				</ul>
			<?php } ?>
			</div>
		</div>

		<div class="grid-item panel panel-default">
			<?php $panelData = $dashboardData['template_sources']; ?>
			<div class="panel-heading">
				<h3 class="panel-title"><?= $panelData['title'] ?></h3>
			</div>
			<div class="panel-body">
			<?php foreach ($panelData['subgroups'] as $item_group) { ?>
				<ul class="list-unstyled">
				<?php foreach ($item_group as $item) { ?>
					<li><a href="<?= $item['url'] ?>" target="_blank" title="<?= $item['name'] ?>"><?= $item['name'] ?></a></li>
				<?php } ?>
				</ul>
			<?php } ?>
			</div>
		</div>

		<div class="grid-item panel panel-default">
			<?php $panelData = $dashboardData['time_zones']; ?>
			<div class="panel-heading">
				<h3 class="panel-title"><?= $panelData['title'] ?></h3>
			</div>
			<div class="panel-body">
			<?php foreach ($panelData['subgroups'] as $item_group) { ?>
				<ul class="list-unstyled">
				<?php foreach ($item_group as $item) { ?>
					<li><a href="<?= $item['url'] ?>" target="_blank" title="<?= $item['name'] ?>"><?= $item['name'] ?></a></li>
				<?php } ?>
				</ul>
			<?php } ?>
			</div>
		</div>

		<div class="grid-item panel panel-default">
			<?php $panelData = $dashboardData['yii_cms_tryouts']; ?>
			<div class="panel-heading">
				<h3 class="panel-title"><?= $panelData['title'] ?></h3>
			</div>
			<div class="panel-body">
			<?php foreach ($panelData['subgroups'] as $item_group) { ?>
				<ul class="list-unstyled">
				<?php foreach ($item_group as $item) { ?>
					<li><a href="<?= $item['url'] ?>" target="_blank" title="<?= $item['name'] ?>"><?= $item['name'] ?></a></li>
				<?php } ?>
				</ul>
			<?php } ?>
			</div>
		</div>

		<div class="grid-item panel panel-default">
			<?php $panelData = $dashboardData['outside_docs']; ?>
			<div class="panel-heading">
				<h3 class="panel-title"><?= $panelData['title'] ?></h3>
			</div>
			<div class="panel-body">
			<?php foreach ($panelData['subgroups'] as $item_group) { ?>
				<ul class="list-unstyled">
				<?php foreach ($item_group as $item) { ?>
					<li><a href="<?= $item['url'] ?>" target="_blank" title="<?= $item['name'] ?>"><?= $item['name'] ?></a></li>
				<?php } ?>
				</ul>
			<?php } ?>
			</div>
		</div>

	</div>

</div><!-- /#site-index -->
