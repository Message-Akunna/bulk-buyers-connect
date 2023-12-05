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
        <section class="mt-4">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <!-- col -->
                    <div class="col-12">
                        <!-- breadcrumb -->
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="">Home</a></li>
                                <li class="breadcrumb-item"><a href="shop">Shop</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Shop Cart</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
        <section class="my-lg-10 my-8">
            <div class="container">
                <div style="background: linear-gradient(98.82deg, rgba(0, 0, 0, 0.6) 10.4%, rgba(0, 0, 0, 0) 59.43%), url(./assets/images/banner/breadcrumbs.png) no-repeat; background-size: cover; border-radius: 0.5rem">
                    <div class="ps-lg-12 px-8 py-lg-12 py-10">
                    </div>
                </div>
                <div class="row mt-10">
                    <div class="col-12">
                        <h2>My Shopping Cart</h2>
                    </div>
                    <div class="col-12 col-md-8">
                        <div class="card border-0 shadow-lg">
                            <div class="card-body p-6">
                                <ul class="list-group list-group-flush">
                                    <?php foreach (range(1, 5) as $key => $value) : ?>
                                        <!-- list group item-->
                                        <li class="list-group-item py-3 ps-0">
                                            <!-- row -->
                                            <div class="row align-items-center">
                                                <div class="col-6 col-md-6 col-lg-7">
                                                    <div class="d-flex align-items-center">
                                                        <div class="overflow-hidden rounded-2" style="width: 80px;">
                                                            <img src="./assets/images/products/01.jpeg" alt="beans" class="img-fluid" />
                                                        </div>

                                                        <div class="ms-4">
                                                            <!-- title -->
                                                            <a href="./pages/shop-single.html" class="text-inherit">
                                                                <h6 class="mb-0">Beans</h6>
                                                            </a>
                                                            <span class="">
                                                                <small class="text-muted">23 mudu</small> x <span class="fw-bold">₦5.00</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- input group -->
                                                <div class="col-4 col-md-3 col-lg-3">
                                                    <!-- input -->
                                                    <!-- input -->
                                                    <div class="input-group input-spinner">
                                                        <input type="button" value="-" class="button-minus btn btn-sm" data-field="quantity" />
                                                        <input type="number" step="1" max="10" value="1" name="quantity" class="quantity-field form-control-sm form-input" />
                                                        <input type="button" value="+" class="button-plus btn btn-sm" data-field="quantity" />
                                                    </div>
                                                </div>
                                                <!-- price -->
                                                <div class="col-2 text-lg-end text-start text-md-end col-md-2">
                                                    <button class="btn btn-icon btn-xs btn-outline-danger">
                                                        <i class="bi bi-x fs-4"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- list group item-->
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between mt-4">
                            <a href="shop.php" class="btn btn-primary">Continue Shopping</a>
                            <a href="#!" class="btn btn-outline-primary">Update Cart</a>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-body p-6">
                                    <!-- heading -->
                                    <h2 class="h5 mb-4">Summary</h2>
                                    <div class="card mb-2">
                                        <!-- list group -->
                                        <ul class="list-group list-group-flush">
                                            <!-- list group item -->
                                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                                <div class="me-auto">
                                                    <div>Item Subtotal</div>

                                                </div>
                                                <span>₦70.00</span>
                                            </li>

                                            <!-- list group item -->
                                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                                <div class="me-auto">
                                                    <div>Service Fee</div>

                                                </div>
                                                <span>₦3.00</span>
                                            </li>
                                            <!-- list group item -->
                                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                                <div class="me-auto">
                                                    <div class="fw-bold">Subtotal</div>

                                                </div>
                                                <span class="fw-bold">₦67.00</span>
                                            </li>
                                        </ul>

                                    </div>
                                    <div class="d-grid mb-1 mt-4">
                                        <!-- btn -->
                                        <a href="checkout.php" class="btn btn-primary btn-lg d-flex justify-content-between align-items-center">
                                            Go to Checkout <span class="fw-bold">₦67.00</span></a>
                                    </div>
                                    <!-- text -->
                                    <p><small>By placing your order, you agree to be bound by the Buy bulk connect <a href="#!">Terms of Service</a>
                                            and <a href="#!">Privacy Policy.</a> </small></p>

                                    <!-- heading -->
                                    <div class="mt-8">
                                        <h2 class="h5 mb-3">Add Promo or Gift Card</h2>
                                        <form class="needs-validation" novalidate="">
                                            <div class="mb-2">
                                                <!-- input -->
                                                <label for="giftcard" class="form-label sr-only">Email address</label>
                                                <input type="text" class="form-control" id="giftcard" placeholder="Promo or Gift Card">
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>

                                            </div>
                                            <!-- btn -->
                                            <div class="d-grid"><button type="submit" class="btn btn-outline-dark mb-1">Redeem</button></div>
                                            <p class="text-muted mb-0"> <small>Terms &amp; Conditions apply</small></p>
                                        </form>
                                    </div>
                                </div>
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