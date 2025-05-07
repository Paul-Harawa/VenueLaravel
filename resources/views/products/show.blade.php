@extends('auth.layouts')

@section('content')

<div class="row justify-content-center mt-3">
    <div class="col-md-8">

        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    Product Information
                </div>
                <div class="float-end">
                    <a href="{{ route('products.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                </div>
            </div>
            <div class="card-body">

                    <div class="row">
                        <label for="code" class="col-md-4 col-form-label text-md-end text-start"><strong>Code:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $product->code }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="name" class="col-md-4 col-form-label text-md-end text-start"><strong>Name:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $product->name }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="capacity" class="col-md-4 col-form-label text-md-end text-start"><strong>Capacity:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $product->capacity }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="price" class="col-md-4 col-form-label text-md-end text-start"><strong>Price:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $product->price }}
                        </div>
                    </div>




                    <div class="row">
                        <label for="function" class="col-md-4 col-form-label text-md-end text-start"><strong>Function:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $product->function }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="location" class="col-md-4 col-form-label text-md-end text-start"><strong>Location:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $product->location }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="catering" class="col-md-4 col-form-label text-md-end text-start"><strong>Catering:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $product->catering }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="disability" class="col-md-4 col-form-label text-md-end text-start"><strong>Disability Inclusion:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $product->disability }}
                        </div>
                    </div>


                    <div class="row">
                        <label for="disability" class="col-md-4 col-form-label text-md-end text-start"><strong>Disability Inclusion:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            <img src="{{ asset($product->path) }}" alt="Uploaded Image" width="300">

                        </div>
                    </div>




                    <div class="row">
                        <label for="description" class="col-md-4 col-form-label text-md-end text-start"><strong>Description:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $product->description }}
                        </div>
                    </div>
        
            </div>
        </div>
    </div>    
</div>
    
@endsection