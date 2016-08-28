@extends('app')

@section('title') Dashboard &raquo; City @endsection

@section('content')
<div class='panel panel-default'>
  <div class='panel-heading'>
    <i class='icon-cloud icon-large'></i>
    Auto Admin City
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
          <th>Province</th>
          <th>Name</th>
          <th>Type</th>
        </tr>
      </thead>
      <tbody>
      <?php $i=1;?>
      @foreach(\DB::table('cities')->get() as $key)
          <tr>
            <td class="text-center">{{$i++}}</td>
            <td>{{$key->provinsi}}</td>
            <td>{{$key->nama}}</td>
            <td>{{$key->type}}</td>
          </tr>
      @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection