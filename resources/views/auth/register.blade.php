@extends('layouts.guest2')

@section('content')
<!-- Outer Row -->
<div class="container-fluid">
    <div class="row justify-content-center">

        <div class="col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">

                        <div class="col-md-12">
                            <div class="p-5">
                                <!-- title -->
                                <div class="text-center">
                                    <h2 class="h4 text-bg mb-4 o-loginTitle">會員註冊</h2>
                                </div>
                                <!-- register information -->
                                <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                                    {{ csrf_field() }}
                                    <!-- member name -->
                                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                        <input id="name" type="text" class="form-control form-control-user" name="name"
                                            value="{{ old('name') }}" placeholder="會員姓名" autofocus>
                                        @if ($errors->has('name'))
                                        <span class="help-block alert-danger">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                    <!-- member nickname -->
                                    <div class="form-group{{ $errors->has('nickname') ? ' has-error' : '' }}">
                                        <input id="nickname" type="text" class="form-control form-control-user"
                                            name="nickname" value="{{ old('nickname') }}" placeholder="會員暱稱" autofocus>
                                        @if ($errors->has('nickname'))
                                        <span class="help-block alert-danger">
                                            <strong>{{ $errors->first('nickname') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                    <!-- member email -->
                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                        <input id="email" type="email" class="form-control form-control-user"
                                            name="email" value="{{ old('email') }}" placeholder="會員帳號(email)" autofocus>
                                        @if ($errors->has('email'))
                                        <span class="help-block alert-danger">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                    <!-- member school -->
                                     <!-- this section have been updated, please check the from still submit the right infos. -->
                                    <div class="form-group{{ $errors->has('university') ? ' has-error' : '' }}">
                                        <!-- this input tag can search for the school names -->
                                        <input id="string" placeholder="就讀學校" list="universityList" class="form-control form-control-user">
                                        <!-- this datalist should contain all the school names -->
                                        <datalist id="universityList">
                                            <!-- I have check the code works, but it can only search chinese name now, we have to add english name into search pool. -->
                                            @foreach($Data['universities'] as $id => $name)
                                            <!-- this option tag contains all the chinese names -->
                                            <option value="{{$name}}"></option>
                                            @endforeach
                                        </datalist>
                                        @if ($errors->has('university'))
                                        <span class="help-block alert-danger">
                                            <strong>{{ $errors->first('university') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                    <!-- password -->
                                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                        <input id="password" type="password" class="form-control form-control-user"
                                            name="password" placeholder="輸入密碼" required>
                                        @if ($errors->has('password'))
                                        <span class="help-block alert-danger">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                    <!-- password check -->
                                    <div class="form-group">

                                        <input id="password-confirm" type="password" class="form-control"
                                            name="password_confirmation" placeholder="確認密碼" required>

                                        @if ($errors->has('password'))
                                        <span class="alert-danger">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                    <!-- concent -->
                                    <div class="form-group">
                                        <div class="col-md-6 col-md-offset-4">
                                            <div class="checkbox">
                                                <label style="color: #4C2A70;">
                                                    <input type="checkbox" name="check_contract"
                                                        {{ old('remember') ? 'checked' : '' }} value="1"> 我已經仔閱讀並明瞭『<a
                                                        href="{{route('membership-agreement')}}"
                                                        target="_blank">會員規約</a>』,『<a
                                                        href="{{route('service-agreement')}}" target="_blank">服務條款</a>』
                                                    『<a href="{{route('disclaimer')}}" target="_blank">免責聲明</a>』、『<a
                                                        href="{{route('subscription-agreement')}}"
                                                        target="_blank">服務提供者(學長姐，付費會員)服務條款</a>』等所載內容及其意義，我同意該等條款規定，並願遵守網站現今，嗣後規範的各種規則。
                                                </label>
                                            </div>
                                            @if ($errors->has('check_contract'))
                                            <span class="alert-danger">
                                                <strong>{{ $errors->first('check_contract') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <!-- submit -->
                                    <div class="form-group">
                                        <button type="submit" class=" text-white btn btn-user btn-block"
                                            style="background-color: #4C2A70">
                                            註冊
                                        </button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>
@endsection

<!-- 

{{--<div class="container">--}}
{{--    <div class="row">--}}
{{--        <div class="col-md-8 col-md-offset-2">--}}
{{--            <div class="panel panel-default">--}}
{{--                <div class="panel-heading">註冊帳號</div>--}}

{{--                <div class="panel-body">--}}
{{--                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">--}}
{{--                        {{ csrf_field() }}--}}

{{--                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">--}}
{{--                            <label for="name" class="col-md-4 control-label">姓名</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>--}}

{{--                                @if ($errors->has('name'))--}}
{{--                                    <span class="help-block">--}}
{{--                                        <strong>{{ $errors->first('name') }}</strong>--}}
{{--                                    </span>--}}
{{--                                @endif--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">--}}
{{--                            <label for="email" class="col-md-4 control-label">E-Mail</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>--}}

{{--                                @if ($errors->has('email'))--}}
{{--                                    <span class="help-block">--}}
{{--                                        <strong>{{ $errors->first('email') }}</strong>--}}
{{--                                    </span>--}}
{{--                                @endif--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group{{ $errors->has('birth_day') ? ' has-error' : '' }}">--}}
{{--                            <label for="email" class="col-md-4 control-label">E-Mail</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="email" type="email" class="form-control" name="birth_day" value="{{ old('email') }}" required>--}}

{{--                                @if ($errors->has('birth_day'))--}}
{{--                                    <span class="help-block">--}}
{{--                                        <strong>{{ $errors->first('birth_day') }}</strong>--}}
{{--                                    </span>--}}
{{--                                @endif--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">--}}
{{--                            <label for="password" class="col-md-4 control-label">Password</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password" type="password" class="form-control" name="password" required>--}}

{{--                                @if ($errors->has('password'))--}}
{{--                                    <span class="help-block">--}}
{{--                                        <strong>{{ $errors->first('password') }}</strong>--}}
{{--                                    </span>--}}
{{--                                @endif--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group">--}}
{{--                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group">--}}
{{--                            <div class="col-md-6 col-md-offset-4">--}}
{{--                                <button type="submit" class="btn form-control text-white" style="background-color: #4C2A70;">--}}
{{--                                    註冊--}}
{{--                                </button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

 -->