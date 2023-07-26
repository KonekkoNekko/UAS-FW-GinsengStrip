<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>payment</title>
    @vite('resources/sass/app.scss')
</head>
<body class="bg-white">
    <nav class="navbar navbar-expand-md bg-dark">
        <div class="container-fluid">
            <img src="{{ Vite::asset('resources/images/ginseng strip.png') }}" alt="" style="width: 7rem;">
            <ul class="navbar-nav flex-row flex-wrap">
                <li class="nav-item col-2 col-md-auto mx-2"><a href="" class="nav-link text-white"><h3 class="bi bi-cart"></h3></a></li>
                <li class="nav-item col-2 col-md-auto mx-2"><a href="" class="nav-link text-white"><h3 class="bi bi-person-circle"></h3></a></li>
            </ul>
        </div>
    </nav>
    <h2 class="text-center mt-5">Pick Your Payment</h2>
    <div class="d-flex">
        <div class="m-5 col-6 ms-5">
        <form>
            <fieldset disabled>
                <legend>Bank Transfer</legend>
                <div class="mb-3 mt-3">
                    <label for="disabledSelect" class="form-label">Bank Destination</label>
                    <select id="disabledSelect" class="form-select">
                        <option>BCA</option>
                        <option>Mandiri</option>
                        <option>BRI</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">Bank Origin</label>
                    <input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input">
                </div>
                <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">Bank Account's name</label>
                    <input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input">
                </div>
            </fieldset>
        </form>
        </div>
        <div class="m-5">
            <h3 class="text-center">QRIS</h3>
            <img src="{{ Vite::asset('resources/images/qris.png') }}" alt="" class="d-flex justify-content-center">
        </div>
    </div>
    <div class="d-grid gap-2 col-6 mx-auto">
        <button class="btn btn-primary" type="button"><i class="bi bi-arrow-bar-up mx-2"></i>Send proof of payment</button>
    </div>
    <div class="d-grid gap-2 d-md-flex justify-content-center mt-2 mb-5">
        <button class="btn btn-primary me-md-2 col-3" type="button">Back</button>
        <button class="btn btn-primary col-3" type="button">Next</button>
    </div>
    <nav class="navbar navbar-expand-md bg-dark">
        <div class="d-flex text-center">
            <img src="{{ Vite::asset('resources/images/ginseng.png') }}" alt="" class="d-flex align-item-center" style="width: 2rem;">
        </div>
    </nav>
</body>
</html>


