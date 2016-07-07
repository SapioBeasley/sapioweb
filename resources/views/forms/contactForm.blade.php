{!! Form::open(['route' => 'contact.post', 'name' => 'contact-form', 'class' => 'form-minimal form-ajax']) !!}

	<!-- Ajax Message -->
	<div class="ajax-message text-center"></div>

	<!-- Name -->
	<div class="form-group">
		<input type="text" name="name" id="name-contact-3" class="form-control validate-locally">
		<label for="name-contact-3">Name *</label>
		<span class="pull-right alert-error"></span>
	</div>

	<!-- Email -->
	<div class="form-group">
		<input type="email" name="email" id="email-contact-3" class="form-control validate-locally">
		<label for="email-contact-3">Email *</label>
		<span class="pull-right alert-error"></span>
	</div>

	<!-- Phone -->
	<div class="form-group ws-s">
		<input type="tel" name="phone" id="phone-contact-3" class="form-control">
		<label for="email-contact-3">Phone</label>
	</div>

	<!-- Message -->
	<div class="form-group">
		<p>Just say hello, or tell me about your project</p>
		<textarea class="form-control" name="bodyMessage" id="message-contact-1" rows="5"></textarea>
		<label for="message-contact-1">Message *</label>
	</div>

	<div class="contact-form-item col-md-12 col-sm-12 col-xs-12">
		{!! Form::submit('Send Message', ['class' => 'btn-text']) !!}
	</div>

{!! Form::close() !!}
