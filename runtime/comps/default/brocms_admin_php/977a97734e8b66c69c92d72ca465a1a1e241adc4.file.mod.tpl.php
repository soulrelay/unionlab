<?php /* Smarty version Smarty-3.1.8, created on 2013-08-22 10:56:54
         compiled from "./admin/views/default\group\mod.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1171052157df67b1cb0-28734227%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '977a97734e8b66c69c92d72ca465a1a1e241adc4' => 
    array (
      0 => './admin/views/default\\group\\mod.tpl',
      1 => 1373939658,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1171052157df67b1cb0-28734227',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
    'post' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_52157df698cbe2_91386997',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52157df698cbe2_91386997')) {function content_52157df698cbe2_91386997($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<div id="main">
			<div class="head-dark-box">
				<div class="tit">系统管理>用户组管理>修改用户组</div>
			</div>	
		    <?php echo $_smarty_tpl->getSubTemplate ("public/title.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		    <form  method="post" action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/update">
			<div class="msg-box">
				<ul class="viewmess">
					<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
">
					<li class="light-row">
						<span class="col_width">用户组名&nbsp;&nbsp;&nbsp;<span class="red_font">*</span></span>
						<input name="groupname" type="text"  value="<?php echo $_smarty_tpl->tpl_vars['post']->value['groupname'];?>
" class="text-box">
						可以使用中文，但禁止除[@][.]以外的特殊符号
					</li>
					
					<li class="dark-row">
						<span class="col_width" style="margin-top:30px">组描述<span class="red_font">*</span></span>
						<textarea class="text-box" name="description" cols="40" rows="5"><?php echo $_smarty_tpl->tpl_vars['post']->value['description'];?>
</textarea>
					</li>

					
					<li class="light-row">
						<span class="col_width">设置权限</span>
						<span style="height:30px;">				
							<label for="q1"><input id="q1" <?php if ($_smarty_tpl->tpl_vars['post']->value['useradmin']==1){?>checked<?php }?> type="checkbox" name="useradmin" value="1"> 用户管理</label>&nbsp;&nbsp;
							<label for="q2"><input id="q2" <?php if ($_smarty_tpl->tpl_vars['post']->value['webadmin']==1){?>checked<?php }?> type="checkbox" name="webadmin" value="1"> 网站编辑</label>&nbsp;&nbsp;
							<label for="q3"><input id="q3" <?php if ($_smarty_tpl->tpl_vars['post']->value['articleadmin']==1){?>checked<?php }?> type="checkbox" name="articleadmin" value="1"> 文章管理</label>
						</span><br>
						<span class="col_width">&nbsp;</span>
						<span  style="height:30px;">
							<label for="q4"><input id="q4" <?php if ($_smarty_tpl->tpl_vars['post']->value['sendarticle']==1){?>checked<?php }?> type="checkbox" name="sendarticle" value="1"> 发表文章</label>&nbsp;&nbsp;
							<label for="q5"><input id="q5" <?php if ($_smarty_tpl->tpl_vars['post']->value['sendcomment']==1){?>checked<?php }?> type="checkbox" name="sendcomment" value="1"> 发表评论</label>&nbsp;&nbsp;
							<label for="q6"><input id="q6" <?php if ($_smarty_tpl->tpl_vars['post']->value['sendmessage']==1){?>checked<?php }?> type="checkbox" name="sendmessage" value="1"> 发站内信</label>
        					</span>
					</li>
				
					<li class="dark-row">
						<span class="col_width"> &nbsp; </span>
						<input type="submit" class="button"  value="修 改">&nbsp;&nbsp;
						<input type="reset" class="button" value="重 置">&nbsp;&nbsp;
						<input type="button" onclick="if(confirm('确定要删除吗?')) window.location='<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/del/id/<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
'" class="button" value="删 除">
					</li>
				</ul>	
			</div>
                    </form>	
		</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	


<?php }} ?>