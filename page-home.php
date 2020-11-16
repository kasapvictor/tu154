<?php
    /**
     * Template Name: Главная страница
     */
    get_header();
?>

<!-- header -->
<header>
    <?php get_template_part( 'partials/header'); ?>
</header>


<!-- main -->
<main class="main">
	<!-- section 1 -->
    <section class="s-1">
        <div class="container">
	        <div class="s-1-content">
		        <!-- slider -->
                <?php get_template_part( 'partials/home-slider' ); ?>

		        <!-- favorite block -->
		        <div class="wrap-s-1-favorite">
			        <div class="favorite-block-title">Товар недели</div>
			        <div class="favorite-img background-img">
				        <a href="#">
					        <img src="<?php echo get_template_directory_uri() . "/assets/images/temno-sinij-iphone-12-mozhet-pomoch-apple-prodat-do-68-millionov_large_large.jpg";?>" alt="">
				        </a>
			        </div>
			        <div class="favorite-category">
				        <a href="#">Смартфоны Apple</a>
			        </div>
			        <h3 class="favorite-title">
				        <a href="#">iPhone 12 Pro Max</a>
			        </h3>
			        <div class="favorite-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id, necessitatibus.</div>
			        <div class="favorite-wrap-cost">
				        <div class="favorite-cost">39,999 ₽</div>
				        <button class="favorite-add-to-cart add-to-cart button-ico" uk-icon="cart"></button>
			        </div>
		        </div>
	        </div>

        </div>
    </section>

	<!-- section 2 -->
	<section class="s-2">
		<div class="container">
			<div class="s-2-content">
				<h1>Категории</h1>
                <?php get_template_part( 'partials/menu-categories'); ?>
			</div>
		</div>
	</section>

	<!-- section 3 -->

</main>

<?php get_footer(); ?>
