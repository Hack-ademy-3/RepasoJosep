@extends("layouts.app")
@section("content")
<div class="row">
    <div class="col-12 col-md-6 offset-md-3">
   <h1>Contactes rebuts</h1>
    @foreach($contactos as $contacto)
    <div class="list-group">
  <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
    <div class="d-flex w-100 justify-content-between">
        <div>
            <h5 class="mb-1">{{$contacto->name}}</h5>
             <small>{{$contacto->email}}</small>
        </div>
        <h6 class="mb-1">{{$contacto->created_at}}</h6>

    </div>
    <p class="mb-1">{{$contacto->message}}</p>
    
  </a>
  
</div>
    @endforeach
    </div>
</div>
@endsection
