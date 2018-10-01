@extends('layouts.layouts')
@section('content')
  <section>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
    
      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <div class="item active">
          <img src="img/vitamins.jpg" alt="Los Angeles" style="height:400px;  margin-left: 500px">
        </div>
    
        <div class="item">
          <img src="img/insulin.jpg" alt="Chicago" style="margin-left: 400px">
        </div>
    
        <div class="item">
          <img src="img/painkillers.jpg" alt="New York" style="margin-left: 400px; height:380px">
        </div>
      </div>
    
      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <!-- <span class="sr-only">Previous</span> -->
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <!-- <span class="sr-only">Next</span> -->
      </a>
    </div>
  </section>

  {{-- @foreach ($categories as $category)
    <section id="intro" class="section-intro bg-secondary pt-5" style="color:white; background-color:#003366;">
      <div class="container">
        <div class="row d-flex" style="min-height:400px;">
          <div class="col-sm-6 d-flex align-items-center" style="top: 150px;">
            <header class="intro-wrap text-white">
              <h3>{{ $category->name }}<br></h3>
                <p>{{ $category->description }}</p>
                <a class="btn btn-primary" href="{{ route('categories.index', ['category_id' => $category->id]) }}">View Collection</a>
            </header>
            <!-- intro-wrap .// -->
          </div>
          <!-- col.// -->
          <div class="col-sm-6 text-right">
            <img src="{{$category->image}} " class="{{$category->name}}">
          </div>
          <!-- col.// -->
        </div>
        <!-- row.// -->
      </div>
      <!-- container .//  -->
    </section>
  @endforeach --}}

@endsection
    