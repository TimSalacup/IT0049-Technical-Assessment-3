@extends('layouts.app')

@section('title', 'Task List')

@section('content')
    <h2>All Tasks</h2>
    <p class="muted">Tasks are ordered by date.</p>

    @if ($tasks->isEmpty())
        <p>No tasks are available.</p>
    @else
        <div class="table-wrap">
            <table>
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Task</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tasks as $task)
                        <tr>
                            <td>{{ $task->task_date->format('M j, Y') }}</td>
                            <td>{{ $task->title }}</td>
                            <td>{{ ucfirst($task->status) }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
@endsection