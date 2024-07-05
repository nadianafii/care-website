@extends('layouts.main')

@section('title', 'Blog')

@section('head')
    <!-- Tambahkan CSS atau meta tag tambahan di sini -->
    {{-- <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}"> --}}
@endsection

@section('content')
<div class="Lastestnews blog">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">

                    <span>Memilih produk skincare yang tepat bisa menjadi tantangan, terutama dengan begitu banyak pilihan yang tersedia di pasaran. <br>kami akan membahas tips tips yang anda bisa lakukan </span>
                </div>
            </div>
        </div>
        <div class="row">
           <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 margin">
              <div class="news-box">
                  <figure><img src="images/mask (1).png" alt="img" /></figure>
                  <h3>Seberapa Penting Maskeran?</h3>
                  <!-- <span> lorem/span><span>lorem</span> -->
                  <p>Masker wajah bermanfaat untuk menghilangkan produksi minyak berlebih serta membersihkan wajah secara menyeluruh dengan cara mengangkat sel kulit mati dan kotoran yang mungkin masih menempel di wajah. Masker wajah berguna untuk membersihkan sisa make up di wajah yang berpotensi menutup pori-pori.</p>
              </div>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 margin">
              <div class="news-box">
                  <figure><img src="images/mask (2).png" alt="img" /></figure>
                  <h3>Stress = Brekout?</h3>
                  <!-- <span> March 20</span><span>Comment</span> -->
                  <p>Salah satu penyebab terjadinya breakout adalah perasaan stres. Gangguan ini tidak menyebabkan jerawat secara langsung tetapi meningkatkan tingkat keparahannya. Saat stres, tubuh melepaskan hormon CRH yang memicu minyak menjadi naik. Minyak yang berlebihan berisiko menimbulkan peradangan yang akhirnya menimbulkan breakout. </p>
              </div>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 margin">
              <div class="news-box">
                  <figure><img src="images/mask (3).png" alt="img" /></figure>
                  <!-- <span> March 20</span><span>Comment</span> -->
                  <h3> Manfaat Moisturaizer</h3>
                   <p>Kebanyakan produk pelembap memberikan efek kilau (glowing) setelah dioleskan ke kulit. Nah, efek ini bisa membantu menyamarkan noda hitam, MEMbuat kulit terhidrasi sehingga warna kulit tampak lebih merata sekaligus bercahaya. Manfaat moisturizer yang satu ini tentunya bisa meningkatkan rasa percaya dirimu, kan?</p>
              </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 margin">
              <div class="news-box">
                  <figure><img src="images/mask (1).png" alt="img" /></figure>
                  <h3>Lorem, ipsum.</h3>
                  <!-- <span> lorem/span><span>lorem</span> -->
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo, omnis. Velit ipsum, recusandae maxime minima ea facilis ducimus nemo at culpa illo sequi atque? Nulla amet deleniti officia veritatis? Exercitationem!</p>
              </div>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 margin">
              <div class="news-box">
                  <figure><img src="images/mask (2).png" alt="img" /></figure>
                  <h3>Lorem, ipsum.</h3>
                  <!-- <span> lorem/span><span>lorem</span> -->
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo, omnis. Velit ipsum, recusandae maxime minima ea facilis ducimus nemo at culpa illo sequi atque? Nulla amet deleniti officia veritatis? Exercitationem!</p>
              </div>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 margin">
              <div class="news-box">
                  <figure><img src="images/mask (3).png" alt="img" /></figure>
                  <h3>Lorem, ipsum.</h3>
                  <!-- <span> lorem/span><span>lorem</span> -->
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo, omnis. Velit ipsum, recusandae maxime minima ea facilis ducimus nemo at culpa illo sequi atque? Nulla amet deleniti officia veritatis? Exercitationem!</p>
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
                   <!-- <h3>ADDITIONAL LINKS</h3> -->
                   <!-- <ul class="lik">
                       <li> <a href="#">About us</a></li>
                       <li> <a href="#">Terms and conditions</a></li>
                       <li> <a href="#">Privacy policy</a></li>
                       <li> <a href="#">News</a></li>
                 -->
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
