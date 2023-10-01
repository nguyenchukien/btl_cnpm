@extends('master1')

@section('content')

<div class="d-flex justify-content-center h-100">
    <div class="card">
        <div class="card-header">
            <h3>Login</h3>

        </div>
        <div class="card-body">
            <form action="index.php?controller=Member&action=login" method="post">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="txtUser" ><i class="fas fa-user"></i></span>
                    <input type="text" class="form-control" placeholder="username" name ="txtUser" >
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="txtPass" ><i class="fas fa-key"></i></span>
                    <input type="password" class="form-control" placeholder="password" name ="txtPass">
                </div>
                <div class="form-group">
                    <input type="submit" value="Login" class="btn float-end login_btn" name ="btnLogin">
                </div>
            </form>
        </div>
        <div class="card-footer">
            <div class="d-flex justify-content-center ">
                Don't have an account?<a href="#" class="text-warning text-decoration-none text-sign-up"> Sign Up</a>
            </div>
            <div class="d-flex justify-content-center">
                <a href="#" class="text-warning text-decoration-none">Forgot your password?</a>
            </div>

        </div>
    </div>
</div>

@endsection('content')
