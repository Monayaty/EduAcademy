
@extends('layouts.app_admin')
@section('title','Show Teachers')
@section('content')
 
        
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          @if (session('sucessMSG'))
            <div class="alert alert-success">
                {{ session('sucessMSG') }}
            </div>
          @endif

 


         {{--  @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
          @endif --}}

 


            <form action="{{ url('admin/teachers') }}/{{ $objTeacher->id }}" method="post" enctype="multipart/form-data">
                @method('patch')
                @csrf
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"  placeholder="Enter Teacher name" value="{{ $objTeacher->name }}" readonly>

 

                  @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                   
                </div>

                <div class="form-group">
                  <label for="position">Position</label>
                  <input type="text" class="form-control @error('position') is-invalid @enderror" id="position" name="position"  placeholder="Enter Teacher position" value="{{ $objTeacher->position }}" readonly>

 

                  @error('position')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                   
                </div>

                <div class="form-group">
                  <label for="address">Address</label>
                  <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" name="address"  placeholder="Enter Teacher address" value="{{ $objTeacher->address }}" readonly>

 

                  @error('address')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                   
                </div>
                <img style="width: 100px;height: 100px;" src="{{ url('') }}/{{ $objTeacher->image}}">s
 

                <div class="form-group">
                  <label for="facebook">Facebook</label>
                  <input type="text" class="form-control @error('facebook') is-invalid @enderror" id="facebook" name="facebook"  placeholder="Enter facebook" value="{{ $objTeacher->facebook }}" readonly>

 

                  @error('facebook')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror

 

                </div>
                <div class="form-group">
                  <label for="twitter">Twitter</label>
                  <input type="text" class="form-control @error('twitter') is-invalid @enderror" id="twitter" name="twitter"  placeholder="Enter twitter" value="{{ $objTeacher->twitter }}" readonly>

 

                  @error('twitter')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror

 

                </div>
                <div class="form-group">
                  <label for="linkedin">Linkedin</label>
                  <input type="text" class="form-control @error('linkedin') is-invalid @enderror" id="linkedin" name="linkedin"  placeholder="Enter linkedin" value="{{ $objTeacher->linkedin }}" readonly>

 

                  @error('linkedin')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror

                <div class="form-group">
                  <label for="skype">Skype</label>
                  <input type="text" class="form-control @error('skype') is-invalid @enderror" id="skype" name="skype"  placeholder="Enter skype" value="{{ $objTeacher->skype }}" readonly>

 

                  @error('skype')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderro
 

                </div> 
             
                
             </form>
        </main>
@endsection 