<?php get_header()?>
<section class="hero">
        <div class="hero__wrapper">
            <div class="wrapper">
                <div class="wrapper__heading">
                    <span>Everything you love</span>
                    <h1>Delivered to you</h1>
                    <div class="button button-white">SEE CATALOGUE</div>
                </div>
            </div>
        </div>
    </section>

    <!--<section class="standard-promo">
        <div class="promo-card promo-card--gray promo-card--one">
            <h2 class="promo-card__heading">
                About Us
            </h2>
            <p class="promo-card__body">
                We are a Duka Fishnet LLC Company.
                Duka Fishnet LLC is fully registered as a Limited Liability Company in Kenya.

            </p>
            <a href="/"class="button">Learn More</a>
        </div>

        <div class="promo-card promo-card--gray promo-card--two">
            <h2 class="promo-card__heading">
               Sell Your Products
            </h2>
            <p class="promo-card__body">
                Talk to us to list your products and you have instant access to a web presence and existing customer base. 
            </p>
            <a href="/"class="button">Sign Up</a>
        </div>
    </section> -->

    <section class="shop-section">
        <h1 class="shop-section__heading">Favourite Products</h1>
        <p class="shop-section__body">See what other customers are liking! </p>
        <div class="items">
        <?php echo do_shortcode('[products limit="4" columns="4"]'); ?>

        </div>
    </section>

    <section class="shop-section">
        <h2 class="shop-section__heading">On Sale</h2>
        <p class="shop-section__body">Big discounts on lots of items! </p>
        <div class="items">
            <?php echo do_shortcode('[products limit="4" columns="4" visibility="onsale" ]
'); ?>
        </div>
    </section>

    <section class="signup">
        <h1 class="signup__heading">
            Sign up to receive early updates and offers<br>on the best deals and new produts as we add them!
        </h1>
        <form action="" class="form">
            <input class="form__email" type="text" placeholder="Your best email">
            <input class="button button-white form__submit" type="button " value="SUBMIT">
        </form>
    </section>
    <?php get_footer();?>
