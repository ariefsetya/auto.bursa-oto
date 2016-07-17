@extends('app')

@section('title') Dashboard &raquo; Ads Verification @endsection

@section('content')
<div class='panel panel-default'>
  <div class='panel-heading'>
    <i class='icon-cloud icon-large'></i>
    Auto Admin Ads Verification
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
          <th>Details</th>
          <th>Action</th>
        </tr>
      </thead>
      <?php $i=1;?>
      @foreach(\DB::table('products')->where('status',0)->get() as $key)
      <tbody>
        <tr>
          <td rowspan="4" style="vertical-align: top;text-align: center;">{{$i++}}</td>
          <td>{{$key->name}}</td>
          <td class="text-center" rowspan="4">
          <a href="{{url('ads/approve/'.$key->id)}}" class="btn btn-success"><i class="icon-check"></i> Approve</a>
          <hr>
          <a href="{{url('ads/decline/'.$key->id)}}" class="btn btn-danger"><i class="icon-trash"></i> Decline</a>
          </td>
        </tr>
        <tr>
          <td>{{\DB::table('pilars')->where('id',$key->id_pilar)->first()->name}}</td>
        </tr>
        <tr>
          <td>
            Images :<br>
            @if(sizeof(\DB::table('images')->where('code','product-'.$key->id)->get())==0)
            No Images
            @endif
            @foreach(\DB::table('images')->where('code','product-'.$key->id)->get() as $kay)
              <img style="width: 100px;height: 100px;" src="{{env('URL_USER').'uploads/'.$kay->image}}">
            @endforeach
          </td>
        </tr>
        <tr>
          <td style="max-width:500px !important;word-break: all;white-space: pre-line;">{!!$key->description!!}</td>
        </tr>
      </tbody>
      @endforeach
    </table>
  </div>
</div>
@endsection