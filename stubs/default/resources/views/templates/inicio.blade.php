@extends('layouts/contentLayoutMaster')

@section('content')
<!-- Card Advance -->

<div class="row match-height">
    <div class="col-12">
        <div class="card card-congratulations">
            <div class="card-body text-center">
                <img src="{{asset('assets/img/administracion/logo_irap_bco_solo.png')}}" style="opacity: 0.5;" class="congratulations-img-left" alt="card-img-left" />
                <img src="{{asset('assets/img/iconos/brujula_derecha.png')}}" style="opacity: 0.5;" class="congratulations-img-right" alt="card-img-right" />
                <br>
                <br>
                <br>
                <div class="text-center">
                    <h1 class="mb-1 text-white">¡Bienvenido!</h1>
                    <p class="card-text m-auto w-75">
                        {{ env('APP_NAME') }}
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12">
        <div class="card card-profile">
            <img src="{{asset('assets/img/administracion/banner_footerlogo.png')}}" style="background-color: #093568; padding-bottom:20px;" class="img-fluid card-img-top" alt="Profile Cover Photo" />
            <div class="card-body">
                <div class="profile-image-wrapper">
                    <div class="profile-image">
                        <div class="avatar">
                            <img src="{{asset('assets/img/iconos/user1.png')}}" style="background-color: #63a4ff;" alt="Profile Picture" />
                        </div>
                    </div>
                </div>
                <h3>John Doe</h3>
                <h6 class="text-muted">Irapuato</h6>
                <span class="badge badge-light-primary profile-badge">{{ date('Y') }}</span>
                <hr class="mb-2" />
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="text-muted fw-bolder">Asignados</h6>
                        <h3 class="mb-0">156</h3>
                    </div>
                    <div>
                        <h6 class="text-muted fw-bolder">Atendidos</h6>
                        <h3 class="mb-0">23</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection