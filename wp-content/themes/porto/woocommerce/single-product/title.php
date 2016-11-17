<?php
/**
 * Single Product title
 *
 * @version 1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
global $product, $porto_settings;
?>
<h1 itemprop="name" class="product_title entry-title">
    <?php if (porto_is_ajax()) : ?>
    <a href="<?php the_permalink(); ?>">
    <?php endif; ?>
    <?php the_title(); ?>
    <?php if (porto_is_ajax()) : ?>
    </a>
    <?php endif; ?>
	
</h1>
<?php 
$count = $product->get_review_count();
if($count >0){
?>
	<a href="#tab-reviews" class="danh-gia"><?php
			echo $count.' Bình luận';
		?></a>
<?php }?>
<script>
jQuery('.danh-gia').click(function(){
	jQuery('#tab-reviews').trigger('click');
});
</script>
	<?php if ( in_array('sku', $porto_settings['product-metas']) && wc_product_sku_enabled() && ( $product->get_sku() || $product->is_type( 'variable' ) ) ) : ?>

		<span class="sku_wrapper"><?php _e( 'Mã SP:', 'woocommerce' ); ?> <span class="sku" itemprop="sku"><?php echo ( $sku = $product->get_sku() ) ? $sku : __( 'N/A', 'woocommerce' ); ?></span></span>

	<?php endif; ?>
	