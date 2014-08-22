@extends('layouts.default')

@section('content')
	<div class="row-fluid slider-content">
	  <div class="span12 slider">
	  	<div class="flexslider">
	  	  <ul class="slides">
	  	  	<li class="da-slider">
			  <div class="da-slide row">
			  	<div class="span5">
			  	  <h2>欢迎您，新访客！</h2>
			  	  <p>Say something there to the new visitors!</p>
			  	  <a href="#popup" data-toggle="modal" class="da-link create">
			  	  	点击这里开始旅程！
			  	  </a>
			  	  <a href="#vedio" data-toggle="modal" class="da-link video">
			  	  	观看产品视频!
			  	  </a>
			  	</div>
			  	<div class="span7 da-img">
			  	  <img src="img/slide3.png" alt="image01" />
			  	</div>
			  </div>
	  	  	</li>
	  	  	<li>
	  	  	  <div class="da-slide row">
	  	  	  	<div class="span5">
	  	  	  	  <h2>Any this you want show to the user!</h2>
	  	  	  	  <p>placeholder!!!!!!!!!!!!</p>
	  	  	  	  <a href="#popup" data-toggle="modal" class="da-link create">
			  	  	点击这里开始旅程！
			  	  </a>
			  	  <a href="#vedio" data-toggle="modal" class="da-link video">
			  	  	观看产品视频!
			  	  </a>
	  	  	  	</div>
	  	  	  	<div class="span7 da-img">
			  	  <img src="img/slide2.png" alt="image01" />
			  	</div>
	  	  	  </div>
	  	  	</li>
	  	  </ul>
	  	</div>
	  </div>
	</div>

	<div class="row-fluid fguid">
	  <div class="span4 you-click">
	  	<h2>你点击</h2>
	  	<img src="img/photo.png">
	  	<ul>
	  	  <li>1..</li>
	  	  <li>2..</li>
	  	  <li>3..</li>
	  	</ul>
	  </div>

	  <div class="span4 we-send">
	  	<h2>我发送</h2>
	  	<img src="img/fly.png">
	  	<ul>
	  	  <li>1..</li>
	  	  <li>2..</li>
	  	  <li>3..</li>
	  	</ul>
	  </div>

	  <div class="span4 they-fold">
	  	<h2>他接收</h2>
	  	<img src="img/mail.png">
	  	<ul>
	  	  <li>1..</li>
	  	  <li>2..</li>
	  	  <li>3..</li>
	  	</ul>
	  </div>
	</div>
@stop