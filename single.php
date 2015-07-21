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

                  <?php 
                    $output = "";

                    $department = get_field('department');
                    $degree = get_field('degree');
                    $subject = get_field('subject');
                    $commitment = get_field('commitment');
                    $min_credits = get_field('minimum_credit_hours');
                    $min_gpa = get_field('minimum_gpa_for_admission');
                    $mode = get_field('mode');

                    $links = get_field('links');
                    $program_website = get_field('links_program_website');
                    $curriculum = get_field('links_curriculum');
                    $request_info= get_field('links_request_information');
                    
                    if ( $department || $degree || $subject ){
                      $output .= "<p>";
                    }
                      if( $department ){
                        $output .= "<span class='line'><strong>{$department}</strong></span>";
                      }

                      if( $degree || $subject ){
                        $output .= "<span class='line'><strong>{$degree} {$subject}</strong></span>";
                      }

                    if ( $department || $degree || $subject ){
                      $output .= "</p>";
                    }

                    if ($commitment || $min_credits || $min_gpa ) {
                      $output .= "<p>";
                    }

                      if ($commitment){
                        $output .= "<span class='line'><strong>{$commitment}</strong></span>";
                      }

                      if ($min_credits){
                        $output .="<span class='line'><strong>{$min_credits}</strong> min credit hours </span>";
                      }

                      if ($min_gpa){
                        $output .= "<span class='line'><strong>{$min_gpa}</strong> min GPA for admission<span>";
                      }

                    if ($commitment || $min_credits || $min_gpa ) {
                      $output .= "</p>";
                    }                    
                  
                    if ($mode){
                      $output .= "<p><strong>{$mode}</strong></p>";
                    }

                    $output .= "<ul>";
                    $output .= "<li><a href='http://www.enrollment.vcu.edu/accounting/tuition-and-fees/tuition-and-fees-calculator/'>Tuition Calculator</a></li>";

                      if ($program_website){
                        $output .= "<li><a href='{$program_website}'>Website</a></li>";
                      }
                      if ($curriculum){
                        $output .= "<li><a href='{$curriculum}'>Curriculum</a></li>";
                      }
                      if ($request_info){
                        $output .= "<li><a href='{request_info}'>Request Info</a></li>";
                      }

                    if( have_rows('links') ): while ( have_rows('links') ) : the_row();
                      $link_url = get_sub_field('link_url');
                      $link_text = get_sub_field('link_text');
                      $output .= "<li><a href='{$link_url}'>'{$link_text}'</a>";
                    endwhile;
                    endif;


                    $output .= "</ul>";

                    echo $output;
                  ?>
                  
                  


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
