<?php
/*
 Template Name: Courses
 *
 * This is your custom page template. You can create as many of these as you need.
 * Simply name is "page-whatever.php" and in add the "Template Name" title at the
 * top, the same way it is here.
 *
 * When you create your page, you can just select the template and viola, you have
 * a custom page template to call your very own. Your mother would be so proud.
 *
 * For more info: http://codex.wordpress.org/Page_Templates
*/
?>

<?php get_header(); ?>

			<div class="content">

				<div class="inner-content">

					<main class="main" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">


								<section class="entry-content" itemprop="articleBody">
									<?php
										// the content (pretty self explanatory huh)
										the_content();
									?>







<div ng-app="benson">
  <div ng-controller="MainController">

	<div ng-repeat="data in data">
			
		<div class="controls">
		</div>
		
		<div class="course-table-headers">
			<div class="course header"><strong>Course</strong></div>
			<div class="details header"><strong>Details</strong></div>
			<div class="mode header"><strong>Mode</strong></div>
		</div>

		<div class="course-table-row" ng-repeat="data in data" >
			<div class="course">
				<span class="course-title">{{data.title}}</span><br/>
				{{data.instructor}}<br/>
				{{data.term}} from <i>May 18 to Jun 21</i>
				
			</div>		

			<div class="details">
				{{data.college}}<br/>
				{{data.dept}}<br/>
				CRN: {{data.crn}}<br/>
				Course: {{data.subject}} {{data.course_number}}-{{data.section}}

				<div class="full-description">
					Semester course; 3 lecture hours. 3 credits. Introduces students to the interdisciplinary processes whereby those working in the field develop their arguments and interpretations concerning the black experience. Students will develop increased skills in library research and an awareness of the importance of such methodologies as archaeology, oral history, case studies, participant observations, experiments and surveys. Students will be introduced to the need for critical analysis, the role of biases and frames of references and the reason why scholars working in the field often reach different conclusions with reference to issues of fact, interpretation and significance.

					<button>HOW TO REGISTER</button>

				</div>
			</div>	

			<div class="mode">
				{{data.mode}}
			</div>
		</div>





	</div>    

  </div>
</div>







								</section>


								<footer class="article-footer">

                  <?php the_tags( '<p class="tags"><span class="tags-title">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '</p>' ); ?>

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
												<p><?php _e( 'This is the error message in the page-custom.php template.', 'bonestheme' ); ?></p>
										</footer>
									</article>

							<?php endif; ?>

						</main>

						<?php //get_sidebar(); ?>

				</div>

			</div>


<?php get_footer(); ?>