<?php
global $mk_options;

$mk_footer_class = $show_footer = $disable_mobile = $footer_status = '';

$post_id = global_get_post_id();
if ( $post_id ) {
	$show_footer = get_post_meta( $post_id, '_template', true );
	$cases = array( 'no-footer', 'no-header-footer', 'no-header-title-footer', 'no-footer-title' );
	$footer_status = in_array( $show_footer, $cases );
}

if ( $mk_options['disable_footer'] == 'false' || ( $footer_status ) ) {
	$mk_footer_class .= ' mk-footer-disable';
}

if ( $mk_options['footer_type'] == '2' ) {
	$mk_footer_class .= ' mk-footer-unfold';
}


$boxed_footer = (isset( $mk_options['boxed_footer'] ) && ! empty( $mk_options['boxed_footer'] )) ? $mk_options['boxed_footer'] : 'true';
$footer_grid_status = ($boxed_footer == 'true') ? ' mk-grid' : ' fullwidth-footer';
$disable_mobile = ($mk_options['footer_disable_mobile'] == 'true' ) ? $mk_footer_class .= ' disable-on-mobile' : ' ';


	
?>


<footer>	
	
<section id="footer">
   
   <a class="logotipo" href="https://healthcoachesunidos.org/">
       <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/weekend/healthcoachesunidos.png" alt="Health Coaches Unidos">
   </a>
   
    <div class="menu-footer">
       <div class="flex">
           <div class="col">
               <a href="https://healthcoachesunidos.org/aviso-de-privacidad/">Aviso de privacidad</a>
           </div>
           <div class="col">
                <a>Términos y condiciones</a> 
           </div>
           <div class="col">
                <a href="https://healthcoachesunidos.org/contacto/">Contacto</a>
           </div>           
       </div>
         
         
         <div class="flex">      
        <div class="col">
            <p>© 2018 Todos los derechos reservados </p>
        </div>
        <div class="col">
            <a href="https://esbrillante.mx/diseno-de-paginas-web-profesionales-empresas/" target="_blank" ><p>EsBrillante: Desarrollo de Soluciones Web</p></a>
        </div>
    </div>
    </div>
    
</section>


</footer>
    
    
</div>
<?php

	global $is_header_shortcode_added;

	/**
	 * After new changed, it will return null if there is no header shortcode
	 * added. Need to check and save it as array if it's null to avoid error.
	 *
	 * @since 6.0.3
	 * @see /components/shortcodes/mk_header/config.php
	 */
	if ( ! is_array( $is_header_shortcode_added ) ) {
		$is_header_shortcode_added = array();
	}

if ( $mk_options['seondary_header_for_all'] === 'true' || get_header_style() === '3' || in_array( '3', $is_header_shortcode_added, true ) ) {
	mk_get_header_view(
		'holders', 'secondary-menu', [
			'header_shortcode_style' => $is_header_shortcode_added,
		]
	);
}
?>
</div>

<div class="bottom-corner-btns js-bottom-corner-btns">
<?php
if ( 'false' !== $mk_options['go_to_top'] ) {
	mk_get_view( 'footer', 'navigate-top' );
}

if ( 'false' !== $mk_options['disable_quick_contact'] ) {
	mk_get_view( 'footer', 'quick-contact' );
}

		do_action( 'add_to_cart_responsive' );
?>
</div>


<?php
if ( $mk_options['header_search_location'] === 'fullscreen_search' ) {
	mk_get_header_view( 'global', 'full-screen-search' );
}
?>

<?php if ( ! empty( $mk_options['body_border'] ) && $mk_options['body_border'] === 'true' ) { ?>
	<div class="border-body border-body--top"></div>
	<div class="border-body border-body--left border-body--side"></div>
	<div class="border-body border-body--right border-body--side"></div>
	<div class="border-body border-body--bottom"></div>
<?php } ?>

	<?php wp_footer(); ?>

	<?php do_action( 'mk_theme_before_body_closing' ); ?>
	
<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window,document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
 fbq('init', '846027708933706'); 
fbq('track', 'PageView');
</script>
<noscript>
 <img height="1" width="1" 
src="https://www.facebook.com/tr?id=846027708933706&ev=PageView
&noscript=1"/>
</noscript>
<!-- End Facebook Pixel Code -->


</body>
</html>
