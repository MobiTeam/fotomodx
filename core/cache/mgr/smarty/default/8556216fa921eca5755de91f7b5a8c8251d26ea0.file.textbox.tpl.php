<?php /* Smarty version Smarty-3.0.4, created on 2016-03-04 13:09:48
         compiled from "C:/OpenServer/domains/modxShop/manager/templates/default/element/tv/renders/input/textbox.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2811556d95eec447e14-88603580%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8556216fa921eca5755de91f7b5a8c8251d26ea0' => 
    array (
      0 => 'C:/OpenServer/domains/modxShop/manager/templates/default/element/tv/renders/input/textbox.tpl',
      1 => 1455154042,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2811556d95eec447e14-88603580',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include 'C:/OpenServer/domains/modxShop/core/model/smarty/plugins\modifier.escape.php';
?><input id="tv<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
" name="tv<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
"
	type="text" class="textfield"
	value="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('tv')->value->get('value'));?>
"
	<?php echo $_smarty_tpl->getVariable('style')->value;?>

	tvtype="<?php echo $_smarty_tpl->getVariable('tv')->value->type;?>
"
/>

<script type="text/javascript">
// <![CDATA[

Ext.onReady(function() {
    var fld = MODx.load({
    
        xtype: 'textfield'
        ,applyTo: 'tv<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
'
        ,width: '99%'
        ,enableKeyEvents: true
        ,msgTarget: 'under'
        ,allowBlank: <?php if ((isset($_smarty_tpl->getVariable('params')->value['allowBlank']) ? $_smarty_tpl->getVariable('params')->value['allowBlank'] : null)==1||(isset($_smarty_tpl->getVariable('params')->value['allowBlank']) ? $_smarty_tpl->getVariable('params')->value['allowBlank'] : null)=='true'){?>true<?php }else{ ?>false<?php }?>
        <?php if ((isset($_smarty_tpl->getVariable('params')->value['maxLength']) ? $_smarty_tpl->getVariable('params')->value['maxLength'] : null)){?>,maxLength: <?php echo (isset($_smarty_tpl->getVariable('params')->value['maxLength']) ? $_smarty_tpl->getVariable('params')->value['maxLength'] : null);?>
<?php }?>
        <?php if ((isset($_smarty_tpl->getVariable('params')->value['minLength']) ? $_smarty_tpl->getVariable('params')->value['minLength'] : null)){?>,minLength: <?php echo (isset($_smarty_tpl->getVariable('params')->value['minLength']) ? $_smarty_tpl->getVariable('params')->value['minLength'] : null);?>
<?php }?>
        <?php if ((isset($_smarty_tpl->getVariable('params')->value['regex']) ? $_smarty_tpl->getVariable('params')->value['regex'] : null)){?>,regex: new RegExp('<?php echo (isset($_smarty_tpl->getVariable('params')->value['regex']) ? $_smarty_tpl->getVariable('params')->value['regex'] : null);?>
')<?php }?>
        <?php if ((isset($_smarty_tpl->getVariable('params')->value['regexText']) ? $_smarty_tpl->getVariable('params')->value['regexText'] : null)){?>,regexText: '<?php echo (isset($_smarty_tpl->getVariable('params')->value['regexText']) ? $_smarty_tpl->getVariable('params')->value['regexText'] : null);?>
'<?php }?>
    
        ,listeners: { 'keydown': { fn:MODx.fireResourceFormChange, scope:this}}
    });
    Ext.getCmp('modx-panel-resource').getForm().add(fld);
    MODx.makeDroppable(fld);
});

// ]]>
</script>
