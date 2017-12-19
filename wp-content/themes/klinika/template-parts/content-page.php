

<!-- <article> -->
	<!-- <header class="entry-header">
		< ?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header> -->
<div class="text-block">
	<div class="text-block-1">
	<?php 
	// the_title( '<h1 class="entry-title">', '</h1>' );
	// echo '<p>&nbsp;</p>';
	?>
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'klinika' ),
				'after'  => '</div>',
			) );
		?>
	</div>
	<div class="text-block-2">
	--------------
	</div>
</div>


	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
				edit_post_link(
					sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__( 'Edit <span class="screen-reader-text">%s</span>', 'klinika' ),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						get_the_title()
					),
					'<span class="edit-link">',
					'</span>'
				);
			?>
		</footer> 
	<?php endif; ?>
<!-- </article>  -->
