<?php /* Smarty version Smarty-3.1.19, created on 2015-12-13 16:45:10
         compiled from "/Applications/MAMP/htdocs/prestashop/admin/themes/default/template/helpers/list/list_action_default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:792492888566d928644fc86-62640003%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f1a1da6a789e5d84f50e51b0a67f88bbe6eae4be' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop/admin/themes/default/template/helpers/list/list_action_default.tpl',
      1 => 1448557798,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '792492888566d928644fc86-62640003',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
    'name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_566d9286506f86_07119005',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566d9286506f86_07119005')) {function content_566d9286506f86_07119005($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
"<?php if (isset($_smarty_tpl->tpl_vars['name']->value)) {?> name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php }?> class="default">
	<i class="icon-asterisk"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a><?php }} ?>
