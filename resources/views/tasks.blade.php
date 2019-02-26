@foreach($tasks as $task)
    {{$task->name}}
    
    <br>
@endforeach

<form action="{{url('task')}}" method="post">
    {{csrf_field()}}
    <input type="text" name="name">
    <button type="submit">submit</button>
</form>