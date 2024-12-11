<div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
    <div class="card border">
        <div class="card-body">
            <form action="{{ route('admin.setting-update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label>Site Name</label>
                    <input type="text" class="form-control" name="site_name"
                           value="{{ @$setting->site_name }}">
                </div>

                <div class="form-group">
                    <label>Head Line</label>
                    <input type="text" class="form-control" name="headline"
                           value="{{ @$setting->headline }}:? ">
                </div>

                <div class="form-group">
                    <img src="{{ asset(@$setting->logo) }}" width="150px" alt="">
                    <br>
                    <label>Logo</label>
                    <input type="file" class="form-control" name="logo" value="">
                    <input type="hidden" class="form-control" name="old_logo" value="{{ @$setting->logo }}">

                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>
