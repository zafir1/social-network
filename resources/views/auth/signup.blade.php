@extends('templetes.default')

@section('title','Signup | Chatty')

@section('content')
	<form action="/signup" method="POST" class="form-group">
		@csrf
	  <div class="form-group {{ $errors->has('email') ? 'is-invalid' : '' }}">
	    <label for="email" class="{{ $errors->has('email') ? 'text-danger' : '' }}">Email address:</label>
	    <input type="email" placeholder="Enter your email address..." name="email" class="form-control {{ $errors->has('email') ? 'text-danger is-invalid' : '' }}" id="email" autocomplete="off" value="{{ old('email') }}">
	    @if($errors->has('email'))
	    	<span class="small text-danger">
	    		{{ $errors->first('email') }}
	    	</span>
	    @endif
	  </div>
	  <div>
	    <label for="username" class="{{ $errors->has('username') ? 'text-danger' : '' }}">Username:</label>
	    <input type="username" placeholder="Enter a unique Username... " name="username" class="form-control {{ $errors->has('username') ? 'text-danger is-invalid' : '' }}" id="username" autocomplete="off" value="{{ old('username') }}">
	    @if($errors->has('username'))
	    	<span class="small text-danger">
	    		{{ $errors->first('username') }}
	    	</span>
	    @endif
	  </div>
	  <br>
	  <div class="form-group">
	    <label for="pwd" class="{{ $errors->has('password') ? 'text-danger' : '' }}">Password:</label>
	    <input type="password" placeholder="Type Password..." name="password" class="form-control {{ $errors->has('password') ? 'text-danger is-invalid' : '' }}" id="pwd" autocomplete="off">
	    @if($errors->has('username'))
	    	<span class="small text-danger">
	    		{{ $errors->first('password') }}
	    	</span>
	    @endif
	  </div>
	  <br>
	  <div class="form-group form-check">
	    <label class="form-check-label">
	      <input class="form-check-input" type="checkbox"> Remember me
	    </label>
	  </div>
	  <button type="submit" class="btn btn-primary">Submit</button>
	</form>
@endsection

