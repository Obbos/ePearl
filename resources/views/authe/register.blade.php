@extends('layouts.master')
     
     @section('content')
                <div class="container">
                	<form action="post" class="form-signin">
					 <img class="mb-4" src="{{ asset("images/epearl.png")}}" alt="" >
						<h1 class="h3 mb-3 font-weight-normal">Please Register</h1>
						@if(count($errors) > 0)
						<div class="alert alert-danger">
							@foreach($errors->all() as $error)
							<p>{{ $error}}</p>
							@endforeach
						</div>
						@endif
						   <div class="form-group">
							      <label for="inputEmail" class="sr-only">User Name</label>
								  <input type="username" id="userName" class="form-control" placeholder="User Name" required autofocus>
								  <label for="inputEmail" class="sr-only">Email address</label>
								  <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
								  <label for="inputPassword" class="sr-only">Password</label>
								  <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
								  <div class="checkbox mb-3">
								    <label>
								      <p> If you have already register,<a href="">sign in.</a> 
								    </p>
								  </div>
								  <button class="btn btn-md btn-primary btn-block" type="submit">Sign in</button>
								  
						     </div>
						
					</form>
			</div>
	  @endsection