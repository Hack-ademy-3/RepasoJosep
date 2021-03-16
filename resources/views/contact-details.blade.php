@extends("layouts.app")
@section("content")
<div class="row">
    <div class="col-12 col-lg-6 offset-lg-3">
        <h1>Contacto: {{$contact->user->name}}</h1>
        <small>{{$contact->user->email}}</small>
        <p>{{$contact->message}}</p>
    </div>
    <div class="col-12 col-lg-6 offset-lg-3">
   <h2>Modificar contactes</h2>
    <form action="{{route('contact.edit', ['id'=>$contact->id])}}" method="POST">
    @csrf
    @method("PUT")
   <!--  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name" value="{{$contact->name}}">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="{{$contact->email}}">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div> -->
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Missatge:</label>
    <textarea name="message" id="" cols="80" rows="10">{{$contact->message}}</textarea>
  </div>
 
  <button type="submit" class="btn btn-warning">Canvia el missatge</button>
</form>
    </div>
</div>
<div class="col-12 col-lg-6 offset-lg-3">
   <h2>Eliminar contacte</h2>
   <form action="{{route('contact.edit', ['id'=>$contact->id])}}" method="POST">
@csrf
@method('DELETE')
<button type="submit" class="btn btn-danger">Eliminar</button>
   </form>
@endsection