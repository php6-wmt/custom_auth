@extends('admin.layouts.master')
@section('title','admin')
@section('content')

    <form class="form-horizontal" action="{{ url('admin/login') }}" method="post">
        {{ csrf_field() }}
        <fieldset>

            <!-- Form Name -->
            <legend>Admin Login</legend>

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
                    <input name="password" type="password" placeholder="password"
                           class="form-control input-md">

                </div>
            </div>

            <!-- Button -->
            <div class="form-group">
                <div class="col-md-4">
                    <button type="submit" class="btn btn-primary">login</button>
                </div>
            </div>

        </fieldset>
    </form>

@endsection