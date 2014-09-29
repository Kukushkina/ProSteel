<?php
	get_header('');
?>
			<div class="fluid_container">
				<div class="camera_wrap camera_emboss pattern_1" id="camera_wrap_4">
					<div data-thumb="<?php bloginfo('template_url')?>/img/slider/thumb/3.jpg" data-src="<?php bloginfo('template_url')?>/img/slider/1.jpg">
						<div class="camera_caption moveFromTop">
								<div>
									<h2>
									Художественная ковка в Минске.<br/>
									Мы рада приветствовать Вас <br/>
									на нашем сайте!
								</h2>
							</div>					
						</div>
					</div>
					<div data-thumb="<?php bloginfo('template_url')?>/img/slider/thumb/2.jpg" data-src="<?php bloginfo('template_url')?>/img/slider/3.jpg">
						<div class="camera_caption moveFromTop">
							<div>
								<h2>
									Художественная ковка в Минске.<br/>
									Мы рада приветствовать Вас <br/>
									на нашем сайте!
								</h2>
							</div>					
						</div>
					</div>
					<div data-thumb="<?php bloginfo('template_url')?>/img/slider/thumb/1.jpg" data-src="<?php bloginfo('template_url')?>/img/slider/2.jpg">
						<div class="camera_caption moveFromTop">
							<div>
								<h2>
									Художественная ковка в Минске.<br/>
									Мы рада приветствовать Вас <br/>
									на нашем сайте!
								</h2>
							</div>					
						</div>
					</div>
				</div>
			</div>
			<div class="clear"></div>			
			<div class="container">
				<div class="row">
					<div class="span12">
						<div class="row">
							<div class="span12">
								<div class="hero-unit ">
									<?php if(have_posts()){
										while(have_posts()):the_post();
										?>
											
										<?php the_content();  
										endwhile; 
										wp_reset_query(); 
									} ?>	
								</div>
							</div>
							<div class="title clearfix ">
								<h2 class="title-box">Наша продукция</h2>
							</div>
							<div class="row">
								<?php query_posts('cat=45&posts_per_page=8')?>
									<?php if(have_posts()):		
									while(have_posts()): the_post();?>
									<div class="span3">								
										<div class="service">
											<figure class="icon">
												<a href="<?php the_permalink();?>"><?php the_post_thumbnail();?></a>
											</figure>
											<div class="service_body">
												<h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>												
												<!--<div class="btn-align">
													<a class="btn btn-inverse btn-normal btn-primary " href="<?php the_permalink();?>">Подробнее</a>
												</div>-->
											</div>
										</div>
									</div>
									<?php endwhile;?>
									<?php endif;?>
								<?php wp_reset_query();?>
							</div>
							<div class="title-news clearfix ">
								<h2 class="title-box">Новости и полезные материалы</h2>
							</div>
							<div class="row">
								<?php query_posts('cat=2&posts_per_page=4')?>
									<?php if(have_posts()):		
									while(have_posts()): the_post();?>
									<div class="span3">
										<div class="news">
											<figure class="preview">
												<a href="<?php the_permalink();?>"><?php the_post_thumbnail();?></a>
											</figure>
											<div class="news_body">
												<h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
												<?php the_excerpt();?>
												<div class="btn-align">
													<a  href="<?php the_permalink();?>">Подробнее</a>
												</div>												
											</div>
										</div>
									</div>
									<?php endwhile;?>
									<?php endif;?>
								<?php wp_reset_query();?>
							</div>
						</div>
					</div>
				</div>
			</div>						
<?php
	get_footer('');
?>