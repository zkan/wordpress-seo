<?php
/**
 * @package WPSEO\Admin
 */

/** @noinspection PhpUnusedLocalVariableInspection */
$alerts_data = Yoast_Alerts::get_template_variables();

$notifier = new WPSEO_Configuration_Notifier();
$notifier->listen();

?>

<div class="tab-block">
	<div class="yoast-alerts">

		<?php echo $notifier->notify(); ?>

		<div class="yoast-container yoast-container__alert">
			<?php require WPSEO_PATH . 'admin/views/partial-alerts-errors.php'; ?>
		</div>

		<div class="yoast-container yoast-container__warning">
			<?php require WPSEO_PATH . 'admin/views/partial-alerts-warnings.php'; ?>
		</div>

	</div>
</div>

<div class="tab-block">
	<h3>Credits</h3>
	<p>
		<span class="dashicons dashicons-groups"></span>
		<a href="<?php WPSEO_Shortlinker::show( 'http://yoa.st/yoast-seo-credits' ) ?>"><?php
			printf(
			/* translators: %1$s expands to Yoast SEO */
				esc_html__( 'See which people contributed to %1$s.', 'wordpress-seo' ),
				'Yoast SEO'
			);
			?></a>
	</p>
</div>

<?php

/**
 * Action: 'wpseo_internal_linking' - Hook to add the internal linking analyze interface to the interface.
 *
 * @deprecated 7.0
 */
do_action_deprecated( 'wpseo_internal_linking', array(), 'WPSEO 7.0' );
