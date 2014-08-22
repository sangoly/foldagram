@extends('layouts.default')

@section('inner-banner')
	<div class="row-fluid inner-top">
	  <div class="span6 inner-content">
	  	<h2>关于</h2>
	  	<p>There will be some introductions about the website!</p>
	  </div>
	  <img src="{{ URL::asset('img/inner-folder.png') }}">
	</div>
@stop

@section('content')
	<div class="span12 dcontent">
	  <div class="span7 about well">
	  	<h3>它的征程...</h3>
	  	<p>Add some introductions</p>
	  	<p>1..</p>
	  	<p>2..</p>
	  	<p>3..</p>
	  </div>
	  <div class="span5 well">
	  	<h3>往期作品</h3>
	  	<span>网站链接</span>
	  	<p><a href="http://offbeathome.com/2012/10/the-foldagram">Offbeat Home</a></p>
		<p><a href="http://www.coloradocountrylife.com/index.php?option=com_content&view=article&id=1068:send-a-letter&catid=39:other-resources&Itemid=91">
			Colorado Country Life</a></p>
		<h4>Audio Clips</h4>
		<p><a href="http://www.youtube.com/watch?v=QT0POw0DFr8">
			The second interview with Ski Country</a></p>
		<p><a href="http://www.youtube.com/watch?v=MQlObuRkJrk">
			The first interview with Ski Country</a></p>
	  </div>
	</div>
@stop