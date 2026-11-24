@extends('layouts.app')

@section('title', 'Welcome')

@section('content')
    <h2>Today's Tasks</h2>
    <p class="muted">{{ today()->format('F j, Y') }}</p>

    @if ($tasks->isEmpty())
        <p>No tasks are scheduled for today.</p>
    @else
        <div class="table-wrap">
            <table>
                <thead>
                    <tr>
                        <th>Task</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tasks as $task)
                        <tr>
                            <td>{{ $task->title }}</td>
                            <td>{{ ucfirst($task->status) }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
@endsection