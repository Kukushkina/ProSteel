<?php
	get_header('');
?>
<div class="container">
	<div class="row">
		<div class="span12">			
			<div class="row">				
				<div class="span12">
					<div class="main_title">
						<?php if(in_category('news')){?>
							<h2>Новости</h2>
							<?}
							else
							{?>	
								<h2>Наша продукция</h2>	
						<?php }?>						
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
						<?php if(have_posts()):		
						while(have_posts()): the_post();?>
							<?php if(in_category('news')){?>
								<div class="span8">									
									<figure class="thumb">
										<a href="<?php the_permalink();?>"><?php the_post_thumbnail();?></a>
									</figure>
									<h2 class="head_category"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
									<div class="category_body">									
										<div class="category-date">											
											<h4><?php the_time('d-m-Y');?></h4>
										</div>
										
										<?php the_excerpt();?>
										<div class="btn-align">
											<a href="<?php the_permalink();?>">Подробнее</a>
										</div>											
									</div>
								</div>
							<?}
							else
							{?>															
								<div class="service">
									<figure class="icon">
										<a href="<?php the_permalink();?>"><?php the_post_thumbnail();?></a>
									</figure>
									<div class="service_body">
										<h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
									</div>
								</div>								
							<?php }?>
						<?php endwhile;?>
						<?php endif;?>	
						<?php wp_reset_query();?>
						</div>
					
					<div id="sidebar" class="span4">
						<?php if(in_category('news')){
							get_sidebar('up');
						}else{
							get_sidebar('down');
						}
						?>
					</div>
					<div class="clear"></div>
				</div>				
			</div>
		</div>		
	</div>
</div>
<div class="clear"></div>
<?php
	get_footer('');
?>