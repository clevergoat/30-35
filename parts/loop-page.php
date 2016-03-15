<article id="post-<?php the_ID(); ?>" <?php post_class('large-12 column box-3035'); ?> role="article" style="background-color: #fefefe; padding: 1rem; margin-bottom: 1rem;" itemscope itemtype="http://schema.org/WebPage">
						
	<header class="article-header">
		<h1 class="page-title"><?php the_title(); ?></h1>
	</header> <!-- end article header -->
					
    <section class="entry-content" itemprop="articleBody">
	    <?php the_content(); ?>
	    <?php wp_link_pages(); ?>
	</section> <!-- end article section -->
						
	<footer class="article-footer">
		
	</footer> <!-- end article footer -->
						    
	<?php comments_template(); ?>
					
</article> <!-- end article -->