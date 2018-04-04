<h1 class="text-info text-center" >SignUp Form</h1>
<hr style="border-bottom: 2px solid #3d3d3d;width:50%;">
{!! Form::open(['url' => '/signup/submit']) !!}
    <div class="form-row">
        <div class="form-group col-md-6">
            {{Form::label('firstname','First Name : ',['class'=>'text-info text-lg'])}}
            {{Form::text('firstname','',['class'=>'form-control input-lg','placeholder'=>'Enter Your First Name'])}}
        </div>
        <div class="form-group col-md-6">
            {{Form::label('lastname','Last Name : ',['class'=>'text-info text-lg'])}}
            {{Form::text('lastname','',['class'=>'form-control input-lg','placeholder'=>'Enter Your Last Name'])}}
        </div>
    </div>
    <div class="form-group col-md-12">
        {{Form::label('useremail','Email : ',['class'=>'text-info text-lg'])}}
        {{Form::text('useremail','',['class'=>'form-control input-lg','placeholder'=>'Enter Your Email'])}}
    </div>
    <div class="form-group col-md-12">
        {{Form::label('usermob','Mobile : ',['class'=>'text-info text-lg'])}}
        {{Form::text('usermob','',['class'=>'form-control input-lg','placeholder'=>'Enter Your Mobile No'])}}
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            {{Form::label('userpass','Password : ',['class'=>'text-info text-lg'])}}
            {{Form::password('userpass',['class'=>'form-control input-lg','placeholder'=>'Enter Your Password'])}}
        </div>
        <div class="form-group col-md-6">
            {{Form::label('userconpass','Confirm Password : ',['class'=>'text-info text-lg'])}}
            {{Form::password('userconpass',['class'=>'form-control input-lg','placeholder'=>'Confirm Your Password'])}}
        </div>
    </div>
    <div class="form-group col-md-12">
            {{Form::submit('Signup',['class'=>'btn btn-lg btn-primary'])}}
    </div>
{!! Form::close() !!}
<style>
    .text-lg{
        font-size: 1.5em;
    }
</style>