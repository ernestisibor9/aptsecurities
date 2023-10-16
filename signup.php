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
<style>
.passport {
  background-color: #fff;
  border: 1px solid black !important;
  height: 200px;
  width: 200px;
  position: relative;
}

.passport img {
  width: 200px !important;
  height: 200px !important;
  position: absolute;
  display: none;
}

.actions {
  display: flex;
  align-items: center;
  justify-content: center;
  margin-top: 40px;
}
</style>
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
  <!-- <section class="section-breadcrumb">
    <div class="container">
      <div class="row">
        <div class="col-12 position-relative text-center">
          <h1 class="mt-0 mb-1 text-white">E-TRADING PORTAL</h1>
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
  </section> -->
  <!-- breadcrumb content end -->
  <main>
    <!-- section content begin -->
    <section class="py-5">
      <div class="container">
        <div class="row justify-content-center">
          <!-- <div class="col-12 col-md-10 col-lg-9 text-center">
                        <h1>Our Services</h1>
                    </div> -->
          <div class="col-10 mt-3 alt-table bg-white p-4 shadow">
            <h1><strong>Brokage Account</strong></h1>
            <div class="d-flex justify-content-between">
              <div>
                <h5 class="text-dark mt-5">INDIVIDUAL APPLICATION FORM</h5>
              </div>
              <div class="passport mb-2">
                <div class="actions">
                  <img src="img" alt="" id="profile-pic">
                  <label for="file" class="button upload-btn text-center">Choose File <br>
                    <small>.png or jpeg, max 100kb</small> <br>
                    <input style="width: 100px; display: inline-block" required type="file"
                      accept="image/jpg, image/jpeg, image/png" id="input-file">
                  </label>
                </div>
              </div>
            </div>
            <h5 class="text-dark mt-2">Application Details</h5>
            <form action="">
              <div class="row">
                <div class="col-12 mb-2">
                  <input type="text" name="title" class="form-control" placeholder="Title" aria-label="Title">
                </div>
                <div class="col-12 mb-2">
                  <input type="text" name="surname" class="form-control" placeholder="Surname" aria-label="Surname">
                </div>
                <div class="col-12 mb-2">
                  <input type="text" name="others" class="form-control" placeholder="Others" aria-label="Others">
                </div>
                <div class="col-12 mb-2">
                  <input type="text" name="mother's maiden" class="form-control" placeholder="Mother's Maiden"
                    aria-label="Mother's Maiden">
                </div>
              </div>
              <div class="row mb-2">
                <div class="col">
                  <select name="gender" class="form-control" id="">
                    <option value="">Select Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                  </select>
                </div>
                <div class="col">
                  <input type="date" name="dob" class="form-control" placeholder="Date of Birth"
                    aria-label="Date of Birth">
                </div>
              </div>
              <div class="row mb-2">
                <div class="col">
                  <input type="text" class="form-control" placeholder="Place of Birth" aria-label="Place of Birth">
                </div>
                <div class="col">
                  <select name="marital" class="form-control" id="">
                    <option value="">Marital Status</option>
                    <option value="divorce">Divorce</option>
                    <option value="married">Married</option>
                    <option value="single">Single</option>
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="col-12 mb-2">
                  <textarea name="residential" id="" class="form-control" cols="50" rows="3"
                    placeholder="Residential Address"></textarea>
                </div>
                <div class="col-12 mb-2">
                  <textarea name="mailing_address" id="" class="form-control" cols="50" rows="3"
                    placeholder="Preferred Mailing Address"></textarea>
                </div>
                <div class="col-12 mb-2">
                  <input type="text" class="form-control" name="mobile" placeholder="Mobile Phone Number"
                    aria-label="Mobile Phone Number">
                </div>
                <div class="col-12 mb-2">
                  <input type="text" name="home_phone" class="form-control" placeholder="Home Phone Number"
                    aria-label="Home Phone Number">
                </div>
                <div class="col-12 mb-2">
                  <input type="text" name="occupation" class="form-control" placeholder="Occupation"
                    aria-label="Occupation">
                </div>
                <div class="col-12 mb-2">
                  <input type="email" name="email" class="form-control" placeholder="Email" aria-label="Email">
                </div>
                <div class="col-12 mb-2">
                  <input type="text" class="form-control" name="driver" placeholder="Driver's Lincense/Passport no"
                    aria-label="Driver's Lincense/Passport no">
                </div>
                <div class="col-12 mb-2">
                  <input type="text" name="employers_name" class="form-control" placeholder="Employer's Name"
                    aria-label="Employer's Name">
                </div>
                <div class="col-12 mb-2">
                  <textarea name="employer's_address" id="" class="form-control" cols="50" rows="3"
                    placeholder="Employer's Address"></textarea>
                </div>
                <div class="col-12 mb-2">
                  <textarea name="lga" id="" class="form-control" cols="50" rows="3"
                    placeholder="L.G.A/ State of origin"></textarea>
                </div>
                <div class="col-12 mb-2">
                  <textarea name="citizen" id="" class="form-control" cols="50" rows="3"
                    placeholder="Citizenship(Non nigerian)"></textarea>
                </div>
                <div class="col-12 mb-2">
                  <textarea name="next_of_kin" id="" class="form-control" cols="50" rows="3"
                    placeholder="Next of Kin"></textarea>
                </div>
                <h5 class="mt-2 mb-2 text-dark">BANK ACCOUNT DETAILS</h5>
                <div class="col-12 mb-2">
                  <textarea name="next_of_bank" id="" class="form-control" cols="50" rows="3"
                    placeholder="Next of Bank"></textarea>
                </div>
                <div class="col-12 mb-2">
                  <textarea name="bank_branch" id="" class="form-control" cols="50" rows="3"
                    placeholder="Bank Branch"></textarea>
                </div>
                <div class="col-12 mb-2">
                  <textarea name="bank_account" id="" class="form-control" cols="50" rows="3"
                    placeholder="Bank Account Number"></textarea>
                </div>
                <div class="col-12 mb-2">
                  <textarea name="tax_no" id="" class="form-control" cols="50" rows="3"
                    placeholder="Tax no/NIN(National I.D No"></textarea>
                </div>
                <div class="col-12 mb-2">
                  <textarea name="bvn" id="" class="form-control" cols="50" rows="3" placeholder="BVN"></textarea>
                </div>
                <div class="col-12 mb-2">
                  <input type="date" class="form-control" placeholder="Date of Bank open"
                    aria-label="Date of bank open">
                </div>
                <div class="col-12 mb-2">
                  <textarea name="account_holders" id="" class="form-control" cols="50" rows="3"
                    placeholder="Account holders source of fund"></textarea>
                </div>
                <h5 class="text-dark fw-bold mt-2">Declaration</h5>
                <p>
                  I/We declare that all information given for the purpose of opening and operating a brokage account
                  with
                  APT Securities and Funds Limited are true and acurate. I/We fully understand that it is a crime
                  punishable by fine or imprisonment or both to knowingly make a false statement or attach false
                  document.
                </p>
                <div class="col-12 mb-2">
                  <input type="text" name="name" class="form-control" placeholder="Name" aria-label="Name">
                </div>
              </div>
              <div class="row">
                <div class="col mb-2">
                  <input type="text" name="signature" class="form-control" placeholder="Signature"
                    aria-label="Signature">
                </div>
                <div class="col mb-2">
                  <input type="date" name="surname" class="form-control" placeholder="Date" aria-label="Date">
                </div>
              </div>
              <div class="d-grid gap-2 mt-4">
                <button class="btn btn-primary" type="submit">Submit</button>
              </div>
          </div>
          </form>
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
  <script src="./js/lightbox-plus-jquery.js"></script>

  <script>
  let profilePic = document.getElementById('profile-pic')
  let inputFile = document.getElementById('input-file')

  inputFile.onchange = function() {
    profilePic.src = URL.createObjectURL(inputFile.files[0])
    profilePic.style.display = "block";
  }
  </script>
</body>


<!-- Mirrored from www.indonez.com/html-demo/Avo/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 May 2023 15:55:06 GMT -->

</html>