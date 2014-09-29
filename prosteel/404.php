<?php
	get_header('');
?>
<div class="container">
	<div class="row">
		<div class="span12">
			<div class="row">
				
				<div class="span12">	
					<div class="main_title">
						<h2><?php the_title();?></h2>
						<div class="breadcrumb">
							<?php if(function_exists('bcn_display')){
								bcn_display();
							}?>
						</div>
					</div>
				</div>
			</div>
			<div class="clear"></div>		
			<div class="row">
				<div class="theContent">
					<div class="span8">	
						<img src="<?php bloginfo('template_url')?>/img/404.jpg">
					</div>		
				</div>		
				
				<div id="sidebar" class="span4">
						<?php
							get_sidebar('up');
						?>
						<?php
							get_sidebar('down');
						?>
					</div>
					<div class="clear"></div>
			</div>		
		</div>		
	</div>
</div>

<?php
	get_footer('');
?>