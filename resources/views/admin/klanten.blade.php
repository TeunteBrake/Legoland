@extends('admin.layout')

@section('content')
    <div class="home">
        <h1>Admin Klanten</h1>
    </div>
    <div>
        <table border="solid 1px white">
            <tr>
                <th style="padding-right:20px">Voornaam</th>
                <th style="padding-right:20px">Achternaam</th>
                <th style="padding-right:20px">Straat</th>
                <th style="padding-right:20px">Huisnummer</th>
                <th style="padding-right:20px">Postcode</th>
                <th style="padding-right:20px">Stad/Dorp</th>
                <th style="padding-right:20px">E-mail</th>
                <th style="padding-right:20px">Telefoon</th>
            </tr>
            @foreach($customers as $customer)
                <tr>
                    <td >{{$customer->first_name}}</td>
                    <td>{{$customer->last_name}}</td>
                    <td>{{$customer->street}}</td>
                    <td>{{$customer->houseNumber}}</td>
                    <td>{{$customer->Postalcode}}</td>
                    <td>{{$customer->Town}}</td>
                    <td>{{$customer->Email}}</td>
                    <td>{{$customer->Phone}}</td>
                    <td><button class="formInput" onclick="window.location.href='klanten/{{$customer->id}}'">Edit order</button></td>
                    <td><button type="submit" class="formInput" onclick="window.location.href='/admin/klanten/{{$customer->id}}/delete'">Delete order</button></td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection