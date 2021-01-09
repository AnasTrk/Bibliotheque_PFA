@extends('layouts.master')

@section('title')
 Edit-Registred
@endsection


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">

                <div class="card-header">
                <h3>Edit Role</h3>
                </div>

                    <div class="card-body">
                   <div class="row">

                   <div class="col-md-6">

                   <form action="/role-register-update/{{ $users->id }}" method="POST">
                       {{ csrf_field()}}
                       {{ method_field('PUT')}}
                    <div class="form-group">

                    <label> Name </label>
                    <input type="text" name="username" value="{{$users->name}}" class="form-control">
</div>
    <label > Give Role</label>
    <select name="usertype" class="form-control">
        <option value="admin"> Admin </option>
        <option value="user"> User </option>
</select>
    
  
  <button type="submit" class="btn btn-success" style="width=50px;">Update</button>
  <a href="/role-register" class="btn btn-danger">Cancel</a>
  </div>

</form>
                   </div>
                   </div>
                </div>
</div>
</div>
</div>



@endsection


@section('scripts')

@endsection