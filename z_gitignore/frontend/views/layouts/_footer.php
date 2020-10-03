<?php
/**
 * footer.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things-demo
 * @license MIT
 */

use yii\bootstrap4\Html;

/* @var $this \yii\web\View */

?>

<footer class="footer container">
	<hr>

	<div class="row">
		<div class="col-sm-6">
			<p class="float-left">&copy; My Company <?= date('Y') ?></p>
		</div>
		<div class="col-sm-6">
			<p class="float-right"><?= Yii::powered() ?></p>
		</div>
	</div>
</footer>
