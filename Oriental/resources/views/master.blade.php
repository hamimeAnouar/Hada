<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oriental Group</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>

<body>
    {{View::make('header')}}
    @yield('content')
    {{View::make('footer')}}
</body>
<style>
    .logincostum{
        height: 500px;
        padding-top: 100px;
    }
    img.slider-img {
    height: 400px !important;
    width: 50% !important;
    display: block !important;
    margin: 0 auto !important;
    padding: 13px;
}
.carousel-caption {
    background-color: #343a4017;
 }

.carousel-item {
    height: 600px;
}
.detail-img, .trending-image{
    height : 200px;
}
.search-box{
    width : 500px !important;
}
.searched-item {
    border: 1px solid #ddd; /* Optional: Add a border for better separation */
    padding: 10px; /* Optional: Add padding for better spacing */
}
.searched-item a {
    text-decoration: none;
}


.item-details {
    display: block;
}

.description {
    display: block;
}
.search-tab{
    margin-right: 29% !important;
}

</style>
</html>