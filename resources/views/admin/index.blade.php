@extends('layouts.admin')

@section('content')
<div class="col-md-12">
    <div class="card bg-default">
        <div class="card-body">

            <h3 class="card-subtitle mb-2 text-muted">{{$card}}</h3>
            <hr />
            @include('partials.flash-messages')
            <p>{{$welcome}}</p>
        </div>
    </div>
</div>

@endsection