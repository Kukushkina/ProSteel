						<div class="categories">
							<h2 class="single_title">Новости</h2>
							
							<?php query_posts('cat=2&posts_per_page=4')?>
								<?php if(have_posts()):		
								while(have_posts()): the_post();?>
									<h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>					
									<figure class="thumb">
										<a href="<?php the_permalink();?>"><?php the_post_thumbnail();?></a>
									</figure>
									<div class="category_body">									
										<div class="category-date">											
											<h4><?php the_time('d-m-Y');?></h4>
										</div>
										<?php the_excerpt();?>
										<div class="btn-align">
											<a href="<?php the_permalink();?>">Подробнее</a>
										</div>											
									</div>
								<div class="clear"></div>
							<?php endwhile;?>
							<?php endif;?>
							<?php wp_reset_query();?>
							
							<div class="clear"></div>
						</div>