<?php 
// HEADER INFORMATION
define('HEADER_TEXTCOLOR', 'ffffff');
define('HEADER_IMAGE', '%s/images/default_header.jpg'); // %s is the template dir uri
define('HEADER_IMAGE_WIDTH', 1024); // use width and height appropriate for your theme
define('HEADER_IMAGE_HEIGHT', 500);

// gets included in the site header
function header_style() {
    ?><style type="text/css">
        #header {
            background: url(<?php header_image(); ?>);
			width: <?php echo HEADER_IMAGE_WIDTH; ?>px;
            height: <?php echo HEADER_IMAGE_HEIGHT; ?>px;
        }
    </style><?php
}
// gets included in the admin header
function admin_header_style() {
    ?><style type="text/css">
        #heading {
            width: <?php echo HEADER_IMAGE_WIDTH; ?>px;
            height: <?php echo HEADER_IMAGE_HEIGHT; ?>px;
            background: no-repeat;
        }
    </style><?php
}

add_custom_image_header('header_style', 'admin_header_style');

/**************************** END HEADER *************************/