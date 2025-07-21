<?php require_once('header.php') ?>
<?php require_once ('../1.controller/controller-menu.php') ?>

<!-- WRAP CONTENT -->
<div id="wrap-content" class="page-content custom-page-template">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-holder custom-page-template">
                    <div class="row margin-b54">
                        <div class="col-md-6">
                            <div class="alignc">
                                <div class="smalltitle margin-b16">1</div>
                                <h2>Pho </h2>
                            </div>
                            <ul class="food-menu menu-1cols mobile-margin-b54">
                                <?php echo render_monAn($phos) ?>
                            </ul>
                        </div>
                        <!-- /col-md-6 -->
                        <div class="col-md-6 alignc">
                            <img src="images/menu/menu-1col-1.jpg" class="img-fluid" alt="Starters" />
                        </div>
                        <!-- /col-md-6 -->
                    </div>
                    <!-- /row -->
                    <div class="row margin-b54">
                        <div class="col-md-6 alignc">
                            <img src="images/menu/menu-1col-2.jpg" class="img-fluid mobile-margin-b54" alt="Main Course" />
                        </div>
                        <!-- /col-md-6 -->
                        <div class="col-md-6">
                            <div class="alignc">
                                <div class="smalltitle margin-b16">2</div>
                                <h2>BUN</h2>
                            </div>
                            <ul class="food-menu menu-1cols">
                                <?php echo render_monAn($buns) ?>
                            </ul>
                        </div>
                        <!-- /col-md-6 -->
                    </div>
                    <!-- /row -->
                    <div class="row margin-b54">
                        <div class="col-md-6">
                            <div class="alignc">
                                <div class="smalltitle margin-b16">3</div>
                                <h2>Soups</h2>
                            </div>
                            <ul class="food-menu menu-1cols mobile-margin-b54">
                                <li>
                                    <h4><span class="menu-title">Terrific Turkey Chili</span><span class="menu-price">$10.00</span></h4>
                                    <div class="menu-text">Turkey, oregano, tomato paste, peppers</div>
                                </li>
                                <li>
                                    <h4><span class="menu-title">Cream of Asparagus Soup</span><span class="menu-price">$12.00</span></h4>
                                    <div class="menu-text">Asparagus, potato, celery, onion, pepper</div>
                                </li>
                                <li>
                                    <h4><span class="menu-title">Creamy Chicken &amp; Wild Rice Soup</span><span class="menu-price">$9.00</span></h4>
                                    <div class="menu-text">Cooked chicken, salt, butter, heavy cream</div>
                                </li>
                                <li>
                                    <h4><span class="menu-title">Italian Sausage Tortellini</span><span class="menu-price">$8.00</span></h4>
                                    <div class="menu-text">Cheese tortellini, sausage, garlic, carrots, zucchini</div>
                                </li>
                                <li>
                                    <h4><span class="menu-title">Italian Sausage Soup</span><span class="menu-price">$10.00</span></h4>
                                    <div class="menu-text">Italian sausage, garlic, carrots, zucchini</div>
                                </li>
                                <li>
                                    <h4><span class="menu-title">Ham and Potato Soup</span><span class="menu-price">$11.00</span></h4>
                                    <div class="menu-text">Potatoes, ham, celery, onion, milk</div>
                                </li>
                            </ul>
                        </div>
                        <!-- /col-md-6 -->
                        <div class="col-md-6 alignc">
                            <img src="images/menu/menu-1col-3.jpg" class="img-fluid" alt="Soups" />
                        </div>
                        <!-- /col-md-6 -->
                    </div>
                    <!-- /row -->
                    <div class="row">
                        <div class="col-md-6 alignc">
                            <img src="images/menu/menu-1col-4.jpg" class="img-fluid mobile-margin-b54" alt="Desserts" />
                        </div>
                        <!-- /col-md-6 -->
                        <div class="col-md-6">
                            <div class="alignc">
                                <div class="smalltitle margin-b16">4</div>
                                <h2>Desserts</h2>
                            </div>
                            <ul class="food-menu menu-1cols">
                                <li>
                                    <h4><span class="menu-title">Summer Berry and Coconut Tart</span><span class="menu-price">$10.00</span></h4>
                                    <div class="menu-text">Raspberries, blackberries, blueberries, graham cracker</div>
                                </li>
                                <li>
                                    <h4><span class="menu-title">Double Chocolate Cupcakes</span><span class="menu-price">$12.00</span></h4>
                                    <div class="menu-text">Chocolate, eggs, vanilla, milk</div>
                                </li>
                                <li>
                                    <h4><span class="menu-title">Pumpkin Cookies Cream Cheese</span><span class="menu-price">$10.00</span></h4>
                                    <div class="menu-text">Pumpkin, sugar, butter, eggs</div>
                                </li>
                            </ul>
                        </div>
                        <!-- /col-md-6 -->
                    </div>
                    <!-- /row -->
                </div>
                <!-- /custom-page-template -->
            </div>
            <!-- /col-md-12 -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /WRAP CONTENT -->

<?php require_once('footer.php') ?>