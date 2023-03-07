@include('partials.header')

<h3>Login Page</h3>
<form action="/login/process" method="POST">
    @csrf
    
    @error('email')
        <p>Invalid Account</p>
    @enderror

    <div class="form-outline mb-4">
      <label for="exampleInputEmail1" class="form-label">Email Address:</label>
      <input type="email" class="form-control" id="exampleInputEmail1" name="email">
    </div>

    <div class="form-outline mb-4">
      <label for="exampleInputPassword1" class="form-label">Password:</label>
      <input type="password" class="form-control" id="exampleInputPassword1" name="password">
    </div>
   

    <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>
    <h6><a href={{"/register"}}>New User? Sign up here.</a></h6>
  </form>

  
  @include('partials.footer')