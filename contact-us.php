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
        <section class="my-lg-10 my-8">
            <div class="container">
                <div style="background: linear-gradient(98.82deg, rgba(0, 0, 0, 0.6) 10.4%, rgba(0, 0, 0, 0) 59.43%), url(./assets/images/banner/breadcrumbs.png) no-repeat; background-size: cover; border-radius: 0.5rem">
                    <div class="ps-lg-12 px-8 py-lg-12 py-10">
                    </div>
                </div>
                <div class="row mt-10">
                    <div class="col-12 col-md-4 col-lg-2">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-body">
                                <div class="text-center">
                                    <h5 class="fs-1 me-3 mb-0 text-primary">
                                        <i class="bi bi-geo-alt"></i>
                                    </h5>
                                    <address class="text-dark">No 7 Parakou Crescent, Wuse 2, FCT - Abuja</address>
                                    <address class="text-dark"> 215 Konoko Crescent, Wuse 2, FCT - Abuja</address>
                                </div>
                                <hr class="border-top border-1" />
                                <div class="text-center">
                                    <h5 class="fs-1 me-3 mb-0 text-primary">
                                        <i class="bi bi-envelope-paper"></i>
                                    </h5>
                                    <a href="mailto:contact@bulkbuyersconnect.com" class="text-dark">contact@bulkbuyersconnect.com</a>
                                </div>
                                <hr class="border-top border-1" />
                                <div class="text-center">
                                    <h5 class="fs-1 me-3 mb-0 text-primary">
                                        <i class="bi bi-telephone"></i>
                                    </h5>
                                    <a href="tel:+2348099755559" class="text-dark">0809 975 5559 (Mon - Sat :: 9am - 5pm Nigerian time)</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-8 col-lg-10">
                        <div class="card border-0 shadow-lg h-100">
                            <div class="card-body p-6">
                                <h2>Send us a message</h2>
                                <p>Do you fancy saying hi to me or you want to get started with your project and you need my help? Feel free to contact me.</p>
                                <form class="row g-4">
                                    <div class="col-md-6">
                                        <label for="fullName" class="form-label">Full Name</label>
                                        <input type="text" class="form-control" id="fullName" placeholder="Enter Your Name" required="">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="email" class="form-label">Email address</label>
                                        <input type="email" class="form-control" id="email" placeholder="Enter Email address" required="">
                                    </div>
                                    <div class="col-md-12">
                                        <label for="subject" class="form-label">Subject</label>
                                        <input type="text" class="form-control" id="subject" placeholder="Enter subject" required="">
                                    </div>
                                    <div class="col-md-12">
                                        <label for="message" class="form-label">Message</label>
                                        <textarea class="form-control" id="message" placeholder="Enter message" rows="5" required=""></textarea>
                                    </div>
                                    <div class="col-md-6">
                                        <button type="submit" class="btn btn-primary">Send Message</button>
                                    </div>
                                </form>
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