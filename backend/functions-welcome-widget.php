<?php
/**
 *
 * @package split
 * @since split 1.0.0
 * @license GPL 2.0
 * 
 */

#-------------------------------------------------------------
# Setup Welcome Widget
#-------------------------------------------------------------

function split_dashboard_widget () {

    // Fetch User Information
    global $current_user;
    wp_get_current_user();

    // Widget Information
    $widgetSlug     = 'split_dashboard';
    $widgetTitle    =  "3 important things to know about Split";
    $widgetFunction = 'split_widget_content';

    // Widget Option
    wp_add_dashboard_widget($widgetSlug , $widgetTitle , $widgetFunction);
}

add_action( 'wp_dashboard_setup', 'split_dashboard_widget' );


# ---------------------------------------
# Widget Content
# ---------------------------------------

function split_widget_content() {

    ?>

    <p><strong>1. Split uses the free FullSingle plugin</strong> 🛠</p>
    <p>The Split WordPress theme uses the free <a href="https://onepagelove.com/go/fullsingle-setup">FullSingle plugin by One Page Love</a> to insert and edit the Split layout. Please watch the <a href="https://onepagelove.com/go/fullsingle">FullSingle setup video</a> or read the instructions <a href="https://github.com/robhope/fullsingle-split#setup-instructions-watch-video">here</a> to get going.</p>

    <p><strong>2. Split can actually work with any WordPress theme</strong> 🙏</p>
    <p>If you keep the <a href="https://onepagelove.com/go/fullsingle">FullSingle plugin</a> activated, you can switch to any WordPress theme (maybe you want a specific blog design) and the Split layout will look exactly the same.</p> 

    <p><strong>3. Customize Split within the Theme Customizer</strong> 🖌</p>
    <p>Open up your <a href="<?php print get_home_url(); ?>/wp-admin/customize.php">Theme Customizer</a> > FullSingle > Split panel to access color controls, setup videos, bonus downloads and support information.</p> 

    <p><em>Thanks for choosing Split, it's a gorgeous theme I'm super proud of.</em></p>

	<p>Cheers,<br />Rob<br /><a href="https://twitter.com/robhope">@robhope</a><br /><a href="mailto:rob@onepagelove.com">rob@onepagelove.com</a></p>

    <?php
}