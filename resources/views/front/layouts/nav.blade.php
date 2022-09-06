<div class="container">
    <nav class="navbar navbar-expand-lg custom_nav-container ">

        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="{{URL::to('/')}}">Lita's Boutique <span class="sr-only">(current)</span></a>
            </li>
        </ul>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item {{URL::to('/') == URL::current() ? 'active':''}}">
                    <a class="nav-link" href="{{URL::to('/')}}">Home <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item {{URL::to('/gallery') == URL::current() ? 'active':''}} ">
                    <a class="nav-link" href="{{URL::to('/gallery')}}">Gallery</a>
                </li>

            </ul>
        </div>
    </nav>
</div>
