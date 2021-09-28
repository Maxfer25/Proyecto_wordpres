<nav>
<section class="contenedor nav">
    <div class="logo">
                    <h2>LOGO</h2>
    </div>
            <?php
                $args = [
                    'menu'=> 'Menu 1',
                    'menu_class' => 'enlaces-header',
                    'container' => '',
                ];        wp_nav_menu($args);
            ?>        
    <div class="hamburguer">
        <i class="fas fa-bars"></i> 
    </div>
</section>
</nav>