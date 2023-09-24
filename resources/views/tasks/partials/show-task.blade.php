<div class="p-2 sm:p-4 bg-white shadow sm:rounded-lg">
    <div class="grid grid-cols-10 gap-4">
        <div class="col-span-1 py-2.5 text-center">
            <form action="{{route('task.update', ['id' => $task->id, 'completed' => true])}}" method="POST">
                @csrf
                @include('tasks.elements.submit-checkbox', ['checked' => false])
            </form>
        </div>
        <div class="col-span-7 py-2.5 text-ellipsis overflow-hidden">
            {{$task->title}}
        </div>
        <div class="col-span-2 text-right">
            <form action="{{route('task.delete', ['id' => $task->id])}}" method="POST">
                @csrf
                @include('tasks.elements.submit-delete')
            </form>
        </div>
    </div>
</div>
