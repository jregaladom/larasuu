<!DOCTYPE html>


<html class="loading {{( config('template.theme')  === 'light') ? '' : config('template.theme') }}"
    lang="@if(session()->has('locale')){{session()->get('locale')}}@else{{config('template.defaultLanguage')}}@endif"
    data-textdirection="{{ config('template.MIX_CONTENT_DIRECTION') === 'rtl' ? 'rtl' : 'ltr' }}" @if(config('template.theme')==='dark'
    ) data-layout="dark-layout" @endif>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Plantilla</title>
    <link rel="apple-touch-icon" href="{{asset('images/ico/apple-icon-120.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="https://vccc.irapuato.gob.mx/assets/img/favicon_2021_a.png">
    <style>
        .auth-wrapper {
            display: flex;
            flex-basis: 100%;
            min-height: 100vh;
            min-height: calc(var(--vh, 1vh) * 100);
            width: 100%;
        }

        .auth-wrapper .auth-inner {
            width: 100%;
        }

        .auth-wrapper.auth-basic {
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .auth-wrapper.auth-basic .auth-inner {
            position: relative;
        }

        .auth-wrapper.auth-basic .auth-inner:before {
            width: 244px;
            height: 243px;
            content: ' ';
            position: absolute;
            top: -54px;
            left: -46px;
            background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAPQAAADzCAMAAACG9Mt0AAAAAXNSR0IArs4c6QAAAERlWElmTU0AKgAAAAgAAYdpAAQAAAABAAAAGgAAAAAAA6ABAAMAAAABAAEAAKACAAQAAAABAAAA9KADAAQAAAABAAAA8wAAAADhQHfUAAAAyVBMVEUAAAD///+AgP+AgP9mZv+AgNWAgP9tbf9gYP+AgP9xcf9mZv+AZuaAgP9dXf90dOhiYv92dv9mZu5mZv93d+53d/9paf94afCAcfFrXvJra/9mZvJzZvJzc/JoaP96b/Rqav91aupsYvV2bOt2bPVxaPZ7cfZqavZyau1waPd4aO9xafBxafh4afB1bfh4avFuZ/F2afJzZvJzZ/N0aPN0bvN3bPR0ae5yZ/R3be93bfR1au9zafBxbPVzavV0a/F0a/ZyafFwaPKZm3nTAAAAQ3RSTlMAAQIEBQYGBwgICQoKCgsLDQ0PDw8PERESExMUFBQWFxgYGhoaGxsdHSAgIiIiIyQlJygqLCwtLi8vLzAzNDU3Nzg7h9vbHgAAA9RJREFUeNrt3ftS2kAUx/Fc1gSyWsErtuJdRDQiiteolb7/QzUoTm07k4AzObuu3/MCez45yWbzT36eZ6b8erO1e1B97baadd+zocJWmg0HaXe/+uqmg2GWtkLT5Lle1m9LdhG2+1lvzuiUO1knEF81yFc1N+35m15kZOGodz1vyLx+v2Lseq/erxtZd/NuweCTtfiwaWLOD5FnsqI7+VnP3y8afnEs3Es/1+H1qvETwuq18B7e6VlwLup1ZM8kWWQBOsrmHL7GVtxvYRZYgQ4ywae61ffsqH5Lbq20bQm6ncp9P2ehJegwE/u+rl95ttSwLrVSc2ANetAU28dSa9Cp2E623bUG3d2VWmn/wBq0XCugQYMGLdVKoOJaoiuok1NdXSW1WAUfRPtRUllflaJf5ZE/O9pXVbZUPTov5c+IDqvtRwStdTgLutoxy6GnGfYb2o+1I2gd+1OiqzfLocvVE7TSDqG1mgodaqfQZbvZC9rXjqG1X45WzqFVKVpk0LLo4lGP0ZGD6KgMnTiITkrQgXYQrYNitHISrYrRsZPouBhdcxJdK0YnTqKTYrR2Eq1BgwYNGjRo0KBBgwYNGjRo0KBBgwYNGjRo0KBBgwYNGjRo0KBBgwYNGjRo0KBBgwYNGjRo0KBBgwYNGjRo0KBBgwYNGjRo0KBBgwYNGjRoh9DH59ag86ACoSYOL61B55EUQk1s3VqDzsNHhJpYe7QGncfMSHUxaliCHgcKSXVxeWQJehwdJdXF4dAS9DgkTKqLxuibFeiXODixNi7OrEC/BP+JtbE0WrYA/RrxKNfH2YUF6NegSbk+Gk87xtErN6EsWm88fzeMXpwE9EruLns/l42io4dJFLPo2/Po1w+D6IW7t9Bt2SPx3vOOMfS7eHVZtN54ulg2go56138Ct4XRunE2Ovsmjg46WeddUoUWr6WL0fCoIYgO2/2s91fstDZQjcPL0ePt5flpdXUwqW46uMrS1j95JNpQrW0dHp9UV/uT2m416/8HVGg3qzhpBjRo0KBBgwYNGjRo0KBBgwYNGjRo0KBBgwYNGjRo0KBBgwYNGjRo0KBBgwYNGjRo0KBBgwYNGjRo0KBBgwYNGjRo0KBBgwYNGjRo0KBBgwYNGjRo0KC/FDpx0pwUo2tOomvF6NhJdFyMVk6iVTE6cBIdeF9vJyvZx/I/AzuIjsrQvoNovwzt4FamSs0Ojrp80PmvoB0zh940pb7azf1yg7t0LIt978uppzbnalfucDW92ZndLPRmKweGPduYJ+zoM5/Dk+gD5NdvLhXXPp88qcUqmEH5G5JZRs6cuxwIAAAAAElFTkSuQmCC");
        }

        @media (max-width: 575.98px) {
            .auth-wrapper.auth-basic .auth-inner:before {
                display: none;
            }
        }

        .auth-wrapper.auth-basic .auth-inner:after {
            width: 272px;
            height: 272px;
            content: ' ';
            position: absolute;
            bottom: -55px;
            right: -75px;
            background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAARAAAAEQCAMAAABP1NsnAAAAAXNSR0IArs4c6QAAAERlWElmTU0AKgAAAAgAAYdpAAQAAAABAAAAGgAAAAAAA6ABAAMAAAABAAEAAKACAAQAAAABAAABEKADAAQAAAABAAABEAAAAAAQWxS2AAAAwFBMVEUAAAD///+AgICAgP9VVaqqVf+qqv+AgL+AgP9mZsxmZv+ZZv+AgNWAgP9tbdttbf+Sbf+AYN+AgN+AgP9xceNmZv+AZuaAZv90dOh0dP9qav+AauqAav+AgP92dv9tbf+Abe2Abf93Zu53d+6AcO94afCAcfF5a+R5a/JzZuaAZvKAc/J5bed5bfOAaPN6b/R1auqAavR6ZvV6cPV2bOuAbPV7aPZ2be2AbfZ7au17avZ3Zu53b+57a+97a/d4aO9J6CoeAAAAQHRSTlMAAQICAwMDBAQFBQUGBgcHBwgICAkKCgoLCwwMDAwNDg4ODw8QERITExQUFBUVFhcYGBkZGhobHBwdHR4eHx8gJ5uMWwAAA/FJREFUeNrt2G1XEkEYxvHZNk2xHGzdbKFl0cTwgdSkCKzu7/+t4pw6sAjtjIueE/f8r3fMO35nZnbuy5gVGcvfzJe0rnTfGI+MggGJRUZnbpPIhJKt88nU53JnFULvyISY6KAv8vPj0vr2rYwiE2Z2B9J+uNYcyyQxwWZvaeGH3G4bMjsvI/kcwTC/V+7kLoahlITzQojP3ZFgsJCh7IJQzpX0QFj4uMiY18eDMZ9bZCF9OQahnK6cm/Y7js0sh/LF3Auv1PlQd3MxbdXYIQspV44EEEAAAWTNDAYYkKdJbNMsLzYueZbaZ2iM46RVbHBaiZ9Js+nHEdli42N9XuSen5hGp1CQTuOJQDRsD99N4gMSpYWapNH6IJo83CIeILZQFesEaber79NCWRoukOpNEnW0gXQqD81w6ACxhbrYde7VuFCYeA2QRCNIsgZISyNIqz6IyhPjOjNVIFYniK3dmKU6QdLaJUimEySrDZLrBMlrgxRKU7sxCw/EMe0CAggggADySJCqxixIkKpNEh6IozELD8RxjQACCCCAAPJIkKrGLEgQXqqAAEJjxrQLCCCAAEJjRmNGY8a0CwgggABCYwYIfQgggNCYMe0CAggggNCY0ZjRmDHtAgIIIIAAQmNGHwIIIDRmTLuAAAIIIDRmNGY0Zky7gAACCCCA0JjRhwACCI0Z0y4ggAACCI0ZjRmNGdMuIIAAAgggNGb0IYAAQmPGtAsIIIAAQmNGY0ZjxrQLCCCAAAIIjRl9CCCA0Jgx7QICCCCA0JjRmNGYMe0CAggggABCY0YfAgggNGZMu4AAAgggNGY0ZjRmTLuAAAIIIIDQmNGHAAIIjRnTLiCAAAIIjRmNGY0ZIEy7gAACCCA0ZvQhgABCY8a0CwgggABCY0ZjBgiNGdMuIIAAAgiN2f/Sh+Q6PfLaIJlOkKw2SKoTJK3dmFmdILb2tBvrBIlrg5iWRo+WqQ+SaARJ1gCJAzsxThCN16p1vNurGjNjoo42j07kAHFskoY2kEbl33U0ZgoPjXW+Rl0gkarnahqtDaJKxMPDDWIiNafGenh4gExvVhXfmk7Da6L1AVGxSby2h6MxK79Zk42ea1pJbJ48sU2zDezQ8iy1z6BBwoyjMQsvXp8YQAAhgADilRfyy+wf8WqZZUfGZihvgZiB3FybC+kCUU5XLkAo50C+gbBQdUzkAIVyejIAYfFTI1solHP2HgNCnHn5AYNy4jvpoVB6fVzL91cwzLJ9Lfd7S0jhehxO5H5/yePr1W6gHonI7fJ5ORSR/n6Q2yQanq763zuXU5LJZRKiyD/W9/pjkdPZz0/yJ8fqVyry+qQZDMjJKoDfy8bRVhHhQTwAAAAASUVORK5CYII=");
            z-index: -1;
        }

        @media (max-width: 575.98px) {
            .auth-wrapper.auth-basic .auth-inner:after {
                display: none;
            }
        }

        .auth-wrapper.auth-cover {
            align-items: flex-start;
        }

        .auth-wrapper.auth-cover .auth-inner {
            height: 100vh;
            overflow-y: auto;
            height: calc(var(--vh, 1vh) * 100);
        }

        .auth-wrapper.auth-cover .brand-logo {
            position: absolute;
            top: 2rem;
            left: 2rem;
            margin: 0;
            z-index: 1;
            justify-content: unset;
        }

        .auth-wrapper.auth-basic .auth-inner {
            max-width: 400px;
        }

        .auth-wrapper .brand-logo {
            display: flex;
            justify-content: center;
            margin: 1rem 0 2rem 0;
        }

        .auth-wrapper .brand-logo .brand-text {
            font-weight: 600;
        }

        .auth-wrapper .auth-footer-btn .btn {
            padding: 0.6rem !important;
        }

        .auth-wrapper .auth-footer-btn .btn:not(:last-child) {
            margin-right: 1rem;
        }

        .auth-wrapper .auth-footer-btn .btn:focus {
            box-shadow: none;
        }

        .auth-wrapper .auth-input {
            max-width: 50px;
            padding-right: 0.571rem;
            padding-left: 0.571rem;
        }

        .auth-wrapper .custom-options-checkable .plan-price .pricing-value {
            font-size: 3rem;
        }

        .auth-wrapper .custom-options-checkable .plan-price sup {
            top: -1.5rem;
            left: 0.2rem;
        }

        .auth-wrapper .custom-options-checkable .plan-price sub {
            bottom: 0;
            right: 0.14rem;
        }

        @media (min-width: 1200px) {
            .auth-wrapper.auth-cover .auth-card {
                width: 400px;
            }
        }

        @media (max-width: 575.98px) {
            .auth-wrapper.auth-cover .brand-logo {
                left: 1.5rem;
                padding-left: 0;
            }
        }

        .auth-wrapper .auth-bg {
            background-color: #fff;
        }

        .dark-layout .auth-wrapper .auth-bg {
            background-color: #283046;
        }

        @media (max-height: 825px) and (max-width: 991.98px) {
            .dark-layout .auth-wrapper .auth-inner {
                background-color: #283046;
            }

            .auth-wrapper .auth-bg {
                padding-top: 3rem;
                margin: auto 0;
            }

            .auth-wrapper .auth-inner {
                background-color: #fff;
            }

            .auth-wrapper.auth-cover .auth-inner {
                padding-bottom: 1rem;
                display: flex;
                flex-direction: column;
                flex-wrap: nowrap;
            }

            .auth-wrapper.auth-cover .brand-logo {
                position: relative;
                left: 0;
                padding-left: 1.5rem;
            }
        }
    </style>

    {{-- Include core + vendor Styles --}}
    @include('panels/styles')

    {{-- Include core + vendor Styles --}}
    @include('panels/styles')
</head>



<body
    class="vertical-layout vertical-menu-modern {{  config('template.bodyClass') }} {{(config('template.theme') === 'dark') ? 'dark-layout' : ''}} {{ config('template.blankPageClass')  }} blank-page"
    data-menu="vertical-menu-modern" data-col="blank-page" data-framework="laravel" data-asset-path="{{ asset('/')}}">

    <!-- BEGIN: Content-->
    <div class="app-content content {{  config('template.pageClass')  }}">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <div class="auth-wrapper auth-cover">
                    <div class="auth-inner row m-0">
                        <!-- Brand logo-->
                        <a class="brand-logo" href="">
                            <h2 class="brand-text text-primary ms-1 text-white">Plantilla Inicial</h2>
                        </a>
                        <!-- /Brand logo-->
                        <!-- Left Text-->
                        <div class="d-none d-lg-flex col-lg-8 align-items-center p-5"
                            style="background: #093568!important; border-right: 5px solid #f60077;">
                            <div class="w-100 d-lg-flex align-items-center justify-content-center px-5"><img
                                    class="img-fluid"
                                    src="https://citas.irapuato.gob.mx/assets/img/irapuato_logobco.png" width="60%"
                                    alt="Logo Administración" /></div>
                        </div>
                        <!-- /Left Text-->
                        <!-- Login-->
                        <div class="d-flex col-lg-4 align-items-center auth-bg px-2 p-lg-5">
                            <div class="col-12 col-sm-8 col-md-6 col-lg-12 px-xl-2 mx-auto text-center">
                                <img src="http://serverdesarrollo.irapuato.gob.mx/repositorio/assets/image-resources/2021/a_paso_firme.png"
                                    width="50%" alt="Logo Administración" />
                                <h2 class="card-title fw-bold mb-1">Bienvenido de nuevo! 👋</h2>
                                <p class="card-text mb-2">Por favor inicie sesión con sus credenciales de acceso usando
                                    correo electrónico y contraseña</p>
                                <form class="needs-validation" novalidate id="frmLogin">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <div class="mb-1" style="text-align: left;">
                                        <label class="form-label" for="login-email">Correo electrónico</label>
                                        <input required class="form-control" id="login-email" type="text"
                                            name="login-email" placeholder="Ingresa el correo electrónico"
                                            aria-describedby="login-email" autofocus="" tabindex="1" />
                                        <div class="invalid-feedback">Favor de ingresar el campo correo electrónico
                                        </div>
                                    </div>
                                    <div class="mb-1" style="text-align: left;">
                                        <div class="d-flex justify-content-between">
                                            <label class="form-label" for="login-password">Contraseña</label><a
                                                href="auth-forgot-password-cover.html"><small>¿Recuperar
                                                    contraseña?</small></a>
                                        </div>
                                        <div class="input-group input-group-merge form-password-toggle">
                                            <input required class="form-control" id="login-password" type="password"
                                                name="login-password" placeholder="Ingresa la contraseña·"
                                                aria-describedby="login-password" tabindex="2" /><span
                                                class="input-group-text cursor-pointer"><i
                                                    data-feather="eye"></i></span>
                                            <div class="invalid-feedback">Favor de ingresar el campo contraseña.</div>
                                        </div>
                                    </div>
                                    <div id="alertPlaceholder"></div>
                                    <button type="submit"
                                        class="btn btn-primary waves-effect waves-float waves-light w-100">Iniciar
                                        Sesión</button>
                                </form>
                            </div>
                        </div>
                        <!-- /Login-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End: Content-->

    {{-- include default scripts --}}
    @include('panels/scripts')
    <!-- scripts to login -->
    <script src="{{ asset(mix('js/scripts/login.js')) }}"></script>
    <!-- END: Theme JS-->
    <script type="text/javascript">
        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })


        var form = document.getElementById('frmLogin');
        form.addEventListener('submit', function (event) {
            
            if (form.checkValidity() == false) {
                form.classList.add('invalid');
            }

           
            event.preventDefault();

            axios.post('{{route('suu.login')}}', {
                            email: document.getElementById('login-email').value,
                            password: document.getElementById('login-password').value,
                            _token: '{{ csrf_token() }}'
            })
            .then(function(res) {
                if (res.status == 200 && !res.data.isError) {
                    console.log(res);
                    window.location = res.data.redirectUrl;
                } else {
                    alertDiv(res.data.message, 'warning');
                }

            })
            .catch(function(err) {
                        alertDiv(err, 'danger');
            })
            .then(function() {});
        });
    </script>
</body>
</html>