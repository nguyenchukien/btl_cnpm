@extends('master1')

@section('content')
<div class="d-flex justify-content-center h-100">
<style>
    *{
    margin:0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Roboto', sans-serif;
}
section{
    position: relative;
    width: 100%;
    height: 100vh;
    display: flex;
}
section .img-bg{
    position: relative;
    width: 50%;
    height: 100%;
}
section .img-bg img{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
}
section .noi-dung{
     display: flex;
     justify-content: center;
     align-items: center;
     width: 50%;
     height: 100%;
 }
section .noi-dung .form{
     width: 50%;
 }
section .noi-dung .form h2{
     color: #607d8b;
     font-weight: 500;
     font-size: 1.5em;
     text-transform: uppercase;
     margin-bottom: 20px;
     border-bottom: 4px solid #ff4584;
     display: inline-block;
     letter-spacing: 1px;
 }
 section .noi-dung .form .input-form{
     margin-bottom: 20px;
 }
section .noi-dung .form .input-form span{
     font-size: 16px;
     margin-bottom: 5px;
     display: inline-block;
     color: #607db8;
     letter-spacing: 1px;
      }
section .noi-dung .form .input-form input{
     width: 100%;
     padding: 10px 20px;
     outline: none;
     border: 1px solid #607d8b;
     font-size: 16px;
     letter-spacing: 1px;
     color: #607d8b;
     background: transparent;
     border-radius: 30px;
     }
 section .noi-dung .form .input-form input[type="submit"]{
     background: #ff4584;
     color: #fff;
     outline: none;
     border: none;
     font-weight: 500;
     cursor: pointer;
     box-shadow: 0 1px 1px rgba(0,0,0,0.12),
                0 2px 2px rgba(0,0,0,0.12),
                0 4px 4px rgba(0,0,0,0.12),
               0 8px 8px rgba(0,0,0,0.12),
               0 16px 16px rgba(0,0,0,0.12);
 }
section .noi-dung .form .input-form input[type="submit"]:hover{
     background: #f53677;
 }
 section .noi-dung .form .nho-dang-nhap{
     margin-bottom: 10px;
     color: #607d8b;
     font-size: 14px;
 }
 section .noi-dung .form .input-form p{
     color: #607d8b;
 }
section .noi-dung .form .input-form p a{
     color: #ff4584;
 }
 section .noi-dung .form h3{
     color: #607d8b;
     text-align: center;
     margin: 80px 0 10px;
     font-weight: 500;
 }
section .noi-dung .form .icon-dang-nhap{
     display: flex;
     justify-content: center;
     align-items: center;
 }
section .noi-dung .form .icon-dang-nhap li{
     list-style: none;
     cursor: pointer;
     width: 50px;
     height: 50px;
     display: flex;
     justify-content: center;
     align-items: center;
 }
 section .noi-dung .form .icon-dang-nhap li:nth-child(1){
     color: #3b5999;
 }
 section .noi-dung .form .icon-dang-nhap li:nth-child(2){
     color: #dd4b39;
 }
 section .noi-dung .form .icon-dang-nhap li:nth-child(3){
     color: #55acee;
 }
 section .noi-dung .form .icon-dang-nhap li i{
     font-size: 24px;
 }

</style>
<body>
<section>
     
     <div class="noi-dung">
         <div class="form">
             <h2>REGISTER</h2>
             <form action="" method="post" enctype="multipart/form-data">
                @csrf
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                <div class="input-form">
                     <span>Name</span>
                     <input type="text" name="name" required>
                 </div>
                 @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                 <div class="input-form">
                     <span>Email</span>
                     <input type="text" name="email" required>
                 </div>
                 
                 <div class="input-form">
                     <span>Password</span>
                     <input type="password" name="password" required>
                 </div>
                 @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                 @error('password_confirmation')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                 <div class="input-form">
                     <span>Confirm Password</span>
                     <input type="password" name="password_confirmation" required>
                 </div>
                
                 <div class="input-form">
                     <input type="submit" value="Đăng Ký">
                 </div>
                 <div class="input-form">
                     <p>Bạn Đã Có Tài Khoản? <a href="{{route('login')}}">Đăng Nhập</a></p>
                 </div>
             </form>
         </div>
     </div>
     <!--Kết Thúc Phần Nội Dung-->
 </section>
</body>
</div>
@endsection('content')