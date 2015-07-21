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

			<div class="filters">
				<select class="filter-college" ng-model="filterCollege" 
						ng-options="
						data.college for data in data | 
						orderBy: 'college' |
						filter:filterDept.dept |
						unique:'college'">
				    <option value="">All Colleges</option>
				</select>

				<select class="filter-dept" ng-model="filterDept" 
						ng-options="
						data.dept for data in data | 
						orderBy: 'dept' |
						filter:filterCollege.college |
						unique:'dept'">
				    <option value=""> All Departments</option>
				</select>

				<select class="filter-mode" ng-model="filterMode" 
						ng-options="
						data.mode for data in data | 
						unique:'mode' ">
				    <option value=""> All Modes</option>
				</select>
			
			</div>


			<div class="global">
				<input class="search" type="search" ng-model='search.$' placeholder='search'>
				
				<button class="reset" ng-click="
						search.$='';
						filterMode=''; 
						filterCollege='';
						filterDept='';">Reset All</button>
			</div>



			<ng-pluralize class="feedback"
			count="(
				data |
				filter:search | 
				filter:filterCollege.college |
				filter:filterMode.mode |
				filter:filterDept.dept ).length"
			when="{
				'0': '0 courses match your criteria.',
			    'one': '1 course matches your criteria.',
			    'other': '{} courses match your criteria.',
			}"></ng-pluralize>


		</div>
		
		<div class="course-table-headers">
			<div class="course header"><strong>Course</strong></div>
			<div class="details header"><strong>Details</strong></div>
			<div class="mode header"><strong>Mode</strong></div>
		</div>

		<div class="course-table-row" 
			ng-click="showme = !showme"
			
			dir-paginate='
					data in data | 
					orderBy: filter : false |
					filter:search | 
					filter:filterCollege.college |
					filter:filterMode.mode |
					filter:filterDept.dept |
					itemsPerPage: 10 
				'
			>

			

			<div class="course">
				<span class="course-title {{filter}}">{{data.title}}</span><br/>
				<span class="course-instructor {{filter}}">{{data.instructor}}</span><br/>
				<span class="course-term {{filter}}">{{data.term}}</span> from <i>May 18 to Jun 21</i>			
			</div>		

			<div class="details">
				<span class="course-college {{filter}}">{{data.college}}</span><br/>
				<span class="course-dept {{filter}}">{{data.dept}}</span><br/>
				CRN: <span class="course-crn {{filter}}">{{data.crn}}</span><br/>
				Course: <span class="course-subject {{filter}}">{{data.subject}}</span> <span class="course-number {{filter}}">{{data.course_number}}</span>-<span class="course-section {{filter}}">{{data.section}}</span>

				<div class="full-description" ng-show="showme">
					Semester course; 3 lecture hours. 3 credits. Introduces students to the interdisciplinary processes whereby those working in the field develop their arguments and interpretations concerning the black experience. Students will develop increased skills in library research and an awareness of the importance of such methodologies as archaeology, oral history, case studies, participant observations, experiments and surveys. Students will be introduced to the need for critical analysis, the role of biases and frames of references and the reason why scholars working in the field often reach different conclusions with reference to issues of fact, interpretation and significance.

					<button><a href="http://google.com">HOW TO REGISTER</a></button>
				</div>
			</div>	

			<div class="mode">
				<span class="course-mode {{filter}}">{{data.mode}}</span>
				<span ng-if="data.mode_desc" class='popup right'>{{data.mode_desc}}</span>
			</div>
		</div>

		
		<dir-pagination-controls boundary-links='true' on-page-change='pageChangeHandler(newPageNumber)' template-url='<?php echo get_template_directory_uri(); ?>/library/templates/dirPagination.tpl.html'></dir-pagination-controls>



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