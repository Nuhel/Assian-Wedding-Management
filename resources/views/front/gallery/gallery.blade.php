@extends('front.layouts.layout')
@section('content')
    <style>
        .grid-sizer,
        .grid-item {
            width: 33.333%;
        }

        .grid-item {
            float: left;
            padding: 1px;
        }

        .grid-item img {
            display: block;
            max-width: 100%;
            border-radius: 4px;
        }
    </style>

    @php
        $height = ['', 'grid-item--height2', 'grid-item--height3', 'grid-item--height4'];
        $width = ['', 'grid-item--width2', 'grid-item--width3'];
    @endphp


<header class="header_section">
    @include('front.layouts.nav')
</header>


<section class="why_section layout_padding border-bottom">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>
                Gallery
            </h2>
        </div>
        <div class="row">
            <div class="col">
                <div class="container">
                    <div class="grid">

                        @foreach ($galleries as $gallery)
                            <div class="grid-item
                            {{-- {{$width[array_rand($width)]}}  {{$height[array_rand($height)]}} --}}
                            ">
                                <img src="{{ URL::to($gallery->image) }}" alt="">
                            </div>
                        @endforeach


                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection

@section('script')
    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
    <script src="https://unpkg.com/imagesloaded@4.1.4/imagesloaded.pkgd.min.js"></script>
    <script>



        var $grid = $('.grid').imagesLoaded(function() {
            // init Masonry after all images have loaded
            $grid.masonry({
                // options...
            });
        });
    </script>
@endsection
