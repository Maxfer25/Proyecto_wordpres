<?php 
$args_post = [
        'post_type' => 'post',
        'post-status'=>'publish',
        'posts_per_page' => 3,
        'tax_query'=>[
            array(
                'taxonomy'=> 'info-home',
                'field'=>'slug',
                'terms'=> 'informacion-principal'
            )
        ]
];
$query_info = new WP_Query( $args_post );?>
<div class="contenedor1 services">
    
    <?php
    if($query_info-> have_posts()): ?>
     <div class="container-pricing">
    <ul class="contenedor-articulo">
        <?php while($query_info->have_posts()):
        $query_info -> the_post();?>
        <li class="articulo">
            <figure>
                <?php the_post_thumbnail();?>
            </figure>
            <h3>
                <?php the_title();?>
            </h3>
                <?php the_excerpt();?>
        </li>
        <?php endwhile; ?></ul>
        <?php endif; ?>
        </div>
        </div>