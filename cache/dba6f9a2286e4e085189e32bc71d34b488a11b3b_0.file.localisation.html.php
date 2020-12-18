<?php
/* Smarty version 3.1.30, created on 2020-02-13 00:47:23
  from "C:\xampp\htdocs\mesprojets\geolocalisationSite1\src\view\ville\localisation.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e448e8b68e108_99147971',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dba6f9a2286e4e085189e32bc71d34b488a11b3b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mesprojets\\geolocalisationSite1\\src\\view\\ville\\localisation.html',
      1 => 1581551232,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e448e8b68e108_99147971 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Geolocalisation</title>
    </head>
    <body>
        Ville charger et c'est <?php echo $_smarty_tpl->tpl_vars['nomVille']->value;?>

        </br>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['villes']->value, 'ville');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ville']->value) {
?>
        <p><?php echo $_smarty_tpl->tpl_vars['ville']->value;?>
</p>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </body>
</html><?php }
}
