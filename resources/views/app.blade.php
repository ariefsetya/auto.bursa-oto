<!DOCTYPE html>
<html class='no-js' lang='en'>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset='utf-8'>
    <meta content='IE=edge,chrome=1' http-equiv='X-UA-Compatible'>
    <title>Dashboard</title>
    <meta content='lab2023' name='author'>
    <meta content='' name='description'>
    <meta content='' name='keywords'>
    <link href="{{url('assets/stylesheets/application-a07755f5.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{url('assets/netdna.bootstrapcdn.com/font-awesome/3.2.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{url('assets/images/favicon.ico')}}" rel="icon" type="image/ico" />
    
  </head>
  <body class='main page'>
    <div class='navbar navbar-default' id='navbar'>
      <a class='navbar-brand' href='#'>
        <i class='icon-lock'></i>
        Auto Admin
      </a>
      <ul class='nav navbar-nav pull-right'>
        <li class='dropdown'>
          <a class='dropdown-toggle' data-toggle='dropdown' href='#'>
            <i class='icon-envelope'></i>
            Messages
            <span class='badge'>5</span>
            <b class='caret'></b>
          </a>
          <ul class='dropdown-menu'>
            <li>
              <a href='#'>New message</a>
            </li>
            <li>
              <a href='#'>Inbox</a>
            </li>
            <li>
              <a href='#'>Out box</a>
            </li>
            <li>
              <a href='#'>Trash</a>
            </li>
          </ul>
        </li>
        <li>
          <a href='#'>
            <i class='icon-cog'></i>
            Settings
          </a>
        </li>
        <li class='dropdown user'>
          <a class='dropdown-toggle' data-toggle='dropdown' href='#'>
            <i class='icon-user'></i>
            <strong>John DOE</strong>
            <img class="img-rounded" src="https://placeholdit.imgix.net/~text?txtsize=5&amp;bg=cccccc&amp;txtclr=777777&amp;txt=20%C3%9720&amp;w=20&amp;h=20&amp;txtpad=1" />
            <b class='caret'></b>
          </a>
          <ul class='dropdown-menu'>
            <li>
              <a href='#'>Edit Profile</a>
            </li>
            <li class='divider'></li>
            <li>
              <a href="{{url('auth/logout')}}">Sign out</a>
            </li>
          </ul>
        </li>
      </ul>
    </div>
    <div id='wrapper'>
      <section id='sidebar'>
        <i class='icon-align-justify icon-large' id='toggle'></i>
        <ul id='dock'>
          <li class='{{$dashboard or ''}} launcher'>
            <i class='icon-dashboard'></i>
            <a href="{{url()}}">Dashboard</a>
          </li>
          <li class='{{$ads_verification or ''}} launcher'>
            <i class='icon-check'></i>
            <a href="{{url('ads/verification')}}">Ads Verification</a>
          </li>
          <li class='{{$web_config or ''}} launcher'>
            <i class='icon-table'></i>
            <a href="{{url('web/config')}}">Web Config</a>
          </li>
          <li class='{{$master_data  or ''}} launcher dropdown hover'>
            <i class='icon-list'></i>
            <a href='#'>Master Data</a>
            <ul class='dropdown-menu'>
              <!-- <li class='dropdown-header'></li> -->
              <li><a href='{{url("master/pilar")}}'>Pilar</a></li>
              <li><a href='{{url("master/category_type")}}'>Category Type</a></li>
              <li><a href='{{url("master/category")}}'>Category</a></li>
              <li><a href='{{url("master/province")}}'>Province</a></li>
              <li><a href='{{url("master/city")}}'>City</a></li>
            </ul>
          </li>
          <li class='launcher'>
            <i class='icon-bug'></i>
            <a href='#'>Feedback</a>
          </li>
        </ul>
        <div data-toggle='tooltip' id='beaker' title='Auto Admin'></div>
      </section>
      <section id='tools'>
        <ul class='breadcrumb' id='breadcrumb'>
          <li class='title'>@yield('title')</li>
        </ul>
        <div id='toolbar'>
          <div class='btn-group'>
            <a class='btn' data-toggle='toolbar-tooltip' href='#' title='Building'>
              <i class='icon-building'></i>
            </a>
            <a class='btn' data-toggle='toolbar-tooltip' href='#' title='Laptop'>
              <i class='icon-laptop'></i>
            </a>
            <a class='btn' data-toggle='toolbar-tooltip' href='#' title='Calendar'>
              <i class='icon-calendar'></i>
              <span class='badge'>3</span>
            </a>
            <a class='btn' data-toggle='toolbar-tooltip' href='#' title='Lemon'>
              <i class='icon-lemon'></i>
            </a>
          </div>
          <div class='label label-danger'>
            Danger
          </div>
          <div class='label label-info'>
            Info
          </div>
        </div>
      </section>
      <div id='content'>
        @yield('content')
      </div>
    </div>
    <script src="{{url('assets/ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js')}}" type="text/javascript"></script><script src="{{url('assets/ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js')}}" type="text/javascript"></script><script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js" type="text/javascript"></script><script src="{{url('assets/javascripts/application-985b892b.js')}}" type="text/javascript"></script>
  </body>
</html>
