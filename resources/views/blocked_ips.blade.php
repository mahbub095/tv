<h2>Blocked IP list</h2>
<a href=" " class="btn btn-success" style="float: right;">Add IP</a>
<table class="table table-hover">
    <thead>
    <tr>
        <th>IP</th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    @foreach($blocked_ips as $blocked_ip)
        <tr>
            <td>{{$blocked_ip->ip}}</td>
           
        </tr>
    @endforeach
    </tbody>
</table>
