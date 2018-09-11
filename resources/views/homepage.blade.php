
@extends('main_layout')

@section('content')
    <div class="content">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{ asset('images/1.jpeg') }}" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('images/1.jpeg') }}" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('images/1.jpeg') }}" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <div class="container-fluid" id="bikes_list">
            <h2>Bikes List</h2>
            @if(isset($bikes) && count($bikes) > 0)
                <div class="row">
                    @foreach($bikes as $bike)
                        <div class="col-md-4 col-sm-4 col-12">
                            <div class="card text-center">
                                <img class="card-img-top" src="{{ asset('images/'. $bike->image) }}" alt="Card image cap">
                                <div class="card-body">
                                    <h6 class="card-title">{{ $bike->title }}</h6>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            <div class="text-center">
                {{ $bikes->links() }}
            </div>

            @else
                <p class="text-center">There are no bikes in the list</p>
            @endif
        </div>
    </div>
@endsection