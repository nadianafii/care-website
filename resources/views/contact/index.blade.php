@extends('layouts.main')

@section('title', 'Contact')

@section('head')
    <!-- Tambahkan CSS atau meta tag tambahan di sini -->
    {{-- <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}"> --}}
@endsection

@section('content')
    <div class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">             
                                <form class="main_form">
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                            <input class="form-control" placeholder="Your name" type="text" name="Your Name">
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                            <input class="form-control" placeholder="Email" type="text" name="Email">
                                        </div>
                                        <div class=" col-md-12">
                                            <input class="form-control" placeholder="Phone" type="text" name="Phone">
                                        </div>
                                        <div class="col-md-12">
                                            <textarea class="textarea" placeholder="Message"></textarea>
                                            <a class="button" href="mailto:nafifazillah@gmail.com">
                                            <!-- <button class="btn-submit">Kirim Pesan</button> -->
                                            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2">
                                                <li><a class="buy" href="#">Kirim pesan</a></li>
                                            </div>  
                                        </a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                            <a href="https://api.whatsapp.com/send?phone=6285776125559" target="_blank">
                            <button class="btn-floating whatsapp">
                                <!-- <img src="images/wa.png" alt="">  -->
                                <!-- <p>+62 857-7612-5559</p> <img src="icon/calll.png"/>  -->
                                <i class="fi fi-brands-whatsapp"></i>
                            </button>
                        </div>
                    </form>
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
