@extends('website.test')
@section('content')
<div style="width: 100%; height: auto; background-color: #ffcf00">
    <div style="width: 100%;">
        <img src="{{url('/images/LEGOLAND_PARKS_LOGO.svg')}}"/>
    </div>
    <div style="width: 100%; background-color: white; position: relative">
        <div>
            <h3><strong>Email:</strong> legolanddoetinchem@gmail.com</h3>
        </div>
        <div>
            <h3><strong>Telefoon:</strong> 06-12345678</h3>
        </div>
        <div>
            <h3><strong>Facebook:</strong> (facebooklink)</h3>
        </div>
        <div>
            <h3><strong>Twitter:</strong> (twitterlink)</h3>
        </div>
        <div>
            <button onclick="alert('bedankt voor het aboneren op onze nieuwsbrief')">Aboneer op onze niewsbrief</button>
        </div>
    </div>
</div>
@endsection