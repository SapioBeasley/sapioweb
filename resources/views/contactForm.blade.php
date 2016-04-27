<form name="contact-form" id="contact-form" method="POST" action="javascript:void(null);">
	<div class="contact-form-item contact-form-item-1 col-md-4 col-sm-4 col-xs-12">
		<label for="username">NAME</label>
		<input data-validation="length" data-validation-length="min4" type="text" id="username" name="username" placeholder="" />
	</div>
	<div class="contact-form-item contact-form-item-2 col-md-4 col-sm-4 col-xs-12">
		<label for="email">E-MAIL</label>
		<input data-validation="email" type="text" id="email" name="email" placeholder="" />
	</div>
	<div class="contact-form-item contact-form-item-3 col-md-4 col-sm-4 col-xs-12">
		<label for="subject">SUBJECT</label>
		<input data-validation="length" data-validation-length="min4" type="text" id="subject" name="subject" placeholder="" />
	</div>
	<div class="contact-form-item col-md-12 col-sm-12 col-xs-12">
		<label for="comment">MESSAGE</label>
		<textarea data-validation="length" data-validation-length="min10" name="comment" id="comment" placeholder=""></textarea>
	</div>
	<div class="contact-form-item col-md-12 col-sm-12 col-xs-12">
		<button id="submit" class="btn btn-info">SUBMIT</button>
	</div>
</form>
