<?php
	//Tracking code
	$layout_settings = theme_get_setting('layout_settings', 'ipress');
	
	if(empty($layout_settings) || !$layout_settings)
		$layout = 'boxed';
	$layout = $layout_settings;
?>
<div id="layout" class="<?php print $layout;?>">
		<?php include_once('header.tpl.php');?>
		<!-- /header -->

		<div class="page-content">
			<div class="row clearfix">
			
					

					<div class="grid_12 alpha posts">
						<?php
							if ($breadcrumb):
								print $breadcrumb;
							endif; 
							if(drupal_get_title())
								print '<div class="title colordefault" style="clear: both;"><h4>'.drupal_get_title().'</h4></div>';
							if ($page['content'] || isset($messages)):
							if(drupal_is_front_page()) {
								unset($page['content']['system_main']['default_message']);
							}
							if (!empty($tabs['#primary']) || !empty($tabs['#secondary'])):
								print render($tabs);
							endif;
							
							print $messages;
							print render($page['content']); 
						endif; 
						
						?>
	
	
					</div><!-- end grid9 
					
					</div><!-- end grid9 -->
				</div><!-- end grid9 -->

			</div><!-- /row -->
		</div><!-- /end page content -->

		<?php
			include_once('footer.tpl.php');
		?><!-- /footer -->

</div>