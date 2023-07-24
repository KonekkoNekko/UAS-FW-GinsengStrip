<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Controller & View pada Laravel</title>
    @vite('resources/sass/app.scss')
</head>

<body>
    <div class="container vh-100">
        <div class="row align-items-center ">
            <div class="col-md-6">

            </div>
            <div class="col-md-6">
                <div class="p-5 bg-light rounded-3">
                    <div class="mb-3 text-center">
                        <i class="bi-person-circle fs-1"></i>
                        <h4>Your Delivery</h4>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="receiverName" class="form-label">Receiver's Name</label>
                            <input class="form-control @error('receiverName') is-invalid @enderror" type="text"
                                name="receiverName" id="receiverName"
                                value="{{ old('receiverName') }}"placeholder="enter receiver">
                            @error('receiverName')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="address" class="form-label">Address</label>
                            <input class="form-control @error('address') is-invalid @enderror" type="text"
                                name="address" id="address" value="{{ old('address') }}" placeholder="enter address">
                            @error('address')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="address" class="form-label">Select Delivery</label>
                            <select name="position" id="position" class="form-select">
                                <option value="">Go-Jek Instant</option>
                                <option value="">SiCepat Express</option>
                                <option value="">JNT Express</option>
                            </select>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6 d-grid">
                            <a href="" class="btn btn-outline-dark btn-lg mt-3"><i
                                    class="bi-arrow-left-circle me-2"></i> Back</a>
                        </div>
                        <div class="col-md-6 d-grid">
                            <button type="submit" class="btn btn-dark btn-lg mt-3"><i class="bi-check-circle me-2"></i>
                                Next</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </form>
    </div>
    @vite('resources/js/app.js')
</body>
