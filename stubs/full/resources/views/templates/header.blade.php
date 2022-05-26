@isset($pageConfigs)
{!! Helper::updatePageConfig($pageConfigs) !!}
@endisset

<!DOCTYPE html>
@php
$configData = Helper::applClasses();
$configData['navbarColor'] = 'bg-primary';
@endphp

<html class="loading {{ ($configData['theme'] === 'light') ? '' : $configData['layoutTheme']}}" lang="@if(session()->has('locale')){{session()->get('locale')}}@else{{$configData['defaultLanguage']}}@endif" data-textdirection="{{ env('MIX_CONTENT_DIRECTION') === 'rtl' ? 'rtl' : 'ltr' }}" @if($configData['theme'] === 'dark') data-layout="dark-layout" @endif>

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
        <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
        <meta name="author" content="PIXINVENT">
        <title>{{ env('APP_NAME') }}</title>
        <link rel="apple-touch-icon" href="{{asset('images/ico/apple-icon-120.png')}}">
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('images/logo/favicon.ico')}}">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

        {{-- Include core + vendor Styles --}}
        @include('panels/styles')

    </head>
    <!-- END: Head-->

    <body class="horizontal-layout horizontal-menu {{$configData['contentLayout']}} {{$configData['horizontalMenuType']}} {{ $configData['blankPageClass'] }} {{ $configData['bodyClass'] }} {{ $configData['footerType'] }}" data-open="hover" data-menu="horizontal-menu" data-col="{{$configData['showMenu'] ? $configData['contentLayout'] : '1-column' }}" data-framework="laravel" data-asset-path="{{ asset('/')}}">
        <nav class="header-navbar navbar-expand-lg navbar navbar-fixed align-items-center navbar-shadow navbar-brand-center {{ $configData['navbarColor'] }}" data-nav="brand-center">
            <div class="navbar-header d-xl-block d-none">
                <ul class="nav navbar-nav">
                    <li class="nav-item">
                        <a class="navbar-brand" href="{{ url('/') }}">
                            <span class="brand-logo">
                                <img src="{{ url('assets/img/administracion/logo_2021_mix_bco.svg') }}" style="padding-left: 10px;" height="45" alt=""/>
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="navbar-container d-flex content">
                <div class="bookmark-wrapper d-flex align-items-center">
                    <ul class="nav navbar-nav d-xl-none">
                        <li class="nav-item"><a class="nav-link menu-toggle" href="javascript:void(0);">
                            <i class="ficon" data-feather="menu"></i></a>
                        </li>
                    </ul>
                </div>
                <ul class="nav navbar-nav align-items-center ms-auto">
                    <li class="nav-item dropdown dropdown-notification me-25">
                        <a class="nav-link" href="javascript:void(0);" data-bs-toggle="dropdown">
                            <i class="ficon" data-feather="bell"></i>
                            <span class="badge rounded-pill bg-danger badge-up">5</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-media dropdown-menu-end">
                            <li class="dropdown-menu-header">
                                <div class="dropdown-header d-flex">
                                    <h4 class="notification-title mb-0 me-auto">Notifications</h4>
                                    <div class="badge rounded-pill badge-light-primary">6 New</div>
                                </div>
                            </li>
                            <li class="scrollable-container media-list">
                                <a class="d-flex" href="javascript:void(0)">
                                    <div class="list-item d-flex align-items-start">
                                        <div class="me-1">
                                            <div class="avatar">
                                                <img src="{{ asset('images/portrait/small/avatar-s-15.jpg') }}" alt="avatar" width="32" height="32">
                                            </div>
                                        </div>
                                        <div class="list-item-body flex-grow-1">
                                            <p class="media-heading"><span class="fw-bolder">Congratulation Sam 🎉</span>winner!</p>
                                            <small class="notification-text"> Won the monthly best seller badge.</small>
                                        </div>
                                    </div>
                                </a>
                                <a class="d-flex" href="javascript:void(0)">
                                    <div class="list-item d-flex align-items-start">
                                        <div class="me-1">
                                            <div class="avatar">
                                                <img src="{{ asset('images/portrait/small/avatar-s-3.jpg') }}" alt="avatar" width="32" height="32">
                                            </div>
                                        </div>
                                        <div class="list-item-body flex-grow-1">
                                            <p class="media-heading"><span class="fw-bolder">New message</span>&nbsp;received</p>
                                            <small class="notification-text"> You have 10 unread messages</small>
                                        </div>
                                    </div>
                                </a>
                                <a class="d-flex" href="javascript:void(0)">
                                    <div class="list-item d-flex align-items-start">
                                        <div class="me-1">
                                            <div class="avatar bg-light-danger">
                                                <div class="avatar-content">MD</div>
                                            </div>
                                        </div>
                                        <div class="list-item-body flex-grow-1">
                                            <p class="media-heading"><span class="fw-bolder">Revised Order 👋</span>&nbsp;checkout</p>
                                            <small class="notification-text"> MD Inc. order updated</small>
                                        </div>
                                    </div>
                                </a>
                                <div class="list-item d-flex align-items-center">
                                    <h6 class="fw-bolder me-auto mb-0">System Notifications</h6>
                                    <div class="form-check form-check-primary form-switch">
                                        <input class="form-check-input" id="systemNotification" type="checkbox" checked="">
                                        <label class="form-check-label" for="systemNotification"></label>
                                    </div>
                                </div>
                                <a class="d-flex" href="javascript:void(0)">
                                    <div class="list-item d-flex align-items-start">
                                        <div class="me-1">
                                            <div class="avatar bg-light-danger">
                                                <div class="avatar-content"><i class="avatar-icon" data-feather="x"></i></div>
                                            </div>
                                        </div>
                                        <div class="list-item-body flex-grow-1">
                                            <p class="media-heading"><span class="fw-bolder">Server down</span>&nbsp;registered</p>
                                            <small class="notification-text"> USA Server is down due to hight CPU usage</small>
                                        </div>
                                    </div>
                                </a>
                                <a class="d-flex" href="javascript:void(0)">
                                    <div class="list-item d-flex align-items-start">
                                        <div class="me-1">
                                            <div class="avatar bg-light-success">
                                                <div class="avatar-content"><i class="avatar-icon" data-feather="check"></i></div>
                                            </div>
                                        </div>
                                        <div class="list-item-body flex-grow-1">
                                            <p class="media-heading"><span class="fw-bolder">Sales report</span>&nbsp;generated</p><small class="notification-text"> Last month sales report generated</small>
                                        </div>
                                    </div>
                                </a>
                                <a class="d-flex" href="javascript:void(0)">
                                    <div class="list-item d-flex align-items-start">
                                        <div class="me-1">
                                            <div class="avatar bg-light-warning">
                                                <div class="avatar-content"><i class="avatar-icon" data-feather="alert-triangle"></i></div>
                                            </div>
                                        </div>
                                        <div class="list-item-body flex-grow-1">
                                            <p class="media-heading"><span class="fw-bolder">High memory</span>&nbsp;usage</p><small class="notification-text"> BLR Server using high memory</small>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="dropdown-menu-footer">
                                <a class="btn btn-primary w-100" href="javascript:void(0)">Read all notifications</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown dropdown-user">
                        <a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="javascript:void(0);" data-bs-toggle="dropdown" aria-haspopup="true">
                            <div class="user-nav d-sm-flex d-none">
                                <span class="user-name fw-bolder">
                                    @if (Auth::check())
                                    {{ Auth::user()->name }}
                                    @else
                                    John Doe
                                    @endif
                                </span>
                                <span class="user-status">
                                    Admin
                                </span>
                            </div>
                            <span class="avatar">
                                <img class="round" src="{{ Auth::user() ? Auth::user()->profile_photo_url : asset('images/portrait/small/avatar-s-11.jpg') }}" alt="avatar" height="40" width="40">
                                <span class="avatar-status-online"></span>
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-user">
                            <a class="dropdown-item" href="#">
                                <i class="me-50" data-feather="settings"></i> Settings
                            </a>
                            <a class="dropdown-item nav-link-style">
                                <i class="me-50 ficon" data-feather="{{ $configData['theme'] === 'dark' ? 'sun' : 'moon' }}"></i> Tema
                            </a>

                            @if (!Auth::check())
                                <a class="dropdown-item" href="{{ route('auth-login-basic') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i class="me-50 text-danger" data-feather="power"></i> Salir
                                </a>
                                <form method="POST" id="logout-form" action="{{ route('auth-login-basic') }}">
                                    @csrf
                                </form>
                            @endif
                        </div>
                    </li>
                </ul>
            </div>
        </nav>