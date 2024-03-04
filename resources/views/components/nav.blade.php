{{-- NUOVA NAV   --}}


<nav class="nav-custom">
    <div class="container-fluid ">
        <div class="row justify-content-center align-items-center text-center">
            <div class="col-12 col-md-2 d-flex justify-content-center align-items-center">
                
                
                <span>
                    <form class="search-container" method="GET" action="{{route('article.search')}}">
                        <input type="search" name="query" placeholder="Cerca" aria-label="search" class="search-input">
                        <span class="search-btn">
                            <i class="fas fa-search"></i>      
                        </span>
                    </form>
                    {{--<i class="fa fa-search"></i>--}}
                </span>
            </div>
            
            <div class="col-12 col-md-8 d-flex justify-content-center align-items-center">
                <a href="{{route('homepage')}}"><img class="logo" src="/lgts.png" alt=""
                    alt="logo"></a>
            </div>
                
            <div class="col-12 col-md-2">
                    @auth
                    <span class="nav-drop dropdown ospite">
                        <a class="nav-drop dropdown-toggle font-title text-dark fw-large"  style="text-decoration: none;" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-person-fill"></i> {{ Auth::user()->name }}
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="nav-link text-dark font-title text-center py-2" href="{{ route('careers') }}">Lavora con noi</a></li>
                        <li><a class="nav-link text-center font-title py-2" href="{{ route('article.index') }}">Tutti gli articoli</a></li>
                        <li><a class="nav-link text-center font-title py-2" href="{{ route('article.create') }}">Inserisci Articolo</a></li>
                        @if (Auth::user()->is_admin)
                        <li>
                            <a class="nav-link text-dark font-title text-center py-2" href="{{route('admin.dashboard')}}">Dashboard Amministratore</a>
                        </li>
                        @endif
                        @if (Auth::user()->is_revisor)
                        <li>
                            <a class="nav-link text-dark font-title text-center py-2" href="{{route('revisor.dashboard')}}">Dashboard Revisore</a>
                        </li>
                        @endif
                        @if (Auth::user()->is_writer)
                        <li>
                            <a class="nav-link text-dark font-title text-center py-2" href="{{ route('writer.dashboard') }}">Dashboard Redattore</a>
                        </li>
                        @endif
                        
                        <li class="d-flex justify-content-center text-center ">
                            <form action="{{ route('logout') }}" id="logout-form" method="POST">
                                @csrf
                                <button type="submit" class="nav-link text-dark text-center font-title py-2">Logout</button>
                            </form>
                        </li>
                    </ul>
                    
                </span>
                @endauth
                
                @guest
                <span class="nav-item dropdown ospite">
                    <a class="nav-link dropdown-toggle font-title text-dark fw-large" style="text-decoration: none;" href="#" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-person-fill"></i>Ospite
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item text-center font-title py-2" href="{{ route('register') }}">Registrati</a></li>
                    <li><a class="dropdown-item text-center font-title py-2" href="{{ route('login') }}">Accedi</a></li>
                    <li><a class="dropdown-item text-center font-title py-2" href="{{ route('article.index') }}">Tutti gli articoli</a></li>
                    <li><a class="dropdown-item text-center font-title py-2" href="{{ route('article.create') }}">Inserisci Articolo</a></li>
                </ul>
            </span>
            @endguest
        </div>
    </div>  
</div>
</nav>
@if (!in_array(Route::currentRouteName() , $arrayCategory))
<div class="container mt-5 mt-md-1">
    <div class="row">
        <div class="col-12 p-0">
            <div class="navcat justify-content-evenly py-1">
                @foreach ($categories as $category)
                <a class="text-dark font-title" style="text-decoration: none;" 
                href="{{ route('article.byCategory', ['category' => $category->id]) }}">{{ $category->name }}</a>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endif

