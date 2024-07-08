<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/upload-pas-foto" method="POST" enctype="multipart/form-data">
        @csrf
        <h5> Upload Pas Foto </h5>
        <input type="hidden" id="NIK" name="NIK" value="{{ $NIK }}" readonly>
        <input name="image" type="file">
        <button> Upload </button> 
    </form>
</body>
</html>