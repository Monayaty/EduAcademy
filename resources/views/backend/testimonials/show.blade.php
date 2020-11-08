@extends('layouts.app_admin')
@section('title','Show Testimonial')
@section('content')
 
        
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          @if (session('sucessMSG'))
            <div class="alert alert-success">
                {{ session('sucessMSG') }}
            </div>
          @endif
 
           
 
          <form action="{{ url('admin/testimonials') }}/{{ $objTestimonial->id }}" method="post" enctype="multipart/form-data">
                @method('patch')
                @csrf
                <div class="form-group">
                  <label for="name">Speaker Name</label>
                  <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"  placeholder="Enter Speaker Name" value="{{ $objTestimonial->name }}" readonly>
 
                  @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
 
                <div class="form-group">
                  <label for="position">Position</label>
                  <input type="text" class="form-control @error('position') is-invalid @enderror" id="position" name="position"  placeholder="Enter Speaker position" value="{{ $objTestimonial->position }}" readonly>
                  @error('position')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>

                <div class="form-group">
                  <label for="description">Description</label>
                  <textarea  readonly class="form-control @error('description') is-invalid @enderror" id="description" name="description" readonly>{{ $objTestimonial->description }}</textarea>

                  @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>

                <img style="width: 100px;height: 100px;" src="{{ url('') }}/{{ $objTestimonial->photo }}">
 
                
   
             </form>
        </main>
@endsection