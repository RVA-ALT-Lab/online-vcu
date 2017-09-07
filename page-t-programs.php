<?php
/*
 Template Name: Programs
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


								<div aria-label="article-body" class="entry-content" itemprop="articleBody">
									<?php
										// the content (pretty self explanatory huh)
										the_content();
									?>







<div ng-app="benson">
  <div ng-controller="MainController">	
			
		<div class="controls">

			<div class="filters">
				<select aria-label="Select box to filter list by department" class="filter-department" ng-model="filterDepartment" 
						ng-options="
						data.department for data in data | 
						orderBy: 'department' |
						filter:filterDept.dept |
						unique:'department'">
				    <option value="">All Colleges</option>
				</select>

				<select aria-label="Select box to filter list by degree type" class="filter-degree" ng-model="filterDegree" 
						ng-options="
						data.degree for data in data | 
						orderBy: 'degree' |
						filter:filterCollege.college |
						unique:'degree'">
				    <option value=""> All Degrees</option>
				</select>

				<select aria-label="Select box to filter list by delivery mode" class="filter-mode" ng-model="filterMode" 
						ng-options="
						data.mode for data in data | 
						unique:'mode' ">
				    <option value=""> All Modes</option>
				</select>
			
			</div>


			<div class="global">
				<input aria-label="Search box to filter list by text" class="search" type="search" ng-model='search.$' placeholder='search'>
				
				<button class="reset" ng-click="
						search.$='';
						filterMode=''; 
						filterDepartment='';
						filterDegree='';">Reset All</button>
			</div>
		</div>
		
		<div class="course-table-headers">
			<div class="course header"><strong>Program</strong></div>
			<div class="details header"><strong>School</strong></div>
			<div class="mode header"><strong>Mode</strong></div>
		</div>


	  <div ng-show='spinner' class='spinner-wrap'>
        <div class='spinner'>
          <div class='ball'></div>
          <p>LOADING</p>
        </div>
      </div>

		<div ng-cloak class="course-table-row" 
			ng-click="showme = !showme"
			
			ng-repeat="
					data in data | 
					filter:search | 
					filter:filterDegree.degree |
					filter:filterDepartment.department |
					filter:filterMode.mode |
					orderBy: 'title'
				"
			>
			<a class="program-link cf" href="{{data.link}}" ng-cloak>

				<div class="course">
					<span class="course-title {{filter}}" ng-cloak >{{data.title}}</span><br/>
					<span class="course-subject {{filter}}" ng-cloak >{{data.meta.subject}}</span><br/>
				</div>		

				<div class="details">
					<span class="course-college {{filter}}" ng-cloak >{{data.meta.department}}</span><br/>
				</div>	

				<div class="mode">
					<span class="course-mode {{filter}}" ng-cloak >{{data.mode}}</span>
					<span ng-if="data.mode_desc" class='popup right' ng-cloak >{{data.mode_desc}}</span>
				</div>

			</a>
		</div>

  </div>
</div>


								</section>


								<footer class="article-footer" aria-label="article-footer">

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