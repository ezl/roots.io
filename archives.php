<?php
/*
Template Name: Archives
*/?>

<div id="container">
    <div id="content" role="main">

        <?php the_post(); ?>
        <h1 class="entry-title"><?php the_title(); ?></h1>

<style>
    table { margin-top: 25px;}
    td { padding-right: 20px; padding-bottom: 10px; vertical-align: top;}
</style>

<table id="archives">
<?php


$args = array('posts_per_page' => 100, 'offset'=> 0, );

$myposts = get_posts( $args );
foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
    <tr>
        <td>
            <time class="updated"><?php the_time("M Y"); ?></time>
        </td>
        <td>
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </td>
    </tr>
<?php endforeach; 
wp_reset_postdata();?>

</table>

    </div><!-- #content -->
</div><!-- #container -->
