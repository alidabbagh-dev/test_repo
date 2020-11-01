@foreach($users as $user)
    <li>{{$user->id}}</li>
    <li>{{$user->name}}</li>
    <li>{{$user->email}}</li>
    <hi>________________________________________________________</hi>
@endforeach

@if($users[0]->is_active == 1)
    <h1>active</h1>
@else
    <h1>fuck</h1>
    @endif
