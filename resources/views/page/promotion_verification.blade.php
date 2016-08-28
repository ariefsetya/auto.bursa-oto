@extends('app')

@section('title') Dashboard &raquo; Promotion Verification @endsection

@section('content')
<div class='panel panel-default'>
  <div class='panel-heading'>
    <i class='icon-cloud icon-large'></i>
    Auto Admin Promotion Verification
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
      @foreach(\DB::table('products')->where('status',1)->where('promo',1)->get() as $key)
      <tbody>
        <tr>
          <td rowspan="4" style="vertical-align: top;text-align: center;">{{$i++}}</td>
          <td>{{$key->name}}</td>
          <td class="text-center" rowspan="4">
          <a href="{{url('promotion/approve/'.$key->id)}}" class="btn btn-success"><i class="icon-check"></i> Approve</a>
          <hr>
          <a href="{{url('promotion/decline/'.$key->id)}}" class="btn btn-danger"><i class="icon-trash"></i> Decline</a>
          </td>
        </tr>
        <tr>
          <td>Promotion Type : by {{$key->promotion_type}} => {{($key->promotion_type=="nominal"?"Rp. ":"").number_format($key->discount).($key->promotion_type=="percent"?"%":"")}} OFF<br>
          From : Rp. {{number_format($key->price)}} => Rp. {{number_format(str_replace(array(".",","),"",$key->new_price))}} 
          </td>
        </tr>
        <tr>
          <td style="max-width:500px !important;word-break: all;white-space: pre-line;">Promotion Text : <br>{!!$key->promotion_text!!}</td>
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
      </tbody>
      @endforeach
    </table>
  </div>
</div>
@endsection