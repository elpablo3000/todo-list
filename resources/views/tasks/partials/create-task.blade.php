<div class="p-2 sm:p-4 bg-white shadow rounded-md sm:rounded-lg">
    <form action="{{route('task.create')}}" method="POST">
        <div class="grid grid-cols-10 gap-4">
            @csrf
            <div class="col-span-1"></div>
            <div class="col-span-7">
                @include('tasks.elements.input-text')
            </div>
            <div class="text-right col-span-2">
                @include('tasks.elements.submit-add')
            </div>
        </div>
    </form>
</div>
