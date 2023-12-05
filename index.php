<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "./includes/head.php"; ?>
</head>

<body>
    <header class="border-bottom">
        <?php include "./includes/header.php"; ?>
    </header>
    <?php include "./includes/modals/cart.php"; ?>
    <script src="./assets/js/vendors/validation.js"></script>
    <main>
        <!-- section -->
        <section class="mt-8">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-xxl-8 col-xl-7 h-100">
                        <!-- hero slider -->
                        <div style="background: linear-gradient(98.82deg, rgba(0, 0, 0, 0.6) 10.4%, rgba(0, 0, 0, 0) 59.43%), url(./assets/images/banner/home-banner.png) no-repeat; background-size: cover; border-radius: 0.5rem">
                            <div class="ps-lg-12 py-lg-16 col-xxl-7 col-lg-9 py-14 px-8 text-xs-center">
                                <!-- title -->
                                <h2 class="text-light display-5 fw-bold mb-3">Fresh & Healthy Organic Food</h2>
                                <div class="border-start border-4 border-success my-4 ps-3">
                                    <!-- badge -->
                                    <div class="d-flex align-items-center mb-2">
                                        <span class="fs-5 text-light">Sale up to</span>
                                        <span class="badge bg-danger ms-2">30% OFF</span>
                                    </div>
                                    <p class="text-light">Redefining your shopping journey </p>
                                </div>
                                <a href="#!" class="btn btn-light rounded-pill text-primary">
                                    <span class="text-primary">
                                        Shop now
                                    </span>
                                    <i class="feather-icon icon-arrow-right ms-1 text-primary"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-5 col-12 d-lg-flex d-xl-block gap-3 gap-xl-0 h-100">
                        <div class="flex-fill px-10 py-10 mb-6 rounded" style="background: url(./assets/images/banner/home-banner-side-1.png) no-repeat; background-size: cover">
                            <div>
                                <p class="text-dark mb-0">SUMMER SALE</p>
                                <h3 class="my-1 fs-3 text-dark">
                                    75% OFF
                                </h3>
                                <p class="mb-4 small text-dark">Only Fruit & Vegetable</p>
                                <a href="#" class="link">
                                    Shop Now
                                    <i class="feather-icon icon-arrow-right ms-1 text-primary"></i>
                                </a>
                            </div>
                        </div>
                        <div class="flex-fill px-10 py-10 rounded" style="background: linear-gradient(0deg, rgba(0, 38, 3, 0.80) 0%, rgba(0, 38, 3, 0.80) 100%), url(./assets/images/banner/home-banner-side-2.png) no-repeat, lightgray 50% / cover no-repeat; background-size: cover">
                            <!-- Banner Content -->
                            <div class="text-center text-light">
                                <!-- Banner Content -->
                                <p class="mb-2">
                                    Best Deal
                                </p>
                                <h3 class="fw-bold text-light mb-3 text-justify">
                                    Special Products Deal of the Month
                                </h3>
                                <div class="mt-4 mb-5 fs-5">
                                </div>

                                <a href="#" class="">
                                    Shop Now
                                    <i class="feather-icon icon-arrow-right ms-1 text-primary"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section delivery -->
        <section class="my-lg-14 my-8">
            <div class="container">
                <div class="card card-body border-0 shadow">
                    <div class="row">
                        <div class="col-md-3 col-6 d-flex align-items-center">
                            <p class="fs-1 me-3 mb-0 text-primary">
                                <i class="bi bi-truck"></i>
                            </p>
                            <div>
                                <h3 class="fs-6 text-body-emphasis mb-0">Free Shipping</h3>
                                <p class="mb-0">Free shipping on all your order </p>
                            </div>
                        </div>
                        <div class="col-md-3 col-6 d-flex align-items-center">
                            <p class="fs-1 me-3 mb-0 text-primary">
                                <i class="bi bi-headset"></i>
                            </p>
                            <div>
                                <h3 class="fs-6 text-body-emphasis mb-0">Customer Support 24/7</h3>
                                <p class="mb-0">Instant access to Support </p>
                            </div>
                        </div>
                        <div class="col-md-3 col-6 d-flex align-items-center">
                            <p class="fs-1 me-3 mb-0 text-primary">
                                <i class="bi bi-bag-check"></i>
                            </p>
                            <div>
                                <h3 class="fs-6 text-body-emphasis mb-0">100% Secure Payment</h3>
                                <p class="mb-0">We ensure your money is save </p>
                            </div>
                        </div>
                        <div class="col-md-3 col-6 d-flex align-items-center">
                            <p class="fs-1 me-3 mb-0 text-primary">
                                <i class="bi bi-box-seam"></i>
                            </p>
                            <div>
                                <h3 class="fs-6 text-body-emphasis mb-0">Money-Back Guarantee</h3>
                                <p class="mb-0">30 Days Money-Back Guarantee </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Category Section Start-->
        <section class="mb-lg-10 mt-lg-14 my-8">
            <div class="container">
                <div class="row">
                    <div class="col-12 mb-6 text-center">
                        <p class="text-primary">Category</p>
                        <h3 class="mb-4">Shop by Top Categories</h3>
                    </div>
                </div>
                <div class="category-slider">
                    <?php foreach (range(1, 7) as $key => $value) : ?>
                        <div class="item">
                            <a href="products.php?categories=fruits" class="text-decoration-none text-inherit">
                                <div class="card card-product mb-lg-4">
                                    <div class="card-body text-center py-8">
                                        <img height="180" width="auto" src="assets/images/categories/fruits.png" alt="Bulk buyers connect" class="mb-3 img-fluid" />
                                        <div class="text-truncate text-dark fs-5">Fruits</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
        <!-- Category Section End-->
        <!-- Popular Products Start-->
        <section class="my-lg-14 my-8">
            <div class="container">
                <div class="row">
                    <div class="col-12 mb-6 d-flex justify-content-between align-items-center">
                        <h3 class="mb-0">Popular Products</h3>
                        <a class="" href="products.php">
                            View all
                            <i class="feather-icon icon-arrow-right ms-1 text-primary"></i>
                        </a>
                    </div>
                </div>
                <div class="row g-4 row-cols-lg-4 row-cols-2 row-cols-md-3">
                    <?php foreach (range(1, 8) as $key => $value) : ?>
                        <div class="col">
                            <div class="card card-product">
                                <div class="card-body">
                                    <div class="text-center position-relative">
                                        <a class="" href="shop.php">
                                            <img src="assets/images/products/01.jpeg" alt="Bulk buyers connect" class="rounded-1 mb-3 img-fluid" />
                                        </a>
                                        <div class="card-product-action" style="bottom: 75%; left: 20%">
                                            <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist"><i class="bi bi-heart"></i></a>
                                            <a href="#!" class="btn-action" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                                <i class="bi bi-eye" data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="small mb-1">
                                        <a href="#!" class="text-decoration-none text-muted">Grains, Beans & Nuts</a>
                                    </div>
                                    <h2 class="fs-6">
                                        <a href="./pages/shop-single.html" class="text-inherit text-decoration-none d-block text-truncate">Chicken Drumsticks <span class="text-muted fw-normal">(5 mudus (5kg)</span></a>
                                    </h2>
                                    <div>
                                        <h2 class="fs-6">
                                            <span class="text-dark">₦3,000</span>
                                        </h2>
                                    </div>
                                    <div class="d-grid mt-3">

                                        <a href="#!" class="btn btn-outline-primary rounded-1">
                                            <i class="bi bi-plus"></i>
                                            Add to cart
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
        <!-- Popular Products End-->
        <section class="my-lg-14 my-8">
            <div class="container">
                <div class="bg-primary-subtle  rounded">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="p-6 d-lg-block d-none">
                                <img src="./assets/images/ads/food-basket.png" alt="" class="img-fluid" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-4 p-10 text-center">
                                <p class="text-primary">Best Deals</p>
                                <h2 class="mb-3 fw-bold">
                                    Let's go grocery shopping on our App
                                </h2>
                                <ul class="list-inline mb-0 text-lg-end text-center">
                                    <li class="list-inline-item ms-4">
                                        <a href="#!"><img src="./assets/images/appbutton/appstore-btn.svg" alt="" style="width: 140px"></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#!"><img src="./assets/images/appbutton/googleplay-btn.svg" alt="" style="width: 140px"></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="p-6 d-lg-block d-none" style="height: 300px; overflow-y: hidden;">
                                <img width="100%" height="250" src="./assets/images/ads/mobile-app.png" alt="" class="img-fluid" style="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- Modal -->
    <?php include "./includes/modals/quick_view.php"; ?>
    <!-- footer -->
    <footer class="footer bg-dark">
        <?php include "./includes/footer.php"; ?>
    </footer>
    <?php include "./includes/scripts.php"; ?>
</body>

</html>