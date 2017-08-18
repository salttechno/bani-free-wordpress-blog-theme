<div class="wrap bani-wrap">
    <h1><?php esc_html_e( 'Theme Help', 'bani' ) ?></h1>

    <div class="welcome-panel">
        <div class="welcome-panel-content">
            <h2><?php esc_html_e( 'Thank you for using our theme!', 'bani' ) ?>  </h2>
            <p class="about-description">
                <?php echo wp_kses( 'We are always here to help you. The best way to start is to read the <a href="https://themes.salttechno.com/docs/bani-wordpress-blog-theme/" target="_blank">knowledge base.</a>', 'bani' ) ?>
            </p>

            <div class="welcome-panel-column-container">
                <div class="welcome-panel-column">
                    <h3><?php esc_html_e( 'Get Started', 'bani' ) ?></h3>
                    <a class="button button-primary button-hero load-customize hide-if-no-customize" href="https://themes.salttechno.com/docs/bani-wordpress-blog-theme/" target="_blank"><?php esc_html_e( 'Read Documentation', 'bani' ) ?></a>
                    <p class="hide-if-no-customize"><?php echo wp_kses( 'or, <a href="https://themes.salttechno.com/downloads/banipro-premium-wordpress-theme/" target="_blank">update to pro version!</a>', 'bani' ) ?></p>
                </div>
                <!-- /.welcome-panel-column -->

                <div class="welcome-panel-column">
                    <h3><?php esc_html_e( 'Next Steps', 'bani' ) ?></h3>
                    <ul>
                        <li>
                            <a href="https://themes.salttechno.com/subscribe-to-our-newsletter/" target="_blank" class="welcome-icon"><span class="dashicons dashicons-dashboard bani-about-next-icon"></span> <?php esc_html_e( 'Get optimization tips', 'bani' ) ?></a>
                        </li>
                        <li>
                            <a href="<?php echo esc_url( self_admin_url() ); ?>customize.php" class="welcome-icon"><span class="dashicons dashicons-media-document bani-about-next-icon"></span> <?php esc_html_e( 'Customize your site', 'bani' ) ?></a>
                        </li>
                        <li>
                            <a href="http://banipro.themesease.com" target="_blank" class="welcome-icon"><span class="dashicons dashicons-lightbulb bani-about-next-icon"></span> <?php esc_html_e( 'Check pro version demo', 'bani' ) ?></a>
                        </li>
                    </ul>
                </div>
                <!-- /.welcome-panel-column -->

                <div class="welcome-panel-column welcome-panel-last">
                    <h3><?php esc_html_e( 'More Actions', 'bani' ) ?></h3>
                    <ul>
                        <li>
                            <a href="https://themes.salttechno.com/docs/bani-wordpress-blog-theme/how-to-select-posts-in-featured-section/" target="_blank" class="welcome-icon"><span class="dashicons dashicons-editor-help bani-about-next-icon"></span> <?php esc_html_e( 'How to set featured posts?', 'bani' ) ?></a>
                        </li>
                        <li>
                            <a href="https://themes.salttechno.com/docs/bani-wordpress-blog-theme/how-to-create-a-contact-form/" target="_blank" class="welcome-icon"><span class="dashicons dashicons-email-alt bani-about-next-icon"></span> <?php esc_html_e( 'How to create a contact form?', 'bani' ) ?></a>
                        </li>
                        <li>
                            <a href="https://themes.salttechno.com/wordpress-themes/" target="_blank" class="welcome-icon"><span class="dashicons dashicons-art bani-about-next-icon"></span> <?php esc_html_e( 'More themes by SaltTechno', 'bani' ) ?></a>
                        </li>
                    </ul>
                </div>
                <!-- /.welcome-panel-column welcome-panel-last -->
            </div>
            <!-- /.welcome-panel-column-container -->
        </div>
        <!-- /.welcome-panel-content -->
    </div>
    <!-- /.welcome-panel -->



    <div class="welcome-panel">
        <div class="welcome-panel-content">
            <h2><?php esc_html_e( 'Your blog is good. Let\'s make it better!', 'bani' ) ?>  </h2>
            <p class="about-description">
                <?php echo wp_kses( 'We have created a premium version of this theme with more features. You can check demo <a href="http://banipro.themesease.com/" target="_blank">here.</a>', 'bani' ) ?>
            </p>

            <div class="welcome-panel-column-container">
                <div class="welcome-panel-column" >
                    <img src="<?php echo get_template_directory_uri() ?>/images/banipro-screenshot-600.jpg" alt="" style="max-width:90%;margin:15px;border-radius:4px;">
                </div>
                <!-- /.welcome-panel-column -->

                <div class="welcome-panel-column">
                    <h3><?php esc_html_e( 'Features:', 'bani' ) ?></h3>
                    <ul style="padding-left:20px;">
                        <li style="list-style-type: disc;">
                            <strong><?php esc_html_e( '5 Post Formats', 'bani' ) ?></strong>
                        </li>
                        <li style="list-style-type: disc;">
                            <strong><?php esc_html_e( 'Mulitple Navbars', 'bani' ) ?></strong>
                        </li style="list-style-type: disc;">
                        <li style="list-style-type: disc;">
                            <strong><?php esc_html_e( 'Edit Right Footer Text', 'bani' ) ?></strong>
                        </li>
                        <li style="list-style-type: disc;">
                            <strong><?php esc_html_e( 'Custom Widgets', 'bani' ) ?></strong>
                        </li>
                        <li style="list-style-type: disc;">
                            <strong><?php esc_html_e( 'Premium Support', 'bani' ) ?></strong>
                        </li>
                    </ul>
                </div>
                <!-- /.welcome-panel-column -->

                <div class="welcome-panel-column welcome-panel-last">
                    <h3><?php esc_html_e( 'Custom Widgets:', 'bani' ) ?></h3>
                    <ul style="padding-left:20px;">
                        <li style="list-style-type: disc;">
                            <strong><?php esc_html_e( 'About Me/Us', 'bani' ) ?></strong>
                        </li>
                        <li style="list-style-type: disc;">
                            <strong><?php esc_html_e( 'Latest Posts with Thumbnails', 'bani' ) ?></strong>
                        </li>
                        <li style="list-style-type: disc;">
                            <strong><?php esc_html_e( 'Promotional Link Boxes', 'bani' ) ?></strong>
                        </li>
                    </ul>
                    <a class="button button-primary button-hero load-customize hide-if-no-customize" href="https://themes.salttechno.com/downloads/banipro-premium-wordpress-theme/" target="_blank"><?php esc_html_e( 'Learn More', 'bani' ) ?></a>
                    <p class="hide-if-no-customize"><?php echo wp_kses ( 'or, <a href="http://banipro.themesease.com" target="_blank">view demo!</a>', 'bani' ) ?></p>
                </div>
                <!-- /.welcome-panel-column welcome-panel-last -->
            </div>
            <!-- /.welcome-panel-column-container -->
        </div>
        <!-- /.welcome-panel-content -->
    </div>
    <!-- /.welcome-panel -->



    <div class="bani-text-center">
        <a href="https://themes.salttechno.com" target="_blank" class="bani-d-iblock"><img src="<?php echo get_template_directory_uri() ?>/images/brought-by-salt.png" alt="" width="200"></a>
    </div>
    <!-- /.bani-text-center -->
</div>
<!-- /.wrap -->
