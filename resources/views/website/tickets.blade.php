<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/website.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
</head>
<body>
@extends('website.test')
@section('content')
<div style="height: auto; background-color: #ffcf00">
    <div style="width: 100%;">
        <img src="{{url('/images/LEGOLAND_PARKS_LOGO.svg')}}"/>
    </div>
    <div style="width: 100%; background-color: white; position: relative">
        <h1>Tickets bestellen</h1>
        <form method="POST" action="/tickets">
            @csrf
            <div class="field">
                <label class="label" for="firstname"><strong>First Name</strong></label>
                <div class="control">
                    <input class="formInput" type="firstname" name="firstname" id="title">
                </div>
            </div>

            <div class="field">
                <label class="label" for="lastname"><strong>Last Name</strong></label>
                <div class="control">
                    <input class="formInput" name="lastname" id="lastname">
                </div>
            </div>

            <div class="field">
                <label class="label" for="email"><strong>E-mail</strong></label>

                <div class="control">
                    <input class="formInput" name="email" id="email">
                </div>
            </div>

            <div class="field">
                <label class="label" for="phone"><strong>Phone</strong></label>

                <div class="control">
                    <input class="formInput" name="phone" id="phone">
                </div>
            </div>

            <div class="field">
                <label class="label" for="amount"><strong>Amount</strong></label>

                <div class="control">
                    <input class="formInput" type="number" name="amount" id="amount">
                </div>
            </div>
            <div class="field is-grouped" style="margin-top: 5px">
                <div class="control">
                    <button class="button is-link formInput" type="submit">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection