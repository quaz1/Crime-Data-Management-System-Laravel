@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
          @if(count($errors)> 0)
            @foreach($errors->all() as $error)
                <div class="alert alert-danger">{{$error}}</div>
            @endforeach
          @endif
          @if(session('response'))
          <div class="alert alert-success">
            {{session('response')}}
          </div>
          @endif
            <div class="panel panel-default">
                <center><div class="panel-heading">VIEW TIP</div></center><hr>
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="col-md-8">
                        @if(count($submitatips)>0)
                          @foreach($submitatips->all() as $submitatip)
                            <b><h4>{{$submitatip->submitatip_title}}</h4></b>
                            <p>{{$submitatip->submitatip_body}}</p><hr>
                          @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
