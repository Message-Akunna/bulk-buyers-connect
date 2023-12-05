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
                                <li class="breadcrumb-item"><a href="cart">Cart</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Checkout</li>
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
                        <h2>Check Out</h2>
                    </div>
                    <div class="col-12 col-md-8">
                        <div class="card border-0 shadow-lg">
                            <div class="card-body p-6">
                                <h5>Billing Information</h5>
                                <form class="row g-4">
                                    <div class="col-md-6">
                                        <label for="firstName" class="form-label">First Name</label>
                                        <input type="text" class="form-control" id="firstName" placeholder="Enter your first name" required="">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="lastName" class="form-label">Last Name</label>
                                        <input type="text" class="form-control" id="lastName" placeholder="Enter Your last name" required="">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="email" class="form-label">Phone number</label>
                                        <div class="input-group mb-3">
                                            <select class="form-select flex-grow-0" id="inputGroupSelect01" style="width: 120px;">
                                                <option selected>Country...</option>
                                                <option value="+234">Nigeria</option>
                                            </select>
                                            <input type="tel" class="form-control" aria-label="phone number">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="email" class="form-label">Email address</label>
                                        <input type="email" class="form-control" id="email" placeholder="Enter Email address" required="">
                                    </div>
                                    <div class="col-md-12">
                                        <label for="address" class="form-label">Address</label>
                                        <textarea class="form-control" id="address" placeholder="Enter address" rows="5" required=""></textarea>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="card">
                            <h5 class="px-6 py-4 bg-transparent mb-0">Order Details</h5>
                            <ul class="list-group list-group-flush">
                                <?php foreach (range(1, 3) as $key => $value) : ?>
                                    <!-- list group item -->
                                    <li class="list-group-item px-4 py-3">
                                        <div class="row align-items-center g-3">
                                            <div class="col-3 col-md-3">
                                                <img src="./assets/images/products/01.jpeg" alt="Ecommerce" class="img-fluid rounded">
                                            </div>
                                            <div class="col-5 col-md-5">
                                                <h6 class="mb-0">Haldiram's Sev Bhujia</h6>
                                                <span><small class="text-muted">.98 / lb</small></span>
                                            </div>
                                            <div class="col-2 col-md-2 text-center text-muted">
                                                <span>1</span>
                                            </div>
                                            <div class="col-2 text-lg-end text-start text-md-end col-md-2">
                                                <span class="fw-bold">₦5.00</span>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- list group item -->
                                <?php endforeach; ?>
                                <li class="list-group-item px-4 py-3">
                                    <div class="d-flex align-items-center justify-content-between   mb-2">
                                        <div>
                                            Item Subtotal
                                        </div>
                                        <div class="fw-bold">
                                            $70.00
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between  ">
                                        <div>
                                            Service Fee <i class="feather-icon icon-info text-muted" data-bs-toggle="tooltip" title="Default tooltip"></i>
                                        </div>
                                        <div class="fw-bold">
                                            $3.00
                                        </div>
                                    </div>
                                </li>
                                <!-- list group item -->
                                <li class="list-group-item px-4 py-3">
                                    <div class="d-flex align-items-center justify-content-between fw-bold">
                                        <div>
                                            Subtotal
                                        </div>
                                        <div>
                                            $73.00
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="p-4">
                                <h6>Payment Method</h6>
                                <div class="form-check mb-2">
                                    <!-- input -->
                                    <input class="form-check-input" name="payment-method" type="radio" value="online" id="online" checked="">
                                    <label class="form-check-label" for="eGrocery">Pay online</label>
                                </div>
                                <div class="d-grid mt-2">
                                    <button class="btn btn-primary">
                                        Place Order
                                    </button>
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