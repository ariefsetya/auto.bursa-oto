@extends('app')

@section('title') Dashboard &raquo; Web Config @endsection

@section('content')
<div class='panel panel-default'>
  <div class='panel-heading'>
    <i class='icon-cloud icon-large'></i>
    Auto Admin Web Config
    <div class='panel-tools'>
      <div class='btn-group'>
        <a class='btn' href=''>
          <i class='icon-refresh'></i>
          Refresh List
        </a>
      </div>
    </div>
  </div>
  <div class='panel-body'>
    <table class="table">
      <thead>
        <tr>
          <th class="text-center">No</th>
          <th>Key</th>
          <th>Type</th>
          <th style="width: 400px;">Value</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
      <?php $i=1;?>
      @foreach(\DB::table('appconfigs')->get() as $key)
          <tr>
            <td class="text-center">{{$i++}}</td>
            <td>{{$key->key}}</td>
            <td>{{$key->type}}</td>
            <td>{{$key->value}}</td>
            <td><a href="{{url('web/config/'.$key->id)}}">Edit Value</a></td>
          </tr>
      @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection