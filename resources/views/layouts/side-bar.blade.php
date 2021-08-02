<link rel="stylesheet" href="{{ asset('css/side-bar.css') }}">
<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

<div class="sidebar">
    <div class="logo-details">
        <div class="logo_name">LaroBlog</div>
            <i class='bx bx-menu' id="btn" ></i>
        </div>
        <ul class="nav-list">
            <li>
                <a href="{{ route('admin') }}">
                    <x-bi-house class="sideBarIcons"/>
                    <span class="links_name">Strona domowa</span>
                </a>
                <span class="tooltip">Strona domowa</span>
            </li>
            <li>
                <a href="{{ route('users-list') }}">
                    <x-bi-people-fill class="sideBarIcons"/>
                    <span class="links_name">Lista użytkowników</span>
                </a>
                <span class="tooltip">Lista użytkowników</span>
            </li>
            <li>
                <a href="{{ route('categories') }}">
                    <x-bi-list-ol class="sideBarIcons"/>
                    <span class="links_name">Kategorie</span>
                </a>
                <span class="tooltip">Kategorie</span>
            </li>
            <li class="profile">
                <div class="profile-details">
                    <x-bi-person-circle id="dropdownMenuIcon" style="height: 50px; width: 50px"/>
                    <div class="name_job">
                    <div class="name">{{ Auth::user()->name }}</div>
                    <!-- <div class="job"> ucfirst($logged_user_data->name) </div> -->
                </div>
                </div>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-dropdown-link :href="route('logout')"
                    onclick="event.preventDefault();
                    this.closest('form').submit();">
                    <span><i class='bx bx-log-out' id="log_out" ></i></span>
                    </x-dropdown-link>
                </form>
            </li>
        </ul>
    </div>
</div>



<script src="{{ asset('js/side-bar.js') }}" ></script>
    
