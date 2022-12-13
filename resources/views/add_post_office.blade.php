<!DOCTYPE html>
<html lang="en">
<head>
    <title>Store your Post Office - {{setting('site.title')}}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

</head>
<body>

<div class="container-fluid p-5 bg-primary text-white text-center">
    <h1>Store your Post Office</h1>
    <p>You did not found your post office, You can store your post office here.</p>
</div>

<div class="container mt-5">
    <form action="{{route('store_post_office')}}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="mt-2">
                    <label for="district" class="form-label">Select Your District *</label>
                    <select required id="district" name="district_id" class="form-control" aria-label="Default select example">
                        <option value="">Select your District</option>
                        @foreach($districts as $district)
                            <option value="{{$district->id}}" >{{$district->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mt-2">
                    <label for="upazila" class="form-label">Select Your Upazila *</label>
                    <select required id="upazila" name="upazila_id" class="form-control" aria-label="Default select example">
                        <option value="">Select your Upazila / Thana</option>
                        @foreach($upazilas as $upazila)
                            <option value="{{$upazila->id}}" >{{$upazila->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mt-2">
                    <label for="name" class="form-label">Enter Your Post Office Name *</label>
                    <input required id="name" type="text" name="name" class="form-control" placeholder="Enter Your Post Office Name">
                </div>
            </div>
            <div class="col-md-6">
                <div class="mt-2">
                    <label for="code" class="form-label">Enter Your Post Code/ZIP Code *</label>
                    <input required id="code" type="number" min="999" max="9999" name="code" class="form-control" placeholder="Enter Your Post Code/ZIP Code">
                </div>
            </div>
        </div>
        <button class="btn btn-primary mt-5">Store Post Office</button>

    </form>
    <div class="m-5">
        <a href="{{route('front')}}" class="btn btn-success m-2">Home</a>
        <a href="{{route('login')}}" class="btn btn-secondary m-2">Login</a>
        <a href="{{route('register')}}" class="btn btn-info m-2">Register</a>
        <a href="{{route('portal')}}" class="btn btn-warning m-2">Portal</a>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        $('#district').on('change', function () {
            var idDistrict = this.value;
            const xhttp = new XMLHttpRequest();
            xhttp.onload = function() {
                document.getElementById("upazila").innerHTML =
                    this.responseText;
            }
            xhttp.open("GET", "/district/"+idDistrict);
            xhttp.send();
        });

        $('#upazila').on('change', function () {
            var idUpazila = this.value;
            const xhttp = new XMLHttpRequest();
            xhttp.onload = function() {
                document.getElementById("post_office").innerHTML =
                    this.responseText;
            }
            xhttp.open("GET", "/upazila/"+idUpazila);
            xhttp.send();
        });
    });

    @if(Session::has('message'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
    toastr.success("{{ session('message') }}");
    @endif

        @if(Session::has('error'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
    toastr.error("{{ session('error') }}");
    @endif

        @if(Session::has('info'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
    toastr.info("{{ session('info') }}");
    @endif

        @if(Session::has('warning'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
    toastr.warning("{{ session('warning') }}");
    @endif

</script>

</body>
</html>




