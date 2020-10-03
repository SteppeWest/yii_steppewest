<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Update Developer</title>
</head>
<body>

	<div class="wrap">

		<nav id="w3" class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
<div class="container">
<a class="navbar-brand" href="/">My Application</a>
<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#w3-collapse" aria-controls="w3-collapse" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
<div id="w3-collapse" class="collapse navbar-collapse">
<ul id="w4" class="navbar-nav ml-auto nav"><li class="nav-item"><a class="nav-link" href="/site/index.p2m">Home</a></li>
<li class="nav-item"><a class="nav-link" href="/category/index.p2m">Category</a></li>
<li class="nav-item"><a class="nav-link" href="/group/index.p2m">Group</a></li>
<li class="nav-item"><a class="nav-link" href="/subgroup/index.p2m">Subgroup</a></li>
<li class="nav-item"><a class="nav-link" href="/link/index.p2m">Link</a></li>
<li class="nav-item"><a class="nav-link" href="/gii.p2m">Gii</a></li>
<li class="nav-item"><a class="nav-link" href="/site/login.p2m">Login</a></li></ul></div>
</div>
</nav>
		<!-- Page Content -->

		<div class="container breadcrumbs">
			<div class="row">
				<div class="col-sm-12">
					<nav aria-label="breadcrumb"><ol id="w5" class="breadcrumb"><li class="breadcrumb-item"><a href="/">Home</a></li>
<li class="breadcrumb-item"><a href="/category/index.p2m">Categories</a></li>
<li class="breadcrumb-item"><a href="/category/1.p2m">developer</a></li>
<li class="breadcrumb-item active" aria-current="page">Update</li>
</ol></nav>									</div>
			</div>
		</div>

		<div class="container giiant-crud category-updates">

	<div class="row">
		<div class="col-sm-6">
			<h1>
				Update: <small>
					Developer				</small>
			</h1>
		</div>

		<div class="col-sm-6">
			<div class="crud-navigation float-right">
				<a class="btn btn-default" href="/category/1.p2m"><span class="glyphicon glyphicon-file"></span> View</a>			</div>
		</div>
	</div>

	<div class="category-form">

		<form id="Category" class="form-horizontal kv-form-horizontal kv-form-bs4" action="/category/update/1.p2m" method="post" role="form">
<input type="hidden" name="_csrf-frontend" value="IV_J-qhPlKFzbcj4a43Efy2-AOuuRRSh_CqERdbs-hJPa4Oj_AXTxikurIEt6IMPV8lEgskiI-TFEtMrkLjDeA==">
	<div class="error-summary" style="display:none"><p>Please fix the following errors:</p><ul></ul></div>
	<div class="row">
		<div class="col-sm-6">

			<div class="form-group">
				<div class="form-group highlight-addon row field-category-category_id">
<label class="col-form-label has-star col-md-3" for="category-category_id">Category ID</label>
<div class="col-md-9">
<input type="text" id="category-category_id" class="form-control" name="Category[category_id]" value="1" placeholder="Category">

<div class="help-block invalid-feedback"></div>
</div>
</div>

				<!-- attribute name -->
				<div class="form-group highlight-addon row field-category-name required">
<label class="col-form-label has-star col-md-3" for="category-name">Name</label>
<div class="col-md-9">
<input type="text" id="category-name" class="form-control" name="Category[name]" value="developer" maxlength="32" placeholder="Name" aria-required="true">

<div class="help-block invalid-feedback"></div>
</div>
</div>
				<!-- attribute title -->
				<div class="form-group highlight-addon row field-category-title">
<label class="col-form-label has-star col-md-3" for="category-title">Title</label>
<div class="col-md-9">
<input type="text" id="category-title" class="form-control" name="Category[title]" value="Developer" maxlength="32" placeholder="Title">

<div class="help-block invalid-feedback"></div>
</div>
</div>
				<!-- attribute hide -->
				<div class="form-group highlight-addon row field-category-hide">
<div class="col-md-3"></div><div class="col-md-9"><div class="form-check"><input type="hidden" name="Category[hide]" value="0"><input type="checkbox" id="category-hide" class="form-check-input" name="Category[hide]" value="1">
<label class="has-star form-check-label" for="category-hide">Hide</label>
<div class="help-block invalid-feedback"></div>
</div></div>
</div>			</div>

			<div class="form-group">
				<button type="submit" id="save-Category" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Save</button>			</div>

		</div>
	</div>

	<div class="row">
		<div class="col-sm-6">

			<div id="w2-container" class="tabs-x  tabs-above tab-align-left tabs-krajee"><ul id="w2" class="nav nav-tabs d-print-none" data-krajee-tabsX="tabsX_0b4b2adf" role="tablist"><li class="nav-item"><a class="nav-link active" href="#w2-tab0" data-toggle="tab" role="tab" aria-selected="false" aria-controls="w2-tab0"><i class="glyphicon glyphicon-book"></i> Group</a></li></ul>
<div class="tab-content  printable"><div class="h4 d-print-block d-none"><i class="glyphicon glyphicon-book"></i> Group</div>
<div id="w2-tab0" class="tab-pane fade show active"><div class="form-group" id="add-group">
<div id="w0" class="grid-view is-bs4 kv-grid-bs4 hide-resize" data-krajee-grid="kvGridInit_e5c77b1c" data-krajee-ps="ps_w0_container"><div class="card border-default">

<div id="w0-container" class="table-responsive kv-grid-container"><table class="kv-grid-table table table-hover kv-table-wrap"><thead>

<tr><th class="kv-align-center kv-align-middle" style="width:50px;" data-col-seq="0">#</th><th class="kv-align-top" data-col-seq="1">Name</th><th class="kv-align-top" data-col-seq="2">Title</th><th class="kv-align-middle" data-col-seq="3">Hide</th><th class="kv-align-middle" data-col-seq="4"></th></tr>

</thead>
<tbody>
<tr class="kv-tabform-row w0" data-key="0"><td class="kv-align-center kv-align-middle w0" style="width:50px;" data-col-seq="0">1</td><td class="kv-align-top w0" data-col-seq="1">
<input type="text" id="group-0-name" class="form-control" name="Group[0][name]" value="portal-links">
</td><td class="kv-align-top w0" data-col-seq="2">
<input type="text" id="group-0-title" class="form-control" name="Group[0][title]" value="Portal Links">
</td><td class="kv-align-middle w0" data-col-seq="3">
<div class="form-check"><input type="checkbox" id="group-0-hide" class="form-check-input" name="Group[0][hide]" value="1" style="position : relative; margin-top : -9px" labelOptions='{"class":"form-check-label"}'></div>
</td><td class="kv-align-middle w0" data-col-seq="4"><a id="group-del-btn" href="#" title="Delete" onClick="delRowGroup(0); return false;"><i class="glyphicon glyphicon-trash"></i></a></td></tr>
<tr class="kv-tabform-row w0" data-key="1"><td class="kv-align-center kv-align-middle w0" style="width:50px;" data-col-seq="0">2</td><td class="kv-align-top w0" data-col-seq="1">
<input type="text" id="group-1-name" class="form-control" name="Group[1][name]" value="training-yii">
</td><td class="kv-align-top w0" data-col-seq="2">
<input type="text" id="group-1-title" class="form-control" name="Group[1][title]" value="training.yii">
</td><td class="kv-align-middle w0" data-col-seq="3">
<div class="form-check"><input type="checkbox" id="group-1-hide" class="form-check-input" name="Group[1][hide]" value="1" style="position : relative; margin-top : -9px" labelOptions='{"class":"form-check-label"}'></div>
</td><td class="kv-align-middle w0" data-col-seq="4"><a id="group-del-btn" href="#" title="Delete" onClick="delRowGroup(1); return false;"><i class="glyphicon glyphicon-trash"></i></a></td></tr>
<tr class="kv-tabform-row w0" data-key="2"><td class="kv-align-center kv-align-middle w0" style="width:50px;" data-col-seq="0">3</td><td class="kv-align-top w0" data-col-seq="1">
<input type="text" id="group-2-name" class="form-control" name="Group[2][name]" value="myfestivals-app">
</td><td class="kv-align-top w0" data-col-seq="2">
<input type="text" id="group-2-title" class="form-control" name="Group[2][title]" value="myFestivals App">
</td><td class="kv-align-middle w0" data-col-seq="3">
<div class="form-check"><input type="checkbox" id="group-2-hide" class="form-check-input" name="Group[2][hide]" value="1" style="position : relative; margin-top : -9px" labelOptions='{"class":"form-check-label"}'></div>
</td><td class="kv-align-middle w0" data-col-seq="4"><a id="group-del-btn" href="#" title="Delete" onClick="delRowGroup(2); return false;"><i class="glyphicon glyphicon-trash"></i></a></td></tr>
<tr class="kv-tabform-row w0" data-key="3"><td class="kv-align-center kv-align-middle w0" style="width:50px;" data-col-seq="0">4</td><td class="kv-align-top w0" data-col-seq="1">
<input type="text" id="group-3-name" class="form-control" name="Group[3][name]" value="p2made-contracting">
</td><td class="kv-align-top w0" data-col-seq="2">
<input type="text" id="group-3-title" class="form-control" name="Group[3][title]" value="p2made contracting">
</td><td class="kv-align-middle w0" data-col-seq="3">
<div class="form-check"><input type="checkbox" id="group-3-hide" class="form-check-input" name="Group[3][hide]" value="1" style="position : relative; margin-top : -9px" labelOptions='{"class":"form-check-label"}'></div>
</td><td class="kv-align-middle w0" data-col-seq="4"><a id="group-del-btn" href="#" title="Delete" onClick="delRowGroup(3); return false;"><i class="glyphicon glyphicon-trash"></i></a></td></tr>
<tr class="kv-tabform-row w0" data-key="4"><td class="kv-align-center kv-align-middle w0" style="width:50px;" data-col-seq="0">5</td><td class="kv-align-top w0" data-col-seq="1">
<input type="text" id="group-4-name" class="form-control" name="Group[4][name]" value="testbed-yii">
</td><td class="kv-align-top w0" data-col-seq="2">
<input type="text" id="group-4-title" class="form-control" name="Group[4][title]" value="testbed.yii">
</td><td class="kv-align-middle w0" data-col-seq="3">
<div class="form-check"><input type="checkbox" id="group-4-hide" class="form-check-input" name="Group[4][hide]" value="1" style="position : relative; margin-top : -9px" labelOptions='{"class":"form-check-label"}'></div>
</td><td class="kv-align-middle w0" data-col-seq="4"><a id="group-del-btn" href="#" title="Delete" onClick="delRowGroup(4); return false;"><i class="glyphicon glyphicon-trash"></i></a></td></tr>
<tr class="kv-tabform-row w0" data-key="5"><td class="kv-align-center kv-align-middle w0" style="width:50px;" data-col-seq="0">6</td><td class="kv-align-top w0" data-col-seq="1">
<input type="text" id="group-5-name" class="form-control" name="Group[5][name]" value="yii-cms-tryouts">
</td><td class="kv-align-top w0" data-col-seq="2">
<input type="text" id="group-5-title" class="form-control" name="Group[5][title]" value="Yii CMS Tryouts">
</td><td class="kv-align-middle w0" data-col-seq="3">
<div class="form-check"><input type="checkbox" id="group-5-hide" class="form-check-input" name="Group[5][hide]" value="1" style="position : relative; margin-top : -9px" labelOptions='{"class":"form-check-label"}'></div>
</td><td class="kv-align-middle w0" data-col-seq="4"><a id="group-del-btn" href="#" title="Delete" onClick="delRowGroup(5); return false;"><i class="glyphicon glyphicon-trash"></i></a></td></tr>
<tr class="kv-tabform-row w0" data-key="6"><td class="kv-align-center kv-align-middle w0" style="width:50px;" data-col-seq="0">7</td><td class="kv-align-top w0" data-col-seq="1">
<input type="text" id="group-6-name" class="form-control" name="Group[6][name]" value="yii-links">
</td><td class="kv-align-top w0" data-col-seq="2">
<input type="text" id="group-6-title" class="form-control" name="Group[6][title]" value="Yii Links">
</td><td class="kv-align-middle w0" data-col-seq="3">
<div class="form-check"><input type="checkbox" id="group-6-hide" class="form-check-input" name="Group[6][hide]" value="1" style="position : relative; margin-top : -9px" labelOptions='{"class":"form-check-label"}'></div>
</td><td class="kv-align-middle w0" data-col-seq="4"><a id="group-del-btn" href="#" title="Delete" onClick="delRowGroup(6); return false;"><i class="glyphicon glyphicon-trash"></i></a></td></tr>
<tr class="kv-tabform-row w0" data-key="7"><td class="kv-align-center kv-align-middle w0" style="width:50px;" data-col-seq="0">8</td><td class="kv-align-top w0" data-col-seq="1">
<input type="text" id="group-7-name" class="form-control" name="Group[7][name]" value="tutorials-references">
</td><td class="kv-align-top w0" data-col-seq="2">
<input type="text" id="group-7-title" class="form-control" name="Group[7][title]" value="Tutorials and References">
</td><td class="kv-align-middle w0" data-col-seq="3">
<div class="form-check"><input type="checkbox" id="group-7-hide" class="form-check-input" name="Group[7][hide]" value="1" style="position : relative; margin-top : -9px" labelOptions='{"class":"form-check-label"}'></div>
</td><td class="kv-align-middle w0" data-col-seq="4"><a id="group-del-btn" href="#" title="Delete" onClick="delRowGroup(7); return false;"><i class="glyphicon glyphicon-trash"></i></a></td></tr>
<tr class="kv-tabform-row w0" data-key="8"><td class="kv-align-center kv-align-middle w0" style="width:50px;" data-col-seq="0">9</td><td class="kv-align-top w0" data-col-seq="1">
<input type="text" id="group-8-name" class="form-control" name="Group[8][name]" value="template-sources">
</td><td class="kv-align-top w0" data-col-seq="2">
<input type="text" id="group-8-title" class="form-control" name="Group[8][title]" value="Template Sources">
</td><td class="kv-align-middle w0" data-col-seq="3">
<div class="form-check"><input type="checkbox" id="group-8-hide" class="form-check-input" name="Group[8][hide]" value="1" style="position : relative; margin-top : -9px" labelOptions='{"class":"form-check-label"}'></div>
</td><td class="kv-align-middle w0" data-col-seq="4"><a id="group-del-btn" href="#" title="Delete" onClick="delRowGroup(8); return false;"><i class="glyphicon glyphicon-trash"></i></a></td></tr>
<tr class="kv-tabform-row w0" data-key="9"><td class="kv-align-center kv-align-middle w0" style="width:50px;" data-col-seq="0">10</td><td class="kv-align-top w0" data-col-seq="1">
<input type="text" id="group-9-name" class="form-control" name="Group[9][name]" value="time-zones">
</td><td class="kv-align-top w0" data-col-seq="2">
<input type="text" id="group-9-title" class="form-control" name="Group[9][title]" value="Time Zones">
</td><td class="kv-align-middle w0" data-col-seq="3">
<div class="form-check"><input type="checkbox" id="group-9-hide" class="form-check-input" name="Group[9][hide]" value="1" style="position : relative; margin-top : -9px" labelOptions='{"class":"form-check-label"}'></div>
</td><td class="kv-align-middle w0" data-col-seq="4"><a id="group-del-btn" href="#" title="Delete" onClick="delRowGroup(9); return false;"><i class="glyphicon glyphicon-trash"></i></a></td></tr>
</tbody></table></div>
<div class="kv-panel-after"><button type="button" class="btn btn-success kv-batch-create" onClick="addRowGroup()"><i class="glyphicon glyphicon-plus"></i>Add P2m Group</button></div>
</div></div></div>
</div>
</div></div>
		</div>
	</div>

	</form>
</div>

</div>

		<!-- / Page Content -->
	</div>

</body>
</html>
