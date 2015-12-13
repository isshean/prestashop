<?php /* Smarty version Smarty-3.1.19, created on 2015-12-13 16:51:07
         compiled from "/Applications/MAMP/htdocs/prestashop/admin115xj7kiv/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:44415695566d93eb277328-65284407%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fdffdd33911149fed93e8ef4511bff08545dc2aa' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop/admin115xj7kiv/themes/default/template/content.tpl',
      1 => 1448557798,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '44415695566d93eb277328-65284407',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_566d93eb2901c5_84077336',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566d93eb2901c5_84077336')) {function content_566d93eb2901c5_84077336($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
