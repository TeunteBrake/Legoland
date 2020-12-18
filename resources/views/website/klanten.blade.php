@extends('website.test')
@section('content')
    <div style="height: auto; background-color: #ffcf00">
        <div style="width: 100%;">
            <img src="{{url('/images/LEGOLAND_PARKS_LOGO.svg')}}"/>
        </div>
        <div style="width: 100%; background-color: white; position: relative">
            <h1>Tickets bestellen</h1>
            <form method="POST" action="/klanten">
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
                    <label class="label" for="street"><strong>Street</strong></label>
                    <div class="control">
                        <input class="formInput" name="street" id="street">
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="housenumber"><strong>House number</strong></label>
                    <div class="control">
                        <input class="formInput" name="housenumber" id="housenumber">
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="postalcode"><strong>Postal code</strong></label>
                    <div class="control">
                        <input class="formInput" name="postalcode" id="postalcode">
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="town"><strong>Town</strong></label>
                    <div class="control">
                        <input class="formInput" name="town" id="town">
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

                <div class="field is-grouped" style="margin-top: 5px">
                    <div class="control">
                        <button class="button is-link formInput" type="submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection