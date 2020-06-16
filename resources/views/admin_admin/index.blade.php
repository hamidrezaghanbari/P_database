<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Meta -->
    <meta name="description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta name="author" content="ThemePixels">

    <title>@lang('auth.app.name')</title>


    @include('admin_admin.layout.style_head')

    <style>
        @font-face {
            font-family: iransanslight;
            src: url({{ asset('fonts/iransans/IRANSans_Light.ttf') }});
        }

        @font-face {
            font-family: iransansmedium;
            src: url({{ asset('fonts/iransans/IRANSans_Medium.ttf') }});
        }

        * {
            font-family: iransanslight;
        }

    </style>

</head>
<body class="az-body">
<div class="az-error-wrapper">
    @include('admin_admin.messages')

    <div class="alert alert-warning">
        تمام اطلاعت این سایت فیک میباشد
    </div>

    <h2 style="font-family: iransansmedium">@lang('auth.app.name')</h2>
    <h3>پروژه مطب پزشک</h3>
    <h6>@lang('auth.author.name')</h6>

    <div>
        <a href="{{ route('register') }}" class="btn btn-outline-indigo">ثبت نام</a>
        <a href="{{ route('login') }}" class="btn btn-outline-indigo">ورود</a>
    </div>
</div>


@include('admin_admin.layout.footer_script')


</body>
</html>
