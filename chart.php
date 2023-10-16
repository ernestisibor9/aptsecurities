<!doctype html>
<html lang="en">


<!-- Mirrored from www.indonez.com/html-demo/Avo/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 May 2023 15:55:05 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<!---head-->
<?php
require_once('./template/head.php');
?>
<!---head-->

<body>
    <!-- page loader begin -->
    <div
        class="page-loader w-100 h-100 bg-white d-flex justify-content-center align-items-center position-fixed overflow-hidden">
        <div class="spinner-grow spinner-grow-sm text-primary"></div>
        <div class="spinner-grow spinner-grow-sm text-primary"></div>
        <div class="spinner-grow spinner-grow-sm text-primary"></div>
    </div>
    <!-- page loader end -->
    <!-- ticker content begin -->

    <!-- ticker content end -->
    <!-- header begin -->
    <?php
    require_once('./template/header.php');
    ?>
    <!-- header end -->
    <!-- breadcrumb content begin -->
    <section class="section-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-12 position-relative text-center">
                    <h1 class="mt-0 mb-1 text-white">Chart</h1>
                    <nav aria-label="breadcrumb">
                        <div>
                            <a href="index.php" class="breadcrumb-link">Home</a>
                        </div>
                    </nav>
                    <img class="position-absolute card-decor animate-5" src="img/in-avo-4-decor-1.svg" alt="decor"
                        style="top: 25%; left: 5%;">
                    <img class="position-absolute card-decor animate-6" src="img/in-avo-4-decor-2.svg" alt="decor"
                        style="top: -22%; left: 30%;">
                    <img class="position-absolute card-decor animate-7" src="img/in-avo-4-decor-3.svg" alt="decor"
                        style="top: -16%; left: 72%;">
                    <img class="position-absolute card-decor animate-6" src="img/in-avo-4-decor-4.svg" alt="decor"
                        style="top: 89%; left: 94%;">
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb content end -->
    <main>
        <!-- section content begin -->
        <section class="py-5">
            <div class="container bg-white p-3 shadow">
                <div class="row justify-content-center">
                    <!-- <div class="col-12 col-md-10 col-lg-9 text-center">
                        <h1>Our Services</h1>
                    </div> -->
                    <div class="col-12  mt-3">

                        <!-- <div class="icon-wrap bg-primary rounded-circle flex-shrink-0 me-2">
                                    <i class="fas fa-leaf fa-lg text-primary"></i>
                                </div> -->
                        <div>
                            <div class="wrap-wallet">
                                <div class="content-box margin_bottom_79">
                                    <span class="sectional-heading "><strong>Chart</strong> </span>
                                    <div class="row mt-5">
                                        <div class="col-md-2">
                                            <label for="">Start Date</label>

                                        </div>
                                        <div class="col-md-3">
                                            <input class="form-control" type="date" name="" id="startDate">
                                        </div>
                                        <div class="col-md-2">
                                            <label for="">End Date</label>

                                        </div>
                                        <div class="col-md-2">
                                            <input type="date" class="form-control" name="" id="endDate">
                                        </div>
                                        <div class="col-md-3">
                                            <button id="filterBtn" class="btn btn-primary">Submit</button>
                                        </div>

                                    </div>
                                    <div class="row">

                                        <div class="col-md-10 mx-auto">
                                            <canvas id="myChart"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
        </section>
        <!-- section content end -->
        <!-- section content begin -->

        <!-- section content end -->
        <!-- section content begin -->
        <section class="py-5">
            <div class="container ">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-9">
                        <div class="row row-cols-1 row-cols-lg-2 align-items-center gy-3">
                            <div class="col text-md-center text-lg-start">
                                <img src="./img/movgraph.jpg" alt="">
                                <!-- <h4 class="text-secondary mb-1">Number speaks</h4>
                                <h1>We always ready<br>for a challenge.</h1> -->
                                <a href="#" class="btn btn-primary rounded-pill mt-2">Learn more<i
                                        class="fas fa-arrow-right fa-sm ms-1"></i></a>
                            </div>
                            <div class="col">
                                <h4 class="btn btn-primary">START TRADING</h4>
                                <h5>NEWS</h5>
                                <div class="row align-items-start gx-0 mb-2 mb-md-4">
                                    <div class="col-12 col-md-4 text-md-end border-bottom border-primary">
                                        <h1 class="text-primary">
                                            <span class="count" data-counter-end="410">0</span>
                                        </h1>
                                    </div>
                                    <div class="col-12 col-md-8 mt-2 mt-md-0 ps-md-4">
                                        <h5 class="text-dark">Trading News</h5>
                                        <p>AIICO Insurance Plc has declared a dividend of 2 kobo per share amounting to
                                            N732 million.</p>
                                    </div>
                                </div>
                                <div class="row align-items-start gx-0">
                                    <div class="col-12 col-md-4 text-md-end border-bottom border-primary">
                                        <h1 class="text-primary">
                                            <span class="count" data-counter-end="27">0</span>
                                        </h1>
                                    </div>
                                    <div class="col-12 col-md-8 mt-2 mt-md-0 ps-md-4">
                                        <h5 class="text-dark">Trading News</h5>
                                        <p>Accion Microfinance Bank (MFB) has revealed that its adopted digital
                                            technology was used to transform the bank s business.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section content end -->
    </main>
    <!-- footer begin -->
    <?php
    require_once('./template/footer.php');
    ?>
    <!-- footer end -->
    <!-- to top begin -->
    <div class="d-none d-md-block">
        <a href="#" class="to-top fas fa-arrow-up text-decoration-none text-white"></a>
    </div>
    <!-- to top end -->
    <!-- javascript -->
    <script src="js/vendors/bootstrap.bundle.min.js"></script>
    <script src="js/vendors/vanilla-marquee.min.js"></script>
    <script src="js/vendors/tradingview-widget.min.js"></script>
    <script src="js/utilities.min.js"></script>
    <script src="js/config-theme.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="js/chart2.js"></script>
</body>


<!-- Mirrored from www.indonez.com/html-demo/Avo/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 May 2023 15:55:06 GMT -->

</html>