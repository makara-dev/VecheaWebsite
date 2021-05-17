<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>email</title>
    <style>

    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <p>This Email is an Automated messange from input text:</p>
                {{-- full name --}}
                <p>Name : {{ $fname }} {{ $lname }}</p>
                {{-- email --}}
                <p>Email : {{ $email }}</p>
                {{-- phone --}}
                <p>Phone Number : {{ $phone }}</p>
                {{-- messange --}}
                <p>Body Messange: </p>
                <p>{{ $messange }}</p>
                {{-- date --}}
                <p>This messange was create on <strong>{{ $date }}</strong></p>
            </div>
        </div>
    </div>
</body>
</html>