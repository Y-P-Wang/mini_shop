<?php
/* Smarty version 3.1.29, created on 2020-11-11 02:51:53
  from "C:\UniServerZ\www\mini_shop-master-master\templates\index.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5fab51c9dd3e89_81799717',
  'file_dependency' => 
  array (
    '85ea2aafd059285a2ade8c21539e8ccb1f709a79' => 
    array (
      0 => 'C:\\UniServerZ\\www\\mini_shop-master-master\\templates\\index.html',
      1 => 1605015781,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:goods_form.html' => 1,
    'file:goods_display.html' => 1,
    'file:user_form.html' => 1,
    'file:display_user.html' => 1,
    'file:bill_check_out.html' => 1,
    'file:display_bill.html' => 1,
    'file:list_bill.html' => 1,
    'file:goods_list.html' => 1,
    'file:index_side.html' => 1,
  ),
),false)) {
function content_5fab51c9dd3e89_81799717 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="zh-Hant">
  <head>
    <title><?php echo $_smarty_tpl->tpl_vars['shop_name']->value;?>
</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <!--[if lt IE 9]>
      <?php echo '<script'; ?>
 src="bootstrap/js/html5shiv.min.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="bootstrap/js/respond.min.js"><?php echo '</script'; ?>
>
    <![endif]-->
    <?php echo '<script'; ?>
 src="bootstrap/js/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="bootstrap/js/jquery-migrate.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
  </head>
  <body>
    <div class="container">
      <div id="shop_head">
        <a href="index.php">
          <img src="images/123bg.jpg" style="width: 1200px;display:inline-block" alt="<?php echo $_smarty_tpl->tpl_vars['shop_name']->value;?>
" class="img-responsive">
        </a>
      </div>

      <div id="shop_main" class="row">
        <div class="col-md-9 col-sm-8">
          <?php if (isset($_smarty_tpl->tpl_vars['msg']->value)) {?>
            <div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</div>
          <?php }?>
          <?php if ($_smarty_tpl->tpl_vars['op']->value == "goods_form") {?>
            <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:goods_form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

          <?php } elseif ($_smarty_tpl->tpl_vars['op']->value == "goods_display") {?>
            <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:goods_display.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

          <?php } elseif ($_smarty_tpl->tpl_vars['op']->value == "user_form") {?>
            <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:user_form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

          <?php } elseif ($_smarty_tpl->tpl_vars['op']->value == "display_user") {?>
            <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:display_user.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

          <?php } elseif ($_smarty_tpl->tpl_vars['op']->value == "check_out") {?>
            <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:bill_check_out.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

          <?php } elseif ($_smarty_tpl->tpl_vars['op']->value == "display_bill") {?>
            <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:display_bill.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

          <?php } elseif ($_smarty_tpl->tpl_vars['op']->value == "list_bill") {?>
            <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:list_bill.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

          <?php } else { ?>
            <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:goods_list.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

          <?php }?>
        </div>
        <div class="col-md-3 col-sm-4">
          <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:index_side.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        </div>
      </div>

      <div id="shop_foot" >
        <div>地址：台南市歸仁區長大路1號</div>
        <div>電話：(06)2735123</div>
        <div>版權所有 : 107B11380 © 2020 cjcu.edu.tw. All Rights Reserved. </div>
      </div>
    </div>
  </body>
</html><?php }
}
