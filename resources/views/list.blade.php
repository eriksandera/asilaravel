<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>ASI Asia Pasific</title>
    </head>
    <body>
        TEST CRUD LARAVEL
        <a href="/create"><button>Add Data</button></a>
        <table border="1">
            <tr>
                <td>No</td>
                <td>Nama</td>
                <td>Address</td>
                <td>City</td>
                <td>Phone Number</td>
                <td>Action</td>
            </tr>

            @foreach($clients as $data)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $data->name}}</td>
                <td>{{ $data->address}}</td>
                <td>{{ $data->city }}</td>
                <td>{{ $data->phone_number}}</td>
                <td>
                    <a href="/edit/{{ $data->slug }}"><button>Edit</button></a
                    >&nbsp |
                    <a href="/delete/{{ $data->slug }}"
                        ><button>Delete</button></a
                    >
                </td>
            </tr>
            @endforeach
        </table>
    </body>
</html>
