<!doctype html>
<html>
<head lang="cn">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>{{ $title }}</title>
  <meta name="viewport" content="width=device-width, , initial-scale=1.0">
  <link href="//fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet" 
        type="text/css">

	{{ HTML::style('css/bootstrap/css/bootstrap.min.css') }}
	{{ HTML::style('css/bootstrap/css/bootstrap-responsive.min.css') }}
	{{ HTML::script('css/bootstrap/js/jquery-1.9.1.min.js') }}
	{{ HTML::script('css/bootstrap/js/bootstrap.min.js') }}


	{{ HTML::style('css/jquery-ui-git.css') }}
	{{ HTML::style('css/flexslider.css') }}

	{{ HTML::script('js/jquery-ui-git.js') }}
	{{ HTML::script('js/jquery.limit.js') }}

	{{ HTML::script('js/jquery.flexslider.js') }}

	{{ HTML::script('js/global.js') }}


	{{ HTML::style('css/style.css') }}

</head>

<body class="{{ $class }}">
  <div class="container">
  	<div class="row-fluid header">
  	  <div class="span4 logo">
  	  	<a href="{{ URL::to('/') }}"><img class="logo" src="{{ URL::asset('img/logo.png') }}" /></a>
  	  </div>
  	  <div class="span6 menu">
  	  	<ul>
  	  	  <li><a href="#popup" data-toggle="modal">创建图邮</a></li>
		      <li>{{ link_to_route('pcredit', '购买') }}</li>
  	  	  <li>{{ link_to_route('cart', '购物车') }}</li>
  	  	  <li>{{ link_to_route('contact', '联系我们') }}</li>
  	  	  <li>{{ link_to_route('login', '登录') }}</li>
  	  	  <li>{{ link_to_route('register', '注册') }}</li>
  	  	</ul>
  	  </div>
  	  <div class="span2 social">
  	  	<a href="https://www.facebook.com/TheFoldagram" target="_blank">
  	  	<img class="facebook" src="{{ URL::to('/') }}/img/img_trans.png" /></a>

  	  	<a href="https://twitter.com/thefoldagram" target="_blank">
  	  	<img class="twit" src="{{ URL::to('/') }}/img/img_trans.png" /></a>

  	  	<a href="https://pinterest.com/thefoldagram/" target="_blank">
  	  	<img class="ping" src="{{ URL::to('/') }}/img/img_trans.png" /></a>
  	  </div>
  	</div>

  	@yield('inner-banner')

  	<div class="row-fluid content">
  	  @yield('content')
  	</div>

  	<div class="row-fluid subcribe-form">

	  @if ($errors->any())
	  	  <div class="span6 alert alert-error">
	  	  	<ul>
	  	  	  {{ implode('', $errors->all('<li class="error">:message</li>')) }}
	  	  	</ul>
	  	  </div>
	  @endif
  	  	
  	  <div class="span12 subscribe-content">
  	  	{{ Form::open(array('url' => 'subscribe')) }}
  	  	{{ Form::label('something', '发送新照片图片地址') }}
  	  	{{ Form::text('email', null, array('class' => 'input-large', 'placeholder' => '')) }}
  	  	{{ Form::submit('订购', array('class' => 'btn')) }}
  	  	{{ Form::close() }}
  	  </div>
  	</div>

  	<div class="row-fluid footer">

  	  <div class="span8 footer-menu">
  	  	<ul>
  	  	  <li>{{ link_to_route('contact', '联系我们') }}</li>
  	  	  <li>{{ link_to_route('about', '关于') }}</li>
  		  <li>{{ link_to_route('login', '登录') }}</li>
  	  	  <li>{{ link_to_route('register', '注册') }}</li>
  	  	</ul>
  	  </div>

  	  <div class="span4 copyright">
  	  	<h4>Foldagram is patent pending</h4>
		<p>&copy;Copyright by sangoly, 2014</p>
  	  </div>

  	</div>
  </div><!--end container-->
  @include('foldagram')
</body>
</html>