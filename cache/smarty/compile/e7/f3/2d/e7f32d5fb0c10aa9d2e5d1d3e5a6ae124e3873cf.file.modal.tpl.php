<?php /* Smarty version Smarty-3.1.19, created on 2015-12-13 16:50:04
         compiled from "/Applications/MAMP/htdocs/prestashop/admin115xj7kiv/themes/default/template/helpers/modules_list/modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1953868834566d93ac7e6a85-09492759%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e7f32d5fb0c10aa9d2e5d1d3e5a6ae124e3873cf' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop/admin115xj7kiv/themes/default/template/helpers/modules_list/modal.tpl',
      1 => 1448557798,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1953868834566d93ac7e6a85-09492759',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_566d93ac7ef5a3_50401353',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566d93ac7ef5a3_50401353')) {function content_566d93ac7ef5a3_50401353($_smarty_tpl) {?><div class="modal fade" id="modules_list_container">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title"><?php echo smartyTranslate(array('s'=>'Recommended Modules and Services'),$_smarty_tpl);?>
</h3>
			</div>
			<div class="modal-body">
				<div id="modules_list_container_tab_modal" style="display:none;"></div>
				<div id="modules_list_loader"><i class="icon-refresh icon-spin"></i></div>
			</div>
		</div>
	</div>
</div>
<?php }} ?>
