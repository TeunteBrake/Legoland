@extends('admin.layout')

@section('content')
    <div style="width: 100%; height: auto; background-color: #ffcf00">
        <div style="width: 100%;">
            <img src="{{url('/images/LEGOLAND_PARKS_LOGO.svg')}}"/>
        </div>
        <div style="width: 100%; background-color: white; position: relative">
            <h1>Bestelling veranderen</h1>
            <form method="POST" action="/admin/bestellingen/{{$order->id}}">
                @csrf
                @method('PUT')
                <div class="field">
                    <label class="label" for="firstname"><strong>First Name</strong></label>
                    <div class="control">
                        <textarea class="formInput" type="text" name="firstname" id="firstname">{{$order->first_name}}</textarea>
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="lastname"><strong>Last Name</strong></label>
                    <div class="control">
                        <textarea class="formInput" name="lastname" id="lastname">{{$order->last_name}} </textarea>
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="email"><strong>E-mail</strong></label>

                    <div class="control">
                        <textarea class="formInput" name="email" id="email">{{$order->email}}</textarea>
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="phone"><strong>Phone</strong></label>

                    <div class="control">
                        <textarea class="formInput" name="phone" id="phone">{{$order->phone}}</textarea>
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="amount"><strong>Amount</strong></label>

                    <div class="control">
                        <textarea class="formInput" type="number" name="amount" id="amount">{{$order->amount}}</textarea>
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