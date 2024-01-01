@extends('layouts.app')

@section('title', 'New Subject')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>New Subject</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Subject</a></div>
                    <div class="breadcrumb-item">New Subject</div>
                </div>
            </div>

            <div class="section-body">

                <div class="card">
                    <form action="{{ route('subject.store') }}" method="POST">
                        @csrf
                        <div class="card-header">
                            <h4>New Subject</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text"
                                    class="form-control @error('title')
                                    is-invalid
                                @enderror"
                                    name="title">
                                @error('title')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Lecturer Id</label>
                                <input type="text"
                                    class="form-control @error('lecturer_id')
                                    is-invalid
                                @enderror"
                                    name="lecturer_id">
                                @error('lecturer_id')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Semester</label>
                                <input type="text" class="form-control" name="semester">
                            </div>
                            <div class="form-group">
                                <label>Academic Year</label>
                                <input type="text" class="form-control" name="academic_year">
                            </div>
                            <div class="form-group">
                                <label>SKS</label>
                                <input type="text" class="form-control" name="sks">
                            </div>
                            
                        </div>
                        <div class="card-footer text-right">
                            <button class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>

            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->

    <!-- Page Specific JS File -->
@endpush