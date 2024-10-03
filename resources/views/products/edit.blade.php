<!doctype html>
<html lang="en">
    <head>
        <title>Laravel 11 CRUD</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>

        <div class="bg-dark py-3">
            <h3 class="text-white text-center">Simple Laravel 11 CRUD</h3>
        </div>
        <div class="contaner">
            <div class="row justify-content-center mt-4">
                <div class="col-md-10 d-flex justify-content-end">
                    <a href="{{ route('products.index') }}" class="btn btn-dark">Back</a>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-md-10">
                    <div class="card borde-0 shadow-lg my-4">
                        <div class="card-header bg-dark">
                            <h3 class='text-white'>Edit Product</h3>
                        </div>
                        <form enctype="multipart/form-data" action="{{ route('products.update',$product->id) }}" method="Post">
                            @method('put')
                            @csrf
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="name" class="form-label h5">Name</label>
                                    <input value="{{ old('name',$product->name) }}" type="text" class="@error('name') is-invalid @enderror form-control form-control-lg" placeholder="Name" name="name">
                                    @error('name')
                                        <p class="invalid-feedback">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="sku" class="form-label h5">Sku</label>
                                    <input value="{{ old('sku',$product->sku) }}" type="text" class="@error('sku') is-invalid @enderror form-control form-control-lg" placeholder="Sku" name="sku">
                                    @error('sku')
                                        <p class="invalid-feedback">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="price" class="@error('price') is-invalid @enderror form-label h5">Price</label>
                                    <input value="{{ old('price',$product->price) }}" type="text" class="form-control form-control-lg" placeholder="Price" name="price">
                                    @error('price')
                                        <p class="invalid-feedback">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="description" class="form-label h5">Description</label>
                                    <textarea name="description" cols="30" rows="10" class="form-control" placeholder="Description">{{ old('description',$product->description) }}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="image" class="form-label h5">Image</label>
                                    <input type="file" class="form-control form-control-lg" placeholder="Image" name="image">
                                    @if($product->image != "")
                                            <img class="w-50 my-3" src="{{ asset('uploads/products/'.$product->image) }}" alt="">
                                    @endif
                                </div>
                                <div class="d-grid">
                                    <button class="btn btn-lg btn-primary">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>
