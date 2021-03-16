@extends("layouts.app")
@section("content")
<div class="row">
    <div class="col-12 col-md-6 offset-md-3">
        <h1>Hola {{$user->name}}</h1>
        <h2>{{$user->email}}</h2>
        @foreach($user->contacts as $contact)
         <div class="list-group">
            <a href="{{route("contact.details",['id'=>$contact->id])}}" class="list-group-item list-group-item-action active" aria-current="true">
                <div class="d-flex w-100 justify-content-between">
                    <div>
                        <h5 class="mb-1">{{$contact->user->name}}</h5>
                        <small>{{$contact->user->email}}</small>
                    </div> 
                    <h6 class="mb-1">{{$contact->created_at}}</h6>

                </div>
                <p class="mb-1">{{$contact->message}}</p>
            </a>
         </div>
        @endforeach
    </div>
</div>
@endsection