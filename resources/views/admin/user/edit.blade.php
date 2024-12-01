@extends('admin.layouts.master')

@section('content')
    <!-- Main Content -->
    <section class="section">
        <div class="section-header">
            <h1>Manage User</h1>
        </div>

        <div class="section-body">

            <div class="row">
                <div class="col-6">
                    <div class="card">
                        <div class="card-header">
                            <h4>Update user's status</h4>

                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.user.update', $user->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <select id="inputState" class="form-control" name="status">
                                    <option value="active">Active</option>
                                    <option value="inactive">Inactive
                                    </option>
                                </select>
                        </div>
                        <button type="submmit" class="btn btn-primary">Create</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>

        </div>
    </section>

@endsection

@push('scripts')
    <script>
        $(document).ready(function () {
            $('body').on('click', '.change-status', function () {
                let isChecked = $(this).is(':checked');
                let id = $(this).data('id');

                $.ajax({
                    url: "{{ route('admin.user.change-status') }}",
                    method: 'PUT',
                    data: {
                        status: isChecked,
                        id: id
                    },
                    success: function (data) {
                        toastr.success(data.message)
                    },
                    error: function (xhr, status, error) {
                        console.log(error);
                    }
                })

            })
        })
    </script>
@endpush
