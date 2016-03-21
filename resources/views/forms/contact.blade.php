{!! Form::open(['route' => 'contact.post'], ['class' => 'row']) !!}
	<div class='col-md-8 col-md-offset-2'>
		<div class=block>
			<div class='title-block text-center'>
				<h3>Contact Us</h3>
			</div>
			<div class=row>
				<div class=col-md-6>
					<input class=form-control name=name placeholder=Name>
					<input class=form-control name=email placeholder=E-mail>
					<input class=form-control name=phone placeholder=Phone>
				</div>
				<div class=col-md-6>
					<textarea class=form-control name=message placeholder=Message type=text></textarea>
				</div>
			</div>
			<div class=row>
				<div class='col-md-12 text-center'>
					<button class=btn type=submit>Send</button>
				</div>
			</div>
		</div>
	</div>
{!! Form::close() !!}
