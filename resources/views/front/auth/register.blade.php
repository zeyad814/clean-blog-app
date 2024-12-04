@extends('front.layout.app')

@section('content')
 <!-- Page Header-->
 <header class="masthead" style="background-image: url('{{asset('front')}}/assets/img/contact-bg.jpg')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="page-heading">
                    <h1>Wlcome To Our APP</h1>
                    <span class="subheading">Have questions? I have answers.</span>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Main Content-->
<main class="mb-4">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <p> New User</p>
                <div class="my-5">

                    <form method="POST" action="{{route('store.user')}}">
                        @csrf
                        <div class="form-floating">
                            <input class="form-control" id="name" value="{{old('name')}}" type="text" placeholder="Enter your name..." data-sb-validations="required" name="name" />
                            <label for="name">Name</label>
                            @error('name')
                            <div class="text-danger" data-sb-feedback="name:required">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <input class="form-control" id="email" type="email" placeholder="Enter your email..."  name ="email"  value="{{old('email')}}" data-sb-validations="required,email" />
                            <label for="email">Email address</label>
                            @error('email')
                            <div class="text-danger" data-sb-feedback="name:required">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <input class="form-control" name="password" id="password" type="password" placeholder="Enter your phone password..." data-sb-validations="required" />
                            <label for="phone">Password</label>
                            @error('password')
                            <div class="text-danger" data-sb-feedback="name:required">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <input class="form-control" name="password_confirmation" id="password" type="password" placeholder="Enter your phone password confirmation..." data-sb-validations="required" />
                            <label for="phone">Password Confirmation</label>
                            @error('password_confirmation')
                            <div class="text-danger" data-sb-feedback="name:required">{{$message}}</div>
                            @enderror
                        </div>

                        <br />

                        <!-- Submit Button-->
                        <button class="btn btn-primary text-uppercase " id="submitButton" type="submit">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
