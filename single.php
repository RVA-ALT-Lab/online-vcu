<?php get_header(); ?>

			<div class="content">

				<div class="inner-content">

					<main class="main" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

              <article id="post-<?php the_ID(); ?>" <?php post_class('cf program'); ?> role="article" itemscope itemprop="blogPost" itemtype="http://schema.org/BlogPosting">

                <section class="entry-content cf" itemprop="articleBody">

                  <?php the_content(); ?>
                  
                </section>

                <aside class="program-details entry-content">
                  <p><strong><?php the_field('department'); ?></strong><br/>
                  <strong><?php the_field('subject'); ?></strong></p>
                  
                  <p><strong><?php the_field('commitment'); ?></strong><br/>
                  <strong><?php the_field('minimum_credit_hours'); ?></strong> min credit hours <br/>
                  <strong><?php the_field('minimum_gpa_for_admission'); ?></strong> min GPA for admission</p>

                  <p><strong><?php the_field('mode'); ?></strong></p>



                  <?php
                  // check if the repeater field has rows of data
                  if( have_rows('links') ):
                    echo "<ul>";
                    // loop through the rows of data
                      while ( have_rows('links') ) : the_row();
                  ?>
                        <li><a href="<?php the_sub_field('link_url'); ?>"><?php the_sub_field('link_text'); ?></a>
                  <?php
                      endwhile;

                  else :

                      // no rows found
                    echo "</ul>";
                  endif;
                  ?>






                </aside>


              </article> <?php // end article ?>

						<?php endwhile; ?>

						<?php else : ?>

							<article id="post-not-found" class="hentry">
									<header class="article-header">
										<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
									</header>
									<section class="entry-content">
										<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
									</section>
									<footer class="article-footer">
											<p><?php _e( 'This is the error message in the single.php template.', 'bonestheme' ); ?></p>
									</footer>
							</article>

						<?php endif; ?>

					</main>

				</div>

			</div>

<?php get_footer(); ?>
