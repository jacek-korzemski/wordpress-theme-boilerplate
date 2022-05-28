<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php if (get_the_title()) { the_title(); } ?></title>
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/style.css" />
</head>
<body>
<?php display_menu('main-menu'); ?>