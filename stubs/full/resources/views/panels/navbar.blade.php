@if ($configData['mainLayoutType'] === 'horizontal' && isset($configData['mainLayoutType']))
<nav class="header-navbar navbar navbar-expand-lg navbar-fixed align-items-center navbar-shadow navbar-brand-center {{ $configData['navbarColor'] }}" data-nav="brand-center">
@else
<nav class="header-navbar navbar navbar-expand-lg align-items-center navbar-brand-center {{ $configData['navbarClass'] }} navbar-light navbar-shadow {{ $configData['navbarColor'] }} {{ $configData['layoutWidth'] === 'boxed' && $configData['verticalMenuNavbarType'] === 'navbar-floating' ? 'container-xxl' : '' }}" data-nav="brand-center">
@endif
  <div class="navbar-header">
    <ul class="nav navbar-nav flex-row">
      <li class="nav-item d-flex justify-content-center">
        <a class="navbar-brand" href="{{url('/')}}">
          <span class="brand-logo">
            <h3 style="padding-left: 20px;" class="brand-text">{{ env('APP_NAME') }}</h3>
          </span>
        </a>
      </li>
    </ul>
  </div>
  <div class="navbar-container d-flex content">
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
                    <img src="{{ asset('images/portrait/small/avatar-s-15.jpg') }}" alt="avatar" width="32"
                      height="32">
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
                  <p class="media-heading"><span class="fw-bolder">Sales report</span>&nbsp;generated</p><small
                    class="notification-text"> Last month sales report generated</small>
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
                  <p class="media-heading"><span class="fw-bolder">High memory</span>&nbsp;usage</p><small
                    class="notification-text"> BLR Server using high memory</small>
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
        <a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="javascript:void(0);"
          data-bs-toggle="dropdown" aria-haspopup="true">
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
            <img class="round"
              src="{{ asset('assets/img/iconos/user1.png') }}"
              alt="avatar" height="40" width="40">
            <span class="avatar-status-online"></span>
          </span>
        </a>
        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-user">
          <h6 class="dropdown-header">Opciones</h6>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item nav-link-style">
            <i class="me-50 ficon" data-feather="{{ $configData['theme'] === 'dark' ? 'sun' : 'moon' }}"></i> Tema
          </a>
          <a class="dropdown-item" href="{{ route('suu.logout') }}" >
            <i class="me-50" data-feather="power"></i> Logout
          </a>
          <form method="POST" id="logout-form" action="{{ route('home') }}">
            @csrf
          </form>
        </div>
      </li>
    </ul>
  </div>
</nav>
