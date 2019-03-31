@extends('layouts.app')

@section('content')
<h1>Contact</h1>

{!! Form::open(array('url' => 'contact/submit')) !!}

<div class="form-group">
  {{ Form::label('name', 'Your name')}}
  {{ Form::text('name', '', [
                            'class'=>'form-control',
                            'placeholder'=>'Enter your name'
                            ])}}
</div>

<div class="form-group">
  {{ Form::label('email', 'E-Mail Address')}}
  {{ Form::text('email', '', ['class'=>'form-control',
                              'placeholder'=>'Enter your e-mail'
                              ])}}
</div>


<div class="form-group">
  {{ Form::label('message', 'Message')}}
  {{ Form::textarea('message', '', ['class'=>'form-control',
                                    'placeholder'=>'Enter your message'
                                    ])}}
</div>
<div>
{{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
</div>

{!! Form::close() !!}

@endsection
