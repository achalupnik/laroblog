<link rel="stylesheet" href="{{ asset('css/top-bar.css') }}">

<nav class="navbar navbar-expand-sm navbar-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li id="homeParent" class="nav-item active">
                <a class="text-dark" id="homeText" href="{{ route('dashboard') }}"> LaroBlog</a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span>
                        <x-bi-person-circle style="height: 30px; width: 30px"/>
                        <span id="userName">
                            {{ Auth::user()->name }}
                        </span>
                    </span>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <div id="dropdownMenuLabel" class="text-center">Konto</div>
                    <div class="dropdown-divider"></div>
                    <div>
                        <x-bi-person-circle id="dropdownMenuIcon" style="height: 50px; width: 50px"/>
                        <span id="dropdownMenuIconLabel">
                            <span id="dropdownMenuIconLabel1">{{ Auth::user()->name }}</span><br>
                            <span id="dropdownMenuIconLabel2">{{ Auth::user()->email }}</span>
                        </span>
                    </div>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Ustawienia</a>
                    <div class="dropdown-item" id="dropdownMenuLogOut">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                <span id="dropdownMenuLogOutLabel">{{ __('Wyloguj się') }}</span>
                            </x-dropdown-link>
                        </form>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</nav>