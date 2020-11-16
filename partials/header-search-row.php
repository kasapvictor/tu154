<div class="wrap-search-row">
    <div class="container">
        <!-- search-row-content -->
        <div class="search-row-content">
            <a href="/" class="logo">
                <img
                    src="<?php echo get_bloginfo( 'template_url' ); ?>/assets/images/favicon-32x32.svg"
                    alt="<?php echo get_bloginfo('name'); ?> - <?php echo get_bloginfo('description'); ?>">
            </a>

            <div class="contact">
                <span>Горячая линия:</span>
                <a href="tel:88002000001">8 800 200 00 01</a>
            </div>

            <div class="wrap-top-search"> <?php get_search_form(); ?> </div>

            <!-- top-cart -->
            <div class="wrap-top-cart">
                <div class="wrap-cart-ico">
					<span class="ico">
						<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart4" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
						  <path fill-rule="evenodd" d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
						</svg>
					</span>
                    <span class="top-cart-count">0</span>
                </div>
            </div>
            <div class="wrap-top-cart-list"
                 uk-drop="animation: uk-animation-slide-top-small; duration: 300;"
            >
                <div class="cart-list-product-row">
                    <div class="cart-list-product-img"></div>
                    <a href="#" class="cart-list-product-name-link">Product 1</a>
                    <div class="cart-list-product-count">1 шт</div>
                    <div class="cart-list-product-cost">758,00 Руб</div>
                </div>
                <div class="cart-list-product-row">
                    <div class="cart-list-product-img"></div>
                    <a href="#" class="cart-list-product-name-link">Product best product the best of the best</a>
                    <div class="cart-list-product-count">1 шт</div>
                    <div class="cart-list-product-cost">758,00 ₽</div>
                </div>
                <div class="cart-list-product-row">
                    <div class="cart-list-product-img"></div>
                    <a href="#" class="cart-list-product-name-link">Product 1</a>
                    <div class="cart-list-product-count">1 шт</div>
                    <div class="cart-list-product-cost">758,00 ₽</div>
                </div>

                <div class="cart-list-row">
                    <div class="cart-list-product-total-cost">758,00 ₽</div>
                    <a href="/checkout" class="button button-warning cart-list-button-checkout">Оформить заказ</a>
                </div>

            </div>

        </div>
    </div>

</div>