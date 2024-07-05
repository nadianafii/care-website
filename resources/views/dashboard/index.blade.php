@extends('layouts.main')

@section('title', 'Dashboard')

@section('head')
    <!-- Tambahkan CSS atau meta tag tambahan di sini -->
    {{-- <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}"> --}}
@endsection

@section('content')
{{-- @extends('layouts.navbar') --}}
       <!-- end header inner --> 
    </header>
    <!-- end header -->
    <section class="slider_section">
       <div id="main_slider" class="carousel slide banner-main" data-ride="carousel">

          <div class="carousel-inner">
             <div class="carousel-item active">
                <img class="first-slide" src="images/konrol.png" alt="First slide">
                <div class="container">
                   <div class="carousel-caption relative">
                      <!-- <h3>Our <br> <strong class="black_bold">Latest </strong><br> -->
                         <strong class="yellow_bold">WAN Care Beauty & Healty </strong></h3>
                      <h3>Thing Can You Do If You Love Our Life Is Using A Skincare </h3>
                      <br>
                      <a  href="products">see more Products</a>
                   </div>
                </div>
             </div>
             <div class="carousel-item">
                <img class="first-slide" src="images/konrol.png" alt="First slide">
                <div class="container">
                   <div class="carousel-caption relative">
                      <!-- <h3>Our <br> <strong class="black_bold">Latest </strong><br> -->
                         <strong class="yellow_bold">WAN Care Beauty & Healty </strong></h3>
                      <h3>Thing Can You Do If You Love Our Life Is Using A Skincare </h3>
                      <br>
                      <a  href="product.html">see more Products</a>
                   </div>
                </div>
             </div>
                   </div>
                </div>
             </div>
             <div class="carousel-item">
                <img class="third-slide" src="images/banner2.jpg" alt="Third slide">
                <div class="container">
                   <div class="carousel-caption relative">
                      <h1>Our <br> <strong class="black_bold">Latest </strong><br>
                         <strong class="yellow_bold">Product </strong></h1>
                      <p>It is a long established fact that a r <br>
                        eader will be distracted by the readable content of a page </p>
                      <a  href="#">see more Products</a>
                   </div>
                </div>
             </div> 

         </div>
          <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
          <i class='fa fa-angle-right'></i>
          </a>
          <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
          <i class='fa fa-angle-left'></i>
          </a>
          
       </div>

    </section>
    <!-- our product -->
    <div class="product">
       <div class="container">
          <div class="row">
             <div class="col-md-12">
                <div class="title">
                   <h2>our <strong class="black">products</strong></h2>
                   <span>We package the products with best services to make you a happy customer.</span>
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
                   <i><img src="images/c.1.png"/></i>
               <h3>Rp. 199.999</h3>
                   <span>Ceramic Skin Serum</span>
             </div>
             <!-- <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                <div class="product-box">
                   <i><img src="icon/p5.png"/></i>
                   <h3>Norton Internet Security</h3>
                   <span>$25.00</span>
                </div>
             </div> -->
             <!-- <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                <div class="product-box">
                   <i><img src="icon/p2.png"/></i>
                   <h3>Norton Internet Security</h3>
                   <span>$25.00</span>
                </div>
             </div>
             <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                <div class="product-box">
                   <i><img src="icon/p6.png"/></i>
                   <h3>Norton Internet Security</h3>
                   <span>$25.00</span>
                </div>
             </div>
             <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                <div class="product-box">
                   <i><img src="icon/p7.png"/></i>
                   <h3>Norton Internet Security</h3>
                   <span>$25.00</span>
                </div>
             </div>
             -->
            
            </div>
             </div>
             </div>
          </div>
       </div>
       <div class="Lastestnews blog">
          <div class="container">
              <div class="row">
                  <div class="col-md-12">
                      <div class="titlepage">
  
                          <span><h1><b>Article</b></h1> <br>Yuk Ketahui Lebih Dalam Tentang Menjaga Kulitmu! </span>
                      </div>
                  </div>
                </div>
                
       <div class="row">
       <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 margin">
              <div class="news-box">
                  <figure><img src="images/mask (1).png" alt="img" /></figure>
                  <h3>Seberapa Penting Maskeran?</h3>
                  <!-- <span> lorem/span><span>lorem</span> -->
                  <p>Masker wajah bermanfaat untuk menghilangkan produksi minyak berlebih serta membersihkan wajah secara menyeluruh dengan cara mengangkat sel kulit mati dan kotoran yang mungkin masih menempel di wajah. Bagi kamu yang terbiasa menggunakan make up saat beraktivitas sehari-hari, masker wajah berguna untuk membersihkan sisa make up di wajah yang berpotensi menutup pori-pori. Dengan demikian, wajahmu benar-benar bersih.</p>
              </div>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 margin">
              <div class="news-box">
                  <figure><img src="images/mask (2).png" alt="img" /></figure>
                  <h3>Stress = Brekout?</h3>
                  <!-- <span> March 20</span><span>Comment</span> -->
                  <p>Salah satu penyebab terjadinya breakout adalah perasaan stres. Gangguan ini tidak menyebabkan jerawat secara langsung tetapi meningkatkan tingkat keparahannya. Saat stres, tubuh melepaskan hormon CRH yang dapat memicu pelepasan sitokin inflamasi dan produksi minyak menjadi naik. Minyak yang berlebihan dapat menyumbat pori-pori dan berisiko menimbulkan peradangan yang akhirnya menimbulkan breakout. </p>
              </div>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 margin">
              <div class="news-box">
                  <figure><img src="images/mask (3).png" alt="img" /></figure>
                  <!-- <span> March 20</span><span>Comment</span> -->
                  <h3> Manfaat Moisturaizer</h3>
                   <p>Kebanyakan produk pelembap memberikan efek kilau (glowing) setelah dioleskan ke kulit. Nah, efek ini bisa membantu menyamarkan noda hitam, sehingga warna kulit tampak lebih merata sekaligus bercahaya. Manfaat moisturizer yang satu ini tentunya bisa meningkatkan rasa percaya dirimu, kan?</p>
              </div>
            </div>

          </div>
       </div>

       <!-- <div class="container">
          <div class="yellow_bg">
          <div class="row">
             <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12">
                <div class="yellow-box">
                   <h3>REQUEST A FREE QUOTE<i><img src="icon/calll.png"/></i></h3>
                   
                   <p>Get answers and advice from people you want it from.</p>
                </div>
             </div>
              <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
                <div class="yellow-box">
                   <a href="#">Get  Quote</a>
                </div>
             </div>
          </div> -->
       </div>
       </div>
    </div>

    <!-- end our product -->
    <!-- map -->
    <!-- <div class="container-fluid padi">
       <div class="map">
          <img src="images/mapimg.jpg" alt="img"/>
       </div>
    </div> -->
    <!-- end map --> 
    <!--  footer --> 




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
                   <!-- <h3>ADDITIONAL LINKS</h3> -->
                   <!-- <ul class="lik">
                       <li> <a href="#">About us</a></li>
                       <li> <a href="#">Terms and conditions</a></li>
                       <li> <a href="#">Privacy policy</a></li>
                       <li> <a href="#">News</a></li>
                        <li> <a href="#">Contact us</a></li> -->
                   </ul>
                </div>
             <!-- </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                <div class="contact">
                   <h3>service</h3>
                    <ul class="lik">
                  <li> <a href="#"> Data recovery</a></li>
                       <li> <a href="#">Computer repair</a></li>
                       <li> <a href="#">Mobile service</a></li>
                       <li> <a href="#">Network solutions</a></li>
                        <li> <a href="#">Technical support</a></li>
                </div>
             </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                <div class="contact">
                   <h3>About lighten</h3>
                   <span>Tincidunt elit magnis nulla facilisis. Dolor Sapien nunc amet ultrices, </span> -->
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
