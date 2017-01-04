<?php
/* Smarty version 3.1.30, created on 2016-12-27 23:06:00
  from "C:\OpenServer\domains\myshop.local\views\default\leftColumn.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5862c9a8b57d24_03591077',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cb1dec5e469970a3ff13c715bdbe7d2ea011345f' => 
    array (
      0 => 'C:\\OpenServer\\domains\\myshop.local\\views\\default\\leftColumn.tpl',
      1 => 1482869150,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5862c9a8b57d24_03591077 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="leftColumn">
    <div id="leftMenu">
        <div class="menuCaption">Меню:<br>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsCategories']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
                <a href="#"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a><br>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </div>
    </div>
</div><?php }
}
