@extends('layouts.main')

@section('title', 'Product')

@section('head')
    {{-- <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}"> --}}
@endsection

@section('content')
<div class="product">
    <div class="container">
       <div class="row">
          <div class="col-md-12">
             <div class="title">
                <div class="d-flex justify-content-center align-items-center">
                    <span class="text-center">We package the products with best services to make you a happy customer.</span>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
 <div class="product-bg">
    <div class="product-bg-white">
    <div class="container">
       <div class="row">
       <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                <div class="product-box">
                   <i><img src="images/fw.jpeg"/></i>
                   <h3>Rp. 43.999 </h3>
                   <span>Hydrating Face wash</span>
                </div>
             </div>
             <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                <div class="product-box">
                   <i><img src="images/cushion.png"/></i>
                   <h3>Rp. 99.999</h3>
                   <span>Porefaceting Cushion</span>
                </div>
             </div>
             <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                <div class="product-box">
                   <i><img src="images/b.png"/></i>
                   <h3>Rp. 55.999</h3>
                   <span>Peach Perfect Lip Tint </span>
                </div>
             </div>
             <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                <div class="product-box">
                   <i><img src="images/jar.png"/></i>
               <h3>Rp. 199.999</h3>
                   <span>Ceramic Skin Serum</span>
             </div>
          </div>
          <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
             <div class="product-box">
                <i><img src="images/h.png"/></i>
                <h3>Rp. 76.999</h3>
                <span>Natural Hair Serum</span>
             </div>
          </div>
          <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
             <div class="product-box">
                <i><img src="images/g2g.png"/></i>
                <h3>Rp. 46.999</h3>
                <span>Brightening Moisturaizer</span>
             </div>
          </div>
          <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
             <div class="product-box">
                <i><img src="images/fr.png"/></i>
                <h3>Rp. 89.999</h3>
                <span>Face Roller & Guasha</span>
             </div>
          </div>
          <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
             <div class="product-box">
                <i><img src="images/em.png"/></i>
            <h3>Rp. 49.999</h3>
                <span>Colling Eye Patches Mask</span>
          </div>
          </div>
          <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
             <div class="product-box">
                <i><img src="images/pk.png"/></i>
                <h3>Rp. 29.999 </h3>
                <span>2 IN 1 Dual-ended ombrelips</span>
             </div>
          </div>
          <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
             <div class="product-box">
                <i><img src="images/sam.png"/></i>
                <h3>Rp. 19.999</h3>
                <span>Soft & Smooth Shampo</span>
             </div>
          </div>
          <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
             <div class="product-box">
                <i><img src="images/cgn.png"/></i>
                <h3>Rp. 299.999</h3>
                <span>Super Glow Collagen Drink</span>
             </div>
          </div>
          <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
             <div class="product-box">
                <i><img src="images/bp.png"/></i>
            <h3>Rp. 29.999</h3>
                <span>Perfect Check Blush Powder</span>
          </div>
          </div>
          </div>
       </div>
    </div>
    <footr>
       <div class="footer">
          <div class="container">
             <div class="row">
                <div class="col-md-6 offset-md-3">
                   <ul class="sociel">
                       <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
                       <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                       <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
                       <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
                   </ul>
                </div>
          </div>
          <div class="row">
             <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                <div class="contact">
                   <h3>conatct us</h3>
                   <span>Graha Nurul Manteng, Lt2. Jl. Terapi Raya Blok AE No.1 Bumi Menteng Asri Kel Menteng, Bogor Kode Pos 16111.<br>
                   6285776125559<br>
                   info@wansolution.co.id</span>
                </div>
             </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                <div class="contact">
                   </ul>
                </div>
         
                </div>
             </div>
          </div>
       </div>
    </div>
    </footr>
@endsection

@section('scripts')
    <script src="{{ asset('js/dashboard.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            console.log('Dashboard is loaded!');
        });
    </script>
@endsection
