@extends('app')

@section('title') Dashboard @endsection

@section('content')
<div class='panel panel-default'>
  <div class='panel-heading'>
    <i class='icon-cloud icon-large'></i>
    Auto Admin Statistics
    <div class='panel-tools'>
      <div class='btn-group'>
        <a class='btn' href=''>
          <i class='icon-refresh'></i>
          Refresh statistics
        </a>
      </div>
    </div>
  </div>
  <div class='panel-body'>
<!--     <div class='page-header'>
      <h4>System usage</h4>
    </div> -->
    <!-- <div class='progress'>
      <div class='progress-bar progress-bar-success' style='width: 35%'></div>
      <div class='progress-bar progress-bar-warning' style='width: 20%'></div>
      <div class='progress-bar progress-bar-danger' style='width: 10%'></div>
    </div> -->
    <div class='page-header'>
      <h4>Statistics</h4>
    </div>
    <div class='row text-center'>
      <div class='col-md-3'>
        <input class='knob second' data-readOnly="true" data-bgcolor='#d4ecfd' data-fgcolor='#30a1ec' data-height='140' data-inputcolor='#333' data-thickness='.3' data-width='140' type='text' value='{{sizeof(\App\User::whereRaw('DATE(created_at)="'.date("Y-m-d").'"')->get())}}'>
        <br>
        New Users
      </div>
      <div class='col-md-3'>
        <input class='knob second' data-readOnly="true" data-bgcolor='#c4e9aa' data-fgcolor='#8ac368' data-height='140' data-inputcolor='#333' data-thickness='.3' data-width='140' type='text' value='{{sizeof(\DB::table('products')->where('status',0)->get())}}'>
        <br>
        Ads Need Verification
      </div>
      <div class='col-md-3'>
        <input class='knob second' data-readOnly="true" data-bgcolor='#cef3f5' data-fgcolor='#5ba0a3' data-height='140' data-inputcolor='#333' data-thickness='.3' data-width='140' type='text' value='{{sizeof(\DB::table('products')->where('status',1)->whereRaw('DATE(created_at)="'.date("Y-m-d").'"')->get())}}'>
        <br>
        New Published Ads
      </div>
      <div class='col-md-3'>
        <input class='knob second' data-readOnly="true" data-bgcolor='#f8d2e0' data-fgcolor='#b85e80' data-height='140' data-inputcolor='#333' data-thickness='.3' data-width='140' type='text' value='{{sizeof(\DB::table('products')->where('status',1)->where('promo',1)->get())}}'>
        <br>
        Published Promotion
      </div>
    </div>
  </div>
</div>
@endsection