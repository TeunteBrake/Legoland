@extends('admin.layout')

@section('content')
    <div class="home">
        <h1>Admin Bestellingen</h1>
    </div>
    <div>
        <table border="solid 1px white">
            <tr>
                <th style="padding-right:20px">Voornaam</th>
                <th style="padding-right:20px">Achternaam</th>
                <th style="padding-right:20px">E-mail</th>
                <th style="padding-right:20px">Telefoon</th>
                <th style="padding-right:20px">Aantal</th>
            </tr>
            @foreach($orders as $order)
                <tr>
                    <td >{{$order->first_name}}</td>
                    <td>{{$order->last_name}}</td>
                    <td>{{$order->email}}</td>
                    <td>{{$order->phone}}</td>
                    <td>{{$order->amount}}</td>
                    <td><button class="formInput" onclick="window.location.href='bestellingen/{{$order->id}}'">Edit order</button></td>
                    <td><button class="formInput" onclick="window.location.href='bestellingen/{{$order->id}}/delete'">Delete order</button></td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection