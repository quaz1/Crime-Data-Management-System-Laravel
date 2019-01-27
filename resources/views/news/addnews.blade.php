@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">ADDING NEWS</div>
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form class="form-horizontal" method="POST" action="{{ url('/addingnews') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('news_title') ? ' has-error' : '' }}">
                            <label for="news_title" class="col-md-4 control-label">News Title</label>

                            <div class="col-md-6">
                                <input id="news_title" type="text" class="form-control" name="news_title" value="{{ old('news_title') }}" required autofocus>

                                @if ($errors->has('news_title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('news_title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('news_body') ? ' has-error' : '' }}">
                            <label for="news_body" class="col-md-4 control-label">News Body</label>

                            <div class="col-md-6">
                                <textarea id="news_body" type="text" rows="7" class="form-control" name="news_body" value="{{ old('news_body') }}" required autofocus></textarea>

                                @if ($errors->has('news_body'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('news_body') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('news_image') ? ' has-error' : '' }}">
                            <label for="news_image" class="col-md-4 control-label">News Image</label>

                            <div class="col-md-6">
                                <input id="news_image" type="file" class="form-control" name="news_image" value="{{ old('news_image') }}" required autofocus>

                                @if ($errors->has('news_image'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('news_image') }}</strong>
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
