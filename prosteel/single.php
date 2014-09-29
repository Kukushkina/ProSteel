<?php
	get_header('');
?>
<div class="container">
	<div class="row">
		<div class="span12">			
			<div class="row">
				<?php if(have_posts()):		
				while(have_posts()): the_post();?>
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
						<?php the_content(''); ?>
					</div>
					<?php endwhile;?>
					<?php endif;?>	
					<?php wp_reset_query();?>
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
</div>

<?php
	get_footer('');
?>