@extends('frontend.layouts.master')
@section('title','about')
<!--section 將底下的內容放入master.blade.php的 yield的content位置裡-->
@section('nav_about', 'active');
@section('content')
<section class="page-section about-heading">
  <div class="container">
    <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="img/cuteAnimal4.jpg" alt="">
    <div class="about-heading-content">
      <div class="row">
        <div class="col-xl-9 col-lg-10 mx-auto">
          <div class="bg-faded rounded p-5">
            <h2 class="section-heading mb-4">
              <span class="section-heading-upper">關於選擇性緘默症</span>
              <span class="section-heading-lower">About SELECTIVE MUTISM</span>
            </h2>
            <p>是一種社交焦慮症，患者有正常説話的能力，但在特定情境下就是說不出口。《精神疾病診斷與統計手冊》把選擇性緘默症描述為兒童的罕見心理失調。患有這症的兒童和成人能正常說話和理解語言，但在某些社交場合卻無法說話。他們其他行為和學習能力都正常，儘管他們會不願意參與團體活動。這就像是極端的害羞。</p>
            <p class="mb-0">但是症狀的保持和程度，顯然與害羞相異，譬如一個小孩在學校裡完全靜默，在家中卻能自由說話，不過如有陌生人在場可能又令小孩靜默。</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection