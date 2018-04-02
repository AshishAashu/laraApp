<h1 class="text-info text-center" >SignUp Form</h1>
<hr style="border-bottom: 2px solid #3d3d3d;width:50%;">
{!! Form::open(['url' => '/signup/submit']) !!}
    <div class="form-row">
        <div class="form-group col-md-6">
            {{Form::label('firstname','First Name : ',['class'=>'text-info'])}}
            {{Form::text('firstname','',['class'=>'form-control','placeholder'=>'Enter Your First Name'])}}
        </div>
        <div class="form-group col-md-6">
            {{Form::label('lastname','Last Name : ',['class'=>'text-info'])}}
            {{Form::text('lastname','',['class'=>'form-control','placeholder'=>'Enter Your Last Name'])}}
        </div>
    </div>
    <div class="form-group col-md-12">
        {{Form::label('useremail','Email : ',['class'=>'text-info'])}}
        {{Form::text('useremail','',['class'=>'form-control','placeholder'=>'Enter Your Email'])}}
    </div>
    <div class="form-group col-md-12">
        {{Form::label('usermob','Mobile : ',['class'=>'text-info'])}}
        {{Form::text('usermob','',['class'=>'form-control','placeholder'=>'Enter Your Mobile No'])}}
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            {{Form::label('userpass','Password : ',['class'=>'text-info'])}}
            {{Form::password('userpass',['class'=>'form-control','placeholder'=>'Enter Your Password'])}}
        </div>
        <div class="form-group col-md-6">
            {{Form::label('userconpass','Confirm Password : ',['class'=>'text-info'])}}
            {{Form::password('userconpass',['class'=>'form-control','placeholder'=>'Confirm Your Password'])}}
        </div>
    </div>
    <div class="form-group col-md-12">
            {{Form::submit('Signup',['class'=>'btn btn-primary'])}}
    </div>
{!! Form::close() !!}