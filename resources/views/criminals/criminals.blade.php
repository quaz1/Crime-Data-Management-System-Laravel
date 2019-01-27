@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <center><div class="panel-heading">CRIMINALS</div></center>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="panel panel-default text-center">
                      <div class="panel-heading">
                        <div class="row">
                          <div class="col-md-4">
                            
                          </div>
                          <div class="col-lg-8">
                            <form action='{{url("/criminals/search")}}' method="post">
                              {{csrf_field()}}
                                <div class="input-group">
                                  <input type="text" name="search" class="form-control" placeholder="Search for: ">
                                    <span class="input-group-btn">
                                      <button type="submit" class="btn btn-default">Go!</button>
                                    </span>
                                </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>

                    <form class="form-horizontal" method="POST" action="{{ url('/addcriminals') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('criminals_name') ? ' has-error' : '' }}">
                            <label for="criminals_name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="criminals_name" type="text" class="form-control" name="criminals_name" value="{{ old('criminals_name') }}" required autofocus>

                                @if ($errors->has('criminals_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('criminals_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('criminals_age') ? ' has-error' : '' }}">
                            <label for="criminals_age" class="col-md-4 control-label">Age</label>

                            <div class="col-md-6">
                                <input id="criminals_age" type="text" class="form-control" name="criminals_age" value="{{ old('criminals_age') }}" required autofocus>

                                @if ($errors->has('criminals_age'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('criminals_age') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('criminals_dob') ? ' has-error' : '' }}">
                            <label for="criminals_dob" class="col-md-4 control-label">Date of Birth</label>

                            <div class="col-md-6">
                                <input id="criminals_dob" type="text" class="form-control" name="criminals_dob" value="{{ old('criminals_dob') }}" required autofocus>

                                @if ($errors->has('criminals_dob'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('criminals_dob') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('criminals_gender') ? ' has-error' : '' }}">
                            <label for="criminals_gender" class="col-md-4 control-label">Gender</label>

                            <div class="col-md-6">
                                <input id="criminals_gender" type="text" class="form-control" name="criminals_gender" value="{{ old('criminals_gender') }}" required autofocus>

                                @if ($errors->has('criminals_gender'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('criminals_gender') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('criminals_nid') ? ' has-error' : '' }}">
                            <label for="criminals_nid" class="col-md-4 control-label">NID</label>

                            <div class="col-md-6">
                                <input id="criminals_nid" type="text" class="form-control" name="criminals_nid" value="{{ old('criminals_nid') }}" required autofocus>

                                @if ($errors->has('criminals_nid'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('criminals_nid') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('criminals_blood') ? ' has-error' : '' }}">
                            <label for="criminals_blood" class="col-md-4 control-label">Blood Group</label>

                            <div class="col-md-6">
                                <input id="criminals_blood" type="text" class="form-control" name="criminals_blood" value="{{ old('criminals_blood') }}" required autofocus>

                                @if ($errors->has('criminals_blood'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('criminals_blood') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('criminals_status') ? ' has-error' : '' }}">
                            <label for="criminals_status" class="col-md-4 control-label">Status</label>

                            <div class="col-md-6">
                                <input id="criminals_status" type="text" class="form-control" name="criminals_status" value="{{ old('criminals_status') }}" required autofocus>

                                @if ($errors->has('criminals_status'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('criminals_status') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('criminals_regno') ? ' has-error' : '' }}">
                            <label for="criminals_regno" class="col-md-4 control-label">Registration No</label>

                            <div class="col-md-6">
                                <input id="criminals_regno" type="text" class="form-control" name="criminals_regno" value="{{ old('criminals_regno') }}" required autofocus>

                                @if ($errors->has('criminals_regno'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('criminals_regno') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('criminals_regdate') ? ' has-error' : '' }}">
                            <label for="criminals_regdate" class="col-md-4 control-label">Registration Date</label>

                            <div class="col-md-6">
                                <input id="criminals_regdate" type="text" class="form-control" name="criminals_regdate" value="{{ old('criminals_regdate') }}" required autofocus>

                                @if ($errors->has('criminals_regdate'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('criminals_regdate') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('criminals_crime') ? ' has-error' : '' }}">
                            <label for="criminals_crime" class="col-md-4 control-label">Crime</label>

                            <div class="col-md-6">
                                <textarea id="criminals_crime" type="text" rows="5" class="form-control" name="criminals_crime" value="{{ old('criminals_crime') }}" required autofocus></textarea>

                                @if ($errors->has('criminals_crime'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('criminals_crime') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Add
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
