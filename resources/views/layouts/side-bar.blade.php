<style>
    * {
        transition-duration: 0.2s;
    }
    #sideBarContainerMain {
        width: 60px;
        height: 100vh;
        background-color: lightsteelblue;
        position: absolute;
        top: 0;
        z-index: -1;
    }
    #sideBarContainer {
        margin-top: 100px;
        text-align: center;
    }
    .sideBarIcons {
        background-color: lightsteelblue;
        margin-bottom: 10px;
        height: 60px; 
        width: 60px; 
        weight: bold;
        color: black;
        padding: 10px;
    }
    .focused  {
        color: darkorange;
        background-color: lightblue;
    }
    .sideBarLinkContainers {
        position: relative;
        text-transform: uppercase;
    }
    .positioned {
        position: relative;
    }
    .animated {
        position: absolute;
        display: block;
        background-color: lightblue;
        height: 40px;
        width: 250px;
        top: 10px;
        left: -190px;
        text-decoration: none;
        color: black;
        z-index: -1;
        font-weight: 600;
        font-family: unset;
        font-size: 17px;
        padding-left: 6px;
        text-align: left;
        line-height: 40px;
        border: 1px solid transparent;
    }
    .animated label {
        color: black;
    }
    .hideOverflow {
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;
    }
    .animated ul {
        overflow: visible;
        padding-left: 20px;
        font-size: 15px;
    }
    .animated ul li {
        background-color: lightblue;
        list-style-type: none;
    }
    .animated ul li {
        box-shadow: 0 -4px 4px -4px #AAA;
    }
    .animated ul li a {
        text-decoration: none;
        color: black;
        display: block;
        padding-left: 10px;

    }
    .animated ul li a:hover {
        padding-left: 15px;
        background-color: #3b94de;

    }
    .showUl {
        clip-path: inset(0);
        transition-delay: .6s;
    }
    .hideUl {
        clip-path: inset(0 0 100% 0);
        transition-delay: 0;
    }

</style>



<div id="sideBarContainerMain">
    <div id="sideBarContainer">
        <div class="sideBarLinkContainers">


            <div class="positioned">
                <a href="#">
                    <x-bi-house class="sideBarIcons"/>
                </a>
                <div class="animated">
                    <label class="hideOverflow d-block m-0">Strona Domowa</label>
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



<script>
    $(document).ready(function() {
        $('.positioned').hover(function() {
            $(this).find('.sideBarIcons').addClass('focused');
            console.log($(this).find('.animated'));
            $(this).find('.animated').animate({
                left: '60px'
            });
            $(this).find('ul').addClass('showUl');
            $(this).find('ul').removeClass('hideUl');
        }, function() {
            $(this).find('.sideBarIcons').removeClass('focused');

            $(this).find('.animated').animate({
                left: '-190px'
            });
            $(this).find('ul').addClass('hideUl');
            $(this).find('ul').removeClass('showUl');
        });
    });
    

</script>