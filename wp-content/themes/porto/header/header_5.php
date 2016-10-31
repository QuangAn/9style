<?php
global $porto_settings, $porto_layout;

$search_size = $porto_settings['search-size'];
$minicart_type = $porto_settings['minicart-type'];
?>
<header id="header" class="header-5 <?php echo $search_size ?>">
    <?php if ($porto_settings['show-header-top']) : ?>
    <div class="header-top">
        <div class="container">
            <div class="header-left">
                <?php
                // show social links
                echo porto_header_socials();

                // show welcome message
                if ($porto_settings['welcome-msg'])
                    echo '<span class="welcome-msg">' . do_shortcode($porto_settings['welcome-msg']) . '</span>';
                ?>
            </div>
           
        </div>
    </div>
    <?php endif; ?>

    <div class="header-main">
        <div class="container">
		
            <div class="header-left">
                <?php
                // show logo
                $logo = porto_logo();
                echo $logo;
				?>
                <div class="blog-des">Hãy đẹp theo phong cách của bạn</div>
            </div>
            <div class="header-center">
                <?php
                // show search form
                echo porto_search_form();

                // show mobile toggle
                ?>
                <a class="mobile-toggle"><label>Menu</label><i class="fa fa-reorder"></i></a>
            </div>
            <div class="header-right">

			
                <?php
				// show contact info and top navigation
                    $contact_info = $porto_settings['header-contact-info'];

                    if ($contact_info)
                        echo '<div class="header-contact">' . do_shortcode($contact_info) . '</div>';

                    $top_nav = porto_top_navigation();

                    //if ($contact_info && $top_nav)
                        //echo '<span class="gap contact-gap">|</span>';
               
                ?>
				

            </div>
			
		</div>
		<div class="header-bottom">
		
		<div class="container">
				 <div id="main-menu">
                        <?php
                        // show main menu
                        echo porto_main_menu();
                        ?>
                    </div>
					<?php  $minicart = porto_minicart(); ?>
                <div class="<?php if ($minicart) echo 'header-minicart'.str_replace('minicart', '', $minicart_type) ?>">
                    <?php
                    

                    echo $top_nav;
                    ?>
                   
                    
                </div>
                 <div class="header-cart">
                <?php
                // show currency and view switcher
                /*$currency_switcher = porto_currency_switcher();
                $view_switcher = porto_view_switcher();

                if ($currency_switcher || $view_switcher)
                    echo '<div class="switcher-wrap">';

                echo $currency_switcher;

                if ($currency_switcher && $view_switcher)
                    echo '<span class="gap switcher-gap">|</span>';

                echo $view_switcher;

                if ($currency_switcher || $view_switcher)
                    echo '</div>';*/
                ?>
                <?php  $minicart = porto_minicart(); ?>
                <div class="<?php if ($minicart) echo 'header-minicart'.str_replace('minicart', '', $minicart_type) ?>">
                   
                    <?php
                    // show mini cart
                    echo $minicart;
                    ?>
                </div>
            </div>
                <?php
                get_template_part('header/header_tooltip');
                ?>
			</div>
	</div>
    </div>
	
</header>