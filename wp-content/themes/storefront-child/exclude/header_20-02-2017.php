<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package storefront
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> <?php storefront_html_tag_schema(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-69208818-1', 'auto');
  ga('send', 'pageview');

</script>

<!-- Hotjar Tracking Code for http://www.dogmastore.com.br -->
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:142880,hjsv:5};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'//static.hotjar.com/c/hotjar-','.js?sv=');
</script>

<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');

fbq('init', '1552802225014191');
fbq('track', "PageView");

<?php

if ( is_product() ) {
  echo "fbq('track', 'ViewContent')";
} elseif ( is_search() ) {
   echo "fbq('track', 'Search');";
} elseif ( is_cart() ) {
  echo "fbq('track', 'AddToCart');";
} elseif (is_checkout() ) {
   echo "fbq('track', 'InitiateCheckout');";
} elseif (is_wc_endpoint_url( 'add-payment-method' ) ) {
   echo "fbq('track', 'AddPaymentInfo');";
} elseif (is_wc_endpoint_url( 'add-payment-method' ) ) {
   echo "fbq('track', 'AddPaymentInfo');";
} else {
  echo "fbq('track', 'Other');";
}

?>
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=1552802225014191&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->

<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="image/x-icon">
<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="image/x-icon">


</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<?php
	do_action( 'storefront_before_header' ); ?>
	<div class="barTop">
		<ul class="socialMedia">
			<li class="facebook"><a href="https://www.facebook.com/dogmastorebr" title="facebook" target="_blank"></a></li>
			<li class="instagram"><a href="https://instagram.com/dogma.store/" title="instagram" target="_blank"></a></li>
			<li class="youtube"><a href="https://www.youtube.com/channel/UCk8Wr6idc4AV_fzB91idBGw" title="youtube" target="_blank"></a></li>
			<li class="twitter"><a href="https://twitter.com/@dogmastorebr" title="twitter" target="_blank"></a></li>
			<li class="pinterest"><a href="https://br.pinterest.com/dogmastore/" title="pinterest" target="_blank"></a></li>
		</ul>
		<a id="settings" class="settings fontIcon" href="javascript:;"></a>
		<ul class="linksCommerce">
			<li class="atendimento"><span>Atendimento <strong>(85) 98126-2984</strong></span></li>
			<li class="troca"><a href="<?php echo esc_url( home_url( '/trocas-e-devolucoes' ) ); ?>"><span><strong>Trocas</strong> e Devoluções</span></a></li>
			<li class="frete"><a href="<?php echo esc_url( home_url( '/frete' ) ); ?>"><span><strong>Frete</strong></span></a></li>
			<li class="pagamento"><a href="<?php echo esc_url( home_url( '/formas-de-pagamento' ) ); ?>"><span><strong>Pagamento</strong></span></a></li>
			<li class="conta"><a href="<?php echo esc_url( home_url( '/minha-conta' ) ); ?>"><span>Minha <strong>Conta</strong></span></a></li>


		</ul>
	</div>
	<header id="masthead" class="site-header" role="banner">
		<div class="col-full">


			<?php
			/**
			 * @hooked storefront_skip_links - 0
			 * @hooked storefront_social_icons - 10
			 * @hooked storefront_site_branding - 20
			 * @hooked storefront_secondary_navigation - 30
			 * @hooked storefront_product_search - 40
			 * @hooked storefront_primary_navigation - 50
			 * @hooked storefront_header_cart - 60
			 */
			do_action( 'storefront_header' ); ?>



		</div>
	</header><!-- #masthead -->

	<?php
	/**
	 * @hooked storefront_header_widget_region - 10
	 */
	do_action( 'storefront_before_content' ); ?>

	<div id="content" class="site-content" tabindex="-1">
		<div class="col-full">


		<?php if ( !is_home() ) : ?>

		<?php

		if ( has_post_thumbnail() ) {

			$image_id = get_post_thumbnail_id();
			//storefront_post_thumbnail( 'full' );
			$sizeThumbs = 'full';


			$urlThumbnail = wp_get_attachment_image_src($image_id, $sizeThumbs);
			$urlThumbnail = $urlThumbnail[0];

		?>

		<?php

		if ( is_shop() ) :

		?>

		<div class="headerPage storePage">
			<header class="contentHeaderPage">
				<h1 class="entry-title" itemprop="name">
					<!--<div id="diamond"><div class="icon"></div></div>-->
					<span>LOJA</span>
				</h1>
			</header>
		</div>

		<?php elseif(  is_product_category() ) : ?>

		<?php



    if ( is_product_category() ){
	    global $wp_query;
	    $cat = $wp_query->get_queried_object();
	    $thumbnail_id = get_woocommerce_term_meta( $cat->term_id, 'thumbnail_id', true );
	    $image = wp_get_attachment_url( $thumbnail_id );
	}


		?>

		<div class="headerPage storePage" <?php if ( $image ) { echo 'style="background:url(' . $image . ') no-repeat center top fixed;"'; } ?>>
			<header class="contentHeaderPage">
				<h1 class="entry-title" itemprop="name"><span><?php single_cat_title(); ?></span></h1>
			</header>
		</div>

		<?php elseif(  is_product() ) : ?>

		<div class="headerPage storePage">
			<header class="contentHeaderPage">
				<!--<h1 class="entry-title" itemprop="name"><span>PRODUTO</span></h1>-->
				<ul class="blocksHome">
			<li class="block frete">
				<a href="<?php echo esc_url( home_url( '/frete-gratis' ) ); ?>">
					<h4 class="title">FRETE <br/>GRÁTIS</h4>
				</a>
			</li>
			<li class="block troca">
				<a href="<?php echo esc_url( home_url( '/trocas-devolucoes-e-garantia' ) ); ?>">
					<h4 class="title">TROCA <br />GARANTIDA</h4>
				</a>
			</li>
			<li class="block seguranca">
				<a href="<?php echo esc_url( home_url( '/politica-de-privacidade-e-seguranca' ) ); ?>">
					<h4 class="title">SUA COMPRA <br />MAIS SEGURA</h4>
				</a>
			</li>
			<li class="block atendimento">
				<a href="<?php echo esc_url( home_url( '/atendimento' ) ); ?>">
					<h4 class="title">CENTRAL DE <br />ATENDIMENTO</h4>
				</a>
			</li>
		</ul>
			</header>
		</div>

		<?php else : ?>

		<div class="headerPage" style="background:url(<?php echo $urlThumbnail; ?>) no-repeat center top fixed;">
			<header class="contentHeaderPage">
				<?php the_title( '<h1 class="entry-title" itemprop="name"><span>', '</span></h1>' ); ?>
			</header>
		</div>


		<?php

		endif;

		} else {

		}
		endif;

	?>




		<?php
		/**
		 * @hooked woocommerce_breadcrumb - 10
		 */
		do_action( 'storefront_content_top' );
		?>

