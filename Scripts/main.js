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
    $('#adminDashAdminPage').removeAttr('style');
    $('#adminDashAppointmentPage').css('display', 'none');
    $('#adminDashDoctorPage').css('display', 'none');
    $('#adminDashPatientsPage').css('display', 'none');
    $('#adminDashSchedulePage').css('display', 'none');
}

function changePageIntoAppointmentPage(){
    $('#adminDashAppointmentPage').removeAttr('style');
    $('#adminDashAdminPage').css('display', 'none');
    $('#adminDashDoctorPage').css('display', 'none');
    $('#adminDashPatientsPage').css('display', 'none');
    $('#adminDashSchedulePage').css('display', 'none');
}

function changePageIntoDoctorPage(){
    $('#adminDashDoctorPage').removeAttr('style');
    $('#adminDashAdminPage').css('display', 'none');
    $('#adminDashAppointmentPage').css('display', 'none');
    $('#adminDashPatientsPage').css('display', 'none');
    $('#adminDashSchedulePage').css('display', 'none');
}
function changePageIntoPatientPage(){
    $('#adminDashPatientsPage').removeAttr('style');
    $('#adminDashAdminPage').css('display', 'none');
    $('#adminDashAppointmentPage').css('display', 'none');
    $('#adminDashDoctorPage').css('display', 'none');
    $('#adminDashSchedulePage').css('display', 'none');
}
function changePageIntoSchedulePage(){
    $('#adminDashSchedulePage').removeAttr('style');
    $('#adminDashAdminPage').css('display', 'none');
    $('#adminDashAppointmentPage').css('display', 'none');
    $('#adminDashDoctorPage').css('display', 'none');
    $('#adminDashPatientsPage').css('display', 'none');
}