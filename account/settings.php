<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "../includes/head.php"; ?>
</head>

<body>
    <header class="border-bottom">
        <?php include "../includes/header.php"; ?>
    </header>
    <?php include "../includes/modals/cart.php"; ?>
    <script src="../assets/js/vendors/validation.js"></script>
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
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Account</a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
        <section class="my-lg-10 my-8">
            <div class="container">
                <div style="background: linear-gradient(98.82deg, rgba(0, 0, 0, 0.6) 10.4%, rgba(0, 0, 0, 0) 59.43%), url(../assets/images/banner/breadcrumbs.png) no-repeat; background-size: cover; border-radius: 0.5rem">
                    <div class="ps-lg-12 px-8 py-lg-12 py-10">
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <!-- row -->
                <div class="row">
                    <!-- col -->
                    <div class="col-12">
                        <div class="d-flex justify-content-between align-items-center d-md-none py-4">
                            <!-- heading -->
                            <h3 class="fs-5 mb-0">Account Setting</h3>
                            <!-- button -->
                            <button class="btn btn-outline-gray-400 text-muted d-md-none btn-icon btn-sm ms-3" data-bs-target="#accountMenu" aria-controls="accountMenu" type="button" data-bs-toggle="offcanvas">
                                <i class="bi bi-text-indent-left fs-3"></i>
                            </button>
                        </div>
                    </div>
                    <!-- col -->
                    <div class="col-lg-3 col-md-4 col-12 border-end d-none d-md-block">
                        <div class="pt-10 pe-lg-10">
                            <?php include "../includes/account_menu.php"; ?>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-8 col-12">
                        <div class="py-6 p-md-6 p-lg-10">
                            <div class="py-6 p-md-6 p-lg-10">
                                <div class="mb-6">
                                    <!-- heading -->
                                    <h2 class="mb-0">Account Setting</h2>
                                </div>
                                <div>
                                    <!-- heading -->
                                    <h5 class="mb-4">Account details</h5>
                                    <div class="row">
                                        <div class="col-lg-5">
                                            <!-- form -->
                                            <form>
                                                <!-- input -->
                                                <div class="mb-3">
                                                    <label class="form-label">Name</label>
                                                    <input type="text" class="form-control" placeholder="jitu chauhan">
                                                </div>
                                                <!-- input -->
                                                <div class="mb-3">
                                                    <label class="form-label">Email</label>
                                                    <input type="email" class="form-control" placeholder="example@gmail.com">
                                                </div>
                                                <!-- input -->
                                                <div class="mb-5">
                                                    <label class="form-label">Phone</label>
                                                    <input type="text" class="form-control" placeholder="Phone number">
                                                </div>
                                                <!-- button -->
                                                <div class="mb-3">
                                                    <button class="btn btn-primary">Save Details</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <hr class="my-10">
                                <div class="pe-lg-14">
                                    <!-- heading -->
                                    <h5 class="mb-4">Password</h5>
                                    <form class="row row-cols-1 row-cols-lg-2">
                                        <!-- input -->
                                        <div class="mb-3 col">
                                            <label class="form-label">New Password</label>
                                            <input type="password" class="form-control" placeholder="**********">
                                        </div>
                                        <!-- input -->
                                        <div class="mb-3 col">
                                            <label class="form-label">Current Password</label>
                                            <input type="password" class="form-control" placeholder="**********">
                                        </div>
                                        <!-- input -->
                                        <div class="col-12">
                                            <p class="mb-4">
                                                Can’t remember your current password?
                                                <a href="#">Reset your password.</a>
                                            </p>
                                            <a href="#" class="btn btn-primary">Save Password</a>
                                        </div>
                                    </form>
                                </div>
                                <hr class="my-10">
                                <div>
                                    <!-- heading -->
                                    <h5 class="mb-4">Delete Account</h5>
                                    <p class="mb-2">Would you like to delete your account?</p>
                                    <p class="mb-5">This account contain 12 orders, Deleting your account will remove all the order details associated with it.</p>
                                    <!-- btn -->
                                    <a href="#" class="btn btn-outline-danger">I want to delete my account</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- Modal -->
    <?php include "../includes/modals/account_menu_mobile.php"; ?>
    <!-- footer -->
    <footer class="footer bg-dark">
        <?php include "../includes/footer.php"; ?>
    </footer>
    <?php include "../includes/scripts.php"; ?>
</body>

</html>