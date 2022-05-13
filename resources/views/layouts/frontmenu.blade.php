<nav class="nav-second navbar custom-navbar navbar-expand-sm navbar-dark bg-dark sticky-top">
    <div class="container">
        <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto"> 
                <li class="nav-item">
                    <a class="nav-link" href="#about">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#service">Our Service</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#team">Our Team</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#testmonial">Testmonials</a>
                </li>
            </ul> 
            <ul class="navbar-nav ml-auto">
                
                <li class="nav-item">
                    @if (Route::has('login'))
                        @auth
                           
                                <x-app-layout>
    
                                </x-app-layout>
                            

                        @else
                                <li class="nav-item">
                                    <a href="{{ route('login') }}" class="btn btn-primary btn-sm text-sm text-gray-700 dark:text-dark-500 underline">Log in</a>
                                </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a href="{{ route('register') }}" class="btn btn-primary btn-sm ml-4 text-sm text-gray-700 dark:text-dark-500 underline">Register</a>
                                </li>
                            @endif
                        @endauth
                    @endif
                </li>
            </ul>
        </div>
    </div>
</nav>