<!DOCTYPE html>
<html lang="Fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <title><?php bloginfo('name');?>-<?php bloginfo('description'); ?></title>

</head>

<body>
    <h1><?php bloginfo('name');?></h1>
    <main>
        <?php while(have_posts()) : the_post(); ?>
        <article>
            <?php the_post_thumbnail(); ?>
            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>
        </article>
        <?php endwhile; ?>
    </main>
</body>

</html>