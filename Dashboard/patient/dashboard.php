<?php

  include '../../Classes/Patient.php' ;

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../../Styles/main.css">

    <title>Dashboard</title>
</head>
<body>
  <div class="grid grid-cols-12">
      <section class="col-span-2">
        <?php
          include "sideBar.html";
          ?>
      </section>
    <section class="bg-slate-100 col-span-10">
        <div  id="patientDashHomePage">
            <?php
            include "Home.php";
            ?>
        </div>
        <div class="hidden" id="patientDashDoctorsPage">
            <?php
            include "Doctors.php";
            ?>
        </div>
        <div class="hidden" id="patientDashSessionsPage">
            <?php
            include "Scheduled_Sessions.php";
            ?>
        </div>
        <div class="hidden" id="patientDashBookingsPage">
            <?php
            include "My_bookings.php";
            ?>
        </div>
        <div  class="hidden" id="patientDashSettingsPage">
            <?php
            include "Settings.php";
            ?>
        </div>
    </section>
  </div>
  <script
          src="https://code.jquery.com/jquery-3.6.1.slim.min.js"
          integrity="sha256-w8CvhFs7iHNVUtnSP0YKEg00p9Ih13rlL9zGqvLdePA="
          crossorigin="anonymous"></script>
  <script src="../../Scripts/main.js"></script>
</body>
</html>