function changeSectionIntoLogin(){
    $('#loginSection').removeAttr('style');
    $('#signupSection').css('display', 'none');
}
function changeSectionIntoSignUp() {
    $('#signupSection').removeAttr('style');
    $('#loginSection').css('display', 'none');

}