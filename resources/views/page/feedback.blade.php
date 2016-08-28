@extends('app')

@section('title') Dashboard &raquo; Feedback @endsection

@section('content')
<div class='panel panel-default'>
  <div class='panel-heading'>
    <i class='icon-cloud icon-large'></i>
    Auto Admin Feedback
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
          <th>E-Mail</th>
          <th>Message</th>
          <th>DateTime</th>
        </tr>
      </thead>
      <tbody>
      <?php $i=1;?>
      @foreach(\DB::table('feedbacks')->orderBy('id','desc')->get() as $key)
          <tr>
            <td class="text-center">{{$i++}}</td>
            <td>{{$key->name}}</td>
            <td>{{$key->email}}</td>
            <td>{{$key->message}}</td>
            <td>{{date_format(date_create($key->created_at),"D, d M Y H:i:s")}}</td>
          </tr>
      @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection