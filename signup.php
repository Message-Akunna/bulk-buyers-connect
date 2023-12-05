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
        <section class="my-lg-12 my-10">
            <div class="container">
                <div class="row mt-10">
                    <div class="col-12 col-md-6 col-lg-4 mx-auto">
                        <div class="card border-0 shadow-lg h-100">
                            <div class="card-body p-6 pb-4">
                                <div class="text-center">
                                    <h2>Welcome to Bulk Buyers</h2>
                                    <p>Enter your details to create your account.</p>
                                </div>
                                <form class="needs-validation" novalidate="">
                                    <div class="mb-3">
                                        <label for="fullName" class="form-label">Name</label>
                                        <input type="text" class="form-control" id="fullName" placeholder="Enter Your Name" required="">
                                        <div class="invalid-feedback">Please enter name.</div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email address</label>
                                        <input type="email" class="form-control" id="email" placeholder="Enter Email address" required="">
                                        <div class="invalid-feedback">Please enter email.</div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="password" placeholder="Enter Password" required="">
                                        <div class="invalid-feedback">Please enter password.</div>
                                        <small class="form-text">
                                            By Signup, you agree to our
                                            <a href="#!">Terms of Service</a>
                                            &amp;
                                            <a href="#!">Privacy Policy</a>
                                        </small>
                                    </div>
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-primary">Sign Up</button>
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer border-0 justify-content-center p-6 pt-0">
                                Already have an account?
                                <a href="signin.php">Sign in</a>
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