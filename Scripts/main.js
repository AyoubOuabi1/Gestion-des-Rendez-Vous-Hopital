function changeSectionIntoLogin(){
    $('#loginSection').removeAttr('style');
    $('#signupSection').css('display', 'none');
}
function changeSectionIntoSignUp() {
    $('#signupSection').removeAttr('style');
    $('#loginSection').css('display', 'none');

}

//Admin section
function changePageIntoAdminPage(){
    $('#adminDashAdminPage').removeClass('hidden');
    $('#adminDashAppointmentPage').addClass('hidden');
    $('#adminDashDoctorPage').addClass('hidden');
    $('#adminDashPatientsPage').addClass('hidden');
    $('#adminDashSchedulePage').addClass('hidden');
}

function changePageIntoAppointmentPage(){
    getAdminAppointmentData ();
    $('#adminDashAppointmentPage').removeClass('hidden');
    $('#adminDashAdminPage').addClass('hidden');
    $('#adminDashDoctorPage').addClass('hidden');
    $('#adminDashPatientsPage').addClass('hidden');
    $('#adminDashSchedulePage').addClass('hidden');
}

function changePageIntoDoctorPage(){
    $('#adminDashDoctorPage').removeClass('hidden');
    $('#adminDashAdminPage').addClass('hidden');
    $('#adminDashAppointmentPage').addClass('hidden');
    $('#adminDashPatientsPage').addClass('hidden');
    $('#adminDashSchedulePage').addClass('hidden');
}
function changePageIntoPatientPage(){
    $('#adminDashPatientsPage').removeClass('hidden');
    $('#adminDashAdminPage').addClass('hidden');
    $('#adminDashAppointmentPage').addClass('hidden');
    $('#adminDashDoctorPage').addClass('hidden');
    $('#adminDashSchedulePage').addClass('hidden');
}
function changePageIntoSchedulePage(){
    $('#adminDashSchedulePage').removeClass('hidden');
    $('#adminDashAdminPage').addClass('hidden');
    $('#adminDashAppointmentPage').addClass('hidden');
    $('#adminDashDoctorPage').addClass('hidden');
    $('#adminDashPatientsPage').addClass('hidden');
}

//doctor section
function changeDoctorDashIntoHomePage(){
    $('#DoctorDashboardHome').removeClass('hidden');
    $('#DoctorDashboardPatient').addClass('hidden');
    $('#DoctorDashboardApp').addClass('hidden');
    $('#DoctorDashboardSession').addClass('hidden');
    $('#DoctorDashboardSettings').addClass('hidden');
}

function changeDoctorDashIntoPatientPage(){
    $('#DoctorDashboardPatient').removeClass('hidden');
    $('#DoctorDashboardHome').addClass('hidden');
    $('#DoctorDashboardApp').addClass('hidden');
    $('#DoctorDashboardSession').addClass('hidden');
    $('#DoctorDashboardSettings').addClass('hidden');
}

function changeDoctorDashIntoAppointmentPage(){
    getDoctorAppointmentData();
    $('#DoctorDashboardApp').removeClass('hidden');
    $('#DoctorDashboardHome').addClass('hidden');
    $('#DoctorDashboardPatient').addClass('hidden');
    $('#DoctorDashboardSession').addClass('hidden');
    $('#DoctorDashboardSettings').addClass('hidden');
}
function changeDoctorDashIntoSessionPage(){
    $('#DoctorDashboardSession').removeClass('hidden');
    $('#DoctorDashboardHome').addClass('hidden');
    $('#DoctorDashboardPatient').addClass('hidden');
    $('#DoctorDashboardApp').addClass('hidden');
    $('#DoctorDashboardSettings').addClass('hidden');
}
function changeDoctorDashIntoSettingPage(){
    $('#DoctorDashboardSettings').removeClass('hidden');
    $('#DoctorDashboardHome').addClass('hidden');
    $('#DoctorDashboardPatient').addClass('hidden');
    $('#DoctorDashboardApp').addClass('hidden');
    $('#DoctorDashboardSession').addClass('hidden');
}




//patient section
function changePatientDashIntoHomePage(){
    $('#patientDashHomePage').removeClass('hidden');
    $('#patientDashDoctorsPage').addClass('hidden');
    $('#patientDashSessionsPage').addClass('hidden');
    $('#patientDashBookingsPage').addClass('hidden');
    $('#patientDashSettingsPage').addClass('hidden');
}

function changePatientDashIntoDoctorsPage(){
    $('#patientDashDoctorsPage').removeClass('hidden');
    $('#patientDashHomePage').addClass('hidden');
    $('#patientDashSessionsPage').addClass('hidden');
    $('#patientDashBookingsPage').addClass('hidden');
    $('#patientDashSettingsPage').addClass('hidden');
}

function changePatientDashIntoSessionsPage(){
    $('#patientDashSessionsPage').removeClass('hidden');
    $('#patientDashHomePage').addClass('hidden');
    $('#patientDashDoctorsPage').addClass('hidden');
    $('#patientDashBookingsPage').addClass('hidden');
    $('#patientDashSettingsPage').addClass('hidden');
}
function changePatientDashIntoBookingsPage(){
    $('#patientDashBookingsPage').removeClass('hidden');
    $('#patientDashHomePage').addClass('hidden');
    $('#patientDashDoctorsPage').addClass('hidden');
    $('#patientDashSessionsPage').addClass('hidden');
    $('#patientDashSettingsPage').addClass('hidden');
}
function changePatientDashIntoSettingsPage(){
    $('#patientDashSettingsPage').removeClass('hidden');
    $('#patientDashHomePage').addClass('hidden');
    $('#patientDashDoctorsPage').addClass('hidden');
    $('#patientDashSessionsPage').addClass('hidden');
    $('#patientDashBookingsPage').addClass('hidden');

}

//ajax function
// appointment section

    function getAdminAppointmentData () {
        document.querySelector('.AppointmentBody').innerHTML="";
        $.ajax({
            type: "POST",
            url: "../../includes/Appointment.inc.php",
            data: {functionName: "getAdminAppointmentData"},
            dataType: "json",
            success: function (data) {

                let ad=0;
                for (var i = 0; i < data.AppointementData.length; i++) {
                        ad++;
                        document.querySelector('.AppointmentBody').innerHTML += `
                     <tr>
                        <td class="px-4 py-2 text-center">${data.AppointementData[i].PatientFirstName}  ${data.AppointementData[i].PatientLastName}</td>
                        <td class="px-4 py-2 text-center">${data.AppointementData[i].id}</td>
                        <td class="px-4 py-2 text-center">${data.AppointementData[i].doctorFirstName}  ${data.AppointementData[i].DoctorLastName}</td>
                        <td class="px-4 py-2 text-center">${data.AppointementData[i].title}</td>
                        <td class="px-4 py-2 text-center">${data.AppointementData[i].sessdate}</td>
                        <td class="px-4 py-2 text-center">${data.AppointementData[i].appdate}</td>
                        <td class="px-4 py-2 text-center">
                            <button class="bg-sky-100 hover:bg-blue-700 hover:text-white text-sky-500 py-2 px-4 rounded" data-role="${role}" id="${data.AppointementData[i].id}" onclick="calncelAppointment(this.id,'admin')"><i class="fa fa-trash mr-2"></i>Cancel</button>
                        </td>
              </tr>`;


            }
                $('#appCounteAdmin').html("All Appointments ("+ad+")");


        },
        error: function (data) {
            console.log(data);
            }
        })
    }

    function getDoctorAppointmentData () {
        document.querySelector('.AppointmentBody').innerHTML="";
        $.ajax({
            type: "POST",
            url: "../../includes/Appointment.inc.php",
            data: {functionName: "getDoctorAppointmentData"},
            dataType: "json",
            success: function (data) {

                let c=0;
                for (var i = 0; i < data.AppointementData.length; i++) {
                    c++;
                    document.querySelector('.AppointmentBody').innerHTML += `
                        <tr>
                            <td class="px-4 py-2 text-center">${data.AppointementData[i].PatientFirstName}  ${data.AppointementData[i].PatientLastName}</td>
                            <td class="px-4 py-2 text-center">${data.AppointementData[i].id}</td>
                            <td class="px-4 py-2 text-center">${data.AppointementData[i].title}</td>
                            <td class="px-4 py-2 text-center">${data.AppointementData[i].sessdate}</td>
                            <td class="px-4 py-2 text-center">${data.AppointementData[i].appdate}</td>
                            <td class="px-4 py-2 text-center">
                            <button class="bg-sky-100 hover:bg-blue-700 hover:text-white text-sky-500 py-2 px-4 rounded" id="${data.AppointementData[i].id}" onclick="calncelAppointment(this.id,'doctor')"><i class="fa fa-trash mr-2"></i>Cancel</button>
                            </td>
                        </tr>
                    `;
                }
                $('#appCounteDctr').html("All Appointments ("+c+")");


            },
            error: function (data) {
                console.log(data);
            }
        })
    }




    function calncelAppointment (id,role) {

        $.ajax({
            type: "POST",
            url: "../../includes/Appointment.inc.php",
            data: {functionName: "canculAppointement",appId:id},
            dataType: "json",
            success: function (data) {
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, Cancel it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        Swal.fire(
                            'Canceled!',
                            'Your Appointment has been canceled.',
                            'success'
                        )
                        if(role ==="admin"){
                            getAdminAppointmentData();
                        }else if (role ==="doctor"){
                            getDoctorAppointmentData();
                        }

                    }

                })

            },
            error: function (data) {
                console.log(data);
            }
        })
    }
