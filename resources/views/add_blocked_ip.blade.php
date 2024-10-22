<form action="" method="post" action="{{ route('dashboard.store_blocked_ip') }}">
    <!-- CROSS Site Request Forgery Protection -->
    @csrf
    <div class="form-group">
        <label>Ip</label>
        <input type="text" name="ip" required="required" class="form-control" placeholder="___.___.___.___">
    </div>
    <button type="submit" value="Submit" class="btn btn-dark btn-block">Save</button>
</form>
