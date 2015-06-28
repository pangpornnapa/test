<html>
<head>
<meta charset="utf-8">
<title> Select Bootstraps </title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="asset/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="asset/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="asset/js/bootstrap.min.js"></script>
</head>
<body>
<div class="row">
		 <div class="container theme-showcase" role="main"><?php
include('class/mysql_crud.php');
$db = new Database();
$db->connect();
//public function select($table, $rows = '*', $join = null, $where = null,
//$order = null, $limit = null){
$db->select('products'); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$res = $db->getResult();
//echo "<pre>";
//print_r($res);
?> 
<div class="row">
  <div class="col-xs-12 col-sm-6 col-md-8">.<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Bootstrap theme</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
	<div class="jumbotron">
        <h1>สวัสดี</h1>
        <p>ประเทศไทย </p>
      </div>
<!--border="1" style="border:1px #0000 solid;border-collapse:collapse;"-->
<h2 class="blog-post-title">Sample blog post</h2>
            <p class="blog-post-meta">January 1, 2014 by <a href="#">Mark</a></p>
<a href="frm_insert.php" class="btn btn-success btn-lg text-right" role="button">
<span class="glyphicon glyphicon-plus"><span> Insert</a>
<table class="table table-hover">
			<tr>
				<td class="active"><strong>prod_id</strong></td>
				<td class="success"><strong>vend_id</strong></td>
				<td class="warning"><strong>prod_name</strong></td>
				<td class="danger"><strong>prod_price</strong></td>
				<td class="info"><strong>prod_desc</strong></td>
				<td><strong>Edite</strong></td>
				<td><strong>Delete</strong></td>
			</tr>
			
<?php
	
foreach($res as $key => $value){?>
		<tr>
			<td><?=$value['prod_id']?></td>
			<td><?=$value['vend_id']?></td>
			<td><?=$value['prod_name']?></td>
			<td><?=$value['prod_price']?></td>
			<td><?=$value['prod_desc']?></td>
			<td><a href="frm_edit.php?prod_id=<?=$value['prod_id']?>">Edit</a></a></td>
			<td><a href="delete.php?prod_id=<?=$value['prod_id']?>">Delete</a></a></td>
		</tr>
		
		
		<?php
}
?>
</table></div>
  <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
</div>
</div>


</div>



</body>

</html>