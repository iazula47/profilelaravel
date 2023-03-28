@include('partials.header')

<form action="/updateCustomer" method="POST">

    @csrf

    @error('email')
        <p>Invalid Account</p>
    @enderror

  <div class="form-group">
    <label for="exampleInputEmail1">ID</label>
    <input type="hidden" name="id" class="form-control" value="{{$customer->id}}">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" value="{{$customer->email}}"/>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">First Name</label>
    <input type="text" name="firstName" class="form-control" value="{{$customer->firstName}}"/>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Last Name</label>
    <input type="text" name="lastName" class="form-control" value="{{$customer->lastName}}"/>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Address</label>
    <input type="text" name="address" class="form-control" value="{{$customer->address}}"/>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@include('partials.footer')