@extends('master1')

@section('content')

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
     width: 80%;
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
     margin-bottom: 10px;
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
<div class="d-flex justify-content-center h-100">
<body>
<section>
    
    <div class="noi-dung">
       
         <div class="form">
            @if($message = Session::get('success'))

                <div class="alert alert-success">
                    {{ $message }}
                </div>

            @endif
             <h2>LOGIN</h2>
             <form action="{{route('authLogin')}}" method="post">
                @csrf
                 <div class="input-form">
                     <span>Email</span>
                     <input type="text" name="email">
                 </div>
                 <div class="input-form">
                     <span>Password</span>
                     <input type="password" name="password">
                 </div>
                 <div class="nho-dang-nhap">
                     <label><input type="checkbox" name=""> Nhớ Đăng Nhập</label>
                 </div>
                 @if ($message = Session::get('error'))
                    <div class="alert alert-danger" style="color: red;">
                        {{ $message }}
                    </div>
                @endif

                @if ($errors->any())
                    <div class="alert alert-danger" style="color: red;">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                 <div class="input-form">
                     <input type="submit" value="Đăng Nhập">
                 </div>
                 <div class="input-form">
                     <p>Bạn Chưa Có Tài Khoản? <a href="{{route('register.index')}}">Đăng Ký</a></p>
                 </div>
             </form>
         </div>
     </div>   
 </section>
</body>
</div>
@endsection('content')