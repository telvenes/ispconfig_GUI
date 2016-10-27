<?php
/* Smarty version 3.1.30, created on 2016-10-26 21:46:02
  from "/var/www/clients/client0/web1/web/engine/templates/template/login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_581107fa5a0f98_77206960',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1aa617ab8b1f4dfa656d7e0b64bb5543df8d75ca' => 
    array (
      0 => '/var/www/clients/client0/web1/web/engine/templates/template/login.tpl',
      1 => 1477497079,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_581107fa5a0f98_77206960 (Smarty_Internal_Template $_smarty_tpl) {
?>
			<!-- Content -->
			<div id="content">
				<!-- Box -->
				<div class="box">
					<!-- Box Head -->
					<div class="box-head">
						<h2>Logg inn</h2>
					</div>
					<!-- End Box Head -->
					
					<form action="?p=login" name="login" method="post">
						
						<!-- Form -->
						<div class="form">
								<p>
									<span class="req"></span>
									<label>Brukernavn:</span></label>
									<input type="text" name="username" /><br />
								</p>	
								
								<p>
									<span class="req"></span>
									<label>Passord</span></label>
									<input type="password" name="password" /><br />
								</p>	
								<p>
									<span class="req"></span>
									<label></span></label>
									<input class="button" type="submit" name="submit" value="Logg inn" /><br />
								</p>	

							
						</div>
						<!-- End Form -->
						
						<!-- Form Buttons -->
						<div class="buttons">
							&nbsp;
						</div>
						<!-- End Form Buttons -->
					</form>
				</div>
				<!-- End Box -->

			</div>
			<!-- End Content -->
			

			
			<div class="cl">&nbsp;</div>			
		</div>
		<!-- Main -->
	</div>
</div>
<!-- End Container --><?php }
}
