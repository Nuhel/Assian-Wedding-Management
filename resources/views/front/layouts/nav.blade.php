<div class="container">
    <nav class="navbar navbar-expand-lg custom_nav-container d-flex justify-content-center ">

        <ul class="navbar-nav ml-0 pt-0">
            <li class="nav-item active">
                <a class="nav-link m-0 py-0 font-italic" href="{{URL::to('/')}}"><u>Lita's Boutique</u> <span class="sr-only">(current)</span></a>
            </li>
        </ul>

        <div class="collapse navbar-collapse d-flex flex-column flex-md-row ml-0 d-flex flex-wrap" id="navbarSupportedContent" style="flex-basis: auto">
            <ul class="navbar-nav ml-0 pt-0 w-100 d-flex flex-row justify-content-between justify-content-sm-end">
                <li class="nav-item {{URL::to('/') == URL::current() ? 'active':''}}">
                    <a class="nav-link m-0 py-0" href="{{URL::to('/')}}">Home <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item {{URL::to('/gallery') == URL::current() ? 'active':''}} ">
                    <a class="nav-link m-0 py-0" href="{{URL::to('/gallery')}}">Gallery</a>
                </li>

            </ul>
        </div>
    </nav>
</div>
