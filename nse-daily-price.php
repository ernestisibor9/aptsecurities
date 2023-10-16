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
    require_once("./template/header.php")
    ?>

    <!-- header end -->
    <!-- breadcrumb content begin -->
    <section class="section-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-12 position-relative text-center">
                    <h1 class="mt-0 mb-1 text-white">NSE Daily Price</h1>
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
                    <div class="col-12 mt-3">
                        <div class="row row-cols-1 row-cols-md-1 row-cols-lg-1 gy-2 gy-md-2 gx-0 gx-md-2 gx-lg-4">
                            <div class="col align-items-start">
                                <div>
                                    <h6>NSE DAILY PRICELIST @ 2023-06-05</h6>
                                    <h6 style="font-weight: 100;">Archive of NSE Daily Pricelist</h6>
                                </div>

                                <div class="mb-2 col-md-3 d-flex">
                                    <label class="form-label">Date</label>
                                    <input type="date" class="form-control">
                                    <button type="submit" class="retrieve">Retrieve</button>
                                </div>
                                <div class="mb-2">
                                    <a href="./files/frontend_time_table.pdf" download class="down"
                                        type="submit">Download</a>
                                    <!-- <button type="submit" class="down">Download</button> -->
                                </div>

                            </div>
                        </div>
                        <table class="table table-bordered table-responsive table-striped">
                            <thead style="background-color: #FA393E;">
                                <tr>
                                    <th scope="col" class="text-white">Stock</th>
                                    <th scope="col" class="text-white">Previous Close</th>
                                    <th scope="col" class="text-white">Open</th>
                                    <th scope="col" class="text-white">High</th>
                                    <th scope="col" class="text-white">Low</th>
                                    <th scope="col" class="text-white">Close</th>
                                    <th scope="col" class="text-white">Absolute Change</th>
                                    <th scope="col" class="text-white">% Change</th>
                                    <th scope="col" class="text-white">Deals</th>
                                    <th scope="col" class="text-white">Volume</th>
                                    <th scope="col" class="text-white">Value</th>
                                    <th scope="col" class="text-white">52 WKS High</th>
                                    <th scope="col" class="text-white">52 WKS LOW</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">ALEX</th>
                                    <td>6.50</td>
                                    <td>6.50</td>
                                    <td>6.50</td>
                                    <td>6.50</td>
                                    <td>6.50</td>
                                    <td>0.00</td>
                                    <td>0.00</td>
                                    <td>1</td>
                                    <td>100</td>
                                    <td>650.00</td>
                                    <td>7.20</td>
                                    <td>6.50</td>
                                </tr>
                                <tr>
                                    <th scope="row">DAARCOMM</th>
                                    <td>6.50</td>
                                    <td>6.50</td>
                                    <td>6.50</td>
                                    <td>6.50</td>
                                    <td>6.50</td>
                                    <td>0.00</td>
                                    <td>0.00</td>
                                    <td>1</td>
                                    <td>100</td>
                                    <td>650.00</td>
                                    <td>7.20</td>
                                    <td>6.50</td>
                                </tr>
                                <tr>
                                    <th scope="row">EUNISELL</th>
                                    <td>6.50</td>
                                    <td>6.50</td>
                                    <td>6.50</td>
                                    <td>6.50</td>
                                    <td>6.50</td>
                                    <td>0.00</td>
                                    <td>0.00</td>
                                    <td>1</td>
                                    <td>100</td>
                                    <td>650.00</td>
                                    <td>7.20</td>
                                    <td>6.50</td>
                                </tr>
                                <tr>
                                    <th scope="row">MCNICHOLS</th>
                                    <td>6.50</td>
                                    <td>6.50</td>
                                    <td>6.50</td>
                                    <td>6.50</td>
                                    <td>6.50</td>
                                    <td>0.00</td>
                                    <td>0.00</td>
                                    <td>1</td>
                                    <td>100</td>
                                    <td>650.00</td>
                                    <td>7.20</td>
                                    <td>6.50</td>
                                </tr>
                                <tr>
                                    <th scope="row">PRESTIGE</th>
                                    <td>6.50</td>
                                    <td>6.50</td>
                                    <td>6.50</td>
                                    <td>6.50</td>
                                    <td>6.50</td>
                                    <td>0.00</td>
                                    <td>0.00</td>
                                    <td>1</td>
                                    <td>100</td>
                                    <td>650.00</td>
                                    <td>7.20</td>
                                    <td>6.50</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
        <!-- section content end -->
        <!-- section content begin -->

        <!-- section content end -->
        <!-- section content begin -->

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
</body>


<!-- Mirrored from www.indonez.com/html-demo/Avo/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 May 2023 15:55:06 GMT -->

</html>