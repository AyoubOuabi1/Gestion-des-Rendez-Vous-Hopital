function changeSectionIntoLogin() {
  $("#loginSection").removeAttr("style");
  $("#signupSection").css("display", "none");
}
function changeSectionIntoSignUp() {
  $("#signupSection").removeAttr("style");
  $("#loginSection").css("display", "none");
}
//Admin section
function changePageIntoAdminPage() {
  $("#adminDashAdminPage").removeClass("hidden");
  $("#adminDashAppointmentPage").addClass("hidden");
  $("#adminDashDoctorPage").addClass("hidden");
  $("#adminDashPatientsPage").addClass("hidden");
  $("#adminDashSchedulePage").addClass("hidden");
}
function changePageIntoAppointmentPage() {
  getAppointment("admin");
  $("#adminDashAppointmentPage").removeClass("hidden");
  $("#adminDashAdminPage").addClass("hidden");
  $("#adminDashDoctorPage").addClass("hidden");
  $("#adminDashPatientsPage").addClass("hidden");
  $("#adminDashSchedulePage").addClass("hidden");
}

function changePageIntoDoctorPage() {
  $("#adminDashDoctorPage").removeClass("hidden");
  $("#adminDashAdminPage").addClass("hidden");
  $("#adminDashAppointmentPage").addClass("hidden");
  $("#adminDashPatientsPage").addClass("hidden");
  $("#adminDashSchedulePage").addClass("hidden");
}
function changePageIntoPatientPage() {
  $("#adminDashPatientsPage").removeClass("hidden");
  $("#adminDashAdminPage").addClass("hidden");
  $("#adminDashAppointmentPage").addClass("hidden");
  $("#adminDashDoctorPage").addClass("hidden");
  $("#adminDashSchedulePage").addClass("hidden");
}
function changePageIntoSchedulePage() {
  $("#adminDashSchedulePage").removeClass("hidden");
  $("#adminDashAdminPage").addClass("hidden");
  $("#adminDashAppointmentPage").addClass("hidden");
  $("#adminDashDoctorPage").addClass("hidden");
  $("#adminDashPatientsPage").addClass("hidden");
}

//doctor section
function changeDoctorDashIntoHomePage() {
  $("#DoctorDashboardHome").removeClass("hidden");
  $("#DoctorDashboardPatient").addClass("hidden");
  $("#DoctorDashboardApp").addClass("hidden");
  $("#DoctorDashboardSession").addClass("hidden");
  $("#DoctorDashboardSettings").addClass("hidden");
}

function changeDoctorDashIntoPatientPage() {
  $("#DoctorDashboardPatient").removeClass("hidden");
  $("#DoctorDashboardHome").addClass("hidden");
  $("#DoctorDashboardApp").addClass("hidden");
  $("#DoctorDashboardSession").addClass("hidden");
  $("#DoctorDashboardSettings").addClass("hidden");
}

function changeDoctorDashIntoAppointmentPage() {
  getAppointment("doctor");
  $("#DoctorDashboardApp").removeClass("hidden");
  $("#DoctorDashboardHome").addClass("hidden");
  $("#DoctorDashboardPatient").addClass("hidden");
  $("#DoctorDashboardSession").addClass("hidden");
  $("#DoctorDashboardSettings").addClass("hidden");
}
function changeDoctorDashIntoSessionPage() {
  $("#DoctorDashboardSession").removeClass("hidden");
  $("#DoctorDashboardHome").addClass("hidden");
  $("#DoctorDashboardPatient").addClass("hidden");
  $("#DoctorDashboardApp").addClass("hidden");
  $("#DoctorDashboardSettings").addClass("hidden");
}
function changeDoctorDashIntoSettingPage() {
  $("#DoctorDashboardSettings").removeClass("hidden");
  $("#DoctorDashboardHome").addClass("hidden");
  $("#DoctorDashboardPatient").addClass("hidden");
  $("#DoctorDashboardApp").addClass("hidden");
  $("#DoctorDashboardSession").addClass("hidden");
}

//patient section
function changePatientDashIntoHomePage(){
    $('#patientDashHomePage').removeClass('hidden');
    $('#patientDashDoctorsPage').addClass('hidden');
    $('#patientDashSessionsPage').addClass('hidden');
    $('#patientDashBookingsPage').addClass('hidden');
    $('#patientDashSettingsPage').addClass('hidden');
    $('#patientDashEditPage').addClass('hidden');

}

function changePatientDashIntoDoctorsPage(){
    $('#patientDashDoctorsPage').removeClass('hidden');
    $('#patientDashHomePage').addClass('hidden');
    $('#patientDashSessionsPage').addClass('hidden');
    $('#patientDashBookingsPage').addClass('hidden');
    $('#patientDashSettingsPage').addClass('hidden');
    $('#patientDashEditPage').addClass('hidden');

}

function changePatientDashIntoSessionsPage(){
    $('#patientDashSessionsPage').removeClass('hidden');
    $('#patientDashHomePage').addClass('hidden');
    $('#patientDashDoctorsPage').addClass('hidden');
    $('#patientDashBookingsPage').addClass('hidden');
    $('#patientDashSettingsPage').addClass('hidden');
    $('#patientDashEditPage').addClass('hidden');

}
function changePatientDashIntoBookingsPage(){
    $('#patientDashBookingsPage').removeClass('hidden');
    $('#patientDashHomePage').addClass('hidden');
    $('#patientDashDoctorsPage').addClass('hidden');
    $('#patientDashSessionsPage').addClass('hidden');
    $('#patientDashSettingsPage').addClass('hidden');
    $('#patientDashEditPage').addClass('hidden');

}
function changePatientDashIntoSettingsPage() {
  $('#patientDashSettingsPage').removeClass('hidden');
  $('#patientDashHomePage').addClass('hidden');
  $('#patientDashDoctorsPage').addClass('hidden');
  $('#patientDashSessionsPage').addClass('hidden');
  $('#patientDashBookingsPage').addClass('hidden');
  $('#patientDashEditPage').addClass('hidden');

  //   if (confirm("Are you sure do you want to delete!!")) {
  //     window.location.href =
  //       "http://localhost/Gestion-des-Rendez-Vous-Hopital/includes/doctor.php?functionName=delete&id="+id;
  //   }
  // }

  // }

  function changePatientDashIntoEditPage() {
    $('#patientDashEditPage').removeClass('hidden');
    $('#patientDashSettingsPage').addClass('hidden');
    $('#patientDashHomePage').addClass('hidden');
    $('#patientDashDoctorsPage').addClass('hidden');
    $('#patientDashSessionsPage').addClass('hidden');
    $('#patientDashBookingsPage').addClass('hidden');
  }

  //ajax function
  // appointment section

  function getAppointment(role) {
    $.ajax({
      type: "POST",
      url: "../../includes/Appointment.inc.php",
      data: { functionName: "getlAppointement" },
      dataType: "json",
      success: function (data) {
        for (var i = 0; i < data.AppointementData.length; i++) {
          if (role == "doctor") {
            document.querySelector(".AppointmentBody").innerHTML += `
                     <tr>
                      
                        <td class="px-4 py-2 text-center">${data.AppointementData[i].PatientFirstName}  ${data.AppointementData[i].PatientLastName}</td>
                        <td class="px-4 py-2 text-center">${data.AppointementData[i].id}</td>
                        <td class="px-4 py-2 text-center">${data.AppointementData[i].title}</td>
                        <td class="px-4 py-2 text-center">${data.AppointementData[i].sessdate}</td>
                        <td class="px-4 py-2 text-center">${data.AppointementData[i].appdate}</td>
                        <td class="px-4 py-2 text-center">
                            <button class="bg-sky-100 hover:bg-blue-700 hover:text-white text-sky-500 py-2 px-4 rounded"><i class="fa fa-trash mr-2"></i>Cancel</button>
                        </td>
              </tr>
                `;
          } else if (role == "admin") {
            document.querySelector(".AppointmentBody").innerHTML += `
                     <tr>
                      
                        <td class="px-4 py-2 text-center">${data.AppointementData[i].PatientFirstName}  ${data.AppointementData[i].PatientLastName}</td>
                        <td class="px-4 py-2 text-center">${data.AppointementData[i].id}</td>
                        <td class="px-4 py-2 text-center">${data.AppointementData[i].doctorFirstName}  ${data.AppointementData[i].DoctorLastName}</td>
                        <td class="px-4 py-2 text-center">${data.AppointementData[i].title}</td>
                        <td class="px-4 py-2 text-center">${data.AppointementData[i].sessdate}</td>
                        <td class="px-4 py-2 text-center">${data.AppointementData[i].appdate}</td>
                        <td class="px-4 py-2 text-center">
                            <button class="bg-sky-100 hover:bg-blue-700 hover:text-white text-sky-500 py-2 px-4 rounded"><i class="fa fa-trash mr-2"></i>Cancel</button>
                        </td>
              </tr>
                `;
          }
        }
      },
      error: function (data) {
        console.log(data);
      },
    });
  }
  // function checkDelete(id) {
  //     $.ajax({
  //       type: "POST",
  //       url: "../../includes/doctor.inc.php",
  //       data: { functionName: "deleteDoctor",id:id },
  //       dataType: "json",
  //         success: function (data) {

  // function getDataview() {
  //   let doctorId = document.getElementById(`doctorId${doctorId}`).innerText;

  //   console.log(document.getElementById(`doctorId${doctorId}`).innerText);

  //   let Ncode = document.getElementById();
  //   let firstName = document.getElementById();
  //   let lastName = document.getElementById();
  //   let email = document.getElementById();
  //   let speciality = document.getElementById();
  //   let pNumber = document.getElementById();
  // }

  // function salam() {
  //   alert("3likomsalam");
  // }

  //       },
  //     });
  // }
   

  function getPatientInfos(patientId) {
    // document.getElementById('patientId').innerText ;
    let patientFirstName = document.getElementById(`patientFirstName${patientId}`).innerText;
    let patientLastName = document.getElementById(`patientLastName${patientId}`).innerText;
    let patientCin = document.getElementById(`patientCin${patientId}`).innerText;
    let patientPhone = document.getElementById(`patientPhone${patientId}`).innerText;
    let patientEmail = document.getElementById(`patientEmail${patientId}`).innerText;
    let patientBirthday = document.getElementById(`patientBirthday${patientId}`).innerText;

    document.getElementById('firstname').value = patientFirstName;
    document.getElementById('lastname').value = patientLastName;
    document.getElementById('cin').value = patientCin;
    document.getElementById('phone').value = patientPhone;
    document.getElementById('email').value = patientEmail;
    document.getElementById('birthday').value = patientBirthday;
  }
}

