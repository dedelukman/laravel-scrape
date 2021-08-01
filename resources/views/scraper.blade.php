<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Laravel Scraper</title>

    <style>
        .wrapper > .card:first-child .card-header{
            background-color: orange;
            color: white;
        }
        .wrapper > .card:nth-child(2) .card-header{
            background-color: red;
            color: white;
        }

        .wrapper > .card:nth-child(3) .card-header{
            background-color: blue;
            color: white;
        }


    </style>

</head>
<body>
    <div class="containter">
        <div class="row">
            <div class="col-md-6 offset-md-3 mt-5 wrapper">
                @foreach ($data as $key =>$value )
                    <div class="card text-center">
                        <h5 class="card-header">{{ $key }}</h5>
                        <div class="cardbody">
                            <p class="card-text">{{ $value }}</p>
                        </div>
                    </div>
                @endforeach
                
            </div>
        </div>
    </div>
</body>
</html>