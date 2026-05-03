@extends('app')

@section('title', 'Profil')

@section('content')

    <div style="
        max-width:400px;
        margin:auto;
        border-radius:15px;
        padding:20px;
        background:linear-gradient(135deg, #1be7d9, #c2eb95);
        color:black;
        text-align:center;
        box-shadow:0 4px 10px rgba(0, 0, 0, 0.59);
    ">
    
        <h3 style="text-align:center;"><b>Profil Saya</b></h3>
        <hr>
        <img src="{{ asset('images/Profil Divya (1).jpeg') }}" 
            width="120" 
            style="display: block; margin: 15px auto; border-radius: 50%;">

        <h2>Divya Harinda Verlita</h2>
        <p>241230011</p>
        <p>Sistem Informasi</p>
        <p>Universitas Muhammadiyah Pontianak</p>
    </div>
@endsection
