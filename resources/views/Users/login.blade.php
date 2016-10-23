@extends('loginLayout')
@section('content')
    {!!Form::open(['url'=>'/auth/login','class'=>'login-form1','id'=>'login_form'])!!}
    <h3 class="form-title">Login to your account</h3>
    @if (Session::has('flash_error'))
        <div id="flash_error" class="alert alert-danger"> <a href="#" class="close" data-dismiss="alert">&times;</a>{{ Session::get('flash_error') }}</div>
    @endif
    @if ($errors->has())
        <div class="alert alert-danger">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            @foreach ($errors->all() as $error)
                {{ $error }}<br>
            @endforeach
        </div>
    @endif

    <div class="form-group">
        {!! Form::label('email','Email',array('class' => 'control-label visible-ie8 visible-ie9')) !!}
        <div class="input-icon">
            <i class="fa fa-user"></i>
            {!! Form::text('email',null, array('placeholder' => 'Email','class'=>'form-control
            placeholder-no-fix','id'=>'email')) !!}
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('password','Password',array('class' => 'control-label visible-ie8 visible-ie9')) !!}
        <div class="input-icon">
            <i class="fa fa-lock"></i>
            {!! Form::password('password', array('placeholder' => 'password','class'=>'form-control
            placeholder-no-fix','id'=>'password')) !!}
        </div>
    </div>

    <div class="form-actions">
        <label class="checkbox">
            <input type="checkbox" name="remember" value="1"/> Remember me
        </label>
        {!! Form::submit('Login',array('class'=>'btn green pull-right')) !!}
    </div>

    {!! Form::close() !!}
@stop
<script type="text/javascript">
    @section('javascript')

    // Put page-specific javascript here
    jQuery(document).ready(function () {
        var form1 = $('#login_form');
        var error1 = $('.alert-danger', form1);
        var success1 = $('.alert-success', form1);


        form1.validate({
            errorElement: 'span', //default input error message container
            errorClass: 'help-block', // default input error message class
            focusInvalid: false, // do not focus the last invalid input
            rules: {
                email: {
                    required: true,
                    email: true
                },
                password: {
                    required: true
                }

            },

            messages: {
                email: {
                    required: "Email is required."
                },
                password: {
                    required: "Password is required."
                }
            },

            invalidHandler: function (event, validator) { //display error alert on form submit
                $('.alert-danger', $('.login-form')).show();
            },

            highlight: function (element) { // hightlight error inputs
                $(element)
                        .closest('.form-group').addClass('has-error'); // set error class to the control group
            },

            success: function (label) {
                label.closest('.form-group').removeClass('has-error');
                label.remove();
            },

            errorPlacement: function (error, element) {
                error.insertAfter(element.closest('.input-icon'));
            },

            submitHandler: function (form) {
                ajaxLogin(form); // form validation success, call ajax form submit
            }
        });
        error1.show();
    });

    @stop

</script>
