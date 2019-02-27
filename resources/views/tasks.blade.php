<table>
@foreach($tasks as $task)
   <tr>
    <!-- Имя задачи -->
    <td class="table-text">
        <div>{{ $task->name }}</div>
    </td>

    <!-- Кнопка Удалить -->
    <td>
        <form action="{{ url('task/'.$task->id) }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}

            <button type="submit" class="btn btn-danger">
                <i class="fa fa-trash"></i> Удалить
            </button>
        </form>
    </td>
    </tr>
    <br>
@endforeach
</table>
<form action="{{url('task')}}" method="post">
    {{csrf_field()}}
    <input type="text" name="name">
    <button type="submit">submit</button>
</form>
