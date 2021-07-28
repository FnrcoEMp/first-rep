<!DOCTYPE html>

<html lang="en">
<!--begin::Head-->
<head>
    <meta charset="utf-8"/>
    <title>Fnrco Agency Recruitment System | Login</title>

    <meta name="description" content="Fnrco Agency Recruitment System"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700"/>
    <!--end::Fonts-->


    <!--begin::Page Custom Styles(used by this page)-->
    <link href="{{url('SystemDesign')}}/assets/css/pages/login/classic/login-1.css" rel="stylesheet" type="text/css"/>
    <!--end::Page Custom Styles-->

    <!--begin::Global Theme Styles(used by all pages)-->
    <link href="{{url('SystemDesign')}}/assets/plugins/global/plugins.bundle.css?v=7.0.6" rel="stylesheet" type="text/css"/>
    <link href="{{url('SystemDesign')}}/assets/plugins/custom/prismjs/prismjs.bundle.css?v=7.0.6" rel="stylesheet" type="text/css"/>
    <link href="{{url('SystemDesign')}}/assets/css/style.bundle.css?v=7.0.6" rel="stylesheet" type="text/css"/>

<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" rel="stylesheet">
    <!--end::Global Theme Styles-->

    <!--begin::Layout Themes(used by all pages)-->
    <!--end::Layout Themes-->

    <link rel="shortcut icon" href="{{url('SystemDesign')}}/assets/media/logos/favicon.ico"/>

</head>
<!--end::Head-->

<!--begin::Body-->
<body id="kt_body"
      class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">

<!--begin::Main-->
<div class="d-flex flex-column flex-root">
    <!--begin::Login-->
    <div class="login login-1 login-signin-on d-flex flex-column flex-lg-row flex-row-fluid bg-white" id="kt_login">
        <!--begin::Aside-->
        <div class="login-aside d-flex flex-row-auto bgi-size-cover bgi-no-repeat p-10 p-lg-10" style="background-image: url('/SystemDesign/assets/media/bg/bg-9.jpg');">
            <!--begin: Aside Container-->
            <div class="d-flex flex-row-fluid flex-column justify-content-between">
                <!--begin: Aside header-->
                <a href="#" class="flex-column-auto mt-5 pb-lg-0 pb-10">
                    <img src="{{url('SystemDesign')}}/assets/media/logos/biglogofnrco2.png" class="max-h-70px" alt=""/>
                </a>
                <!--end: Aside header-->

                <!--begin: Aside content-->
                <div class="flex-column-fluid d-flex flex-column justify-content-center">
                    <h3 class="font-size-h1 mb-5 text-white">Fnrco Agency Recruitment System</h3>
                    <p class="font-weight-lighter text-white opacity-80">
                        Fnrco Admin Login Page
                    </p>
                </div>
                <!--end: Aside content-->

                <!--begin: Aside footer for desktop-->
                <div class="d-none flex-column-auto d-lg-flex justify-content-between mt-10">
                    <div class="opacity-70 font-weight-bold	text-white">
                        &copy; 2021 Fnrco
                    </div>

                </div>
                <!--end: Aside footer for desktop-->
            </div>
            <!--end: Aside Container-->
        </div>
        <!--begin::Aside-->

        <!--begin::Content-->
        <div class="flex-row-fluid d-flex flex-column position-relative p-7 overflow-hidden">
            <!--begin::Content header-->

            <!--end::Content header-->

            <!--begin::Content body-->
            <div class="d-flex flex-column-fluid flex-center mt-30 mt-lg-0">
                <!--begin::Signin-->
                <div class="login-form login-signin">
                    <div class="text-center mb-10 mb-lg-20">
                        <h3 class="font-size-h1">Sign In</h3>
                        <p class="text-muted font-weight-bold">Enter your username and password</p>
                    </div>

                    <!--begin::Form-->
                    <form id="LoginForm">
                        @csrf
                        <div class="form-group">
                            <input class="form-control form-control-solid h-auto py-5 px-6" type="email" placeholder="E-mail" name="email" autocomplete="off"/>
                        </div>
                        <div class="form-group">
                            <input class="form-control form-control-solid h-auto py-5 px-6" type="password" placeholder="Password" name="password" autocomplete="off"/>
                        </div>
                        <!--begin::Action-->
                        <div class="form-group d-flex flex-wrap justify-content-between align-items-center">

                            <button type="submit" id="kt_login_signin_submit" class="btn btn-primary mr-2 spinner-white spinner-right">Login In</button>
                        </div>
                        <!--end::Action-->
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Signin-->




            </div>
            <!--end::Content body-->

            <!--begin::Content footer for mobile-->
            <div class="d-flex d-lg-none flex-column-auto flex-column flex-sm-row justify-content-between align-items-center mt-5 p-5">
                <div class="text-dark-50 font-weight-bold order-2 order-sm-1 my-2">
                    &copy; 2021 Fnrco
                </div>

            </div>
            <!--end::Content footer for mobile-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Login-->
</div>
<!--end::Main-->


<!--begin::Global Config(global config for global JS scripts)-->
<script>
    var KTAppSettings = {
        "breakpoints": {
            "sm": 576,
            "md": 768,
            "lg": 992,
            "xl": 1200,
            "xxl": 1400
        },
        "colors": {
            "theme": {
                "base": {
                    "white": "#ffffff",
                    "primary": "#3699FF",
                    "secondary": "#E5EAEE",
                    "success": "#1BC5BD",
                    "info": "#8950FC",
                    "warning": "#FFA800",
                    "danger": "#F64E60",
                    "light": "#E4E6EF",
                    "dark": "#181C32"
                },
                "light": {
                    "white": "#ffffff",
                    "primary": "#E1F0FF",
                    "secondary": "#EBEDF3",
                    "success": "#C9F7F5",
                    "info": "#EEE5FF",
                    "warning": "#FFF4DE",
                    "danger": "#FFE2E5",
                    "light": "#F3F6F9",
                    "dark": "#D6D6E0"
                },
                "inverse": {
                    "white": "#ffffff",
                    "primary": "#ffffff",
                    "secondary": "#3F4254",
                    "success": "#ffffff",
                    "info": "#ffffff",
                    "warning": "#ffffff",
                    "danger": "#ffffff",
                    "light": "#464E5F",
                    "dark": "#ffffff"
                }
            },
            "gray": {
                "gray-100": "#F3F6F9",
                "gray-200": "#EBEDF3",
                "gray-300": "#E4E6EF",
                "gray-400": "#D1D3E0",
                "gray-500": "#B5B5C3",
                "gray-600": "#7E8299",
                "gray-700": "#5E6278",
                "gray-800": "#3F4254",
                "gray-900": "#181C32"
            }
        },
        "font-family": "Poppins"
    };
</script>
<!--end::Global Config-->

<!--begin::Global Theme Bundle(used by all pages)-->
<script src="{{url('SystemDesign')}}/assets/plugins/global/plugins.bundle.js?v=7.0.6"></script>
<script src="{{url('SystemDesign')}}/assets/plugins/custom/prismjs/prismjs.bundle.js?v=7.0.6"></script>
<script src="{{url('SystemDesign')}}/assets/js/scripts.bundle.js?v=7.0.6"></script>
<!--end::Global Theme Bundle-->
<!--begin::Page Scripts(used by this page)-->
<script src="{{url('SystemDesign')}}/assets/js/pages/custom/login/login-general.js?v=7.0.6"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<!--end::Page Scripts-->
</body><!--end::Body-->


<script>
    $(document).ready(function () {
        $("#LoginForm").submit(function (m) {


            $.ajax({
                type: "POST",
                url: '{{route('doLogin')}}',
                data: new FormData(this),
                processData: false,
                contentType: false,
                beforeSend: function () {
                    $('#kt_login_signin_submit').addClass('spinner');
                },
                complete: function () {
                    $('#kt_login_signin_submit').removeClass('spinner');
                },
                success: function (response) {
                    if (response.errors) {
                        jQuery.each(response.errors, function (key, value) {
                            toastr.error(value);
                        });
                    } else {
                        toastr.success('Login Successfully.');
                     window.location="{{route('homePage')}}";
                    }
                },
            });
            m.preventDefault(); // avoid to execute the actual submit of the form momoomomomo.
        });

    });
</script>
</html>
