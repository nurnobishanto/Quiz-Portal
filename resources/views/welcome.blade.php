<!DOCTYPE html>
<html lang="en">
<head>
    <title>Store your Post Office - {{setting('site.title')}}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container-fluid p-5 bg-primary text-white text-center">
    <h1>Store your Post Office</h1>
    <p>You did not found your post office, You can store your post office here.</p>
</div>

<div class="container mt-5">
    <form action="{{route('store_post_office')}}" method="POST">
        @csrf
        <div class="mt-5">
            <label for="district" class="form-label">Select Your District</label>
            <select required id="district" name="district_id" class="form-control" aria-label="Default select example">
                <option value="">Select your District</option>
                @foreach($districts as $district)
                    <option value="{{$district->id}}" @if($district->id==$myInfo->district_id) selected @endif>{{$district->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="mt-5">
            <label for="upazila" class="form-label">Select Your Upazila</label>
            <select required id="upazila" name="upazila_id" class="form-control" aria-label="Default select example">
                <option value="">Select your Upazila / Thana</option>
                @foreach($upazilas as $upazila)
                    <option value="{{$upazila->id}}" @if($upazila->id==$myInfo->upazila_id) selected @endif>{{$upazila->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="mt-5">
            <label for="name" class="form-label">Enter Your Post Office Name</label>
            <input required id="name" type="text" name="name" class="form-control" placeholder="Enter Your Post Office Name">
        </div>
        <div class="mt-5">
            <label for="code" class="form-label">Enter Your Post Code/ZIP Code</label>
            <input required id="code" type="number" maxlength="4" minlength="4" name="code" class="form-control" placeholder="Enter Your Post Code/ZIP Code">
        </div>
        <button class="btn btn-primary mt-5">Update Profile Information</button>
    </form>
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

</script>
</body>
</html>




