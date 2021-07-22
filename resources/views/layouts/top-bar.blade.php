<style>
    nav {
        padding: 15px 20px;
        background-color: rgb(233, 233, 233);
    }
    #homeText {
        padding-left: 8px;
        font-family: monospace;
        font-size: 20px;
    }
    #homeText:hover {
        text-decoration: none;
    }
    .blackText {
        color: black;
    }
    #homeParent:hover {
        transform: scale(1.1);
    }
    #homeParent > a:hover {
        color: black;
    }
    #navbarSupportedContent ul li {
        margin: 10px;
    }
    @media(max-width: 767px) {
        #homeParent:hover {
            transform: none;
        }
    }
    #userName {
        padding-left: 5px;
        position: relative;
        top: 2px;
        font-size: medium;
    }
    #dropdownMenuLabel {
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', 'Noto Sans', 'Ubuntu', 'Droid Sans', 'Helvetica Neue', sans-serif;
    }
    #dropdownMenuIcon {
        margin-left: 10px;
        margin-right: 5px;
    }
    #dropdownMenuIconLabel {
        position: absolute;
        margin-left: 10px;
        margin-right: 2px;
    }
    .dropdown-menu {
        width: 300px;
        left: -110px;
    }
    #dropdownMenuIconLabel2 {
        font-size: 0.7rem;
        color: darkgray;
    }
    #dropdownMenuLogOut {
        padding: 4px 0;
    }
    #dropdownMenuLogOut form a {
        color: #212529;
        padding: 0 !important;
        display: block;
    }
    #dropdownMenuLogOut form a:hover {
        text-decoration: none;
    }
    #dropdownMenuLogOutLabel {
        margin-left: 24px;
    }
</style>

<nav class="navbar navbar-expand-sm navbar-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li id="homeParent" class="nav-item active">
                <a class="float-left blackText" href="{{ route('admin') }}"><x-bi-house style="height: 30px; width: 30px"/></a>
                <a class="float-left blackText" id="homeText" href="{{ route('admin') }}"> LaraBlog</a>
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