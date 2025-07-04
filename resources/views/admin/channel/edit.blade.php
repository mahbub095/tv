@extends('admin.layouts.master')
@section('content')
    <!-- Main Content -->
    <section class="section">
        <div class="section-header">
            <h1>Channel</h1>

        </div>

        <div class="section-body">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Update channel</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.channel.update', $channel->id) }}" method="POST"
                                  enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label>Preview</label>
                                    <br>
                                    <img width="200" src="{{ asset($channel->logo) }}" alt="">
                                </div>
                                <div class="form-group">
                                    <label>Logo</label>
                                    <input type="file" class="form-control" name="logo">
                                </div>

                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" name="name" value="{{ $channel->name }}">
                                </div>

                                <div class="form-group">
                                    <label>m3u8 link</label>
                                    <input type="text" class="form-control" name="slug" value="{{ $channel->slug }}">
                                </div>

                                <div class="form-group">
                                    <label for="inputState">Category</label>
                                    <select id="inputState" class="form-control" name="category">
                                        <option value="">Select</option>
                                        @foreach ($categories as $category)
                                            <option
                                                {{$category->id == $channel->category_id ? 'selected' : ''}} value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="inputState">Status</label>
                                    <select id="inputState" class="form-control" name="status">
                                        <option {{$channel->status == 1 ? 'selected' : ''}} value="1">Active</option>
                                        <option {{$channel->status == 0 ? 'selected' : ''}} value="0">Inactive</option>
                                    </select>
                                </div>
                                <button type="submmit" class="btn btn-primary">Update</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
