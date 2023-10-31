<?PHP
function my_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(<?php echo wp_upload_dir()['base_dir']; ?>/wp-content/uploads/2022/05/name-of-image.png);
			height:65px;
			width:320px;
			background-size: 320px 65px;
			background-repeat: no-repeat;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );
?>
