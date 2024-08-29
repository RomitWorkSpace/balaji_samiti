@extends('layout.front-layout')

@section('content')

<div class="container-fluid p-0 relative">
    <img src="/images/banners/blog.png" alt="Balaji banner" width="100%" />
    <div class="banner-title-right">
        <h3 class="bold-6">BLOG</h3>
    </div>
</div>

<section class="news-section">
    <div class="container text-center">
      <h2 class="bold-6">Latest News</h2>
    </div>
    <div class="container mt-4">
      <div class="row">
        <div class="col-md-4 mb-4">
        <a href="/blog-detail" style="color:unset;">
          <div class="news-wrapper">
            <img src="/images/blog.png" width="100%" alt="news" />
            <div class="news-content">
              <div class="news-date text-center">12 May</div>
              <h4 class="bold-6">New Mission</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam pharetra, risus ac hendrerit consectetur, elit nisl luctus est.</p>
            </div>
          </div>
          </a>
        </div>
        <div class="col-md-4 mb-4">
          <a href="/blog-detail" style="color:unset;">
          <div class="news-wrapper">
            <img src="/images/blog.png" width="100%" alt="news" />
            <div class="news-content">
              <div class="news-date text-center">12 May</div>
              <h4 class="bold-6">New Mission</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam pharetra, risus ac hendrerit consectetur, elit nisl luctus est.</p>
            </div>
          </div>
          </a>
        </div>
        <div class="col-md-4">
        <a href="/blog-detail" style="color:unset;">
          <div class="news-wrapper">
            <img src="/images/blog.png" width="100%" alt="news" />
            <div class="news-content">
              <div class="news-date text-center">12 May</div>
              <h4 class="bold-6">New Mission</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam pharetra, risus ac hendrerit consectetur, elit nisl luctus est.</p>
            </div>
          </div>
          </a>
        </div>
      </div>
    </div>
  </section>

@endsection