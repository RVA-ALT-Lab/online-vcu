<?php get_header(); ?>

			<div class="content">

				<div class="inner-content">

					<main id="main" class="main" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

								<section class="entry-content" itemprop="articleBody">


										<?php

										the_content();




										$content = get_field('content');

										if ( $content ){

											foreach( $content as $content ){


												foreach( $content as $row ){
													$columns = count( $row );
													$large = "";
													if ( $columns == 1 ){
														foreach($row as $column){

															if( $column['large'] ){
																$large = "large";
															}
														}
													}

													echo "<div class='row row{$columns} {$large}'>";

														foreach($row as $column){
															echo "<div class='column'>";
																echo $column['columns'];
															echo "</div>";
														}

													echo "</div>";
												}

											}

										}

										?>



								</section> <?php // end article section ?>

								<footer class="article-footer">

								</footer>
								<?php // comments_template(); ?>
							</article>

							<?php endwhile; else : ?>

									<article id="post-not-found" class="hentry">
										<header class="article-header">
											<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
										</header>
										<section class="entry-content">
											<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e( 'This is the error message in the page.php template.', 'bonestheme' ); ?></p>
										</footer>
									</article>

							<?php endif; ?>

						</main>

						<?php // get_sidebar(); ?>

				</div>

			</div>

<?php get_footer(); ?>
