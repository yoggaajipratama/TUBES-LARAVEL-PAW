<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Market Price Report</title>

  <link rel="icon" type="image" href="{{asset ('/img/about.jpg')}}">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="{{asset ('/img/favicon.ico')}}" type="image/x-icon">
  <link rel="apple-touch-icon" href="{{asset ('/img/apple-touch-icon.png')}}">
  <link rel="apple-touch-icon" sizes="72x72" href="{{asset ('/img/apple-touch-icon-72x72.png')}}">
  <link rel="apple-touch-icon" sizes="114x114" href="{{asset ('/img/apple-touch-icon-114x114.png')}}">
  <link rel="stylesheet" type="text/css"  href="{{asset ('/css/bootstrap.css')}}">
  <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="{{asset ('/css/style.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('/css/nivo-lightbox/nivo-lightbox.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('/css/nivo-lightbox/default.css')}}">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700,800,900" rel="stylesheet">
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
  <nav id="menu" class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand page-scroll" href="#page-top">Market Price Report</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#about" class="page-scroll">About</a></li>
              <li><a href="#services" class="page-scroll">Price list</a></li>
              <li><a href="#portfolio" class="page-scroll">Gallery</a></li>
              <li><a href="#contact" class="page-scroll">Contact</a></li>
              <li><a href="{{route('login')}}" class="page-scroll"><img src="{{asset('/images/logo.svg')}}" width="32px">&nbsp;&nbsp;&nbsp;Login</a></li>
          </ul>
      </div>
    </div>
  </nav>

  <header id="header">
    <div class="intro">
      <div class="overlay">
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-md-offset-2 intro-text">
              <h1>We Are Care<span></span></h1>
              <p>KEPEDULIAN ANDA BERARTI BANYAK UNTUK LINGKUNGAN SEKITAR KITA</p>
              <a href="{{route ('register')}}" class="btn btn-custom btn-lg page-scroll">Daftar Akun</a> </div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <div id="about">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-md-6"> <img src="{{asset('/img/about.jpg')}}" class="img-responsive" alt=""> </div>
        <div class="col-xs-12 col-md-6">
          <div class="about-text">
            <h2>Tentang kami</h2>
            <p>Aplikasi ini dibuat sebagai bentuk kepedulian kami karena melihat banyak masyrakat yang mengeluh akibat harga pasar yang semakin tak terkendali di pasaran saat ini.</p>
            <h3>Feature :</h3>
            <div class="list-style">
              <div class="col-lg-6 col-sm-6 col-xs-12">
                <ul>
                  <li>Report Harga</li>
                  <li>Daftar harga</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Services Section -->
  <div id="services" class="text-center">
    <div class="container">
      <div class="section-title">
        <h2>Price List</h2>
        <center>
          <table class="table table-bordered table-responsive">
            <tr>
              <th><center><h3>No</h3></center></th>
              <th><center><h3>Nama</h3></center></th>
              <th><center><h3>Harga</h3></center></th>
              <th><center><h3>Report</h3></center></th>
            </tr>
            <td>
              @foreach($user as $nama)
              <tr>
                <?php for ($i=1; $i <= 1; $i++) { ?>
                  <td>{{$nama->id}}</td>
                  <td>{{$nama->nama_produk}}</td>
                  <td>Rp. {{$nama->harga}}</td>
                  <td><center><a href="">report</a></center></td>
                <?php }?>
              </tr>
              @endforeach
            </td>
          </table>
        </center>
      </div>
    </div>
  </div>

  <!-- Gallery Section -->
  <div id="portfolio" class="text-center">
    <div class="container">
      <div class="section-title">
        <h2>Gallery</h2>
      </div>

      <div class="row">
        <div class="portfolio-items">
          <div class="col-sm-6 col-md-4 col-lg-4">
            <div class="portfolio-item">
              <div class="hover-bg"> <a href="{{asset('/img/portfolio/1.jpg')}}" title="Gallery" data-lightbox-gallery="gallery1">
                <div class="hover-text">
                  <h4>Padi</h4>
                </div>
                <img src="{{asset('/img/portfolio/1.1.jpg')}}" class="img-responsive" alt="Gallery"> </a> </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-4 col-lg-4">
            <div class="portfolio-item">
              <div class="hover-bg"> <a href="{{asset('/img/portfolio/2.jpg')}}" title="Gallery" data-lightbox-gallery="gallery1">
                <div class="hover-text">
                  <h4>Beras</h4>
                </div>
                <img src="{{asset('/img/portfolio/2.2.jpg')}}" class="img-responsive" alt="Gallery"> </a> </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-4 col-lg-4">
            <div class="portfolio-item">
              <div class="hover-bg"> <a href="{{asset('/img/portfolio/3.jpeg')}}" title="Gallery" data-lightbox-gallery="gallery1">
                <div class="hover-text">
                  <h4>Sayuran</h4>
                </div>
                <img src="{{asset('/img/portfolio/3.3.jpeg')}}" class="img-responsive" alt="Gallery"> </a> </div>
            </div>
          </div>
          
          <div class="col-sm-6 col-md-4 col-lg-4">
            <div class="portfolio-item">
              <div class="hover-bg"> <a href="{{asset('/img/portfolio/4.jpg')}}" title="Gallery" data-lightbox-gallery="gallery1">
                <div class="hover-text">
                  <h4>Kentang</h4>
                </div>
                <img src="{{asset('/img/portfolio/4.4.jpg')}}" class="img-responsive" alt="Gallery"> </a> </div>
            </div>
          </div>
          
          <div class="col-sm-6 col-md-4 col-lg-4">
            <div class="portfolio-item">
              <div class="hover-bg"> <a href="{{asset('/img/portfolio/5.jpg')}}" title="Gallery" data-lightbox-gallery="gallery1">
                <div class="hover-text">
                  <h4>Bawang</h4>
                </div>
                <img src="{{asset('/img/portfolio/5.5.jpg')}}" class="img-responsive" alt="Gallery"> </a> </div>
            </div>
          </div>
          
          <div class="col-sm-6 col-md-4 col-lg-4">
            <div class="portfolio-item">
              <div class="hover-bg"> <a href="{{asset('/img/portfolio/6.jpg')}}" title="Gallery" data-lightbox-gallery="gallery1">
                <div class="hover-text">
                  <h4>Buah-buahan</h4>
                </div>
                <img src="{{asset('/img/portfolio/6.6.jpg')}}" class="img-responsive" alt="Gallery"> </a> </div>
            </div>
          </div>
          
          <div class="col-sm-6 col-md-4 col-lg-4">
            <div class="portfolio-item">
              <div class="hover-bg"> <a href="{{asset('/img/portfolio/7.jpg')}}" title="Gallery" data-lightbox-gallery="gallery1">
                <div class="hover-text">
                  <h4>Bawang putih</h4>
                </div>
                <img src="{{asset('/img/portfolio/7.7.jpg')}}" class="img-responsive" alt="Gallery"> </a> </div>
            </div>
          </div>
          
          <div class="col-sm-6 col-md-4 col-lg-4">
            <div class="portfolio-item">
              <div class="hover-bg"> <a href="{{asset('/img/portfolio/8.jpg')}}" title="Gallery" data-lightbox-gallery="gallery1">
                <div class="hover-text">
                  <h4>Garam</h4>
                </div>
                <img src="{{asset('/img/portfolio/8.8.jpg')}}" class="img-responsive" alt="Gallery"> </a> </div>
            </div>
          </div>
          
          <div class="col-sm-6 col-md-4 col-lg-4">
            <div class="portfolio-item">
              <div class="hover-bg"> <a href="{{asset('/img/portfolio/9.jpg')}}" title="Gallery" data-lightbox-gallery="gallery1">
                <div class="hover-text">
                  <h4>Semangka</h4>
                </div>
                <img src="{{asset('/img/portfolio/9.9.jpg')}}" class="img-responsive" alt="Gallery"> </a> </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Contact Section -->
  <div id="contact">
    <div class="container">
      <div class="col-md-8">
        <div class="row">
          <div class="section-title">
            <h2>Kirim email untuk saran</h2>
          </div>

          <form name="sentMessage" id="contactForm" novalidate>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" id="name" class="form-control" placeholder="Name" required="required">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
          
              <div class="col-md-6">
                <div class="form-group">
                  <input type="email" id="email" class="form-control" placeholder="Email" required="required">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
            </div>
          
            <div class="form-group">
              <textarea name="message" id="message" class="form-control" rows="4" placeholder="Message" required></textarea>
              <p class="help-block text-danger"></p>
            </div>
          
            <div id="success"></div>
            <button type="submit" class="btn btn-custom btn-lg">Send Email</button>
          </form>
        </div>
      </div>

      <div class="col-md-3 col-md-offset-1 contact-info">
        <div class="contact-item">
          <h3>Contact Info</h3>
          <p><span><i class="fa fa-map-marker"></i> Address</span>Bandung</p>
        </div>
      
        <div class="contact-item">
          <p><span><i class="fa fa-phone"></i> Phone</span> +62897653543</p>
        </div>
      
        <div class="contact-item">
          <p><span><i class="fa fa-envelope-o"></i> Email</span> mpr@company.com</p>
        </div>
      </div>
    
    </div>
  </div>

  <div id="footer">
    <div class="container text-center">
      <p>&copy; 2018 Market Price Report</p>
    </div>
  </div>

  <script type="text/javascript" src="{{asset('/js/jquery.1.11.1.js')}}"></script>
  <script type="text/javascript" src="{{asset('/js/bootstrap.js')}}"></script>
  <script type="text/javascript" src="{{asset('/js/SmoothScroll.js')}}"></script>
  <script type="text/javascript" src="{{asset('/js/nivo-lightbox.js')}}"></script>
  <script type="text/javascript" src="{{asset('/js/jqBootstrapValidation.js')}}"></script>
  <script type="text/javascript" src="{{asset('/js/contact_me.js')}}"></script>
  <script type="text/javascript" src="{{asset('/js/main.js')}}"></script>
</body>
</html>
