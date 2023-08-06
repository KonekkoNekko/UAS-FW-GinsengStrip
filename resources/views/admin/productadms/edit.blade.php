@extends('layouts.master')
@section('content')
    <div class="card rounded-4">
        <div class="row g-0">
            <form action="{{ route('productadms.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="p-5">
                    <div class="d-flex mb-3 text-start">
                        <i class="bi-pencil-square fs-2"></i>
                        <h1 class="ms-3">Edit Product</h1>
                    </div>
                    <hr>
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <label for="productAlbum" class="form-label">Product Album</label>
                                    <input class="form-control @error('productAlbum') is-invalid @enderror" type="text"
                                        name="productAlbum" id="productAlbum"
                                        value="{{ $errors->any() ? old('productAlbum') : $product->product_album }}"
                                        placeholder="Enter Product Album">
                                    @error('productAlbum')
                                        <div class="text-danger"><small>{{ $message }}</small></div>
                                    @enderror
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="productArtist" class="form-label">Product Artist</label>
                                    <input class="form-control @error('productArtist') is-invalid @enderror" type="text"
                                        name="productArtist" id="productArtist"
                                        value="{{ $errors->any() ? old('productArtist') : $product->product_artist }}"
                                        placeholder="Enter Product Artist">
                                    @error('productArtist')
                                        <div class="text-danger"><small>{{ $message }}</small></div>
                                    @enderror
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="productPrice" class="form-label">Product Price</label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon1">Rp</span>
                                        <input class="form-control @error('productPrice') is-invalid @enderror"
                                            type="text" name="productPrice" id="productPrice"
                                            value="{{ $errors->any() ? old('productPrice') : $product->product_price }}"
                                            placeholder="Enter Product Price">
                                    </div>
                                    @error('productPrice')
                                        <div class="text-danger"><small>{{ $message }}</small></div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="col-md-12 mb-3">
                                <label for="productphoto" class="form-label">Product Photo</label>
                                <input type="file" class="form-control" name="productphoto" id="productphoto">
                            </div>
                            <div class="col-md-12 mb-3">
                                <div class="row">
                                    <label for="photoPreview" class="form-label">Currently Stored Photo</label>
                                    @if ($product->original_filename)
                                        <h5>{{ $product->original_filename }}</h5>
                                        <a href="{{ route('productadms.downloadFile', ['id' => $product->id]) }}"
                                            class="btn btn-primary btn-sm mt-2">
                                            <i class="bi bi-download me-1"></i> Download Stored Image
                                        </a>
                                    @else
                                        <h5>Tidak ada</h5>
                                    @endif
                                    <img src="{{ asset('/storage/products/' . $product->original_filename) }}"
                                        alt="your image" class="mt-3 img-thumnail" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6 d-grid">
                            <a href="{{ route('productadms.index') }}" class="btn btn-outline-dark btn-lg mt-3">
                                <i class="bi-arrow-left-circle me-2"></i>
                                Cancel</a>
                        </div>
                        <div class="col-md-6 d-grid">
                            <button type="submit" class="btn btn-dark btn-lg mt-3">
                                <i class="bi-check-circle me-2"></i>
                                Save</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('scripts')
    @push('scripts')
        <script>
            $("#productphoto").change(function() {
                var preview = document.getElementById('preview');
                preview.style.display = 'block';
                const [file] = this.files;
                if (file) {
                    preview.src = URL.createObjectURL(file);
                }
            });
        </script>
    @endpush
@endpush
