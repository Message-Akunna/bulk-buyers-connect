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
        <section class="my-lg-14 my-8">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-10 col-lg-8 mx-auto">
                        <h1 class="text-center mb-5">Bulk Buyers Connect FAQ</h1>
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="accordion-item border-0 mb-4">
                                <h2 class="accordion-header">
                                    <button class="accordion-button bg-light rounded-2 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                        Which cities are covered by Bulk Buyers Connect
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        As at now only residents of Abuja, Nigeria can benefit from the services of Bulk buyers Connect. Other cities in Nigeria are coming online soon.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item border-0 mb-4">
                                <h2 class="accordion-header">
                                    <button class="accordion-button bg-light rounded-2  collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                        Accordion Item #2
                                    </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                                </div>
                            </div>
                            <div class="accordion-item border-0 mb-4">
                                <h2 class="accordion-header">
                                    <button class="accordion-button bg-light rounded-2  collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                        Accordion Item #3
                                    </button>
                                </h2>
                                <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
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