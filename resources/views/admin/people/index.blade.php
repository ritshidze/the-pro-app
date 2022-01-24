@extends('layouts.admin')

@section('content')
<div class="col-md-12">
    <div class="card bg-default">
        <div class="card-body">

            <h3 class="card-subtitle mb-2 text-muted">{{$card}}</h3>
            <hr />
            @include('partials.flash-messages')
            <div class="table-responsive">
                <table class="table table-condensed table-striped dataTable">
                    <tr>
                        <td>#</td>
                        <td>Name</td>
                        <td>Surname</td>
                        <td>ID Number</td>
                        <td>Mobile Number</td>
                        <td>Email</td>
                        <td>Date of Birth</td>
                        <td>Language</td>
                        <td>#</td>
                    </tr>
                    @if(sizeof($peoples) > 0)   
                        @foreach($peoples as $people)
                        <tr>
                            <td>{{$count++}}</td>
                            <td>{{$people->name}}</td>
                            <td>{{$people->surname}}</td>
                            <td>{{$people->id_number}}</td>
                            <td>{{$people->mobile_number}}</td>
                            <td>{{$people->email}}</td>
                            <td>{{$people->date_of_birth}}</td>
                            <td>{{$people->language}}</td>
                            <td>
                                <a href="{{url('view-people/'.$people->id)}}"><i class="fas fa-eye"></i></a> &nbsp;&nbsp;
                                <a href="{{url('edit-people/'.$people->id)}}"><i class="fas fa-edit"></i></a> 
                            </td>
                        </tr>
                        @endforeach
                    @else 
                    <tr>
                            <td colspan="8" style="text-align: center;">No data found</td>
                    </tr> 
                    @endif
                </table>
            </div>

        </div>
        <div class="card-footer d-flex align-items-center justify-content-between">
            <a class="small" href="#"></a>
            <div class="small float-right"><i class="fas fa-users"></i></div>
        </div>
    </div>
</div>

@endsection