@extends('layouts.app')

@section('content')

    <div class="body-1">

        <nav class="menu" >
            <div class="d-inline-block">
                <img src="https://renscube.files.wordpress.com/2017/10/full-moon.jpg" alt="" width="70" height="70" class="rounded-circle me-2">
                <strong>{{ Auth::user()->name }}</strong>
            </div>

            <ul>
                <li class="icon-dashboard">
                    <i class="fa-solid fa-gauge"></i>
                    <span class="mx-3">Dashboard</span>
                </li>
                <a href="{{ route('products.index') }}" class="" style="text-decoration: none; color: white;">
                    <li class="icon-settings">
                        <i class="fa-solid fa-cart-shopping"></i>
                        <span class="mx-3">
                            Products
                        </span>
                    </li>
                </a >
                <li class="icon-customers">
                    <i class="fa-solid fa-table-columns"></i>
                    <span class="mx-3">Page</span>
                </li>
                <li class="icon-users">
                    <i class="fa-solid fa-newspaper"></i>
                    <span class="mx-3">Post / Article</span>
                </li>
                <li class="icon-settings">
                    <i class="fa-solid fa-calendar-minus"></i>
                    <span class="mx-3">Menu</span>
                </li>
                <li class="icon-settings">
                    <i class="fa-solid fa-gear"></i>
                    <span class="mx-3">Setting</span>
                </li>
            </ul>
            <div class="logout">
                <a id="navbarDropdown" class="nav-link dropdown-toggle text-reset" href="#" role="button"   data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ __('Logout') }}
                </a>

                <div class="dropdown-menu dropdown-menu-start" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>

        </nav>

    </div>

    <div class="py-4">
        @yield('content')
    </div>

@endsection
