<!-- Shop Cart -->

<div class="offcanvas offcanvas-end" tabindex="-1" id="cart" aria-labelledby="cartLabel">
    <div class="offcanvas-header border-bottom">
        <div class="text-start">
            <h5 id="cartLabel" class="mb-0 fs-4">Shop Cart</h5>
        </div>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div class="d-flex flex-column h-100">
            <!-- alert -->
            <div class="alert alert-danger p-2" role="alert">
                You’ve got FREE delivery. Start
                <a href="#!" class="alert-link">checkout now!</a>
            </div>
            <hr class="mt-2"/>
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
            <!-- btn -->
            <div class="mt-auto pb-6">
                <div class="d-grid gap-2 mx-auto">
                    <a href="#!" class="btn btn-primary">Checkout</a>
                    <a href="/cart.php" class="btn btn-outline-primary">Go To Cart</a>
                </div>
            </div>
        </div>
    </div>
</div>