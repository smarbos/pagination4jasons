<!DOCTYPE html>
<html ng-app="gemStore">
	<head>
	  <title>Triangulo Magico</title>
	  <meta charset='UTF-8'>
	  <meta content='La web de Mora <3.' lang='es' name='description'>
	  <meta content='Damian Mantuano' name='author'>
	  <meta content='width=device-width, initial-scale=1' name='viewport'>
	  <link href='//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css' rel='stylesheet'>
	  <link href='//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css' rel='stylesheet'>
	  <link href='css/personal.css' rel='stylesheet'>
	  <script src="js/jquery/jquery-1.11.1.min.js" type="text/javascript" ></script>
	  <link href="fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" rel="stylesheet" />
	  <script src="fancybox/source/jquery.fancybox.pack.js?v=2.1.5" type="text/javascript"></script>
	  <script src="fancybox/lib/jquery.mousewheel-3.0.6.pack.js" type="text/javascript"></script>

	  <script src='//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'></script>
	  <script src="js/FlowType.js"></script>
	  <script src="js/angular/angular.js"></script>
	  <script src="js/angular/angular-route.js"></script>
	  <script src="js/ui-bootstrap-tpls-0.11.2.min.js"></script>
	  <script src="app.js"></script>
	  <script src="js/ui-bootstrap-tpls-0.11.2.min.js"></script>
	  <!-- Optionally add helpers - button, thumbnail and/or media -->
	  <link rel="stylesheet" href="fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
	  <script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
	  <script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

	  <link rel="stylesheet" href="fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
	  <script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
	</head>
	<body ng-controller="StoreController as store">
		<?php
require('includes/config.php');
?>
		<div class="container-fluid" >
			<a href="index.php"><h1 class="text-center">Triangulo Magico</h1><h3 class="text-center">Feria americana!</h3></a>
			<p>&nbsp;</p>
			<div class="btn-group btn-group-justified" id="navBar">
				<div class="btn-group">
					<button type="button" class="btn btn-default">Que hay de nuevo?</button>
				</div>
				<div class="btn-group">
					<button type="button" class="btn btn-default">Ofertas</button>
				</div>
				<div class="btn-group">
					<button type="button" class="btn btn-default">Ayuda</button>
				</div>
				<div class="btn-group">
					<button type="button" class="btn btn-default">Contacto</button>
				</div>
			</div>
			<div class="row row-centered text-center">
	        	<div class="col-lg-3 col-centered img-rounded" id="cuadroProducto" ng-repeat="product in store.products">
	        		<a  class="various" data-fancybox-type="iframe" href="producto.php?id={{product.id}}">
		          	<div class="text-center wrapper">
		          		<img class="img-rounded" id="imagenCuadroproducto" ng-src="img/{{product.images}}.jpg" alt="{{product.name}}">
		          		<div class="ribbon-wrapper-green"  ng-show="{{product.discount}}">
		          			<div class="ribbon-green">Oferta!</div>
		          		</div>
		          	</div>
		          	<div class="img-rounded" id="infoCuadroProducto">
			          	<h1 class="text-center">{{product.name}}</h1>
			          	<h3 class="text-center">{{product.description | limitTo : 30}}</h3>
			          	<h2 class="text-center">{{product.price | currency}} </h2>
		          </div>
		            </a>
	        	</div><!-- /.col-lg -->
	      	

<div ng-controller="PaginationDemoCtrl">
    <h4>Default</h4>
    <pagination total-items="totalItems" ng-model="currentPage" ng-change="pageChanged()"></pagination>
    <pagination boundary-links="true" total-items="totalItems" ng-model="currentPage" class="pagination-sm" previous-text="&lsaquo;" next-text="&rsaquo;" first-text="&laquo;" last-text="&raquo;"></pagination>
    <pagination direction-links="false" boundary-links="true" total-items="totalItems" ng-model="currentPage"></pagination>
    <pagination direction-links="false" total-items="totalItems" ng-model="currentPage" num-pages="smallnumPages"></pagination>
    <pre>The selected page no: {{currentPage}} from {{totalItems}}</pre>
    <button class="btn btn-info" ng-click="setPage(5)">Set current page to: 3</button>

    <hr />
    <h4>Pager</h4>
    <pager total-items="totalItems" ng-model="currentPage"></pager>

    <hr />
    <h4>Limit the maximum visible buttons</h4>
    <pagination total-items="bigTotalItems" ng-model="bigCurrentPage" max-size="maxSize" class="pagination-sm" boundary-links="true"></pagination>
    <pagination total-items="bigTotalItems" ng-model="bigCurrentPage" max-size="maxSize" class="pagination-sm" boundary-links="true" rotate="false" num-pages="numPages"></pagination>
    <pre>Page: {{bigCurrentPage}} / {{numPages}}</pre>
</div>



	      <!-- /.row -->
			<div class="footerx">
		      	<div class="containerx">
					<?php
						$file = 'store-products.json';
						$current = file_get_contents($file);
						$sth = mysql_query("SELECT * FROM productos");
						$rows = array();
						while($r = mysql_fetch_assoc($sth)) {
						    $rows[] = $r;
						}
						$data = json_encode($rows);
						$ndata = str_replace("\/", "/", $data);
						file_put_contents($file, $ndata);
					?>
			        <p class="text-center">2014. contacto@fuckee.com</p>
		      	</div><!-- /.container -->
	      	</div><!-- /.footer -->
    	</div><!-- /.container-fluid -->
    	<flow-type></flow-type>
    	<script type="text/javascript">
    $("a#fancyBoxLink").fancybox({
        'href'   : '#detallesProducto',
        'titleShow'  : false,
        'transitionIn'  : 'elastic',
        'transitionOut' : 'elastic'
    });
    $(document).ready(function() {
	$(".various").fancybox({
		'width'				: '30%',
		'height'			: '90%',
        'autoScale'     	: false,
        'transitionIn'		: 'elastic',
		'transitionOut'		: 'elastic',
		'fitToView'         : true,
		'type'				: 'iframe'
	});
});
</script>
	</body>
</html>

