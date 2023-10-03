var CORRECT_USER = 'admin';
var CORRECT_PASS = 'admin';



var inputUseName = document.getElementById('username');
var inputPassword = document.getElementById('password');

var formLogin = document.getElementById('form_login');
if (formLogin.attachEvent){
    formLogin.attachEvent('submit', onFormSubmit);
} else {
    formLogin.addEventListener('submit', onFormSubmit);
}



function onFormSubmit(e){
    var username = inputUseName.value;
    var password = inputPassword.value;

    if(username == CORRECT_USER && password == CORRECT_PASS){
        alert('Dang nhap thanh cong!');
        window.location.href = '../views/sach/index_book.blade.php';
    }else {
        alert('Dang nhap that bai!');
    }
}
