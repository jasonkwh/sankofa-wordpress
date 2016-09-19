<?php get_header(); ?>

<?php if( get_theme_mod('home_feature_sec', 'on') == 'on' ) { ?>
	<!-- Featured box -->
	<?php include("includes/front-mid-box.php"); ?>
<?php } ?>

<!-- full-division-box -->
<?php  if( get_theme_mod('home_parallax_sec', 'on') == 'on' ) { ?>
<div id="full-division-box">
<div class="full-bg-image full-bg-image-fixed"></div>
	<div class="container full-content-box" >
		<div class="row-fluid">
			<div class="span12">
				<?php echo do_shortcode( get_theme_mod('parallax_content', '<div style="color:#fff"><div class="skt-ctabox"><div class="skt-ctabox-content"><h2>'.__('Awesome Parallax Section','invert-lite').'</h2><p>'.__('Lorem ipsum dolor sit amet, consectetur adipiscing elit. onec consequat malesuada urna, non fringilla purus malesuada eget.Lorem ipsum dolor sit amet, consectetur adipiscing elit. onec consequat malesuada urna, non fringilla purus malesuada eget.Lorem ipsum dolor sit amet, consectetur adipiscing elit. onec consequat malesuada urna, non fringilla purus malesuada eget.','invert-lite').'</p></div><div class="skt-ctabox-button"><a class="skt-ctabox-button" href="javascript:void(0)">'.__('Demo','invert-lite').'</a></div></div></div>') ); ?>
			</div>
		</div>
	</div>
</div>
<?php } ?>

<!-- PAGE EDITER CONTENT -->
<div id="front-page-content" class="skt-section">
	<div class="container">
		<div class="row-fluid"> 
		<?php while ( have_posts() ) : the_post(); ?>
			<?php the_content(); ?>
		<?php endwhile; ?>
		</div>
		<div class="border-content-box bottom-space"></div>
	</div>
</div>


<?php  if( get_theme_mod('home_blog_sec', 'on') == 'on' ) { ?>
<div id="front-content-box" >
	<div class="container">
		<div class="row-fluid">
			<h3 class="inline-border"><?php echo wp_kses_post( get_theme_mod('home_blog_title', __('Latest News', 'invert-lite') ) ); ?></h3>
			<p></p>
			<span class="border_left"></span>
		</br>
		</div>
		<div class="row-fluid">
		<?php $invert_blogno = esc_attr( get_theme_mod('home_blog_num', '6') );
		if( !empty($invert_blogno) && ($invert_blogno > 0) ) {
				$invert_lite_latest_loop = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => $invert_blogno,'ignore_sticky_posts' => true ) );
		}else{
			   $invert_lite_latest_loop = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => -1,'ignore_sticky_posts' => true ) );			
		} ?>

			<?php if ( $invert_lite_latest_loop->have_posts() ) : ?>

			<!-- pagination here -->

				<!-- the loop -->
				<?php while ( $invert_lite_latest_loop->have_posts() ) : $invert_lite_latest_loop->the_post(); ?>
					<div class="span4">
						<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
						<?php the_excerpt(); ?>
						<div class="continue"><a href="<?php the_permalink(); ?>"><?php _e('查看全文 &rarr;','invert-lite');?></a></div>		  
					</div>
				<?php endwhile; ?>
				<!-- end of the loop -->

				<!-- pagination here -->

				<?php wp_reset_postdata(); ?>

			<?php else : ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.', 'invert-lite' ); ?></p>
			<?php endif; ?>
		</div>
 	</div>
</div>
<?php } ?>



<?php  if( get_theme_mod('home_cta_sec', 'on') == 'on' ) { ?>
<div id="call-to-action-box" class="skt-section">
	<div class="container">
		<div class="call-to-action-block row-fluid">
			<div id="content" class="span12">
				<!-- Featured Area 2 -->
				<div class="skt-ctabox"> 
					<div class="skt-ctabox-content">
						<h2><?php echo esc_attr( get_theme_mod('home_cta_heading', __('JOIN THE ULTIMATE AND IRREPLACEABLE EXPERIENCE NOW.','invert-lite') ) ); ?></h2>
						<div><?php echo do_shortcode( wp_kses_post( get_theme_mod('home_cta_content', '<p>'.__('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec consequat malesuada urna, non fringilla purus malesuada eget.','invert-lite').'</p>' ) ) ) ?></div>
					</div>
					
					<div class="skt-ctabox-button">
						<a href="<?php echo esc_url( get_theme_mod('home_cta_btn_link', '#') ); ?>" class="skt-ctabox-button"><?php echo esc_attr( get_theme_mod('home_cta_btn_txt', __('Sign-Up Now', 'invert-lite') ) ); ?></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php } ?>

<!-- full-client-box -->
<?php  if( get_theme_mod('home_brand_sec', 'on') == 'on' ) { ?>
<div id="full-client-box" class="skt-section">
	<div class="container">
		<div class="row-fluid">

			<h3 class="inline-border"><?php echo esc_attr( get_theme_mod('home_brand_sec_title', __('Our Partners', 'invert-lite') ) ); ?></h3>
			<span class="border_left"></span>

			<ul class="clients-items clearfix">

				<li class="span2"><a href="<?php echo esc_url( get_theme_mod('brand1_url', '#') ); ?>" title="<?php echo esc_attr( get_theme_mod('brand1_alt', __('Client Logo', 'invert-lite') ) ); ?>"><img alt="<?php echo esc_attr( get_theme_mod('brand1_alt', __('Client Logo', 'invert-lite') ) ); ?>" src="<?php echo esc_url( get_theme_mod('brand1_img', get_template_directory_uri().'/images/03.png' ) ); ?>"></a></li>
				
				<li class="span2"><a href="<?php echo esc_url( get_theme_mod('brand2_alt', '#') ); ?>" title="<?php echo esc_attr( get_theme_mod('brand2_alt', __('Client Logo', 'invert-lite') ) ); ?>"><img alt="<?php echo esc_attr( get_theme_mod('brand2_alt', __('Client Logo', 'invert-lite') ) ); ?>" src="<?php echo esc_url( get_theme_mod('brand2_img', get_template_directory_uri().'/images/04.png' ) ); ?> "></a></li>

				<li class="span2"><a href="<?php echo esc_url( get_theme_mod('brand3_alt', '#') ); ?>" title="<?php echo esc_attr( get_theme_mod('brand3_alt', __('Client Logo', 'invert-lite') ) ); ?>"><img alt="<?php echo esc_attr( get_theme_mod('brand3_alt', __('Client Logo', 'invert-lite') ) ); ?>" src="<?php echo esc_url( get_theme_mod('brand3_img', get_template_directory_uri().'/images/05.png' ) ); ?> "></a></li>

				<li class="span2"><a href="<?php echo esc_url( get_theme_mod('brand4_url', '#') ); ?>" title="<?php echo esc_attr( get_theme_mod('brand4_alt', __('Client Logo', 'invert-lite') ) ); ?>"><img alt="<?php echo esc_attr( get_theme_mod('brand4_alt', __('Client Logo', 'invert-lite') ) ); ?>" src="<?php echo esc_url( get_theme_mod('brand4_img', get_template_directory_uri().'/images/06.png' ) ); ?> "></a></li>

				<li class="span2"><a href="<?php echo esc_url( get_theme_mod('brand5_url', '#') ); ?>" title="<?php echo esc_attr( get_theme_mod('brand5_alt', __('Client Logo', 'invert-lite') ) ); ?>"><img alt="<?php echo esc_attr( get_theme_mod('brand5_alt', __('Client Logo', 'invert-lite') ) ); ?>" src="<?php echo esc_url( get_theme_mod('brand5_img', get_template_directory_uri().'/images/03.png' ) ); ?> "></a></li>

				<li class="span2"><a href="<?php echo esc_url( get_theme_mod('brand1_url', '#') ); ?>" title="<?php echo esc_attr( get_theme_mod('brand1_alt', __('Client Logo', 'invert-lite') ) ); ?>"><img alt="<?php echo esc_attr( get_theme_mod('brand1_alt', __('Client Logo', 'invert-lite') ) ); ?>" src="<?php echo esc_url( get_theme_mod('brand1_img', get_template_directory_uri().'/images/03.png' ) ); ?>"></a></li>
				
				<li class="span2"><a href="<?php echo esc_url( get_theme_mod('brand2_alt', '#') ); ?>" title="<?php echo esc_attr( get_theme_mod('brand2_alt', __('Client Logo', 'invert-lite') ) ); ?>"><img alt="<?php echo esc_attr( get_theme_mod('brand2_alt', __('Client Logo', 'invert-lite') ) ); ?>" src="<?php echo esc_url( get_theme_mod('brand2_img', get_template_directory_uri().'/images/04.png' ) ); ?> "></a></li>

				<li class="span2"><a href="<?php echo esc_url( get_theme_mod('brand3_alt', '#') ); ?>" title="<?php echo esc_attr( get_theme_mod('brand3_alt', __('Client Logo', 'invert-lite') ) ); ?>"><img alt="<?php echo esc_attr( get_theme_mod('brand3_alt', __('Client Logo', 'invert-lite') ) ); ?>" src="<?php echo esc_url( get_theme_mod('brand3_img', get_template_directory_uri().'/images/05.png' ) ); ?> "></a></li>

				<li class="span2"><a href="<?php echo esc_url( get_theme_mod('brand4_url', '#') ); ?>" title="<?php echo esc_attr( get_theme_mod('brand4_alt', __('Client Logo', 'invert-lite') ) ); ?>"><img alt="<?php echo esc_attr( get_theme_mod('brand4_alt', __('Client Logo', 'invert-lite') ) ); ?>" src="<?php echo esc_url( get_theme_mod('brand4_img', get_template_directory_uri().'/images/06.png' ) ); ?> "></a></li>

				<li class="span2"><a href="<?php echo esc_url( get_theme_mod('brand5_url', '#') ); ?>" title="<?php echo esc_attr( get_theme_mod('brand5_alt', __('Client Logo', 'invert-lite') ) ); ?>"><img alt="<?php echo esc_attr( get_theme_mod('brand5_alt', __('Client Logo', 'invert-lite') ) ); ?>" src="<?php echo esc_url( get_theme_mod('brand5_img', get_template_directory_uri().'/images/03.png' ) ); ?> "></a></li>
				
			</ul>
		</div>
	</div>
</div>

<!-- Google Maps -->
<div id="map"></div>
    <script>
        
        var marker;
        
        function initMap() {
            var myLatLng = {lat: -33.86859, lng: 151.20930};
          
            // Specify features and elements to define styles.
            var styleArray = [
              {
                featureType: "all",
                stylers: [
                 { saturation: -80 }
                ]
              },{
                featureType: "road.arterial",
                elementType: "geometry",
                stylers: [
                  { hue: "#00ffee" },
                  { saturation: 50 }
                ]
              },{
                featureType: "poi.business",
                elementType: "labels",
                stylers: [
                  { visibility: "off" }
                ]
              }
            ];

            // Create a map object and specify the DOM element for display.
            var map = new google.maps.Map(document.getElementById('map'), {
              center: myLatLng,
              scrollwheel: false,
              // Apply the map style array to the map.
              styles: styleArray,
              zoom: 17
            });

            // Create a marker and set its position.
            marker = new google.maps.Marker({
              map: map,
                draggable: false,
                animation: google.maps.Animation.DROP,
              position: myLatLng,
              title: 'Sankofa Funds Management Pty Ltd'
            });

            marker.addListener('click', toggleBounce);
          }
        
        function toggleBounce() {
            if (marker.getAnimation() !== null) {
              marker.setAnimation(null);
            } else {
              marker.setAnimation(google.maps.Animation.BOUNCE);
            }
          }

    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDhEcnugr5FO-UyWH4eq2I9NOqiC8SOuQ4&callback=initMap"
    async defer></script>

<?php } ?>
<?php get_footer(); ?>