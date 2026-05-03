@extends('app')

@section('title', 'Kontak')

@section('content')

<div style="
    max-width:500px;
    margin:auto;
    border-radius:15px;
    padding:20px;
    background:linear-gradient(135deg, #e6eb6b, #b07eed);
    color:black;
    box-shadow:0 4px 10px rgba(0, 0, 0, 0.59);
">

    <p style="text-align:center;"><b>Hubungi Saya!</b></p>
    <hr>

    <div style="display:flex; align-items:center; gap:20px;">
        
        <img src="{{ asset('images/Contact Us (2).png') }}" 
             width="175"
             style="border-radius:50%;">

        <div style="margin-top:-35px;">
            <p>Email : 241230011@unmuhpnk.ac.id</p>
            <p>No.Hp : 081255028527</p>
        </div>

    </div>

</div>

@endsection