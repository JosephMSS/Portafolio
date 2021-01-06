@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center mt-5 mb-5">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                  <h3>  Create Category</h3>
                </div>
                <div class="card-body">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    @if(session('status'))
                    <div class="alert alert-success">
                        {{ session('status')}}
                    </div>
                    @endif
                    <form action="{{ route('category.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label class="form-label" for="name">Name</label>
                            <input type="text" class="form-control" id="name" name='name' placeholder="Name">
                        </div>
                        <div class="form-group mt-2">
                            <input type="submit" value="Submit" class="btn  btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection