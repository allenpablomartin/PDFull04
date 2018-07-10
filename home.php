<?php 
	//Array Secuencial
	//$producto = array("iPhone 6", 599.99, 600);

	//Array Asociativo

	//$producto = array(
	//	"nombre" => "iPhone6", 
	//	"precio" => "599.99", 
	//	"stock" => 600
	//);

	$api = file_get_contents("http://localhost/MercadoTECH/api/");

	$productos = json_decode($api);

//	print_r($productos);

?>

<section id="page">
				<!-- PRODUCTOS DESTACADOS -->
<div class="shoes-grid">
	<div class="products">
		<h5 class="latest-product">PRODUCTOS DESTACADOS</h5>
	</div>
	<div class="product-left">
		<!-- Producto #1 -->

		<?php
		
			//for( CONTADOR; CONDICION; INCREMENTO ){
			//$i -> variable "incremental" 
			for( $i = 0; $i < count($productos); $i++ ){ 
	
			/*	if( ($i+1) % 3 == 0 ){  //<-- Si es multiplo de 3... //<-- El signo % me da el resto de la division de $i+1 / 3
					$class = "grid-top-chain";
				} else {
					$class = null;
				}*/
				//Operador ternario
				//$class = ( sCONDITION ) ? valor_si_verdadero : valor_si_falso;
				$class = ( ($i+1) % 3 == 0 ) ? "grid-top-chain" : null;
		?>

		<div class="col-sm-4 col-md-4 chain-grid <?php echo $class ?>">
			<a href="?p=producto&id=<?php echo $productos[$i]->idProducto?>"><img class="img-responsive chain" src="<?php echo $productos[$i]->Imagen ?>" alt=" " /></a>
			<div class="grid-chain-bottom">
				<h6><a href="?p=producto&id=<?php echo $productos[$i]->idProducto?>"><?php echo $productos[$i]->Nombre ?></a></h6>
				<div class="star-price">
					<div class="dolor-grid"> 
						<span class="actual">$<?php echo $productos[$i]->Precio ?></span>
					</div>
					<a class="now-get get-cart" href="?p=producto&id=<?php echo $productos[$i]->idProducto?>">VER MÁS</a> 
					<div class="clearfix"></div>
				</div>
			</div>
		</div>

		<?php }	?>
		
<!-- ULTIMOS PRODUCTOS -->
<div class="shoes-grid">
	<div class="products">
		<h5 class="latest-product">ULTIMOS PRODUCTOS</h5>	
		<a class="view-all" href="productos.html">VER TODOS<span></span></a>
	</div>
	<div class="product-left">
		<!-- Producto #1 -->
		<div class="col-sm-4 col-md-4 chain-grid">
			<a href="producto.html"><img class="img-responsive chain" src="images/productos/P004.jpg" alt=" " /></a>
			<span class="star"></span>
			<div class="grid-chain-bottom">
				<h6><a href="producto.html">Lorem ipsum dolor #1</a></h6>
				<div class="star-price">
					<div class="dolor-grid"> 
						<span class="actual">$300</span>
					</div>
					<a class="now-get get-cart" href="producto.html">VER MÁS</a> 
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<!-- Producto #2 -->
		<div class="col-sm-4 col-md-4 chain-grid">
			<a href="producto.html"><img class="img-responsive chain" src="images/productos/P005.jpg" alt=" " /></a>
			<span class="star"></span>
			<div class="grid-chain-bottom">
				<h6><a href="producto.html">Lorem ipsum dolor #2</a></h6>
				<div class="star-price">
					<div class="dolor-grid"> 
						<span class="actual">$300</span>
					</div>
					<a class="now-get get-cart" href="producto.html">VER MÁS</a> 
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<!-- Producto #3 -->
		<div class="col-sm-4 col-md-4 chain-grid grid-top-chain">
			<a href="producto.html"><img class="img-responsive chain" src="images/productos/P006.jpg" alt=" " /></a>
			<span class="star"></span>
			<div class="grid-chain-bottom">
				<h6><a href="producto.html">Lorem ipsum dolor #3</a></h6>
				<div class="star-price">
					<div class="dolor-grid"> 
						<span class="actual">$300</span>
					</div>
					<a class="now-get get-cart" href="producto.html">VER MÁS</a> 
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
	<div class="clearfix"> </div>
</div>
			</section>