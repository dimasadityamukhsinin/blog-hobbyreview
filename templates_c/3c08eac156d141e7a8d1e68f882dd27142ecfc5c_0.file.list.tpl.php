<?php
/* Smarty version 3.1.36, created on 2020-12-28 06:03:53
  from '/opt/lampp/htdocs/blog/app/views/Login/list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fe96739843e00_55489807',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3c08eac156d141e7a8d1e68f882dd27142ecfc5c' => 
    array (
      0 => '/opt/lampp/htdocs/blog/app/views/Login/list.tpl',
      1 => 1609131832,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fe96739843e00_55489807 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
 </title>
    <link href="<?php echo BASE_URL;?>assets/css/Login.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="icon" type="image/png" href="<?php echo BASE_URL?>assets/image/logo.png">
</head>
<body>
    <div class="wrapper fadeInDown">
        <div id="formContent">
            <div class="fadeIn first mb-3 mt-3">
                <img src="<?php echo BASE_URL;?>assets/image/logo128.png" id="icon" alt="User Icon" />
            </div>
            <?php echo Flash::flashdata();?>

            <form action="<?php echo BASE_URL?>login" method="post">
                <input type="email" class="fadeIn second" name="email" placeholder="Email" required>
                <input type="password" class="fadeIn third" name="password" placeholder="Password" required>
                <input type="submit" class="fadeIn fourth" value="Log In">
            </form>
        </div>
    </div>
</body>
<?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://kit.fontawesome.com/1a788d73ae.js" crossorigin="anonymous"><?php echo '</script'; ?>
>
</html><?php }
}
