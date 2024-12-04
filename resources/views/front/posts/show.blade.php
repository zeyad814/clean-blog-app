@extends('front.layout.app')

@section('content')
        <!-- Page Header-->
        <header class="masthead" style="background-image: url('{{asset('front')}}/assets/img/home-bg.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="site-heading">
                            <h1>All News</h1>
                            <span class="subheading">A Laravel Project  by EraaSoft</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main Content-->
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                        <h2>{{$post->title}}</h2>
                        <div>
                            <img src="{{asset('uploads/posts/'.$post->image)}}" alt="">
                        </div>
                        <div>
                            <p>{{$post->content}}</p>
                        </div>

                </div>
            </div>
        </div>
@endsection
