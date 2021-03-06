@extends('home')

@section('cont')
<h3 class="p-3 display-4" style="display:inline">Activate Users</h3>
<input type="text" style=" float: right; padding: 6px; margin-top: 20px; margin-right: 16px;border: none;font-size: 17px;" placeholder="Search..." size="30">
<hr>
<div class="flex row border-secondary rounded-lg ml-3 justify-content-between">
    <span>
        <h5 class="p-3">User Details</h5>
    </span>
    <span>
        <h3 class="text-center bg-success text-light">{{session('message')}}</h3>
    </span>


    <table class="table table-dark table-striped border-secondary rounded-lg mr-4">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Organization</th>
                <th>Email</th>
                <th>Role</th>
                <th>Status</th>
                <th>More Data</th>
                <th>Activate</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                @if($user->organizations == NULL)
                <td>Unassigned</td>
                @else
                <td>{{$user->organizations->title}}</td>
                @endif
                <td>{{$user->email}}</td>
                @if($user->roles == NULL)
                <td>Unassigned</td>
                @else
                <td>{{$user->roles->title}}</td>
                @endif
                @switch($user->status)
                @case('0')
                <td>Inactive</td>
                @break;
                @case('1')
                <td>Active</td>
                @break;
                @endswitch
                <td><a href="/administrator/show/{{$user->id}}" class="btn btn-outline-info" role="button">...</a></td>
                <td><a href="/administrator/activate/{{$user->id}}" class="btn btn-outline-success" role="button">Activate</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection