<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('To-Do List') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-6">
            <div>
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Add New') }}
                </h2>
            </div>

            <div>
                @include('tasks.partials.create-task')
            </div>

            <div>
                <h2 class="font-semibold text-xl text-gray-800 leading-tight pt-6">
                    {{ __('To-Do') }}
                </h2>
            </div>

            <div class="grid grid-cols-1 gap-4">
                @foreach($tasksToDo as $taskToDo)
                    @include('tasks.partials.show-task', ['task' => $taskToDo])
                @endforeach
            </div>

            <div>
                <h2 class="font-semibold text-xl text-gray-800 leading-tight pt-6">
                    {{ __('Done') }}
                </h2>
            </div>

            <div class="grid grid-cols-1 gap-4">
                @foreach($tasksDone as $taskDone)
                    @include('tasks.partials.show-task-completed', ['task' => $taskDone])
                @endforeach
            </div>
        </div>
    </div>

</x-app-layout>
