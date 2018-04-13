@extends('superadmin.layouts.master')
@section('title','superadmin')
@section('content')

    <form class="form-horizontal"  action="{{ url('superadmin/login') }}" method="post" >
    {{ csrf_field() }}
        <fieldset>

            <!-- Form Name -->
            <legend>SuperAdmin Login</legend>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="textinput">Email</label>
                <div class="col-md-4">
                    <input name="email" type="text" placeholder="enter email"
                           class="form-control input-md">

                </div>
            </div>

            <!-- Password input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="password">Password</label>
                <div class="col-md-4">
                    <input name="passwordinput" type="password" placeholder="password"
                           class="form-control input-md">

                </div>
            </div>

            <!-- Button -->
            <div class="form-group">
                <div class="col-md-4">
                    <button id="singlebutton" name="singlebutton" class="btn btn-primary">login</button>
                </div>
            </div>

        </fieldset>
    </form>

@endsection