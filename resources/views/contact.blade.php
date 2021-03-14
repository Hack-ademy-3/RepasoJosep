@extends("layouts.app")
@section("content")
<div class="row">
    <div class="col-12 col-md-6 offset-md-3">
    <form action="{{route('contact.store')}}" method="POST">
    @csrf
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Mensaje</label>
    <textarea name="message" id="" cols="80" rows="10"></textarea>
  </div>
 
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>
    </div>
</div>
@endsection