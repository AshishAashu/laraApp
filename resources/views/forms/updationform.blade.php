<h1 class="text-info text-center" >Updation Form</h1>
<hr style="border-bottom: 2px solid #3d3d3d;width:50%;">
{{Request::input('name')}}
{!! Form::open(['url' => '/userapi/update/submit']) !!}
    @php
        $data = Session::get('data');
    @endphp
    <div class="form-row col-md-12">
        {{Form::label('name','Name : ',['class'=>'text-info text-lg'])}}
        {{Form::text('name',$data->name,['class'=>'form-control input-lg','placeholder'=>'Enter Your First Name'])}}
    
    </div>
    <div class="form-group col-md-12">
        {{Form::label('useremail','Email : ',['class'=>'text-info text-lg'])}}
        {{Form::text('useremail',$data->email,['class'=>'form-control input-lg','placeholder'=>'Enter Your Email'])}}
    </div>
    
    <div class="form-row">
        <div class="form-group col-md-6">
            {{Form::label('userpass','Password : ',['class'=>'text-info text-lg'])}}
            {{Form::password('userpass',['class'=>'form-control input-lg','placeholder'=>'Enter New Password'])}}
        </div>
    </div>
    <div class="form-group col-md-12">
            {{Form::submit('Update',['class'=>'btn btn-lg btn-primary'])}}
    </div>
{!! Form::close() !!}
<style>
    .text-lg{
        font-size: 1.5em;
    }
</style>