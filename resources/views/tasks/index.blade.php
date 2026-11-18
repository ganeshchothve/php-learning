<h1>Tasks</h1>

<ul>
    @forelse ($tasks as $task)
        <li>{{ $task->title }}</li>
    @empty
        <li>No tasks yet.</li>
    @endforelse
</ul>
