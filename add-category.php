<!DOCTYPE html>
<html lang="en" class="default-style layout-fixed layout-navbar-fixed">

<!-- Mirrored from html.phoenixcoded.net/empire/bootstrap/default/layouts_sidenav_dark.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 09 May 2020 05:49:42 GMT -->
<head>
<title>Empire | B4+ admin template</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
<meta name="description" content="Empire is one of the unique admin template built on top of Bootstrap 4 framework. It is easy to customize, flexible code styles, well tested, modern & responsive are the topmost key factors of Empire Dashboard Template" />
<meta name="keywords" content="bootstrap admin template, dashboard template, backend panel, bootstrap 4, backend template, dashboard template, saas admin, CRM dashboard, eCommerce dashboard">
<meta name="author" content="Codedthemes" />
<link rel="icon" type="image/x-icon" href="assets/img/favicon.ico">

<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

<link rel="stylesheet" href="assets/fonts/fontawesome.css">
<link rel="stylesheet" href="assets/fonts/ionicons.css">
<link rel="stylesheet" href="assets/fonts/linearicons.css">
<link rel="stylesheet" href="assets/fonts/open-iconic.css">
<link rel="stylesheet" href="assets/fonts/pe-icon-7-stroke.css">
<link rel="stylesheet" href="assets/fonts/feather.css">

<link rel="stylesheet" href="assets/css/bootstrap-material.css">
<link rel="stylesheet" href="assets/css/shreerang-material.css">
<link rel="stylesheet" href="assets/css/uikit.css">

<link rel="stylesheet" href="assets/libs/perfect-scrollbar/perfect-scrollbar.css">
<link rel="stylesheet" href="assets/libs/flot/flot.css">
</head>
<body>

<div class="page-loader">
<div class="bg-primary"></div>
</div>


<div class="layout-wrapper layout-2">
<div class="layout-inner">



<?php include 'menu.php'; ?>


<div class="layout-container">

<?php include 'header.php'; ?>


<div class="layout-content">

<div class="container-fluid flex-grow-1 container-p-y">
<h4 class="font-weight-bold py-3 mb-0">Dashboard</h4>
<!-- <div class="text-muted small mt-0 mb-4 d-block breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="#"><i class="feather icon-home"></i></a></li>
<li class="breadcrumb-item"><a href="#">Library</a></li>
<li class="breadcrumb-item active">Data</li>
</ol>
</div> -->
<div class="row">

<div class="col-lg-12">
<div class="row">
	<div class="col-lg-6 ">
			<div class="card mb-4  ">
<h6 class="card-header">Category</h6>
<div class="card-body">
<input type="text" class="form-control mb-1" placeholder="Enter Category
">
<div class="clearfix"></div>

<button type="button" class="btn btn-round mt-2 btn-primary">Primary</button>
</div>

</div>
	</div>

		

<div class="col-lg-6 ">
			<div class="card mb-4 	 " >
<h6 class="card-header">Sub Category</h6>
<div class="card-body">
<input type="text" class="form-control" placeholder="Enter Sub Category
">
<div class="clearfix"></div>
</div>
<div class="card-body demo-vertical-spacing-sm">
<select class="custom-select">
<option selected="">Select Category</option>
<option>One</option>
<option>Two</option>
<option>Three</option>
</select>
<button type="button" class="btn btn-round btn-primary">Primary</button>
</div>




	</div>


	
		




	
</div>

<div class="col-lg-6">
	


		
	</div>



</div>
<div class="card">
<div class="card-body">
<div class="row align-items-center m-l-0">
<div class="col-sm-6">
</div>
<div class="col-sm-6 text-right">
<!-- <button class="btn btn-success btn-sm mb-3 btn-round" data-toggle="modal" data-target="#modal-report"><i class="feather icon-plus"></i> Customers</button> -->
</div>
</div>
 <div class="table-responsive">
<div id="report-table_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
<div class="row">
   <div class="col-sm-12 col-md-6">
      <div class="dataTables_length" id="report-table_length">
         <label>
            Show 
            <select name="report-table_length" aria-controls="report-table" class="form-control form-control-sm">
               <option value="10">10</option>
               <option value="25">25</option>
               <option value="50">50</option>
               <option value="100">100</option>
            </select>
            entries
         </label>
      </div>
   </div>
   <div class="col-sm-12 col-md-6">
      <div id="report-table_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="report-table"></label></div>
   </div>
</div>
<div class="row">
<div class="col-sm-12">
<table id="report-table" class="table mb-0 dataTable no-footer" role="grid" aria-describedby="report-table_info">
<thead>
<tr role="row">
   <th class="sorting" tabindex="0" aria-controls="report-table" rowspan="1" colspan="1" aria-label="Image: activate to sort column ascending" style="width: 47px;">ID</th>
   <th class="sorting" tabindex="0" aria-controls="report-table" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 75px;">Category</th>
   <th class="sorting" tabindex="0" aria-controls="report-table" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 95px;">Sub Category</th>
  
 
   <th class="sorting" tabindex="0" aria-controls="report-table" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 49px;">Status</th>
   <th class="sorting" tabindex="0" aria-controls="report-table" rowspan="1" colspan="1" aria-label="Options: activate to sort column ascending" style="width: 132px;">Options</th>
</tr>
</thead>
<tbody>








 






<tr role="row" class="odd">
<td>1</td>
<td>Micheal Pewd</td>

<td><select class="custom-select">
<option selected="">Select Sub Category</option>
<option>One</option>
<option>Two</option>
<option>Thre</td>

<td><span class="badge badge-danger">Disabled</span></td>
<td>
<a href="#!" class="btn btn-info btn-sm"><i class="feather icon-edit"></i>&nbsp;Edit </a>
<a href="#!" class="btn btn-danger btn-sm"><i class="feather icon-trash-2"></i>&nbsp;Delete </a>
</td>
</tr>



</tbody>
</table>
</div>

</div>

<!-- <div class="row">
	<div class="col-sm-12 col-md-5">
		<div class="dataTables_info" id="report-table_info" role="status" aria-live="polite">Showing 1 to 10 of 15 entries</div>
	</div>
	<div class="col-sm-12 col-md-7">
		<div class="dataTables_paginate paging_simple_numbers" id="report-table_paginate">
			<ul class="pagination"><li class="paginate_button page-item previous disabled" id="report-table_previous"><a href="#" aria-controls="report-table" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="report-table" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="report-table" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item next" id="report-table_next"><a href="#" aria-controls="report-table" data-dt-idx="3" tabindex="0" class="page-link">Next</a></li></ul>
	</div>
</div>
</div>
 -->

</div>
</div>
</div>
</div>
</div>

<!-- <div class="col-lg-7">
<div class="card mb-4">
<div class="card-header with-elements">
<h6 class="card-header-title mb-0">Statistics</h6>
<div class="card-header-elements ml-auto">
<label class="text m-0">
<span class="text-light text-tiny font-weight-semibold align-middle">SHOW STATS</span>
<span class="switcher switcher-primary switcher-sm d-inline-block align-middle mr-0 ml-2"><input type="checkbox" class="switcher-input" checked><span class="switcher-indicator"><span class="switcher-yes"></span><span class="switcher-no"></span></span></span>
</label>
</div>
</div>
<div class="card-body">
<div id="statistics-chart-1" style="height:300px"></div>
</div>
</div>
</div> -->

</div>





</div>


<?php include 'footer.php'; ?>
</body>

<!-- Mirrored from html.phoenixcoded.net/empire/bootstrap/default/layouts_sidenav_dark.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 09 May 2020 05:49:42 GMT -->
</html>
