<div id="popup" class="modal hide fade" tabindex="-1" role="dialog"
			aria-labelledby="myModalLabel" aria-hidden="false" style="display:none;">
  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
  <div class="modal-body">
  	<div class="cfrom-wapper">
  	  <img src="{{ URL::asset('img/create-form-flow.png') }}"></img>
  	  {{ Form::open(array('url' => URL::route('contact'))) }}
  	  <div class="setp1">
  	  	<div class="message create-form">
  	  	  <textarea row="4" class="enter-message required" placeholder="请输入您的留言." 
  	  	            name="message" cols="50" draggable="false"></textarea>
  	  	  <br>还可以输入<span id="charsLeft">1200</span>个字。
  	  	  <div class="clear"></div>
  	  	  <div id="thumbnail">
  	  	  	<img src="{{ URL::asset('img/placehold.gif') }}"></img>
  	  	  </div>
  	  	  <input type="file" style="display:none;" id="upload-image" name="image" class="required" />
  	  	  <div id="upload" class="drop-area">
  	  	  	<span class="uploadfile">上传文件</span>
			<p class="help-block">文件不能大于<span>8MB</span></p>
			<p class="help-block">可用文件类型：<span>png gif jpg jpeg</span></p>
  	  	  </div>
  	  	</div>
  	  </div>

  	  <div class="address">
  	  	<div class="photocreate-form recipient_address_wapper">
  	  	  <div class="recipient_address" id="recip_1">
  	  	  	<h3>收件人地址 <span class="acount" style="display:none;">-1</span></h3>
  	  	  	<input placeholder="姓名 :" class="required" type="text" name="add[0][fullname]" value="">
  	  	  	<textarea placeholder="请在此处填写收件人地址" rows="8" class="required"
  	  	  	          name="add[0][]address_one" cols="50"></textarea>
  	  	  </div>
  	  	</div>
  	  </div>

  	  <div class="submit">
  	  	<div class="submit-content">
  	  	  <button class="add btn-large btn" type="button">再添加一个地址</button>
  	  	  <button class="remove btn-large btn" type="button" style="display:none;">
  	  	  移除地址</button><br>
  	  	  <button class="submit-btn btn-large btn" type="submit">保存</button>
  	  	</div>
  	  </div>
  	  {{ Form::close() }}
  	</div>
  </div>
</div>