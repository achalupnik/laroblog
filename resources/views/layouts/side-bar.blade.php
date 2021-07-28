<link rel="stylesheet" href="{{ asset('css/side-bar.css') }}">

<div id="sideBarContainerMain">
    <div id="sideBarContainer">
        <div class="sideBarLinkContainers">


            <div class="positioned">
                <a href="#">
                    <x-bi-house class="sideBarIcons"/>
                </a>
                <div class="animated">
                    <a href="{{ route('admin') }}">
                        <label class="hideOverflow d-block m-0">Strona Domowa</label>
                    </a>
                </div>
            </div>



            <div class="positioned">
                <x-bi-house class="sideBarIcons"/>
                <div class="animated">
                    <label class="hideOverflow d-block m-0">Strona Domowa</label>
                    <ul class="hideUl">
                        <li><a href="#"><div class="hideOverflow d-block m-0">1 er  asdf asfas fasdfasd</div></a></li>
                        <li><a href="#"><div class="hideOverflow d-block m-0">2 er  asdf asfas fasdfasd</div></a></li>
                        <li><a href="#"><div class="hideOverflow d-block m-0">3 er  asdf asfas fasdfasd</div></a></li>
                    </ul>
                </div>
            </div>




            <div class="positioned">
                <x-bi-people-fill class="sideBarIcons"/>
                <i class="bi bi-people-fill"></i>
                <div class="animated">
                    <label class="hideOverflow d-block m-0">Użytkownicy</label>
                    <ul class="hideUl">
                        <li><a href="{{ route('users-list') }}"><div class="hideOverflow d-block m-0">Lista użytkowników</div></a></li>
                        <li><a href="#"><div class="hideOverflow d-block m-0">2 er  asdf asfas fasdfasd</div></a></li>
                        <li><a href="#"><div class="hideOverflow d-block m-0">3 er  asdf asfas fasdfasd</div></a></li>
                    </ul>
                </div>
            </div>




            



        </div>


    </div>


</div>



<script src="{{ asset('js/side-bar.js') }}" ></script>
    
