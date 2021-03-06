@extends('master.admin.master')

@section('body')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Manage Teacher Course</h4>
                    <p class="text-center text-success">{{ Session::get('message') }}</p>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover mb-0">

                            <thead>
                            <tr>
                                <th>#</th>
                                <th width="7%">Image</th>
                                <th>Course Title</th>
                                <th>Course Fee</th>
                                <th>Trainer Name</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($subjects as $subject)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td><img src="{{ asset($subject->image) }}" alt="" width="100%"></td>
                                    <td>{{ $subject->title }}</td>
                                    <td>{{ number_format($subject->fee) }}</td>
                                    <td>{{ $subject->teacher->name }}</td>
                                    @if($subject->status == 1)
                                        <td class="badge rounded-pill bg-success text-white m-2">Active</td>
                                    @else
                                        <td class="badge rounded-pill bg-danger text-white m-2">Inactive</td>
                                    @endif
                                    <td>
                                        <a href="{{ route('view-detail',['id' => $subject->id]) }}" title="View Detail" class="btn btn-success btn-sm">
                                            <i class="fa fa-book-open"></i>
                                        </a>
                                        <a href="{{ route('update-status',['id' => $subject->id]) }}" title="Update Status" class="btn {{ $subject->status == 1 ? 'btn-info' : 'btn-warning' }} btn-sm">
                                            <i class="{{ $subject->status == 1 ? 'fa fa-arrow-up' : 'fa fa-arrow-down' }}"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

