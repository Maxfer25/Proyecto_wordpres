<?php
$args_post = [
        'post_type' => 'post',
        'post-status'=>'publish',
        'posts_per_page' => 3,
        'order' => 'ASC',
        'tax_query'=>[
            array(
                'taxonomy'=> 'info-home',
                'field'=>'slug',
                'terms'=> 'precios',
            )
        ]
];
$query_price = new WP_Query( $args_post );?>
<div class="contenedor1 services">
    <div class="box-skills">
    <?php
    if($query_price-> have_posts()): ?>
    <ul class="pricing-list">
        <?php while($query_price->have_posts()):
        $query_price -> the_post();?>
        <div class="container-pricing">
            <li class="pricing-list-item">
                <h3><?php the_title() ?></h3>
                <?php the_content() ?> 
                <div class="field-item">
                <h2><?php the_field('price');?></h2>
                <span><?php the_field('text1');?></span>
                <span><?php the_field('text2');?></span>
                <span><?php the_field('text3');?></span>
                <span><?php the_field('text4');?></span>
                <span><?php the_field('text5');?></span>
                <span><?php the_field('text6');?></span>
                <span><?php the_field('text7');?></span>
                </div>
            </li>
        </div>
        <?php endwhile; ?></ul>
        <?php endif; ?>
        </div></div>