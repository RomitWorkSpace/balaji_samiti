@extends('layout.front-layout')

@section('content')

<div class="container-fluid p-0 relative">
    <img src="/images/banners/blog.png" alt="Balaji banner" width="100%" />
    <div class="banner-title-right">
        <h3 class="bold-6">BLOG</h3>
    </div>
</div>

<div class="container-fluid p-0 pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="blog-content">
                    <div class="relative">
                        <div class="main-title">
                            <h5 class="bold-6 m-0">Project</h5>
                            <h4 class="bold-6 mt-5">New Mission</h4>
                        </div>
                        <div class="blog-date text-center">19<br/>May</div>
                    </div>
                    <div class="text-justify mt-4">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetti remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-5">
                <img src="/images/small-gal.png" alt="image" class="radius-10" width="100%" />
            </div>
        </div>
    </div>
</div>



@endsection