@extends('frontend.layouts.master')
@section('title','products')
<!--section 將底下的內容放入master.blade.php的 yield的content位置裡-->
@section('nav_products', 'active');
@section('content')
<section class="page-section">
  <div class="container">
    <div class="product-item">
      <div class="product-item-title d-flex">
        <div class="bg-faded p-5 d-flex ml-auto rounded">
          <h2 class="section-heading mb-0">
            <span class="section-heading-upper">明信片1</span>
            <span class="section-heading-lower">悠默</span>
          </h2>
        </div>
      </div>
      <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="img/postCard1.jpg" alt="">
      <div class="product-item-description d-flex mr-auto">
        <div class="bg-faded p-5 rounded">
          <p class="mb-0">捱過苦痛便能雨過天晴，爬過磨難迎向海闊天空。</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="page-section">
  <div class="container">
    <div class="product-item">
      <div class="product-item-title d-flex">
        <div class="bg-faded p-5 d-flex mr-auto rounded">
          <h2 class="section-heading mb-0">
            <span class="section-heading-upper">明信片2</span>
            <span class="section-heading-lower">讓世界擁抱</span>
          </h2>
        </div>
      </div>
      <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="img/postCard2.jpg" alt="">
      <div class="product-item-description d-flex ml-auto">
        <div class="bg-faded p-5 rounded">
          <p class="mb-0">我們擁抱世界，世界擁抱我們</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- <section class="page-section">
  <div class="container">
    <div class="product-item">
      <div class="product-item-title d-flex">
        <div class="bg-faded p-5 d-flex ml-auto rounded">
          <h2 class="section-heading mb-0">
            <span class="section-heading-upper">From Around the World</span>
            <span class="section-heading-lower">Bulk Speciality Blends</span>
          </h2>
        </div>
      </div>
      <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="img/products-03.jpg" alt="">
      <div class="product-item-description d-flex mr-auto">
        <div class="bg-faded p-5 rounded">
          <p class="mb-0">Travelling the world for the very best quality coffee is something take pride in. When you visit us, you'll always find new blends from around the world, mainly from regions in Central and South America. We sell our blends in smaller to large bulk quantities. Please visit us in person for more details.</p>
        </div>
      </div>
    </div>
  </div>
</section> -->
@endsection