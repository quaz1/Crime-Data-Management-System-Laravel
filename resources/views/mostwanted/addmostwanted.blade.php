@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">ADDING MOSTWANTED</div>
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form class="form-horizontal" method="POST" action="{{ url('/addingmostwanted') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('mostwanted_title') ? ' has-error' : '' }}">
                            <label for="mostwanted_title" class="col-md-4 control-label">Title</label>

                            <div class="col-md-6">
                                <input id="mostwanted_title" type="text" class="form-control" name="mostwanted_title" value="{{ old('mostwanted_title') }}" required autofocus>

                                @if ($errors->has('mostwanted_title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('mostwanted_title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('mostwanted_name') ? ' has-error' : '' }}">
                            <label for="mostwanted_name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="mostwanted_name" type="text" class="form-control" name="mostwanted_name" value="{{ old('mostwanted_name') }}" required autofocus>

                                @if ($errors->has('mostwanted_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('mostwanted_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('mostwanted_image') ? ' has-error' : '' }}">
                            <label for="mostwanted_image" class="col-md-4 control-label">Image</label>

                            <div class="col-md-6">
                                <input id="mostwanted_image" type="file" class="form-control" name="mostwanted_image" value="{{ old('mostwanted_image') }}" required autofocus>

                                @if ($errors->has('mostwanted_image'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('mostwanted_image') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    ADD
                                </button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
