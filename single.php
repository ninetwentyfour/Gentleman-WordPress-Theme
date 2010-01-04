<?php get_header(); ?>
<div id="content"><div id="pageicon"><a href="<?php bloginfo('url'); ?>"><img src="http://johnmeyercreative.com/wp-content/themes/jmeyer/images/navpics/megaphone.png" align="left" class="workiconpic" width="50px" height="100px" /></a><h1><?php bloginfo('name'); ?></h1></div>

<div id="contentbox">
					<div id="postss">

<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<div class="post" id="post-<?php the_ID(); ?>">
			
					<div class="entry">
						<?php the_content('Read more...'); ?></div></div>
                                        <div id="comentss"><?php comments_template(); ?></div>
<?php endwhile; ?><br /><br />
<div id="next"><?php next_posts_link('Older posts') ?></div><div id="previous"><?php previous_posts_link('Newer posts') ?></div>
<?php endif; ?></div><div id="sides">
<?php include (TEMPLATEPATH . '/sidebar2.php'); ?></div>
</div>
</div>
<?php get_footer(); ?>