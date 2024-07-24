@extends('Admin.index')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 col-md-offset-3">
            <div class="login-panel panel panel-default mt-5">
                <div class="panel-heading">
                    <h3 class="panel-title">Đăng Nhập</h3>
                </div>
                <div class="panel-body">
                    <form role="form" action="{{ route('login') }}" method="POST">
                        @csrf
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="E-mail" name="EmailUser" type="email" required>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="PasswordUser" type="password" required>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input name="remember" type="checkbox" value="Remember Me">Ghi nhớ tôi
                                </label>
                            </div>
                            <button type="submit" class="btn btn-lg btn-success btn-block">Đăng Nhập</button>
                        </fieldset>
                    </form>
                    <div class="mt-3">
                        <a href="{{ route('register') }}">Đăng Ký</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- jQuery -->
<script src="{{ asset('js/jquery.min.js') }}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>

<!-- Custom Theme JavaScript -->
<script src="{{ asset('js/startmin.js') }}"></script>
@endsection

