<?php
/* Smarty version 3.1.36, created on 2020-12-26 10:47:14
  from '/opt/lampp/htdocs/blog/app/views/error/404.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fe706a202dd43_57716098',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db6bb151c4fb49b1c12de981f8b47e4c8514d543' => 
    array (
      0 => '/opt/lampp/htdocs/blog/app/views/error/404.tpl',
      1 => 1608976032,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fe706a202dd43_57716098 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>404 Page Not Found</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,700" rel="stylesheet">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="<?php echo BASE_URL;?>assets/css/404.css" />
    <link rel="icon" type="image/png" href="<?php echo BASE_URL?>assets/image/logo.png">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"><?php echo '</script'; ?>
>
		  <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
		<![endif]-->

</head>

<body>

	<div id="notfound">
		<div class="notfound">
			<div class="notfound-404">
				<h1>4<span></span>4</h1>
			</div>
			<h2>Oops! Halaman Tidak Dapat Ditemukan</h2>
			<p>Maaf tetapi halaman yang Anda cari tidak ada, telah dihapus. nama diubah atau untuk sementara tidak tersedia</p>
		</div>
	</div>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html><?php }
}
