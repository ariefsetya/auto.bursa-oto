@extends('app')

@section('title') Dashboard &raquo; Province @endsection

@section('content')
<div class='panel panel-default'>
  <div class='panel-heading'>
    <i class='icon-cloud icon-large'></i>
    Auto Admin Province
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
          <th>Name</th>
        </tr>
      </thead>
      <tbody>
      <?php $i=1;?>
      @foreach(\DB::table('provinces')->get() as $key)
          <tr>
            <td class="text-center">{{$i++}}</td>
            <td>{{$key->nama}}</td>
          </tr>
      @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection