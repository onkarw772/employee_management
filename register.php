<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Free Bootstrap Admin Template : Binary Admin</title>
  <?php
  include('./pages/headerlinks.php');

  ?>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700;900&display=swap');

    *,
    body {
      font-family: 'Poppins', sans-serif;
      font-weight: 400;
      -webkit-font-smoothing: antialiased;
      text-rendering: optimizeLegibility;
      -moz-osx-font-smoothing: grayscale;
    }

    html,
    body {
      height: 100%;
      background-color: #152733;
      overflow: hidden;
    }


    .form-holder {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;
      min-height: 100vh;
    }

    .form-holder .form-content {
      position: relative;
      text-align: center;
      display: -webkit-box;
      display: -moz-box;
      display: -ms-flexbox;
      display: -webkit-flex;
      display: flex;
      -webkit-justify-content: center;
      justify-content: center;
      -webkit-align-items: center;
      align-items: center;
      padding: 60px;
    }

    .form-content .form-items {
      border: 3px solid #fff;
      padding: 40px;
      display: inline-block;
      width: 100%;
      min-width: 540px;
      -webkit-border-radius: 10px;
      -moz-border-radius: 10px;
      border-radius: 10px;
      text-align: left;
      -webkit-transition: all 0.4s ease;
      transition: all 0.4s ease;
    }

    .form-content h3 {
      color: black;
      text-align: left;
      font-size: 28px;
      font-weight: 600;
      margin-bottom: 5px;
    }

    .form-content h3.form-title {
      margin-bottom: 30px;
    }

    .form-content p {
      color: black;
      text-align: left;
      font-size: 17px;
      font-weight: 300;
      line-height: 20px;
      margin-bottom: 30px;
    }


    .form-content label,
    .was-validated .form-check-input:invalid~.form-check-label,
    .was-validated .form-check-input:valid~.form-check-label {
      color: black;
    }

    .form-content input[type=text],
    .form-content input[type=password],
    .form-content input[type=email],
    .form-content select {
      width: 100%;
      padding: 9px 20px;
      text-align: left;
      border: 0;
      outline: 0;
      border-radius: 6px;
      background-color: #fff;
      font-size: 15px;
      font-weight: 300;
      color: #8D8D8D;
      -webkit-transition: all 0.3s ease;
      transition: all 0.3s ease;
      margin-top: 16px;
    }


    .btn-primary {
      background-color: #6C757D;
      outline: none;
      border: 0px;
      box-shadow: none;
    }

    .btn-primary:hover,
    .btn-primary:focus,
    .btn-primary:active {
      background-color: #495056;
      outline: none !important;
      border: none !important;
      box-shadow: none;
    }

    .form-content textarea {
      position: static !important;
      width: 100%;
      padding: 8px 20px;
      border-radius: 6px;
      text-align: left;
      background-color: lightblue;
      border: 0;
      font-size: 15px;
      font-weight: 300;
      color: #8D8D8D;
      outline: none;
      resize: none;
      height: 120px;
      -webkit-transition: none;
      transition: none;
      margin-bottom: 14px;
    }

    .form-content textarea:hover,
    .form-content textarea:focus {
      border: 0;
      background-color: blueviolet;
      color: #8D8D8D;
    }

    .mv-up {
      margin-top: -9px !important;
      margin-bottom: 8px !important;
    }

    .invalid-feedback {
      color: #ff606e;
    }

    .valid-feedback {
      color: #2acc80;
    }
  </style>
</head>


<body>
  <div id="wrapper">
    <?php
    include('./pages/menu-bar.php');
    ?>
    <div id="page-wrapper">

      <h3>Register Employee</h3>
      <p>Fill in the data below.</p>
      <?php
      include('./pages/db.php');
      if (isset($_POST['submit'])) {
        if (isset($_FILES["image"])) {

          $destination = "images/" . basename($_FILES["image"]["name"]);
          move_uploaded_file($_FILES["image"]["tmp_name"], $destination);
        } else {
          echo "Wrong";
        }
      }
      ?>
      <form class="requires-validation" method="post" action="" enctype="multipart/form-data">

        <div class="col-md-12">
          <label for="name">Full Name</label>
          <input class="form-control" type="text" name="name" placeholder="Full Name">
        </div>
        <div class="col-md-12">
          <label for="name">City </label>
          <input class="form-control" type="text" name="city" placeholder="City Name">
        </div>
        <div class="col-md-12">
          <label for="name">Salary</label>
          <input class="form-control" type="text" name="salary" placeholder="Salary">
        </div>
        <div class="col-md-12">
          <label for="name">Email</label>
          <input class="form-control" type="email" name="email" placeholder="E-mail Address">
        </div>
        <div class="col-md-12">
          <label for="name">Password</label>
          <input class="form-control" type="password" name="password" placeholder="Password">
        </div>
        <div class="col-md-12 mt-3">
          <label class="mb-3 mr-1" for="gender">Gender: </label>

          <input type="radio" class="btn-check" name="gender" id="male" autocomplete="off">
          <label class="btn btn-sm btn-outline-secondary" for="male">Male</label>

          <input type="radio" class="btn-check" name="gender" id="female" autocomplete="off">
          <label class="btn btn-sm btn-outline-secondary" for="female">Female</label>

          <input type="radio" class="btn-check" name="gender" id="secret" autocomplete="off">
          <label class="btn btn-sm btn-outline-secondary" for="secret">Secret</label>

          <div class="form-group">
            <label for="" class="fw-bold">Image</label>
            <input type="file" class="form-control" name="image">
          </div>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="invalidCheck">
          <label class="form-check-label">I confirm that all data are correct</label>
        </div>
        <div class="form-button mt-3">
          <button type="submit" name="submit" class="btn btn-primary">Register</button>
        </div>
      </form>



    </div>
    <!-- /. PAGE WRAPPER  -->
  </div>
  <!-- /. WRAPPER  -->
  <?php
  include('./pages/footerlinks.php');
  ?>


</body>

</html>