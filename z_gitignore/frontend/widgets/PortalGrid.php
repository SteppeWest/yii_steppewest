<?php
namespace frontend\widgets;

use yii\bootstrap4\Html;

class PortalGrid extends \yii\bootstrap4\Widget
{
	public $dataProvider;

	private $summary = '';

	private $separator = "\n";

	/**
	 * Renders all data models.
	 * @return string the rendering result
	 */
	public function renderItems()
	{
		$models = $this->dataProvider->getModels();
		$keys = $this->dataProvider->getKeys();
		$items = [];

		foreach (array_values($models) as $index => $model) {
			$items[] = $this->renderItem($model, $index);
		}

		return implode($this->separator, $items);
	}

	/**
	 * Renders one grid-item card
	 * <div class="grid-item card">
	 */
	private function renderItem($groupModel, $groupIndex)
	{
		$content = '';
		$options = ['class' => 'grid-item card'];

		$content .= $this->renderCardHeader($groupModel->title);
		$content .= $this->renderCardBody($groupModel, $groupIndex);

		return Html::tag('div', $content, $options);
	}

	/**
	 * Renders card header
	 * <h4 class="card-header bg-primary text-white">title</h4>
	 */
	private function renderCardHeader($title)
	{
		$options = ['class' => 'card-header bg-primary text-white'];
		return Html::tag('h5', $title, $options);
	}

	/**
	 * Renders card body
	 * <div class="card-body">
	 */
	private function renderCardBody($groupModel, $groupIndex)
	{
		$options = ['class' => 'card-body'];
		$items = [];

		foreach (array_values($groupModel->subgroups) as $index => $model) {
			$items[] = $this->renderSubgroup($model, $index);
		}

		$content = implode($this->separator, $items);

		return Html::tag('div', $content, $options);
	}

	/**
	 * Renders a subgroup as list-group
	 * <ul class="list-group">
	 */
	private function renderSubgroup($model, $index)
	{
		$items = [];

		foreach (array_values($model->links) as $linkModel) {
			$items[] = Html::tag('li', $linkModel->fullLink, []);
		}

		$header = Html::tag('h6', $model->title, ['class' => 'active']);
		$content = implode($this->separator, $items);

		return $header . $this->separator . Html::tag('ul', $content, []);
	}

	/**
	 * Initializes the view.
	 */
	public function init()
	{
		parent::init();
		if ($this->dataProvider === null) {
			throw new InvalidConfigException('The "dataProvider" property must be set.');
		}
		if (!isset($this->options['id'])) {
			$this->options['id'] = $this->getId();
		}

		/**
		$model = $this->findModel($id);
		$providerGroup = new \yii\data\ArrayDataProvider([
			'allModels' => $model->groups,
		]);
		return $this->render('view', [
			'model' => $this->findModel($id),
			'providerGroup' => $providerGroup,
		]);
		 */
	}

	/**
	 * Runs the widget.
	 */
	public function run()
	{
		$options = ['class' => 'grid'];
		$content = $this->renderItems();

		echo Html::tag('div', $content, $options);
	}

/*
	<div class="grid">
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
	</div>
 */

/**
			'category_id' => 'Category ID',
			'name' => 'Name',
			'title' => 'Title',
			'hide' => 'Hide',

			'group_id' => 'Group ID',
			'category_id' => 'Category ID',
			'name' => 'Name',
			'title' => 'Title',
			'hide' => 'Hide',

			'subgroup_id' => 'Subgroup ID',
			'group_id' => 'Group ID',
			'name' => 'Name',
			'title' => 'Title',
			'hide' => 'Hide',

			'link_id' => 'Link ID',
			'subgroup_id' => 'Subgroup ID',
			'name' => 'Name',
			'title' => 'Title',
			'link' => 'Link',
			'https' => 'Https',
			'hide' => 'Hide',
 */

/**
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
 */

/**
	public function init()
	{
		parent::init();
		if ($this->message === null) {
			$this->message = 'Hello World';
		}
	}

	public function run()
	{
		return Html::encode($this->message);
	}
 */
}
