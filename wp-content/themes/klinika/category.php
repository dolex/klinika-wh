<?php

get_header(); ?>

<div class="content-page">
	<div class="content-page-div-1">
    <?php 	if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(' / '); ?>
		<main>
			<?php
			while ( have_posts() ) : the_post();

			the_title( '<h1 class="h1-category">', '</h1>' );

            the_excerpt();
            ?>
            <a href="<?php echo get_permalink(); ?>">Читать статью</a>
            <?php


				// //If comments are open or we have at least one comment, load up the comment template.
				// if ( comments_open() || get_comments_number() ) :
				// 	comments_template();
				// endif;

			endwhile; // End of the loop.
			?>

		</main>
		</div>
			<div class="content-page-div-2">
	 
 

 
				<div class="grid__column grid__column--4-sidebar main-body__menu">
				
				<h2>Наши услуги:</h2>
<p>&nbsp;</p>
				<div style="width: 100%; height: 0px;"><ul class="main-body__menu-list" data-sticky-end=".page-bottom" style="top: -190.4px;">
					<li class="main-body__menu-list-item">
						<a href="../services/treatment_st.html">
							<div class="main-body__menu-item-wrapper">
								<img src="https://www.klinika-wh.ru/img/main/ico5.png" alt="">
								<span class="main-body__menu-item-title">Лечение бесплодия</span>   
							</div>
						</a>    
					</li>

					<li class="main-body__menu-list-item">
						<a href="../services/vedenye_ber.html">
							<div class="main-body__menu-item-wrapper">
								<img src="https://www.klinika-wh.ru/img/main/ico7.png" alt="">
								<span class="main-body__menu-item-title">Ведение беременности</span>    
							</div>
						</a>    
					</li>

					<li class="main-body__menu-list-item">
						<a href="../services/EKO-v-Chehii.html">
							<div class="main-body__menu-item-wrapper">
								<img src="https://www.klinika-wh.ru/img/main/ico3.png" alt="">
								<span class="main-body__menu-item-title">ЭКО в Чехии</span> 
							</div>
						</a>    
					</li>

					<li class="main-body__menu-list-item">
						<a href="../services/esthetic.html">
							<div class="main-body__menu-item-wrapper">
								<img src="https://www.klinika-wh.ru/img/main/ico1.png" alt="">
								<span class="main-body__menu-item-title">Эстетическая гинекология</span>    
							</div>
						</a>    
					</li>
					<li class="main-body__menu-list-item">
						<a href="../services/endocrine.html">
							<div class="main-body__menu-item-wrapper">
								<img src="https://www.klinika-wh.ru/img/main/ico8.png" alt="">
								<span class="main-body__menu-item-title">Эндокринная гинекология</span> 
							</div>
						</a>    
					</li>             
								
					
					
					<li class="main-body__menu-list-item">
						<a href="../services/colposcopy.html">
							<div class="main-body__menu-item-wrapper">
								<img src="https://www.klinika-wh.ru/img/main/ico2.png" alt="">
								<span class="main-body__menu-item-title">Кольпоскопия шейки матки</span>    
							</div>
						</a>    
					</li>

					<li class="main-body__menu-list-item">
						<a href="../services/US.html">
							<div class="main-body__menu-item-wrapper">
								<img src="https://www.klinika-wh.ru/img/main/ico4.png" alt="">
								<span class="main-body__menu-item-title">УЗИ гинекологическое</span>    
							</div>
						</a>    
					</li>
					<li class="main-body__menu-list-item">
						<a href="../services/climax.html">
							<div class="main-body__menu-item-wrapper">
								<img src="https://www.klinika-wh.ru/img/main/ico6.png" alt="">
								<span class="main-body__menu-item-title">Терапия при климаксе</span>	
							</div>
						</a>	
					</li>
					
					
				</ul></div>

			</div>
			<!-- <style>
#aside1 {
  position: fixed;
  z-index: 101;
}
</style> -->
			</div>
</div>
<?php
get_sidebar();
get_footer();