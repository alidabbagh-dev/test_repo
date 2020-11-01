<h1>create user</h1>
{!! Form::open(['method'=>'POST','action'=>'AdminUsersController@store','files'=>true]) !!}
    {{csrf_field()}}
    <div class = 'form-group'>
        {!! Form::label('name','Name :') !!}
        {!! Form::text('name',null,['class'=>'form-control']) !!}
    </div>

    <div class = 'form-group'>
        {!! Form::label('email','EMAIL :') !!}
        {!! Form::text('email',null,['class'=>'form-control']) !!}
    </div>

    <div class = "form-group">
        {!! Form::label('file','File :') !!}
        {!! Form::file('file',null,['class'=>'form-control']) !!}
    </div>

    <div class = 'form-group'>
        {!! Form::label('role_id','Role :') !!}
        {!! Form::select('role_id',$pass_List,null,['class'=>'form-control']) !!}
    </div>

    <div class = 'form-group'>
        {!! Form::label('is_active','status :') !!}
        {!! Form::select('is_active',[1=>'active',0=>'not active'],'active',['class'=>'form-control']) !!}
    </div>
    <div class = 'form-group'>
        {!! Form::label('password','Password :') !!}
        {!! Form::password('password',['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('create user',['class'=>'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
    @foreach($errors->all() as $error)
        <ul>
            {{$error}}
        </ul>
        @endforeach