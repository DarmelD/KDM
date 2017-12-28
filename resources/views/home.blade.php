@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table width="100" class="table table-striped table-colored"> 
<tr>
<th>Picture</th>
<th>Name</th>
<th>Price</th>
<th>Count</th>
<th>Summa</th>
<th>Action</th>
</tr>
@foreach($prod as $key=>$value)
<tr>
<td><img src = "{{asset('uploads/thumb/'.$value -> picture)}}" ></td>
<td><h3>{{$value->name}}</h3></td>
<td>{{$value->currency}}</td>
<th>1</th>
<td>Summa</td>
<td>
<a href="#">Dellete</a>
</td>
</tr>

@endforeach
</table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
