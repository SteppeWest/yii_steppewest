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

		<?php
			foreach($dashboardData as $itemName => $gridItem) {
				$headingTag = Html::tag('h3', $gridItem['title'], [
					'class' => 'panel-title'
				]);
				$panelHeading  = Html::tag('div', $headingTag, [
					'class' => 'panel-heading',
					//'encode' => false,
				]);
				//$panelBody  = Html::tag('div', $gridItem['subgroups'], [
				$panelBody  = Html::tag('div', 'subgroups', [
					'class' => 'panel-body',
					//'encode' => false,
				]);
				echo Html::tag('div', $panelHeading . $panelBody, [
					'class' => 'grid-item panel panel-default',
					//'encode' => false,
				]) . PHP_EOL;
			}
		?>


	</div>

</div><!-- /#site-index -->

<!-- ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### -->

<!-- ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### -->

<!-- ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### -->

