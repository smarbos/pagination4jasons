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
	  <script src="app.js"></script>
	  <!-- Optionally add helpers - button, thumbnail and/or media -->
	  <link rel="stylesheet" href="fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
	  <script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
	  <script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

	  <link rel="stylesheet" href="fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
	  <script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
	  <script type="text/javascript">var switchTo5x=true;</script>
	  <script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
	  <script type="text/javascript">stLight.options({publisher: "ur-75a84cea-7e3-97bf-8822-489eda79b5a", doNotHash: false, doNotCopy: false, hashAddressBar: true});</script>
	</head>
	<body ng-controller="StoreController as store">
		<?php
		require('includes/config.php');
		$id = $_GET['id']-1;
		?>
		<div class="container" id="containerProducto">
			<div class="row row-centered text-center">
				<div class="col-sm-5 col-sm-push-7">
		          	<div id="infoProducto">
		          		<h1 class="text-center">{{store.products[<?php echo $id; ?>].name}}</h1>
		          		<h3 class="text-center">{{store.products[<?php echo $id; ?>].description}}</h3>
		          	</div>
		        </div>
		        <div class="col-sm-7 col-sm-pull-5">
		          	<div id="imagenProducto">
		          		<img class="img-rounded" id="imagenCuadroproducto2" ng-src="img/{{store.products[<?php echo $id; ?>].images}}.jpg" alt="{{product.name}}">
		          	</div>
		        </div>
		        <div class="col-sm-7">
		          	<div id="thumbsProducto">
		          		<img class="thumbnail" id="thumbCuadroproducto" ng-src="img/{{store.products[<?php echo $id; ?>].images}}.jpg" alt="{{product.name}}">
		          		<img class="thumbnail" id="thumbCuadroproducto" ng-src="img/{{store.products[<?php echo $id; ?>].images}}.jpg" alt="{{product.name}}">
		          		<img class="thumbnail" id="thumbCuadroproducto" ng-src="img/{{store.products[<?php echo $id; ?>].images}}.jpg" alt="{{product.name}}">
		          	</div>
		        </div>
		        <div class="col-sm-5">
		          	<div id="botonComprarProducto">
		          		<h2>{{store.products[<?php echo $id; ?>].price | currency}}</h2>
		          		<button type="button" class="btn btn-default btn-lg">COMPRAR <span class="glyphicon glyphicon-shopping-cart"></span></button>
		          	</div>
		        </div>
		        <div class="col-sm-7">
		          	<div id="socialProducto">
		          		<span class='st_facebook_large' displayText='Facebook'></span>
						<span class='st_twitter_large' displayText='Tweet'></span>
						<span class='st_pinterest_large' displayText='Pinterest'></span>
						<span class='st_email_large' displayText='Email'></span>
						<span class='st_sharethis_large' displayText='ShareThis'></span>
						<span class='st_fblike_large' displayText='Facebook Like'></span>
		          	</div>
			</div><!-- /.row -->

    	</div><!-- /.container-fluid -->
    	<flow-type></flow-type>

	</body>
</html>
