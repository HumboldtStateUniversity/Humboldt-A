<div id="container">

		<div id="branding">
			<p id="wordmark"><a href="http://www.humboldt.edu"><img src="<?php print $base_path . $directory ?>/images/wordmark.gif" alt="Humboldt State University" /></a></p>
		</div>

		<div class="skipper"><a href="#nav-secondary">Skip to secondary navigation</a></div><div class="skipper"><a href="#text">Skip to content</a></div>

		<div id="nav-main">
			<?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('id' => 'main-menu', 'class' => array('menu')))); ?>
			   <div id="admin_menu"><?php print render($page['sidebar_first']); ?></div> 
			</div>
               
			<div id="content">
			<?php if ($site_name): ?><h1><?php print $site_name; ?></h1><?php endif; ?>
			<?php print $messages; ?>
			<?php print render($title_prefix); ?>
			<?php if ($title): ?><h2 class="title"><?php print $title; ?></h2><?php endif; ?>
			<?php print render($title_suffix); ?>
		
			<?php if ($tabs): ?><div id="tabs"><?php print render($tabs); ?></div><?php endif; ?>
			<?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>              
				<?php print render($page['headerimage']); ?>				
				<?php print render($page['content']); ?>
				
						</div>
						<div class="clearer"></div>
					</div><!-- /container -->

					<div id="contact"><?php print render($page['footer']); ?></div>
