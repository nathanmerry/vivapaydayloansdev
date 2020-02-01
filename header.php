<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php wp_head();?>
</head>



<body <?php body_class();?>>
	<div class="header-bg">
		<div class="row">
			<div class="large-12 columns">
				<!-- Navigation -->
				<nav class="top-bar contain-to-grid header-bg" data-topbar>
					<ul class="title-area">
						<!-- Title Area -->
						<li class="name">
							<a href="/" id="logo">
							<?php 
								$custom_logo_id = get_theme_mod( 'custom_logo' );
								$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
							?>
							</a>
						</li>
						<li class="toggle-topbar menu-icon"><a href="#"><span>menu</span></a></li>
					</ul>

					<section class="top-bar-section">
						<ul class="left">

						</ul>

						<ul class="right">
							<?php wp_nav_menu (	
								array(
									'theme_location' => 'top-menu',
									'menu_class' => 'b_list-reset l_nav c_nav a_nav',
									'menu_id' => 'js-nav-popup'
									
								)										
							)?>			`	

							<?php						
								if($loggedin){							
									echo '<li';
									if($page == "my-account" || $page == "history" || $page == "update-details"){ echo ' class="active"'; }
									echo '><a href="my-account" style="padding-left:6px;padding-right:6px;">Account</a></li>';						
								}						
								else {							
									echo '<li><a href="#" onclick="showLogin();return false;">Login</a></li>';						
								}					
							?>
							
							<li<?php if($page == "apply"){ echo ' class="active"'; } ?>><a href="apply<?php if($page == "nw"){ echo '#start-application'; } ?>" class="apply">Apply</a></li>
						</ul>
					</section>
				</nav>
			</div>
		</div>
	</div>





















