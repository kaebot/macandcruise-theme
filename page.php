<?php get_header(); ?>
<section id="content" role="main">
<?php if ( is_front_page() ) { ?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="header">
	<h1 class="entry-title"><?php the_title(); ?></h1> <?php edit_post_link(); ?>
	</header>
	<section class="entry-content">
	<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
	<?php the_content(); ?>
	<div class="entry-links"><?php wp_link_pages(); ?></div>
	</section>
	</article>
	<?php if ( ! post_password_required() ) comments_template( '', true ); ?>
	<?php endwhile; endif; ?>
	</section>
	<?php get_sidebar(); ?>
	<?php get_footer(); ?>
<?php } elseif ( is_page( 'Artists' ) ){ ?>

		<?php include('page-artists.php'); ?>
		
<?php } elseif ( is_page( 'FAQ' ) ){ ?>

		<?php include('page-faq.php'); ?>
		
<?php } elseif ( is_page( 'News' ) ){ ?>

		<?php include('page-news.php'); ?>

<?php } else { 
    // regular old page style
    ?> 
    
    
    <section class="joco-page" id="page-page">
		<div class="bumper container-fluid">
			<div class="bumper-container">
				<div class="bumper-element bumper-left" id="bumper-home">
					<div class="bumper-container">
						<span class="glyphicon glyphicon-menu-left"></span>
						<a href="/">Back to Site</a>
					</div>
				</div>
			</div>
		</div>
        <div class="container headers">
            <div class="col-xs-12 col-md-12">
                <h1><?php the_title() ?></h1>
                <?php if (have_posts()) : while (have_posts()) : the_post();?>
                    <p class="mac-page-intro"><?php the_content(); ?></p>
                <?php endwhile; endif; ?>
            </div>
        </div>
        <div class="bumper container-fluid">
			<div class="bumper-container">
			</div>
		</div>
        <?php get_footer(); ?>
    </section>

    <?php }; ?>