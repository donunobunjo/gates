@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                   <h1> 
                   if (session('status'))
                        <div class="alert alert-success">
                             session
                        </div>
                    endif
                    </h1>
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
