<!DOCTYPE html>
<html lang="en">
<head>
    <title>Task manager</title>

</head>
<body>

<table>
    @foreach($tasks as $task)
        <tr>
            <!-- Имя задачи -->
            <td class="table-text">
                <div>{{ $task->name }}</div>
            </td>

            <!-- Кнопка Удалить -->
            <td>
                <form action="{{action('PostController@delete',$task->id)}}"  method="POST">
                    <input name="_method" type="hidden" value="DELETE">
                {{ csrf_field() }}
                    {{ method_field('delete') }}

                    <button type="submit" class="btn btn-danger">
                        <i class="fa fa-trash"></i> Delete
                    <input type="hidden" value="id" />
                    </button>
                </form>
            </td>
        </tr>
        <br>
    @endforeach
</table>
<form action="{{ action('PostController@request') }}">
    {{csrf_field()}}

    <input type="text" name="name">
    <button type="submit">submit</button>

</form>
@yield('content')
</body>
