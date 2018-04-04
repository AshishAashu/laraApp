<h1 class="text-info text-center" >Login Form</h1>
<hr style="border-bottom: 2px solid #3d3d3d;width:50%;">
{!! Form::open(['url' => '/userapi/loggedin']) !!}
        <div class="form-group col-md-12">
        {{Form::label('useremail','Email : ',['class'=>'text-info text-lg'])}}
        {{Form::text('useremail','',['class'=>'form-control input-lg','placeholder'=>'Enter Your Email'])}}
    </div>
    <div class="form-row">
        <div class="form-group col-md-12">
            {{Form::label('userpass','Password : ',['class'=>'text-info text-lg'])}}
            {{Form::password('userpass',['class'=>'form-control input-lg','placeholder'=>'Enter Your Password'])}}
        </div>
    </div>
    <div class="form-group col-md-12">
            {{Form::submit('Login',['class'=>'btn btn-lg btn-primary'])}}
    </div>
{!! Form::close() !!}
<style>
    .text-lg{
        font-size: 1.3em;
    }
</style>