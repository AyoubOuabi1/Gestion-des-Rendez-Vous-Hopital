<?php

  include_once '../../Classes/Patient.php' ;
  include_once '../../Classes/Session.php' ;
  include_once '../../Classes/Doctor.php' ;


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
          include "sidbar.html";
          ?>
      </section>
    <section class="bg-slate-100 col-span-10">
        <div  id="adminDashAdminPage">
            <?php
            include "admin.php";
            ?>
        </div>
        <div class="hidden" id="adminDashAppointmentPage">
            <?php
            include "appointmentAdmin.html";
            ?>
        </div>
        <div class="hidden" id="adminDashDoctorPage">
            <?php
            include "doctors.php";
            ?>
        </div>
        <div class="hidden" id="adminDashPatientsPage">
            <?php
            include "patients.php";
            ?>
        </div>
        <div class="hidden" id="adminDashSchedulePage">
            <?php
            include "ScheduleAdmin.php";
            
            ?>
        </div>
    </section>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="../../Scripts/main.js"></script>
</body>
</html>