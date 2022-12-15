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
  <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.5/dist/flowbite.min.css" />
  <script src="https://unpkg.com/flowbite@1.5.5/dist/flowbite.js"></script>
  <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../../Styles/main.css">

    <title>Dashboard</title>
</head>
<body>
  <div class="grid grid-cols-12">
      <section class="col-span-2">
        <?php
          include "sideBar.php";
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
        <div  class="hidden" id="patientDashEditPage">
            <?php
            include "editPatient.php";
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