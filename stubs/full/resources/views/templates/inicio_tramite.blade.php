<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="csrf-token" content="90hMfOBfmQkS07yvgtkOWIE89QcWKN4gpZcSNi2l">
    <meta name="description"
        content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Inicio - {{ $title }}</title>
    <link rel="apple-touch-icon" href="images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="images/logo/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
        rel="stylesheet">


    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" href="{{ asset(mix('vendors/css/vendors.min.css')) }}">

    <link rel="stylesheet" href="{{ asset(mix('vendors/css/charts/apexcharts.css')) }}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" href="{{ asset(mix('css/core.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('css/base/themes/dark-layout.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('css/base/themes/bordered-layout.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('css/base/themes/semi-dark-layout.css')) }}">


    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" href="{{ asset(mix('css/base/core/menu/menu-types/vertical-menu.css')) }}">


    <link rel="stylesheet" href="{{ asset(mix('css/base/pages/app-chat-list.css')) }}">

    <!-- laravel style -->
    <link rel="stylesheet" href="{{ asset(mix('css/overrides.css')) }}">

    <!-- BEGIN: Custom CSS-->


    <link rel="stylesheet" href="{{ asset(mix('css/style.css')) }}">


</head>

<!-- BEGIN: Vendor CSS-->
<link rel="stylesheet" href="{{ asset(mix('vendors/css/vendors.min.css')) }}">

<!-- vendor css files -->
<link rel="stylesheet" href="{{ asset(mix('vendors/css/forms/wizard/bs-stepper.min.css')) }}">
<link rel="stylesheet" href="{{ asset(mix('vendors/css/forms/select/select2.min.css')) }}">
<!-- END: Vendor CSS-->

<!-- BEGIN: Theme CSS-->
<link rel="stylesheet" href="{{ asset(mix('css/core.css')) }}">
<link rel="stylesheet" href="{{ asset(mix('css/base/themes/dark-layout.css')) }}">
<link rel="stylesheet" href="{{ asset(mix('css/base/themes/bordered-layout.css')) }}">
<link rel="stylesheet" href="{{ asset(mix('css/base/themes/semi-dark-layout.css')) }}">


<!-- BEGIN: Page CSS-->
<link rel="stylesheet" href="{{ asset(mix('css/base/core/menu/menu-types/vertical-menu.css')) }}">


<!-- Page css files -->
<link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/form-validation.css')) }}">
<link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/form-wizard.css')) }}">

<!-- laravel style -->
<link rel="stylesheet" href="{{ asset(mix('css/overrides.css')) }}">

<!-- BEGIN: Custom CSS-->


<link rel="stylesheet" href="{{ asset(mix('css/style.css')) }}">

<div class="container-sm">
    <div class="row">
        <div class="col-md-9 ">
            <section id="knowledge-base-search" class="">
                <div class="row">
                    <div class="d-none d-sm-none d-md-block">
                        <div class="card card-profile">
                            <img style="width: 100%; height: 100px; object-fit: cover;"
                                src="https://www.colorhexa.com/093568.png" class="img-fluid card-img-top"
                                alt="Profile Cover Photo">
                            <div class="card-body">
                                <div class="profile-image-wrapper">
                                    <div class="profile-image">
                                        <div class="avatar">
                                            <img src="http://serverdesarrollo.irapuato.gob.mx/repositorio/assets/image-resources/2021/a_paso_firme.png"
                                                alt="Profile Picture">
                                        </div>
                                    </div>
                                </div>
                                <h3>Municipio de Irapuato</h3>
                                <h6 class="text-muted">Guanajuato</h6>
                                {{-- <span class="badge badge-light-primary profile-badge">Pro Level</span> --}}
                                <hr class="mb-2">
                                <div class="d-flex justify-content-between align-items-center">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" ">
                        <div class="card ">
                            <div class="card-header">
                                <h4 class="card-title">{{ $tramite }}</h4>
                            </div>
                            <div class="card-body">
                                <ul class="nav nav-pills nav-justified">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="home-tab-justified" data-bs-toggle="pill"
                                            href="#home-justified" aria-expanded="true">Descipcion</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="profile-tab-justified" data-bs-toggle="pill"
                                            href="#profile-justified" aria-expanded="false">Costos</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="about-tab-justified" data-bs-toggle="pill"
                                            href="#about-justified" aria-expanded="false">Canal de Atencion</a>
                                    </li>
                                    <li class="nav-item">
                                        <button type="button"
                                            class="btn btn-success waves-effect waves-float waves-light">Iniciar
                                            Tramite</button>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="home-justified"
                                        aria-labelledby="home-tab-justified" aria-expanded="true">
                                        <p>
                                            {{ $descripcion }}
                                        </p>
                                    </div>
                                    <div class="tab-pane" id="profile-justified" role="tabpanel"
                                        aria-labelledby="profile-tab-justified" aria-expanded="false">
                                        <p>
                                            {{ $costos }}
                                        </p>
                                    </div>
                                    <div class="tab-pane" id="about-justified" role="tabpanel"
                                        aria-labelledby="about-tab-justified" aria-expanded="false">
                                        <p>
                                            {{ $canal_de_atencion }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" ">
                        <div class="card ">
                            <div class="card-header">
                                <h4 class="card-title">Informacion</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        {{-- <thead>
                                            <tr>
                                                <th>Project</th>
                                                <th>Client</th>
                                            </tr>
                                        </thead> --}}
                                        <tbody>
                                            <tr>
                                                <td>
                                                    Clave Trámite:
                                                </td>
                                                <td>{{$clave_tramite}}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Dependencia o entidad responsable
                                                </td>
                                                <td>{{$dependencia}}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Categoría
                                                </td>
                                                <td>{{$categoria}}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Fecha actualización
                                                </td>
                                                <td>{{$fecha_actualizacion}}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
        </div>
        <div class=" sidebar-right col-md-3 col-12">
            <div class="sidebar">
                <div class="blog-sidebardd mb-2">
                    <!-- Recent Posts -->
                    <div class="col-12">
                        <div class="card  text-center"
                            style="text-align:center;background-image: url(https://www.irapuato.gob.mx/wp-content/uploads/2021/10/bg_072.jpg); background-size: cover; backdrop-filter: grayscale(90%); background-position-x: center; background-position-y: center;">
                            <div class="card-body">
                                <h2 class="text-primary text-white">¿Comó te ayudamos?</h2>
                                <p class="card-text mb-2">
                                </p>
                                <form class="kb-search-input">
                                    <div class="input-group input-group-merge">
                                        <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="14" height="14" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="feather feather-search">
                                                <circle cx="11" cy="11" r="8"></circle>
                                                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                            </svg></span>
                                        <input type="text" class="form-control" id="searchbar"
                                            placeholder="Buscar...">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="blog-recent-posts">
                        <h6 class="section-label mb-2">Tramites Relacionados</h6>
                        <div class="col-12">
                            @foreach ($tramites_relacionados as $tramite_relacionado)
                                <div class="d-flex mb-2">
                                    <a href="http://plantillalocal.irapuato.gob.mx/page/blog/detail" class="me-2">
                                        <img class="rounded"
                                            src="{{$tramite_relacionado['imagen']}}"
                                            alt="Recent Post Pic" width="100" height="70">
                                    </a>
                                    <div class="blog-info">
                                        <h6 class="blog-recent-post-title">
                                            <a href="http://plantillalocal.irapuato.gob.mx/page/blog/detail"
                                                class="text-body-heading">{{$tramite_relacionado['descripcion']}} </a>
                                        </h6>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <!--/ Recent Posts -->

                    <!-- Categories -->
                    <div class="blog-categories mt-3">
                        <h6 class="section-label">Tipo de Tramites</h6>
                        <div class="mt-1">
                            @foreach ($categorias as $categoria)
                            <div class="d-flex justify-content-start align-items-center mb-75">
                                <a href="#" class="me-75">
                                    <div class="avatar bg-light-info rounded">
                                        <div class="avatar-content">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-hash avatar-icon font-medium-1">
                                                <line x1="4" y1="9" x2="20" y2="9"></line>
                                                <line x1="4" y1="15" x2="20" y2="15"></line>
                                                <line x1="10" y1="3" x2="8" y2="21"></line>
                                                <line x1="16" y1="3" x2="14" y2="21"></line>
                                            </svg>
                                        </div>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="blog-category-title text-body">{{$categoria}}</div>
                                </a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <!--/ Categories -->
                </div>
            </div>
        </div>
    </div>
    {{-- faq --}}
    <div class="row">
        <div class="row mb-2">
            <h1 class="col-md-12">Preguntas Frecuentes</h1>
            <div class="col-lg-3 col-md-4 col-sm-12">
                <div class="faq-navigation d-flex justify-content-between flex-column mb-2 mb-md-0">
                    <!-- pill tabs navigation -->
                    <ul class="nav nav-pills nav-left flex-column" role="tablist">
                        <!-- payment -->
                        <li class="nav-item">
                            <a class="nav-link" id="payment" data-bs-toggle="pill" href="#faq-payment"
                                aria-expanded="true" role="tab" aria-selected="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-credit-card font-medium-3 me-1">
                                    <rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect>
                                    <line x1="1" y1="10" x2="23" y2="10"></line>
                                </svg>
                                <span class="fw-bold">Medios de Pago</span>
                            </a>
                        </li>

                        <!-- delivery -->
                        <li class="nav-item">
                            <a class="nav-link" id="delivery" data-bs-toggle="pill" href="#faq-delivery"
                                aria-expanded="false" role="tab" aria-selected="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-shopping-bag font-medium-3 me-1">
                                    <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                                    <line x1="3" y1="6" x2="21" y2="6"></line>
                                    <path d="M16 10a4 4 0 0 1-8 0"></path>
                                </svg>
                                <span class="fw-bold">Documento</span>
                            </a>
                        </li>

                        <!-- cancellation and return -->
                        <li class="nav-item">
                            <a class="nav-link" id="cancellation-return" data-bs-toggle="pill"
                                href="#faq-cancellation-return" aria-expanded="false" role="tab" aria-selected="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-refresh-cw font-medium-3 me-1">
                                    <polyline points="23 4 23 10 17 10"></polyline>
                                    <polyline points="1 20 1 14 7 14"></polyline>
                                    <path d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15">
                                    </path>
                                </svg>
                                <span class="fw-bold">Rechazo de tramite</span>
                            </a>
                        </li>

                        <!-- my order -->
                        <li class="nav-item">
                            <a class="nav-link" id="my-order" data-bs-toggle="pill" href="#faq-my-order"
                                aria-expanded="false" role="tab" aria-selected="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-package font-medium-3 me-1">
                                    <line x1="16.5" y1="9.4" x2="7.5" y2="4.21"></line>
                                    <path
                                        d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z">
                                    </path>
                                    <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                                    <line x1="12" y1="22.08" x2="12" y2="12"></line>
                                </svg>
                                <span class="fw-bold">Tramites en paquetes</span>
                            </a>
                        </li>

                        <!-- product and services-->
                        <li class="nav-item">
                            <a class="nav-link active" id="product-services" data-bs-toggle="pill"
                                href="#faq-product-services" aria-expanded="false" role="tab" aria-selected="true">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-settings font-medium-3 me-1">
                                    <circle cx="12" cy="12" r="3"></circle>
                                    <path
                                        d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z">
                                    </path>
                                </svg>
                                <span class="fw-bold">Tramites y/o servicio</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " id="fundamentos-legales" data-bs-toggle="pill"
                                href="#faq-fundamentos-legales" aria-expanded="false" role="tab" aria-selected="true">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-settings font-medium-3 me-1">
                                    <circle cx="12" cy="12" r="3"></circle>
                                    <path
                                        d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z">
                                    </path>
                                </svg>
                                <span class="fw-bold">Fundamentos Legales</span>
                            </a>
                        </li>

                    </ul>

                    <!-- FAQ image -->
                    <img src="http://plantillalocal.irapuato.gob.mx/images/illustration/faq-illustrations.svg"
                        class="img-fluid d-none d-md-block" alt="demand img">
                </div>
            </div>

            <div class="col-lg-9 col-md-8 col-sm-12">
                <!-- pill tabs tab content -->
                <div class="tab-content">
                    <!-- payment panel -->
                    <div role="tabpanel" class="tab-pane" id="faq-payment" aria-labelledby="payment"
                        aria-expanded="true">
                        <!-- icon and header -->
                        <div class="d-flex align-items-center">
                            <div class="avatar avatar-tag bg-light-primary me-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-credit-card font-medium-4">
                                    <rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect>
                                    <line x1="1" y1="10" x2="23" y2="10"></line>
                                </svg>
                            </div>
                            <div>
                                <h4 class="mb-0">Medios de Pago</h4>
                                {{-- <span>Which license do I need?</span> --}}
                            </div>
                        </div>

                        <!-- frequent answer and question  collapse  -->
                        <div class="accordion accordion-margin mt-2" id="faq-payment-qna">
                            <div class="card accordion-item">
                                <h2 class="accordion-header" id="paymentOne">
                                    <button class="accordion-button collapsed" data-bs-toggle="collapse" role="button"
                                        data-bs-target="#faq-payment-one" aria-expanded="false"
                                        aria-controls="faq-payment-one">
                                        ¿Puedo Pagar con Tarjeta de credito?
                                    </button>
                                </h2>

                                <div id="faq-payment-one" class="accordion-collapse collapse"
                                    aria-labelledby="paymentOne" data-bs-parent="#faq-payment-qna" style="">
                                    <div class="accordion-body">
                                        Pastry pudding cookie toffee bonbon jujubes jujubes powder topping. Jelly beans
                                        gummi bears sweet roll
                                        bonbon muffin liquorice. Wafer lollipop sesame snaps. Brownie macaroon cookie
                                        muffin cupcake candy
                                        caramels tiramisu. Oat cake chocolate cake sweet jelly-o brownie biscuit
                                        marzipan. Jujubes donut
                                        marzipan chocolate bar. Jujubes sugar plum jelly beans tiramisu icing
                                        cheesecake.
                                    </div>
                                </div>
                            </div>
                            <div class="card accordion-item">
                                <h2 class="accordion-header" id="paymentTwo">
                                    <button class="accordion-button collapsed" data-bs-toggle="collapse" role="button"
                                        data-bs-target="#faq-payment-two" aria-expanded="false"
                                        aria-controls="faq-payment-two">
                                        ¿Donde puedo pagar?
                                    </button>
                                </h2>
                                <div id="faq-payment-two" class="collapse" aria-labelledby="paymentTwo"
                                    data-bs-parent="#faq-payment-qna" style="">
                                    <div class="accordion-body">
                                        Sweet pie candy jelly. Sesame snaps biscuit sugar plum. Sweet roll topping
                                        fruitcake. Caramels
                                        liquorice biscuit ice cream fruitcake cotton candy tart. Donut caramels
                                        gingerbread jelly-o
                                        gingerbread pudding. Gummi bears pastry marshmallow candy canes pie. Pie apple
                                        pie carrot cake.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- delivery panel -->
                    <div class="tab-pane" id="faq-delivery" role="tabpanel" aria-labelledby="delivery"
                        aria-expanded="false">
                        <!-- icon and header -->
                        <div class="d-flex align-items-center">
                            <div class="avatar avatar-tag bg-light-primary me-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-shopping-bag font-medium-4">
                                    <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                                    <line x1="3" y1="6" x2="21" y2="6"></line>
                                    <path d="M16 10a4 4 0 0 1-8 0"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="mb-0">Documentos</h4>
                                <span>¿Qué necesito?</span>
                            </div>
                        </div>

                        <!-- frequent answer and question  collapse  -->
                        <div class="accordion accordion-margin mt-2" id="faq-delivery-qna">
                            <div class="card accordion-item">
                                <h2 class="accordion-header" id="deliveryOne">
                                    <button class="accordion-button collapsed" data-bs-toggle="collapse" role="button"
                                        data-bs-target="#faq-delivery-one" aria-expanded="false"
                                        aria-controls="faq-delivery-one">
                                        Requisitos
                                    </button>
                                </h2>

                                <div id="faq-delivery-one" class="collapse accordion-collapse"
                                    aria-labelledby="deliveryOne" data-bs-parent="#faq-delivery-qna">
                                    <div class="accordion-body">
                                        requisito 1, requisito 2, requisito 3, requisito 4, requisito 5, requisito 6
                                    </div>
                                </div>
                            </div>
                            <div class="card accordion-item">
                                <h2 class="accordion-header" id="deliveryTwo">
                                    <button class="accordion-button collapsed" data-bs-toggle="collapse" role="button"
                                        data-bs-target="#faq-delivery-two" aria-expanded="false"
                                        aria-controls="faq-delivery-two">
                                        Vigencia de documentos
                                    </button>
                                </h2>
                                <div id="faq-delivery-two" class="collapse accordion-collapse"
                                    aria-labelledby="deliveryTwo" data-bs-parent="#faq-delivery-qna">
                                    <div class="accordion-body">
                                        Sweet pie candy jelly. Sesame snaps biscuit sugar plum. Sweet roll topping
                                        fruitcake. Caramels
                                        liquorice biscuit ice cream fruitcake cotton candy tart. Donut caramels
                                        gingerbread jelly-o
                                        gingerbread pudding. Gummi bears pastry marshmallow candy canes pie. Pie apple
                                        pie carrot cake.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- cancellation return  -->
                    <div class="tab-pane" id="faq-cancellation-return" role="tabpanel"
                        aria-labelledby="cancellation-return" aria-expanded="false">
                        <!-- icon and header -->
                        <div class="d-flex align-items-center">
                            <div class="avatar avatar-tag bg-light-primary me-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-refresh-cw font-medium-4">
                                    <polyline points="23 4 23 10 17 10"></polyline>
                                    <polyline points="1 20 1 14 7 14"></polyline>
                                    <path d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="mb-0">Rechazo de tramite</h4>
                                {{-- <span>Which license do I need?</span> --}}
                            </div>
                        </div>

                        <!-- frequent answer and question  collapse  -->
                        <div class="accordion accordion-margin mt-2" id="faq-cancellation-qna">
                            <div class="card accordion-item">
                                <h2 class="accordion-header" id="cancellationOne">
                                    <button class="accordion-button collapsed" data-bs-toggle="collapse" role="button"
                                        data-bs-target="#faq-cancellation-one" aria-expanded="false"
                                        aria-controls="faq-cancellation-one">
                                        ¿Qué hago si mi tramite no es aceptado?
                                    </button>
                                </h2>

                                <div id="faq-cancellation-one" class="collapse" aria-labelledby="cancellationOne"
                                    data-bs-parent="#faq-cancellation-qna">
                                    <div class="accordion-body">
                                        Pastry pudding cookie toffee bonbon jujubes jujubes powder topping. Jelly beans
                                        gummi bears sweet roll
                                        bonbon muffin liquorice. Wafer lollipop sesame snaps. Brownie macaroon cookie
                                        muffin cupcake candy
                                        caramels tiramisu. Oat cake chocolate cake sweet jelly-o brownie biscuit
                                        marzipan. Jujubes donut
                                        marzipan chocolate bar. Jujubes sugar plum jelly beans tiramisu icing
                                        cheesecake.
                                    </div>
                                </div>
                            </div>
                            <div class="card accordion-item">
                                <h2 class="accordion-header" id="cancellationTwo">
                                    <button class="accordion-button collapsed" data-bs-toggle="collapse" role="button"
                                        data-bs-target="#faq-cancellation-two" aria-expanded="false"
                                        aria-controls="faq-cancellation-two">
                                        ¿Cuanto tiempo tardan en aceptar mi tramite?
                                    </button>
                                </h2>
                                <div id="faq-cancellation-two" class="collapse" aria-labelledby="cancellationTwo"
                                    data-bs-parent="#faq-cancellation-qna">
                                    <div class="accordion-body">
                                        Sweet pie candy jelly. Sesame snaps biscuit sugar plum. Sweet roll topping
                                        fruitcake. Caramels
                                        liquorice biscuit ice cream fruitcake cotton candy tart. Donut caramels
                                        gingerbread jelly-o
                                        gingerbread pudding. Gummi bears pastry marshmallow candy canes pie. Pie apple
                                        pie carrot cake.
                                    </div>
                                </div>
                            </div>
                            <div class="card accordion-item">
                                <h2 class="accordion-header" id="cancellationThree">
                                    <button class="accordion-button collapsed" data-bs-toggle="collapse" role="button"
                                        data-bs-target="#faq-cancellation-three" aria-expanded="false"
                                        aria-controls="faq-cancellation-three">
                                        ¿Puedo cancelar mi tramite?
                                    </button>
                                </h2>
                                <div id="faq-cancellation-three" class="collapse"
                                    aria-labelledby="cancellationThree" data-bs-parent="#faq-cancellation-qna">
                                    <div class="accordion-body">
                                        Tart gummies dragée lollipop fruitcake pastry oat cake. Cookie jelly jelly
                                        macaroon icing jelly beans
                                        soufflé cake sweet. Macaroon sesame snaps cheesecake tart cake sugar plum.
                                        Dessert jelly-o sweet
                                        muffin chocolate candy pie tootsie roll marzipan. Carrot cake marshmallow
                                        pastry. Bonbon biscuit
                                        pastry topping toffee dessert gummies. Topping apple pie pie croissant cotton
                                        candy dessert tiramisu.
                                    </div>
                                </div>
                            </div>
                            <div class="card accordion-item">
                                <h2 class="accordion-header" id="cancellationFour">
                                    <button class="accordion-button collapsed" data-bs-toggle="collapse" role="button"
                                        data-bs-target="#faq-cancellation-four" aria-expanded="false"
                                        aria-controls="faq-cancellation-four">
                                        ¿Cuantas veces puedo hacer el tramite?
                                    </button>
                                </h2>
                                <div id="faq-cancellation-four" class="collapse"
                                    aria-labelledby="cancellationFour" data-bs-parent="#faq-cancellation-qna">
                                    <div class="accordion-body">
                                        Cheesecake muffin cupcake dragée lemon drops tiramisu cake gummies chocolate
                                        cake. Marshmallow tart
                                        croissant. Tart dessert tiramisu marzipan lollipop lemon drops. Cake bonbon
                                        bonbon gummi bears topping
                                        jelly beans brownie jujubes muffin. Donut croissant jelly-o cake marzipan.
                                        Liquorice marzipan cookie
                                        wafer tootsie roll. Tootsie roll sweet cupcake.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- my order -->
                    <div class="tab-pane" id="faq-my-order" role="tabpanel" aria-labelledby="my-order"
                        aria-expanded="false">
                        <!-- icon and header -->
                        <div class="d-flex align-items-center">
                            <div class="avatar avatar-tag bg-light-primary me-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-package font-medium-4">
                                    <line x1="16.5" y1="9.4" x2="7.5" y2="4.21"></line>
                                    <path
                                        d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z">
                                    </path>
                                    <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                                    <line x1="12" y1="22.08" x2="12" y2="12"></line>
                                </svg>
                            </div>
                            <div>
                                <h4 class="mb-0">Paquetes de Tramites</h4>
                                {{-- <span>Which license do I need?</span> --}}
                            </div>
                        </div>

                        <!-- frequent answer and question  collapse  -->
                        <div class="accordion accordion-margin mt-2" id="faq-my-order-qna">
                            <div class="card accordion-item">
                                <h2 class="accordion-header" id="myOrderOne">
                                    <button class="accordion-button collapsed" data-bs-toggle="collapse" role="button"
                                        data-bs-target="#faq-my-order-one" aria-expanded="false"
                                        aria-controls="faq-my-order-one">
                                        ¿a que paquete de tramites pertenece mi tramite?
                                    </button>
                                </h2>

                                <div id="faq-my-order-one" class="collapse accordion-collapse"
                                    aria-labelledby="myOrderOne" data-bs-parent="#faq-my-order-qna">
                                    <div class="accordion-body">
                                        paquete de tramite 1, tramite 2, tramite 3, tramite 4, tramite 5 y tramite 6
                                    </div>
                                </div>
                            </div>
                            <div class="card accordion-item">
                                <h2 class="accordion-header" id="myOrderTwo">
                                    <button class="accordion-button collapsed" data-bs-toggle="collapse" role="button"
                                        data-bs-target="#faq-my-order-two" aria-expanded="false"
                                        aria-controls="faq-my-order-two">
                                        ¿Como obtener el tramite con algun paquete disponible?
                                    </button>
                                </h2>
                                <div id="faq-my-order-two" class="collapse accordion-collapse"
                                    aria-labelledby="myOrderTwo" data-bs-parent="#faq-my-order-qna">
                                    <div class="accordion-body">
                                        Sweet pie candy jelly. Sesame snaps biscuit sugar plum. Sweet roll topping
                                        fruitcake. Caramels
                                        liquorice biscuit ice cream fruitcake cotton candy tart. Donut caramels
                                        gingerbread jelly-o
                                        gingerbread pudding. Gummi bears pastry marshmallow candy canes pie. Pie apple
                                        pie carrot cake.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- product services -->
                    <div class="tab-pane active" id="faq-product-services" role="tabpanel"
                        aria-labelledby="product-services" aria-expanded="false">
                        <!-- icon and header -->
                        <div class="d-flex align-items-center">
                            <div class="avatar avatar-tag bg-light-primary me-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-settings font-medium-4">
                                    <circle cx="12" cy="12" r="3"></circle>
                                    <path
                                        d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="mb-0">Tramite y/o Servicio</h4>
                                <span>¿Qué necesito para obtenerlo?</span>
                            </div>
                        </div>

                        <!-- frequent answer and question  collapse  -->
                        <div class="accordion accordion-margin mt-2" id="faq-product-qna">
                            <div class="card accordion-item">
                                <h2 class="accordion-header" id="productOne">
                                    <button class="accordion-button collapsed" data-bs-toggle="collapse" role="button"
                                        data-bs-target="#faq-product-one" aria-expanded="false"
                                        aria-controls="faq-product-one">
                                        ¿Puedo solicitar mi tramite por la ventanilla en linea?
                                    </button>
                                </h2>

                                <div id="faq-product-one" class="collapse accordion-collapse"
                                    aria-labelledby="productOne" data-bs-parent="#faq-product-qna">
                                    <div class="accordion-body">
                                        Claro el tramite esta disponible en la ventanilla en linea y se puede realizar
                                        en cualquier momento.
                                    </div>
                                </div>
                            </div>
                            <div class="card accordion-item">
                                <h2 class="accordion-header" id="productTwo">
                                    <button class="accordion-button collapsed" data-bs-toggle="collapse" role="button"
                                        data-bs-target="#faq-product-two" aria-expanded="false"
                                        aria-controls="faq-product-two">
                                        ¿La dependencia se queda con documentos?
                                    </button>
                                </h2>
                                <div id="faq-product-two" class="collapse accordion-collapse"
                                    aria-labelledby="productTwo" data-bs-parent="#faq-product-qna">
                                    <div class="accordion-body">
                                        La dependencia se queda con los documentos y se le notifica al solicitante
                                    </div>
                                </div>
                            </div>
                            <div class="card accordion-item">
                                <h2 class="accordion-header" id="productThree">
                                    <button class="accordion-button collapsed" data-bs-toggle="collapse" role="button"
                                        data-bs-target="#faq-product-three" aria-expanded="false"
                                        aria-controls="faq-product-three">
                                        ¿Como se si el documento tiene validez?
                                    </button>
                                </h2>
                                <div id="faq-product-three" class="collapse" aria-labelledby="productThree"
                                    data-bs-parent="#faq-product-qna">
                                    <div class="accordion-body">
                                        Verifique que tenga firma y sello de la dependencia
                                    </div>
                                </div>
                            </div>
                            <div class="card accordion-item">
                                <h2 class="accordion-header" id="productFour">
                                    <button class="accordion-button collapsed" data-bs-toggle="collapse" role="button"
                                        data-bs-target="#faq-product-four" aria-expanded="false"
                                        aria-controls="faq-product-four">
                                        ¿Qué documentos debo presentar?
                                    </button>
                                </h2>
                                <div id="faq-product-four" class="collapse accordion-collapse"
                                    aria-labelledby="productFour" data-bs-parent="#faq-product-qna">
                                    <div class="accordion-body">
                                        Cheesecake muffin cupcake dragée lemon drops tiramisu cake gummies chocolate
                                        cake. Marshmallow tart
                                        croissant. Tart dessert tiramisu marzipan lollipop lemon drops. Cake bonbon
                                        bonbon gummi bears topping
                                        jelly beans brownie jujubes muffin. Donut croissant jelly-o cake marzipan.
                                        Liquorice marzipan cookie
                                        wafer tootsie roll. Tootsie roll sweet cupcake.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- fundamentos legales -->
                    <div class="tab-pane" id="faq-fundamentos-legales" role="tabpanel" aria-labelledby="delivery"
                        aria-expanded="false">
                        <!-- icon and header -->
                        <div class="d-flex align-items-center">
                            <div class="avatar avatar-tag bg-light-primary me-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-shopping-bag font-medium-4">
                                    <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                                    <line x1="3" y1="6" x2="21" y2="6"></line>
                                    <path d="M16 10a4 4 0 0 1-8 0"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="mb-0">Documentos</h4>
                                <span>¿Qué necesito?</span>
                            </div>
                        </div>

                        <!-- frequent answer and question  collapse  -->
                        <div class="accordion accordion-margin mt-2" id="faq-delivery-qna">
                            <div class="card accordion-item">
                                <h2 class="accordion-header" id="deliveryOne">
                                    <button class="accordion-button collapsed" data-bs-toggle="collapse" role="button"
                                        data-bs-target="#faq-delivery-one" aria-expanded="false"
                                        aria-controls="faq-delivery-one">
                                        Requisitos
                                    </button>
                                </h2>

                                <div id="faq-delivery-one" class="collapse accordion-collapse"
                                    aria-labelledby="deliveryOne" data-bs-parent="#faq-delivery-qna">
                                    <div class="accordion-body">
                                        requisito 1, requisito 2, requisito 3, requisito 4, requisito 5, requisito 6
                                    </div>
                                </div>
                            </div>
                            <div class="card accordion-item">
                                <h2 class="accordion-header" id="deliveryTwo">
                                    <button class="accordion-button collapsed" data-bs-toggle="collapse" role="button"
                                        data-bs-target="#faq-delivery-two" aria-expanded="false"
                                        aria-controls="faq-delivery-two">
                                        Vigencia de documentos
                                    </button>
                                </h2>
                                <div id="faq-delivery-two" class="collapse accordion-collapse"
                                    aria-labelledby="deliveryTwo" data-bs-parent="#faq-delivery-qna">
                                    <div class="accordion-body">
                                        Sweet pie candy jelly. Sesame snaps biscuit sugar plum. Sweet roll topping
                                        fruitcake. Caramels
                                        liquorice biscuit ice cream fruitcake cotton candy tart. Donut caramels
                                        gingerbread jelly-o
                                        gingerbread pudding. Gummi bears pastry marshmallow candy canes pie. Pie apple
                                        pie carrot cake.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
{{-- noticias --}}
<div class="container-sm">
    <div class="row">
        <h1>Proximos Eventos</h1>
        <div class="col-6 col-sm-6 col-md-4 col-lg-3">
            <div class="card card-developer-meetup">
                <div class="meetup-img-wrapper rounded-top text-center">
                    <img src="https://www.irapuato.gob.mx/wp-content/uploads/2022/05/tumbbol17052022_3-1024x512.jpg"
                        class="img-fluid card-img-top" alt="Meeting Pic" height="170">
                </div>
                <div class="card-body">
                    <div class="meetup-header d-flex align-items-center">
                        <div class="meetup-day">
                            <h6 class="mb-0">LUN</h6>
                            <h3 class="mb-0">24</h3>
                        </div>
                        <div class="my-auto">
                            <h4 class="card-title mb-25">Evento proximo 1</h4>
                            <p class="card-text mb-0">Eu veniam cillum voluptate veniam.</p>
                        </div>
                    </div>
                    <div class="mt-0">
                        <div class="avatar float-start bg-light-primary rounded me-1">
                            <div class="avatar-content">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-calendar avatar-icon font-medium-3">
                                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                    <line x1="16" y1="2" x2="16" y2="6"></line>
                                    <line x1="8" y1="2" x2="8" y2="6"></line>
                                    <line x1="3" y1="10" x2="21" y2="10"></line>
                                </svg>
                            </div>
                        </div>
                        <div class="more-info">
                            <h6 class="mb-0">Sat, May 25, 2020</h6>
                            <small>10:AM to 6:PM</small>
                        </div>
                    </div>
                    <div class="mt-2">
                        <div class="avatar float-start bg-light-primary rounded me-1">
                            <div class="avatar-content">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-map-pin avatar-icon font-medium-3">
                                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                    <circle cx="12" cy="10" r="3"></circle>
                                </svg>
                            </div>
                        </div>
                        <div class="more-info">
                            <h6 class="mb-0">Teatro Principal</h6>
                            <small>Irapuato, Guanajuato</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-sm-6 col-md-4 col-lg-3">
            <div class="card card-developer-meetup">
                <div class="meetup-img-wrapper rounded-top text-center">
                    <img src="https://www.irapuato.gob.mx/wp-content/uploads/2022/05/tumbbol17052022_4-1024x512.jpg"
                        class="img-fluid card-img-top" alt="Meeting Pic" height="170">
                </div>
                <div class="card-body">
                    <div class="meetup-header d-flex align-items-center">
                        <div class="meetup-day">
                            <h6 class="mb-0">MIE</h6>
                            <h3 class="mb-0">24</h3>
                        </div>
                        <div class="my-auto">
                            <h4 class="card-title mb-25">Evento Proximo 2</h4>
                            <p class="card-text mb-0">Qui ullamco mollit quis amet pariatur deserunt quis et
                                labore.
                            </p>
                        </div>
                    </div>
                    <div class="mt-0">
                        <div class="avatar float-start bg-light-primary rounded me-1">
                            <div class="avatar-content">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-calendar avatar-icon font-medium-3">
                                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                    <line x1="16" y1="2" x2="16" y2="6"></line>
                                    <line x1="8" y1="2" x2="8" y2="6"></line>
                                    <line x1="3" y1="10" x2="21" y2="10"></line>
                                </svg>
                            </div>
                        </div>
                        <div class="more-info">
                            <h6 class="mb-0">Sat, May 25, 2020</h6>
                            <small>10:AM to 6:PM</small>
                        </div>
                    </div>
                    <div class="mt-2">
                        <div class="avatar float-start bg-light-primary rounded me-1">
                            <div class="avatar-content">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-map-pin avatar-icon font-medium-3">
                                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                    <circle cx="12" cy="10" r="3"></circle>
                                </svg>
                            </div>
                        </div>
                        <div class="more-info">
                            <h6 class="mb-0">Central Park</h6>
                            <small>Irapuato, Guanajuato</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-sm-6 col-md-4 col-lg-3">
            <div class="card card-developer-meetup">
                <div class="meetup-img-wrapper rounded-top text-center">
                    <img src="https://www.irapuato.gob.mx/wp-content/uploads/2022/05/tumbbol17052022_3-1024x512.jpg"
                        class="img-fluid card-img-top" alt="Meeting Pic" height="170">
                </div>
                <div class="card-body">
                    <div class="meetup-header d-flex align-items-center">
                        <div class="meetup-day">
                            <h6 class="mb-0">LUN</h6>
                            <h3 class="mb-0">24</h3>
                        </div>
                        <div class="my-auto">
                            <h4 class="card-title mb-25">Evento proximo 1</h4>
                            <p class="card-text mb-0">Eu veniam cillum voluptate veniam.</p>
                        </div>
                    </div>
                    <div class="mt-0">
                        <div class="avatar float-start bg-light-primary rounded me-1">
                            <div class="avatar-content">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-calendar avatar-icon font-medium-3">
                                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                    <line x1="16" y1="2" x2="16" y2="6"></line>
                                    <line x1="8" y1="2" x2="8" y2="6"></line>
                                    <line x1="3" y1="10" x2="21" y2="10"></line>
                                </svg>
                            </div>
                        </div>
                        <div class="more-info">
                            <h6 class="mb-0">Sat, May 25, 2020</h6>
                            <small>10:AM to 6:PM</small>
                        </div>
                    </div>
                    <div class="mt-2">
                        <div class="avatar float-start bg-light-primary rounded me-1">
                            <div class="avatar-content">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-map-pin avatar-icon font-medium-3">
                                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                    <circle cx="12" cy="10" r="3"></circle>
                                </svg>
                            </div>
                        </div>
                        <div class="more-info">
                            <h6 class="mb-0">Teatro Principal</h6>
                            <small>Irapuato, Guanajuato</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-sm-6 col-md-4 col-lg-3">
            <div class="card card-developer-meetup">
                <div class="meetup-img-wrapper rounded-top text-center">
                    <img src="https://www.irapuato.gob.mx/wp-content/uploads/2022/05/tumbbol17052022_4-1024x512.jpg"
                        class="img-fluid card-img-top" alt="Meeting Pic" height="170">

                </div>
                <div class="card-body">
                    <div class="meetup-header d-flex align-items-center">
                        <div class="meetup-day">
                            <h6 class="mb-0">MIE</h6>
                            <h3 class="mb-0">24</h3>
                        </div>
                        <div class="my-auto">
                            <h4 class="card-title mb-25">Evento Proximo 2</h4>
                            <p class="card-text mb-0">Qui ullamco mollit quis amet pariatur deserunt quis et
                                labore.</p>
                        </div>
                    </div>
                    <div class="mt-0">
                        <div class="avatar float-start bg-light-primary rounded me-1">
                            <div class="avatar-content">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-calendar avatar-icon font-medium-3">
                                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                    <line x1="16" y1="2" x2="16" y2="6"></line>
                                    <line x1="8" y1="2" x2="8" y2="6"></line>
                                    <line x1="3" y1="10" x2="21" y2="10"></line>
                                </svg>
                            </div>
                        </div>
                        <div class="more-info">
                            <h6 class="mb-0">Sat, May 25, 2020</h6>
                            <small>10:AM to 6:PM</small>
                        </div>
                    </div>
                    <div class="mt-2">
                        <div class="avatar float-start bg-light-primary rounded me-1">
                            <div class="avatar-content">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-map-pin avatar-icon font-medium-3">
                                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                    <circle cx="12" cy="10" r="3"></circle>
                                </svg>
                            </div>
                        </div>
                        <div class="more-info">
                            <h6 class="mb-0">Central Park</h6>
                            <small>Irapuato, Guanajuato</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- BEGIN: Vendor JS-->
<script src="{{ asset(mix('vendors/js/vendors.min.js')) }}"></script>
<!-- BEGIN Vendor JS-->
<!-- BEGIN: Page Vendor JS-->
<script src="{{ asset(mix('vendors/js/ui/jquery.sticky.js')) }}"></script>
<!-- vendor files -->
<script src="{{ asset(mix('vendors/js/forms/wizard/bs-stepper.min.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/forms/select/select2.full.min.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/forms/validation/jquery.validate.min.js')) }}"></script>
<!-- END: Page Vendor JS-->
<!-- BEGIN: Theme JS-->
<script src="{{ asset(mix('js/core/app-menu.js')) }}"></script>
<script src="{{ asset(mix('js/core/app.js')) }}"></script>

<!-- custome scripts file for user -->
<script src="{{ asset(mix('js/core/scripts.js')) }}"></script>

<script src="{{ asset(mix('js/scripts/customizer.js')) }}"></script>
<!-- END: Theme JS-->
<!-- BEGIN: Page JS-->
<!-- Page js files -->
<script src="{{ asset(mix('js/scripts/forms/form-wizard.js')) }}"></script>
<!-- END: Page JS-->

<script type="text/javascript">
    $(window).on('load', function() {
        if (feather) {
            feather.replace({
                width: 14,
                height: 14
            });
        }
    })
</script>
