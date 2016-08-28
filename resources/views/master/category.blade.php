@extends('app')

@section('title') Dashboard &raquo; Category @endsection

@section('content')
<div class='panel panel-default'>
  <div class='panel-heading'>
    <i class='icon-cloud icon-large'></i>
    Auto Admin Category
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
          <th>Type</th>
          <th>Name</th>
          <th>Description</th>
        </tr>
      </thead>
      <tbody>
      <?php $i=1;?>
      @foreach(\DB::table('kategoris')->get() as $key)
          <tr>
            <td class="text-center">{{$i++}}</td>
            <td>{{\DB::table('j_kategoris')->where('id',$key->id_jenis)->first()->name}}</td>
            <td>{{$key->name}}</td>
            <td>{{$key->description}}</td>
          </tr>
      @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection