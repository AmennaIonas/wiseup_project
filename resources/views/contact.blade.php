@extends('main_layout')

@section('content')
    <div class="container mtb-100">
        <div class="row">
            <div class="col-md-6">
                <h5 class="text-center">About us</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>

            <div class="col-md-6">
                <h5 class="text-center">Write us</h5>
                <div class="form-group row contact-form">
                    <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" autofocus>
                    </div>

                    <label for="name" class="col-md-4 col-form-label text-md-right">Phone</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" autofocus>
                    </div>

                    <label for="name" class="col-md-4 col-form-label text-md-right">Message</label>
                    <div class="col-md-8">
                        <textarea title="message"></textarea>
                    </div>
                    <div class="col-md-12 text-center">
                        <button class="btn btn-dark text-center">Send</button>
                    </div>

                </div>
            </div>

        </div>
    </div>
@endsection