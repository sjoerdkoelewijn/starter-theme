<?php
/**
 * Switch for Customizer.
 *
 * @package SKDD
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Create a range slider control.
 * This control allows you to add responsive settings.
 */
class SKDD_Switch_Control extends WP_Customize_Control {

	/**
	 * Declare the control type.
	 *
	 * @var string
	 */
	public $type = 'switch';

	/**
	 * Enqueue scripts and styles for the custom control.
	 */
	public function enqueue() {
		wp_enqueue_style(
			'SKDD-switch-control',
			SKDD_THEME_URI . 'inc/customizer/custom-controls/switch/css/switch.css',
			array(),
			SKDD_version()
		);
	}

	/**
	 * Render the control to be displayed in the Customizer.
	 */
	public function render_content() {
		$name    = '_customize-switch-' . $this->id;
		$id      = $this->id;
		$label   = $this->label;
		$value   = false == $this->value() ? 0 : 1;
		$desc    = $this->description;
		?>

		<div class="SKDD-switch-customize-control">
			<?php if ( ! empty( $label ) ) { ?>
				<span class="customize-control-title">
					<?php echo esc_html( $label ); ?>
				</span>
			<?php } ?>

			<div class="SKDD-switch-toggle">
				<input
					id="<?php echo esc_attr( $id ); ?>"
					type="checkbox"
					name="<?php echo esc_attr( $name ); ?>"
					class="SKDD-switch-control switch-control"
					value="<?php echo esc_attr( $value ); ?>"
					<?php
						$this->link();
						checked( $value );
					?>
					/>

				<label for="<?php echo esc_attr( $id ); ?>" class="switch-control-label">
					<span class="on-off-label"></span>
				</label>
			</div>

			<?php if ( ! empty( $desc ) ) { ?>
				<span class="description customize-control-description"><?php echo esc_html( $desc ); ?></span>
			<?php } ?>
		</div>

		<?php
	}
}
