@extends('layouts.app')
@section('title','Halaman pengguna');
@section('content')
<div class="portal">
	<center>
		<form action="" method="post">
	        <h1>New Account</h1>
	        <input type="text" name="username" placeholder="Nama lengkap" class="nama" autocomplete="off">
	        <br><br>
	        <input type="text" name="email" placeholder="Email" class="username" autocomplete="off">
	        <br><br>
	        <input type="text" name="telp" placeholder="Number phone" class="username" autocomplete="off">
	        <br><br>
	        <input type="password" name="password" placeholder="Password" class="password">
	        <br><br>
	        <input type="submit" name="submit" value="Create" class="submit">
    	</form>
	</center>
</div>
@endsection
