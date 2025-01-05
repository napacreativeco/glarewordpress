<?php wp_head(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title( '|', true, 'right' ); ?> <?php if (!is_front_page()) { bloginfo('name'); } ?></title>
    <link href="<?php echo get_template_directory_uri() . '/assets/favicon.ico'; ?>" rel="icon" type="image/x-icon" />
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300..400&display=swap" rel="stylesheet">
</head>

<body>