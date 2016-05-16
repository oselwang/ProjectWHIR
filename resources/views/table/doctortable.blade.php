<table id="datatable" class="table table-striped table-bordered table-responsive">
    <thead>
    <tr>
        <th>Doctor Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Total Completed Form</th>
        <th>Total Uncompleted Form</th>
        <th>Total Form</th>
    </tr>
    </thead>
    <tbody>
    @foreach($users as $user)
        <tr>
            <td>
                <a>{{$user->name}}</a>
            </td>
            <td>
                <a>{{$user->email}}</a>
            </td>
            <td>
                {{$user->phone}}
            </td>
            <td>
                {{count($variables->where('user_id',$user->id)->where('status','completed'))}}
            </td>
            <td>
                {{count($variables->where('user_id',$user->id)->where('status','uncompleted'))}}
            </td>
            <td>
                {{count($variables->where('user_id',$user->id))}}
            </td>
        </tr>
    </tbody>
    @endforeach
</table>