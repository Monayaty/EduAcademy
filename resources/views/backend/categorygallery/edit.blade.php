@extends('layouts.app_admin')
@section('title','Edit Category Gallery')
@section('content')
 
        
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          @if (session('sucessMSG'))
            <div class="alert alert-success">
                {{ session('sucessMSG') }}
            </div>
          @endif
 
          {{-- @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
          @endif --}}
 
          <form action="{{ url('admin/categorygallery') }}/{{ $objCategoryGallery->id }}" method="post">
                @method('patch')
                @csrf
                <div class="form-group">
                  <label for="name">Category Gallery Name</label>
                  <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"  placeholder="Enter Category Gallery Name" value="{{ $objCategoryGallery->name }}">
 
                  @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
 
               
                <button type="submit" class="btn btn-primary">Submit</button>
             </form>
        </main>
@endsection