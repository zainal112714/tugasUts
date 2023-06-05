<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mini Project UTS</title>
        @vite('resources/sass/app.scss')
    </head>
    <body>
        <div class="container text-center my-5">
            <h1 class="mb-4">Tugas Mini Project UTS</h1>
            {{-- Contoh cara mereferensikan gambar di dalam file blade dengan menggunakan pendekatan Vite --}}
            <img class="class-thumbnail" src="{{Vite::asset('resources/images/foto_saya.png') }}" alt="image">
            <h3 class="mb-4">Nama : Zainal Arifin</h3>
            <h3 class="mb-4">NIM : 1204210077<h3>
            <h3 class="mb-4">Pemograman Framework<h3>
            <div class="col-md-2 offset-md-5 mt-4">
                <div class="d-grid gap-2">
                    <a class="btn btn-success" href="home">Home</a>
                </div>
            </div>
        </div>
        @vite('resources/js/app.js')
    </body>
</html>

