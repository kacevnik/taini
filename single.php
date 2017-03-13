<?php get_header(); ?>
	<div class="span-24" id="contentwrap">	
	<?php get_sidebar('left'); ?>
			<div class="span-13">
				<div id="content">	
					<?php if (have_posts()) : ?>	
						<?php while (have_posts()) : the_post(); ?>
                        <div class="postwrap">
						<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
							<h2 class="title"><?php the_title(); ?></h2>
							<div class="postdate"><?php if (current_user_can('edit_post', $post->ID)) { ?> | <?php edit_post_link('Редактировать', '', ''); } ?></div>
			
							<div class="entry">
                                <?php if ( function_exists('has_post_thumbnail') && has_post_thumbnail() ) { the_post_thumbnail(array(300,225), array('class' => 'alignleft post_thumbnail')); } ?>
								<?php the_content('Читать далее &raquo;'); ?>
								<?php wp_link_pages(array('before' => '<p><strong>Страницы:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
							</div>
							<div class="postmeta"><img src="<?php bloginfo('template_url'); ?>/images/folder.png" /> Опубликовано в рубрике <?php the_category(', ') ?> <?php if(get_the_tags()) { ?> <img src="<?php bloginfo('template_url'); ?>/images/tag.png" /> <?php  the_tags('Метки: ', ', '); } ?></div>
							<?php edit_post_link('Редактировать эту запись','','.'); ?>
							<div class="navigation clearfix">
								<div class="prev_article"><?php previous_post_link('%link') ?></div>
								<div class="next_article"><?php next_post_link('%link') ?></div>
							</div>
							</div>
							<div class="post_bottom">
							<h4>Это интересно...</h4>	

<?php 
	$cat = get_the_category($post->ID);
	$args = array(
		'numberposts' => 3,
		'post_status' => 'publish',
		'orderby' => 'rand',
		'cat' => $cat[0]->cat_ID
	); 

	$result = wp_get_recent_posts($args);

	foreach( $result as $p ){ 
?>
								<div class="postwrap">
								<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
									<div class="post_bottom_title"><strong><a href="<?php echo get_permalink($p['ID']) ?>" rel="bookmark" title="Постоянная ссылка на <?php the_title_attribute(); ?>"><?php echo $p['post_title']; ?></a></strong></div>
									<div class="postdate"><?php if (current_user_can('edit_post', $p['ID'])) { ?> | <?php edit_post_link('Редактировать', '', ''); } ?></div>
									<div class="entry">
										<?php $text = explode('<!--more-->', $p['post_content']); echo $text[0]; ?>
										<div class="readmorecontent">
											<a class="readmore" href="<?php the_permalink($p['ID']) ?>" rel="bookmark" title="Постоянная ссылка на <?php echo $p['post_title']; ?>">Читать далее &raquo;</a>
										</div>
									</div>
									
								</div><!--/post-<?php the_ID(); ?>-->
								</div>
								<?php } ?>
								</div>								
							</div>							
				<?php comments_template(); ?>
				
				<?php endwhile; ?>
			
				<?php endif; ?>
			</div>
			</div>
<?php get_sidebar('right'); ?>
	</div>
<?php get_footer(); ?>


