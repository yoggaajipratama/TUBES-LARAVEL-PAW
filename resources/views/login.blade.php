<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-witdh, initial-scale=1.0">
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="{{asset('/css/style2.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset ('/css/style.css')}}">
	<link rel="stylesheet" type="text/css"  href="{{asset ('/css/bootstrap.css')}}">
  	<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
</head>

<body id="contrib">
<!-- navbar -->
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
	            <li><a href="{{url('/')}}" class="page-scroll">Home</a></li>
	        </ul>
	    </div>
	  </div>
	</nav>

	<center>
		<div class="portal">
			<form action="" method="post">
			<h1>Login</h1>
				<input type="username" name="username" placeholder="Username" class="username" autocomplete="off"> <br><br>
				<input type="password" name="password" placeholder="Password" class="password" autocomplete="off"> <br><br>
				<a href="{{url('/mpr/newaccount')}}" class="create" class="a1">Create new account</a>
				<button type="submit" name="submit" class="submit">Login</button>
			</form>
		</div>
	</center>

	<div id="footer2">
	  <div class="container text-center">
	    <p>&copy; 2018 Market Price Report</p>
	  </div>
	</div>
	
</body>
</html>
