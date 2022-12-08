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
    $('#adminDashAppointmentPage').removeClass('hidden');
    $('#adminDashAdminPage').addClass('hidden');
    $('#adminDashDoctorPage').addClass('hidden');
    $('#adminDashPatientsPage').addClass('hidden');
    $('#adminDashSchedulePage').addClass('hidden');
}

function changePageIntoDoctorPage(){
    $("#adminDashDoctorPage").removeClass("hidden");
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