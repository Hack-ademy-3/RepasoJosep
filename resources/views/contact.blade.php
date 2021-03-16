@extends("layouts.app")
@section("content")
<div class="row">
    <div class="col-12 col-md-6 offset-md-3">
    <form action="{{route('contact.store')}}" method="POST">
    @csrf
    
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Mensaje</label>
    <textarea name="message" id="" cols="80" rows="10"></textarea>
  </div>
 
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>
    </div>
</div>
@endsection