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
    getAppointment ('admin');
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
    getAppointment ('doctor');
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

//ajax function
// appointment section

function getAppointment (role){
    $.ajax({
        type:"POST",
        url:"../../includes/Appointment.inc.php",
        data:{functionName:"getlAppointement"},
        dataType:"json",
        success: function(data){
            for(var i=0; i<data.AppointementData.length;i++){
                if(role=="doctor"){
                    document.querySelector('.AppointmentBody').innerHTML+=`
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
                }else if (role == 'admin'){
                    document.querySelector('.AppointmentBody').innerHTML+=`
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
        error: function(data) {
            console.log(data);
        }
    })
}