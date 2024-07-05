@extends('layouts.main')

@section('title', 'About')

@section('head')
    <!-- Tambahkan CSS atau meta tag tambahan di sini -->
    {{-- <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}"> --}}
@endsection

@section('content')
{{-- @extends('layouts.navbar') --}}
<div class="about">
 <div class="container">
    <div class="row">
       <dir class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
          <div class="about_box">
             <figure><img src="images/skinker.jpeg"/></figure>
          </div>
       </dir>
        <dir class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
          <div class="about_box">
             <h3>Wan Care</h3>
             <p>Kami adalah perusahaan skincare yang berdedikasi untuk menciptakan produk berkualitas tinggi yang tidak hanya efektif tetapi juga aman dan ramah lingkungan.<br>

<br>Misi Kami
Misi kami adalah membantu setiap individu mencapai kulit yang sehat dan bercahaya dengan menyediakan produk skincare yang diformulasikan secara ilmiah dan berbahan dasar alami. Kami percaya bahwa perawatan kulit adalah investasi penting untuk kesejahteraan diri, dan kami berkomitmen untuk memberikan solusi yang tepat untuk semua jenis kulit dan masalah kulit.<br>

<br>Visi Kami
Visi kami adalah menjadi pemimpin global dalam industri skincare dengan inovasi yang berkelanjutan dan pendekatan yang berpusat pada pelanggan. Kami ingin menjadi merek yang dipercaya oleh jutaan orang di seluruh dunia untuk perawatan kulit mereka.</p>
       </div>
       </dir> 
    </div>
 </div>
</div>

<!-- CHOOSE  -->
    <div class="whyschose">
       <div class="container">

          <div class="row">
             <div class="col-md-7 offset-md-3">
                <div class="title">
                   <!-- <h2>Why <strong class="black">choose us</strong></h2> -->
                   <span>Kenapa Memilih Kami?</span>
                </div>
             </div>
          </div>
       </div>
    </div>
    <div class="choose_bg">
       <div class="container">
          <div class="white_bg">
          <div class="row">
             <dir class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                <div class="for_box">
                   <i><img src="images/1.png"/></i>
                   <h3>Kualitas Produk</h3>
                   <p>Produk kami diformulasikan dengan bahan alami terbaik dan telah melalui uji klinis untuk memastikan hasil optimal dan aman bagi semua jenis kulit.</p>
                </div>
             </dir>
             <dir class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                <div class="for_box">
                   <i><img src="images/2.png"/></i>
                   <h3>Layanan Pelanggan</h3>
                   <p>Tim kami yang ramah dan berpengalaman siap membantu Anda menemukan produk yang paling sesuai dengan kebutuhan kulit Anda.</p>
                </div>
             </dir>
             <dir class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                <div class="for_box">
                   <i><img src="images/3.png"/></i>
                   <h3>Pengalaman dan Keahlian</h3>
                   <p>Ahli dermatologi dan tim peneliti kami bekerja tanpa henti untuk menciptakan formula inovatif yang memberikan hasil nyata</p>
                </div>
             </dir>
             <dir class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                <div class="for_box">
                   <i><img src="images/4.png"/></i>
                   <h3>Etika Perusahaan </h3>
                   <p>Menggunakan bahan alami ramah lingkungan dan tidak melakukan uji coba pada hewan,Kami percaya kecantikan dicapai tanpa mengorbankan lingkungan</p>
                </div>
                </dir>
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
