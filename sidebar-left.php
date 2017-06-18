<div class="span-11 last">
            
	<div class="span-7">
	
		<div class="sidebar left-sidebar">
		
		<?php if(get_theme_option('socialnetworks') != '') {
			?>
    			<div class="addthis_toolbox">   
<script src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
<script src="//yastatic.net/share2/share.js"></script>
<div class="ya-share2" data-services="vkontakte,facebook,odnoklassniki,moimir,gplus,twitter,lj"></div>
    			</div>
    			<?php
    		}
    	?>
    	
    	<div id="topsearch">
            <?php get_search_form(); ?>
        </div>
        
        <?php if(get_theme_option('video') != '') {
			?>
			<div class="sidebarvideo">
				<ul> <li><h2 style="margin-bottom: 10px;">Популярное видео</h2>
				<object width="250" height="200"><param name="movie" value="http://www.youtube.com/v/<?php echo get_theme_option('video'); ?>&hl=en&fs=1&rel=0&border=1"></param>
					<param name="allowFullScreen" value="true"></param>
					<param name="allowscriptaccess" value="always"></param>
					<embed src="http://www.youtube.com/v/<?php echo get_theme_option('video'); ?>&hl=en&fs=1&rel=0&border=1" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="250" height="200"></embed>
				</object>
				</li>
				</ul>
			</div>
		<?php
		}
		?>
        
    	
			<ul>
				<?php 
						if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar 1') ) : ?>
	
					
				
					<li><h2><?php _e('Недавние записи'); ?></h2>
				               <ul>
						<?php wp_get_archives('type=postbypost&limit=5'); ?>  
				               </ul>
					</li>
					
					<li id="tag_cloud"><h2>Метки</h2>
						<?php wp_tag_cloud('largest=16&format=flat&number=20'); ?>
					</li>
				
					<li> 
						<h2>Календарь</h2>
						<?php get_calendar(); ?> 
					</li>
					
				
				
				<?php include (TEMPLATEPATH . '/recent-comments.php'); ?>
				<?php if (function_exists('get_recent_comments')) { get_recent_comments(); } ?>
				
										
					
					
				<?php endif; ?>
			</ul>
			
		
	
		</div>
	</div>
	
</div>
