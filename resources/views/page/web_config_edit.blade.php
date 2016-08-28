@extends('app')

@section('title') Dashboard &raquo; Web Config &raquo; Edit @endsection

@section('content')
<div class='panel panel-default'>
  <div class='panel-heading'>
    <i class='icon-cloud icon-large'></i>
    Auto Admin Web Config
    <div class='panel-tools'>
      <div class='btn-group'>
        <a class='btn' href=''>
          <i class='icon-refresh'></i>
          Refresh Data
        </a>
      </div>
    </div>
  </div>
  <div class='panel-body'>
  <form method="POST">
  <input type="hidden" name="_token" value="{{csrf_token()}}"></input>
  <input type="hidden" name="id" value="{{$data->id}}"></input>
    <table class="table">
      <tr>
        <td>Key</td>
        <td><input class="form-control" type="text" name="key" value="{{$data->key}}"></input></td>
      </tr>
      <tr>
        <td>Type</td>
        <td><input class="form-control" type="text" name="type" value="{{$data->type}}"></input></td>
      </tr>
      <tr>
        <td>Value</td>
        <td><input class="form-control" type="text" name="value" value="{{$data->value}}"></input></td>
      </tr>
      <tr>
        <td></td>
        <td><button class="btn btn-primary" type="submit">Update</button></td>
      </tr>
    </table>
  </form>
  </div>
</div>
@endsection