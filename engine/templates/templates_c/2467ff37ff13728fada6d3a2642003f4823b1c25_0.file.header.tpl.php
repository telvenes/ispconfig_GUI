<?php
/* Smarty version 3.1.30, created on 2016-10-26 22:25:10
  from "/var/www/clients/client0/web1/web/engine/templates/template/header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5811112651b397_66014106',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2467ff37ff13728fada6d3a2642003f4823b1c25' => 
    array (
      0 => '/var/www/clients/client0/web1/web/engine/templates/template/header.tpl',
      1 => 1477497079,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5811112651b397_66014106 (Smarty_Internal_Template $_smarty_tpl) {
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>#</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<?php echo '<script'; ?>
 type="text/javascript" src="css/image.js"><?php echo '</script'; ?>
>
</head>
<body>
<div style="display: none; position: absolute; z-index: 110; left: 400; top: 100; width: 15; height: 15" id="preview_div"></div>
<!-- Header -->
<div id="header">
	<div class="shell">
		<!-- Logo + Top Nav -->
		<div id="top">
			<h1><a href="?p=index">#</a></h1>
			<div id="top-navigation">
				Velkommen <?php echo $_smarty_tpl->tpl_vars['S_USERNAME']->value;?>
</a>
				<span>|</span>
				<a href="?p=login&l=2">Logg ut</a>
			</div>
		</div>
		<!-- End Logo + Top Nav -->
		
		<!-- Main Nav -->
		<div id="navigation">
			<ul>
			<?php
$__section_sec1_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1'] : false;
$__section_sec1_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['HEADER_MENU1']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_sec1_0_total = $__section_sec1_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_sec1'] = new Smarty_Variable(array());
if ($__section_sec1_0_total != 0) {
for ($__section_sec1_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] = 0; $__section_sec1_0_iteration <= $__section_sec1_0_total; $__section_sec1_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']++){
?>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['HEADER_MENU1']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['url'];?>
" class="<?php echo $_smarty_tpl->tpl_vars['HEADER_MENU1']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['CSS'];?>
"><span><?php echo $_smarty_tpl->tpl_vars['HEADER_MENU1']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['NAME'];?>
</span></a></li>
<?php
}
}
if ($__section_sec1_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_sec1'] = $__section_sec1_0_saved;
}
?>
			    
			</ul>
		</div>
		<!-- End Main Nav -->
	</div>
</div>
<!-- End Header -->

<!-- Container -->
<div id="container">
	<div class="shell">
		
		<!-- Small Nav -->
		<!--
		<div class="small-nav">
			<a href="#">Dashboard</a>
			<span>&gt;</span>
			Current Articles
		</div>-->
		<!-- End Small Nav -->
		
	
		

		<br />
		<!-- Main -->
		<div id="main">
			<div class="cl">&nbsp;</div>
			


<?php }
}
