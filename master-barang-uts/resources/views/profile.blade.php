@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h4>{{ $pageTitle }}</h4>
        <hr>
        <img class="mx-auto d-block" src="{{Vite::asset('resources/images/foto_saya.png') }}" alt="featurette" width="400px">
        <h1 class="text-center">Zainal Arifin (1204210077)</h1>
        <hr class="featurette-divider">
    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1">Zainal Arifin</h2>
        <p class="lead">Hallo!! Perkenalkan Nama saya Zainal Arifin Nim saya 1204210077. Saya lahir di Surabaya Pada tanggal 27 November 2002 saya merupakan anak ke 2 dari 2 bersaudara. Saya pernah bersekolah di SDN Waru 1, pada saat smp saya melanjutkan di SMP Jati Agung setelah lulus sekolah smp saya mengambil di sekolah SMK YPM 1 TAMAN Sidoarjo saya ambil dijurusan Teknik Komputer dan Jaringan dan sekarang saya berlanjut kuliah di Institut Teknologi Telkom Surabaya</p>
      </div>
      <div class="col-md-5">
      <img class="class-thumbnail" src="{{Vite::asset('resources/images/foto saya.jpg') }}" alt="featurette" width="350px">
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading fw-normal lh-1">My Idol</h2>
        <p class="lead">Saya mengidolakan seseorang yang menurut saya sangat menginspirasi saya dalam hidup saya yaitu Rizky Febian. Rizky Febian ini merupakan musisi sangat pandai dalam menciptakan sebuah lagu yang bagus, salah satu nya lagu favorite saya yang selalu dengarkan adalah :</p>
        <ul class="list-group">
            <li class="list-group-item">Hingga Tua Bersama</li>
            <li class="list-group-item">Ragu</li>
            <li class="list-group-item">Indah Pada Waktunya</li>
            <li class="list-group-item">Menari</li>
            <li class="list-group-item">Cukup Tau</li>
            <li class="list-group-item">Keseriusan</li>
            <li class="list-group-item">Cuek</li>
            <li class="list-group-item">Pepatah</li>
            <li class="list-group-item">Penantian Berharga</li>
        </ul>
      </div>
      <div class="col-md-5 order-md-1">
      <img class="class-thumbnail" src="{{Vite::asset('resources/images/rizky_febian.jpeg') }}" alt="featurette" width="250px">
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1">My Hobby</h2>
        <p class="lead">Dalam Hobby saya suka melakukan beberapa hal pada saat meluangkan waktu kosong yaitu Dengerkan lagu, menyanyi, dan saya juga suka bermain game. Pada akhir-akhir ini saya juga suka menfoto random atau kemandangan tetapi saya masih belajar dalam hal berfoto.</p>
      </div>
      <div class="col-md-5">
      <img class="class-thumbnail" src="{{Vite::asset('resources/images/foto_dulu.jpg') }}" alt="featurette" width="350px">
      </div>
    </div>

    </div>
    </div>
@endsection
