@extends('admin.layout')

@section('content')
    <div class="home">
        <h1>Admin Home</h1>
    </div>
    <div>
        <table border="solid 1px black">
            <tr>
                <th>Dag</th>
                <th>Inkomsten</th>
                <th>Uitgaven</th>
            </tr>
            <tr>
                <td>8-6-2020</td>
                <td>€54677,75</td>
                <td>€50134,99</td>
            </tr>
        </table>
    </div>
@endsection