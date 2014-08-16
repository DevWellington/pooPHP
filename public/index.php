<?php
require_once '../src/fixture.php';
define("FOLDER", "../");

if (isset(\Ribeiro\Route\Route::getRoute()[2]))
    $routeListOrder = \Ribeiro\Route\Route::getRoute()[2];
elseif (isset(\Ribeiro\Route\Route::getRoute()[1]))
    $routeListOrder = \Ribeiro\Route\Route::getRoute()[1];
else
    $routeListOrder = null;

$routeCliente =
    (\Ribeiro\Route\Route::getRoute()[1] === "") ?
        0 :
        (int) \Ribeiro\Route\Route::getRoute()[1]
;

$clienteContent = new \Ribeiro\Cliente\Render\RenderClienteContent();
$clienteList = new \Ribeiro\Cliente\Render\RenderClienteList();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

	<!--link rel="stylesheet/less" href="less/bootstrap.less" type="text/css" /-->
	<!--link rel="stylesheet/less" href="less/responsive.less" type="text/css" /-->
	<!--script src="js/less-1.3.3.min.js"></script-->
	<!--append ‘#!watch’ to the browser URL, then refresh the page. -->
	
	<link href="<?=FOLDER?>css/bootstrap.min.css" rel="stylesheet">
	<link href="<?=FOLDER?>css/style.css" rel="stylesheet">

  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
  <![endif]-->

  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?=FOLDER?>img/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?=FOLDER?>img/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?=FOLDER?>img/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="<?=FOLDER?>img/apple-touch-icon-57-precomposed.png">
  <link rel="shortcut icon" href="<?=FOLDER?>img/favicon.png">
  
	<script type="text/javascript" src="<?=FOLDER?>js/jquery.min.js"></script>
	<script type="text/javascript" src="<?=FOLDER?>js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?=FOLDER?>js/scripts.js"></script>
</head>

<body>
<div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
			<div class="row clearfix">
				<h1> Lista de Clientes</h1><br />
				<div class="col-md-3 column">
					<div class="panel panel-default">
						<div class="panel-heading">
                            Order By:
                            <a href="./ASC"><button>ASC</button></a>
                            <a href="./DESC"><button>DESC</button></a>
                        </div>
						<div class="panel-body" id="listaClientes">
                            <?=
                                $clienteList
                                    ->setArrayClients($arClientesFull)
                                    ->setOrder($routeListOrder)
                                    ->render()
                                ;
                            ?>
						</div>
					</div>
				</div>
				<div class="col-md-8 column">
					<?=
                        $clienteContent
                            ->setCliente($arClientesFull[$routeCliente])
                            ->render()
                        ;
                    ?>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>
