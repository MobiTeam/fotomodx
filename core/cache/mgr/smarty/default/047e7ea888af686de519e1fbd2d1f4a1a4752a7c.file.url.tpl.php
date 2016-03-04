<?php /* Smarty version Smarty-3.0.4, created on 2016-03-04 13:07:28
         compiled from "C:/OpenServer/domains/modxShop/manager/templates/default/element/tv/renders/input/url.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1789156d95e60b41390-46287030%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '047e7ea888af686de519e1fbd2d1f4a1a4752a7c' => 
    array (
      0 => 'C:/OpenServer/domains/modxShop/manager/templates/default/element/tv/renders/input/url.tpl',
      1 => 1455154042,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1789156d95e60b41390-46287030',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<select id="tv<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
_prefix" name="tv<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
_prefix" onchange="MODx.fireResourceFormChange();">
<?php  $_smarty_tpl->tpl_vars['url'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('urls')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['url']->key => $_smarty_tpl->tpl_vars['url']->value){
?>
	<option value="<?php echo (isset($_smarty_tpl->tpl_vars['url']->value) ? $_smarty_tpl->tpl_vars['url']->value : null);?>
" <?php if ((isset($_smarty_tpl->tpl_vars['url']->value) ? $_smarty_tpl->tpl_vars['url']->value : null)==$_smarty_tpl->getVariable('selected')->value){?>selected="selected"<?php }?>><?php echo (isset($_smarty_tpl->tpl_vars['url']->value) ? $_smarty_tpl->tpl_vars['url']->value : null);?>
</option>
<?php }} ?>
</select>
<input id="tv<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
" name="tv<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
"
	type="text"
	value="<?php echo $_smarty_tpl->getVariable('tv')->value->get('processedValue');?>
"
	onchange="MODx.fireResourceFormChange();"
	class="textfield x-form-text x-form-field"
	style="width: 283px;"
/>
<script type="text/javascript">
// <![CDATA[
Ext.onReady(function() {
	MODx.makeDroppable(Ext.get('tv<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
'));

    var fld = MODx.load({
        xtype: 'combo'
        ,transform: 'tv<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
_prefix'
        ,id: 'tv<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
_prefix'
        ,triggerAction: 'all'
        ,width: 100
        ,allowBlank: false
        ,maxHeight: 300
        ,typeAhead: false
        ,forceSelection: false
        ,msgTarget: 'under'
        ,listeners: { 'select': { fn:MODx.fireResourceFormChange, scope:this}}
    });

	fld.wrap.applyStyles({
		display: "inline-block"
	});
});
// ]]>
</script>