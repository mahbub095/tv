<h2>Blocked IP list</h2>
<a href="{{route('dashboard.create_blocked_ip')}}" class="btn btn-success" style="float: right;">Add IP</a>
<table class="table table-hover">
    <thead>
    <tr>
        <th>IP</th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    @foreach$blocked_ips as $blocked_ip)
        <tr>
            <td>{{$blocked_ip->ip}}</td>
            <td><a href="{{route('dashboard.delete_blocked_ip', ['id' => $blocked_ip->id])}}"
                   class="btn btn-danger delete-button">Delete</a></td>
        </tr>
    @endforeach
    </tbody>
</table>
