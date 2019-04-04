<!DOCTYPE html>
<link rel="stylesheet" type="text/css" href="{{ asset('assets/sass/app.css') }}" />
<html lang="en">
<head>
    <title>Admin config</title>

</head>
<body>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <table>

        <tr>
            <td>
                <div>{{user()->name}}</div>
            </td>

            <td>
                <form action={{ route('task.status', [$task]) }}
            </td>
        </tr>

    </table>

</body>