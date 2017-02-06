<?php
/**
 * Template Name: Page with fixed header
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package qoob
 */

get_header( 'fixed' ); ?>
	<?php
	$template_parts = 'page';
	while ( have_posts() ) : the_post();
		$content = get_the_content();
		$meta = get_post_meta( get_the_ID(), 'qoob_data', true );

		if ( ( isset( $_GET['qoob'] ) && true === (boolean) $_GET['qoob'] ) || ( '{"blocks":[]}' !== $meta && '' !== $meta ) ) { // input var okay
			$template_parts = 'qoob';
		}
		get_template_part( 'template-parts/content', $template_parts );

	endwhile; // End of the loop.
	?>
<?php
get_footer();
?>
<script type='text/javascript'>
    $(function(){
      //Keep track of last scroll
      var lastScroll = 0;
      $(window).scroll(function(event){
          //Sets the current scroll position
          var st = $(this).scrollTop();
          //Determines up-or-down scrolling
          if (st > lastScroll){
             //Replace this with your function call for downward-scrolling
             alert("DOWN");
          }
          else {
             //Replace this with your function call for upward-scrolling
             alert("UP");
          }
          //Updates scroll position
          lastScroll = st;
      });
    });
</script>