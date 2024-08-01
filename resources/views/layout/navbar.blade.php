<header class="mb-0 border-bottom px-3 pt-3 pb-1">
    <div>
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 link-body-emphasis text-decoration-none">
                <img src="{{ asset('images/logo/SHOPAN.png') }}" alt="" srcset="" width="40" height="40">
            </a>

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="/home" class="nav-link px-2 link-secondary"><i class="ti ti-home fs-5"></i> Home</a></li>
                <li><a href="{{ route('produk') }}" class="nav-link px-2 link-body-emphasis"><i
                            class="ti ti-package fs-5"></i>
                        Hasil Tani</a></li>

            </ul>



            <div class="dropdown text-end d-flex align-items-center">
                @auth
                    <li class="nav-item d-flex">
                        <div class="user-name mx-2">
                            <small class="d-none d-lg-block font-12">{{ Str::upper(Auth::user()->role) }}</small>
                            <span class="d-none d-lg-block fw-semibold font-12">
                                @php
                                    $nama = explode(' ', Auth::user()->username);
                                    echo Str::title($nama[0]);
                                @endphp
                            </span>
                        </div>
                        <div class="dropdown text-end">
                            <a class="nav-link  nav-user" data-bs-toggle="dropdown" href="#" role="button"
                                aria-haspopup="false" aria-expanded="false">
                                <div class="d-flex align-items-center">
                                    @if (!empty(Auth::user()->foto_profile))
                                        <img src="/foto_profile/{{ Auth::user()->foto_profile }}" alt="profile-user"
                                            class="rounded-circle me-0 me-md-2 thumb-sm" />
                                    @else
                                        <img src="/images/background/default.jpg" alt="profile-user"
                                            class="rounded-circle me-0 me-md-2 thumb-sm profile-img" />
                                    @endif

                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="{{ route('dashboard_petani') }}">
                                    Dashboard</a>
                                <a class="dropdown-item" href=""><i
                                        class="fas fa-address-book font-16 me-1 align-text-bottom"></i> Alamat Antar</a>
                                {{-- <a class="dropdown-item" href="#"><i class="ti ti-settings font-16 me-1 align-text-bottom"></i>
                                    Settings</a> --}}
                                <div class="dropdown-divider mb-0"></div>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"><i
                                        class="ti ti-power font-16 me-1 align-text-bottom"></i> Logout</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </div>
                    </li>
                @else
                    <a href="{{ route('login') }}" class="nav-link link-body-emphasis"><i class="ti ti-user"></i>Login</a>
                @endauth
            </div>
        </div>
    </div>
</header>
