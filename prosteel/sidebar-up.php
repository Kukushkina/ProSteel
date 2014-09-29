						<div class="categories">
							<h2 class="single_title">Наша продукция</h2>
							<div class="span3">
							
								<div class="span3">								
									<ul>
										<?php query_posts('cat=45&posts_per_page=8')?>
											<?php if(have_posts()):		
											while(have_posts()): the_post();?>
											<li><a href="<?php the_permalink();?>"><?php the_title();?></a></li>
										<?php endwhile;?>
										<?php endif;?>
										<?php wp_reset_query();?>
									</ul>
								</div>
							
							</div>
							<div class="clear"></div>
						</div>