@extends('main_layout')

@section('content')
    <div class="content">
        @if($is_user_logged_in)
            <div class="container login_create_page">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">{{ __('Add a bike') }}</div>

                            <div class="card-body">
                                <form method="post" action="{{ action('BikeController@store') }}" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="form-group row">
                                        <label for="titleid" class="col-sm-4 col-form-label text-md-right">Bike Title</label>

                                        <div class="col-md-6">
                                            <input id="titleid" type="text" class="form-control{{ $errors->has('titleid') ? ' is-invalid' : '' }}" name="title" value="{{ old('titleid') }}" required autofocus>
                                            @if ($errors->has('title'))
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('title') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>



                                    <div class="form-group row">
                                        <label for="bikeimageid" class="col-sm-4 col-form-label text-md-right">Bike Image</label>
                                        <div class="col-sm-6">

                                            <input id="bikeimageid" type="file" class="form-control{{ $errors->has('image') ? ' is-invalid' : '' }}" name="image" value="{{ old('image') }}" required autofocus>

                                            @if ($errors->has('image'))
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('image') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="offset-sm-3 col-sm-9">
                                            <button type="submit" class="btn btn-dark">Submit Bike</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @else
            @include('auth.login')
        @endif
    </div>
@endsection