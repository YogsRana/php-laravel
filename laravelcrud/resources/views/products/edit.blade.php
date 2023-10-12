@extends('layouts.app')

@section('main')
    <div class="container">
                <div class="row justify-content-center">
                    <div class="col-sm-8">
                        <div class="card mt-3 p-3">
                        <form method="POST" action="/products/{{ $product->id }}/update" enctype="multipart/form-data" >
                        @csrf
                        @method('put')
                          <div class="mb-3">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" value="{{ old ('name',$product->name)}}"/>
                            @if($errors -> has('name'))
                             <span class="text-danger">{{ $errors->first('name') }}</span>
                             @endif
                            </div>
                            
                          <div class="mb-3">
                            <label>Description</label>
                        <textarea name="Description" id="" class="form-control" cols="0" rows="4">{{ old('Description',$product->description)}}</textarea>
                        @if($errors -> has('Description'))
                             <span class="text-danger">{{ $errors->first('Description') }}</span>
                             @endif
                          </div>
                          <div class="mb-3">
                          <label>image</label>
                        <input type="file" name="image" id="" class="form-control" value="{{ old ('image')}}"></input>
                        @if($errors -> has('image'))
                             <span class="text-danger">{{ $errors->first('image') }}</span>
                             @endif
                          </div>
                          
                          <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                        </div>
                    </div>
                </div>
            </div>  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
 @endsection
 