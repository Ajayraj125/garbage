<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="styles.css">

  </head>
  <body style="background-image:url('https://cdn.w600.comps.canstockphoto.com/cleaning-up-the-environment-woman-illustration_csp75147529.jpg'); background-repeat: no-repeat; background-size:cover;">
    <script src=
    "https://smtpjs.com/v3/smtp.js">
    </script>
   <script type="text/javascript">
    function sendEmail() {
      event.preventDefault();
      var email = document.getElementById("email-personal").value;
      alert(email);
      Email.send({
        Host: "smtp.gmail.com",
        Username: "chowdary.hemanth.tummala@gmail.com",
        Password: "KWERTy@45",
        To: email,
        From: "chowdary.hemanth.tummala@gmail.com",
        Subject: "Sending Email using javascript",
        Body: "you are signed up for news letter",
      })
        .then(function (message) {
          alert("mail sent successfully")
        });
    }
  </script>
    </script>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a href="index.html" class="navbar-brand">Garbage Cleaning</a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav">
                        <a href="booking.html" class="nav-item nav-link">upload Garbage picture</a>
                        <a href="schedule.php" class="nav-item nav-link">Schedule</a>
                        <a href="ticketdetail.php" class="nav-item nav-link">Issues verification</a>
                        <a href="traindetail.php" class="nav-item nav-link">Garbage Details</a>
                        <a href="pnr.php" class="nav-item nav-link">Problem status</a>
                    </div>
                </div>
            </div>
        </nav>
        <br><br><br><br>
        <div class="container-fluid par-div">
            <div class="mid-div">
                <div class="row text-center">
                    <div class="col"><h5>Services</h5></div>
                </div>
                <hr>
                <br>
                <div class="row">
                    <div class="col text-center">
                        <a href="booking.html"><button class="btn btn-primary">Upload</button></a>
                    </div>
                </div>
                
                <br>
                <div class="row">
                    <div class="col text-center">
                        <a href="schedule.php"><button class="btn btn-primary">Schedule</button></a>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col text-center">
                        <a href="traindetail.php"><button class="btn btn-primary">Garbage Details</button></a>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col text-center">
                        <a href="news.html"><button class="btn btn-primary">News</button></a>
                    </div>
                </div>
            </div>
        </div>
        <br><br><br>
        <!-- Footer -->
<footer class="bg-dark text-center text-white">
    <!-- Grid container -->
    <div class="container p-4">
      <!-- Section: Social media -->
      <section class="mb-4">
        <!-- Facebook -->
        <a class="btn btn-outline-light btn-floating m-1" href="https://www.facebook.com/groups/937691260255916" role="button"
          ><i class="bi bi-facebook"></i></a>
  
        <!-- Twitter -->
        <a class="btn btn-outline-light btn-floating m-1" href="https://twitter.com/CleaningGarbage" role="button"
          ><i class="bi bi-twitter"></i></a>
  
        <!-- Google -->
        <a class="btn btn-outline-light btn-floating m-1" href="https://search.yahoo.com/yhs/search;_ylt=AwrXpil5xIFjRHMAowMPxQt.;_ylc=X1MDMjExNDcwMDU1OQRfcgMyBGZyA3locy1iYy1mcmVzaARmcjIDc2ItdG9wBGdwcmlkA0JQa2dXdjh1U1YyNXJ4dDhDempkSEEEbl9yc2x0AzAEbl9zdWdnAzEwBG9yaWdpbgN1cy5zZWFyY2gueWFob28uY29tBHBvcwMxBHBxc3RyAwRwcXN0cmwDMARxc3RybAMyNARxdWVyeQNnYXJiYWdlJTIwY2xlYW5pbmclMjBzZXJ2aWNlBHRfc3RtcAMxNjY5NDQ4ODQx?p=garbage+cleaning+service&fr2=sb-top&hspart=bc&hsimp=yhs-fresh" role="button"
          ><i class="bi bi-google"></i></a>
  
        <!-- Instagram -->
        <a class="btn btn-outline-light btn-floating m-1" href="https://www.instagram.com/cancleanpros/" role="button"
          ><i class="bi bi-instagram"></i></a>
  
        <!-- Linkedin -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="bi bi-linkedin"></i></i
        ></a>
  
        <!-- Github -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="bi bi-github"></i></i
        ></a>
      </section>
      <!-- Section: Social media -->
  
      <!-- Section: Form -->
      <section class="">
        <form action="">
          <!--Grid row-->
          <div class="row d-flex justify-content-center">
            <!--Grid column-->
            <div class="col-auto">
              <p class="pt-2">
                <strong>Sign up for our news letter</strong>
              </p>
            </div>
            <!--Grid column-->
  
            <!--Grid column-->
            <div class="col-md-5 col-12">
              <!-- Email input -->
              <div class="form-outline form-white mb-4">
                <input type="email" id="email-personal" class="form-control" />
                <label class="form-label" for="form5Example21">Email address</label>
              </div>
            </div>
            <!--Grid column-->
  
            <!--Grid column-->
            <div class="col-auto">
              <!-- Submit button -->
              <button type="submit" onclick="sendEmail()" class="btn btn-outline-light mb-4">
                Subscribe
              </button>
            </div>
            <!--Grid column-->
          </div>
          <!--Grid row-->
        </form>
      </section>
      <!-- Section: Form -->
  
      <!-- Section: Text -->
      <section class="mb-4">
        <p>
            Want to help in makeing earth clean.
        </p>
        <p>Join with us and make the future free from pollution</p>
      </section>
      
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2022 Copyright:
      <a class="text-white" href="https://mdbootstrap.com/">garbage cleaning.com</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
    </div>
    <?php
        // the message
        function newsletter($mail){
          // $msg = "First line of text\nSecond line of text";
          // $msg = wordwrap($msg,70);
          // mail($mail,"My subject",$msg);
          echo "working";
        }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>