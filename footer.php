<footer class="row">
    <hr>
	<div class="col-md-6">
        <h1><a href="<?php echo get_home_url(); ?>" class="text-decoration-none text-black"><?php echo get_bloginfo("name") ?></a></h1>
    </div>

	<div class="col-md-6">
		<div class="d-flex justify-content-end">
            <ul id="footer-nav" class="list-unstyled">
                <?php
                $menu = wp_get_nav_menu_items('Footer Menu');

                foreach($menu as $menu_item)
                {
                    // var_dump($menu_item); // render the object
                    echo '<li><a class="float-right text-decoration-none text-black" href="'.$menu_item->url.'">'.$menu_item->title.'</a></li>';
                };
                ?>
            </ul>
		</div>
	</div>

</footer>
</div>

<?php wp_footer(); ?>

</body>
</html>