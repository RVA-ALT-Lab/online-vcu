<?php get_header(); ?>

			<div class="content">

				<div class="inner-content">

					<main class="main" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

						<article id="post-not-found" class="hentry">

							<section class="entry-content">

								<h1>{error 404}</h1>
								<h2>Uh, oh! The page you’re looking for is nowhere to be found.</h2>
								<p>First, double check the URL. If you continue to reach this page, please contact&nbsp;<a href="mailto:online@vcu.edu" rel="nofollow">online@vcu.edu</a>&nbsp;so we can correct our mistake.</p>
								<img src="<?php echo get_template_directory_uri(); ?>/library/images/LTdLGpRT4.jpg" />

								<p><a class="button" href="<?php echo home_url(); ?>">back to home</a></p>

							</section>

						</article>

					</main>

				</div>

			</div>

<?php get_footer(); ?>
