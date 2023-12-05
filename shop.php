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
        <div class="mt-4">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <!-- col -->
                    <div class="col-12">
                        <!-- breadcrumb -->
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="#!">Home</a></li>
                                <li class="breadcrumb-item"><a href="#!">Shop</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Snacks &amp; Munchies</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-8 mb-lg-14 mb-8">
            <div class="container">
                <div class="row gx-10">
                    <aside class="col-lg-3 col-md-4">
                        <div class="offcanvas offcanvas-start offcanvas-collapse w-md-50" tabindex="-1" id="offcanvasCategory" aria-labelledby="offcanvasCategoryLabel">
                            <div class="offcanvas-header d-lg-none">
                                <h5 class="offcanvas-title" id="offcanvasCategoryLabel">Filter</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body ps-lg-2 pt-lg-0">
                                <div class="mb-8">
                                    <h5 class="mb-3">Categories</h5>
                                    <div class="my-4">
                                        <!-- input -->
                                        <input type="search" class="form-control" placeholder="Search by store">
                                    </div>
                                    <!-- form check -->
                                    <div class="form-check mb-2">
                                        <!-- input -->
                                        <input class="form-check-input" name="categories" type="radio" value="" id="eGrocery" checked="">
                                        <label class="form-check-label" for="eGrocery">E-Grocery</label>
                                    </div>
                                    <!-- form check -->
                                    <div class="form-check mb-2">
                                        <!-- input -->
                                        <input class="form-check-input" name="categories" type="radio" value="" id="DealShare">
                                        <label class="form-check-label" for="DealShare">DealShare</label>
                                    </div>
                                    <!-- form check -->
                                    <div class="form-check mb-2">
                                        <!-- input -->
                                        <input class="form-check-input" name="categories" type="radio" value="" id="Dmart">
                                        <label class="form-check-label" for="Dmart">DMart</label>
                                    </div>
                                    <!-- form check -->
                                    <div class="form-check mb-2">
                                        <!-- input -->
                                        <input class="form-check-input" name="categories" type="radio" value="" id="Blinkit">
                                        <label class="form-check-label" for="Blinkit">Blinkit</label>
                                    </div>
                                    <!-- form check -->
                                    <div class="form-check mb-2">
                                        <!-- input -->
                                        <input class="form-check-input" name="categories" type="radio" value="" id="BigBasket">
                                        <label class="form-check-label" for="BigBasket">BigBasket</label>
                                    </div>
                                    <!-- form check -->
                                    <div class="form-check mb-2">
                                        <!-- input -->
                                        <input class="form-check-input" name="categories" type="radio" value="" id="StoreFront">
                                        <label class="form-check-label" for="StoreFront">StoreFront</label>
                                    </div>
                                    <!-- form check -->
                                    <div class="form-check mb-2">
                                        <!-- input -->
                                        <input class="form-check-input" name="categories" type="radio" value="" id="Spencers">
                                        <label class="form-check-label" for="Spencers">Spencers</label>
                                    </div>
                                    <!-- form check -->
                                    <div class="form-check mb-2">
                                        <!-- input -->
                                        <input class="form-check-input" name="categories" type="radio" value="" id="onlineGrocery">
                                        <label class="form-check-label" for="onlineGrocery">Online Grocery</label>
                                    </div>
                                </div>
                                <div class="mb-8 position-relative">
                                    <div class="h-100 px-6 py-6 rounded" style="background: linear-gradient(0deg, rgba(0, 38, 3, 0.80) 0%, rgba(0, 38, 3, 0.80) 100%), url(./assets/images/banner/home-banner-side-2.png) no-repeat, lightgray 50% / cover no-repeat; background-size: cover">
                                        <!-- Banner Content -->
                                        <div class="text-center text-light">
                                            <!-- Banner Content -->
                                            <p class="mb-2">
                                                Best Deal
                                            </p>
                                            <h4 class="fw-bold text-light mb-3 text-justify">
                                                Special Products Deal of the Month
                                            </h4>
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
                    </aside>
                    <section class="col-lg-9 col-md-12">
                        <div class="d-lg-flex justify-content-between align-items-center mb-4">
                            <div class="mb-3 mb-lg-0 d-flex align-items-center justify-content-between">
                                <p class="mb-0">
                                    <span class="text-dark">24</span>
                                    Products found
                                </p>
                                <div class="ms-2 d-lg-none">
                                    <a class="btn btn-outline-gray-400 text-muted" data-bs-toggle="offcanvas" href="#offcanvasCategory" role="button" aria-controls="offcanvasCategory">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-filter me-2">
                                            <polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3"></polygon>
                                        </svg>
                                        Filters
                                    </a>
                                </div>
                            </div>

                            <!-- icon -->
                            <div class="d-md-flex justify-content-between align-items-center">
                                <div class="d-flex mt-2 mt-lg-0">
                                    <div class="me-2 flex-grow-1">
                                        <!-- select option -->
                                        <select class="form-select">
                                            <option selected="">Show: 50</option>
                                            <option value="10">10</option>
                                            <option value="20">20</option>
                                            <option value="30">30</option>
                                        </select>
                                    </div>
                                    <div>
                                        <!-- select option -->
                                        <select class="form-select">
                                            <option selected="">Sort by: Featured</option>
                                            <option value="Low to High">Price: Low to High</option>
                                            <option value="High to Low">Price: High to Low</option>
                                            <option value="Release Date">Release Date</option>
                                            <option value="Avg. Rating">Avg. Rating</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row g-4 row-cols-lg-3 row-cols-2 row-cols-md-3">
                            <?php foreach (range(1, 8) as $key => $value) : ?>
                                <div class="col">
                                    <div class="card card-product">
                                        <div class="card-body">
                                            <div class="text-center position-relative">
                                                <a class="" href="/shop.php">
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
                    </section>
                </div>
            </div>
        </div>
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