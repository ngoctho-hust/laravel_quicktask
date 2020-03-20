@extends('layouts.app')

@section('title', 'Laravel Quickstart')

@section('content')

    <div>
        @include('common.errors')

        <form action="{{ route('tasks.store') }}" method="POST">
            @csrf
            <div>
                <label for="task">{{ trans('messages.task') }}</label>

                <div>
                    <input type="text" name="name">
                </div>
            </div>

            <div>
                <div>
                    <button type="submit">{{ trans('messages.add_task') }}</button>
                </div>
            </div>
        </form>
    </div>

    @if (count($tasks) > 0)
        <div>
            <div>
                {{ trans('messages.current_tasks') }}
            </div>

            <div>
                <table>

                    <thead>
                        <th>{{ trans('messages.task') }}</th>
                        <th>&nbsp;</th>
                    </thead>

                    <tbody>
                        @foreach ($tasks as $task)
                            <tr>
                                <td>
                                    <div>{{ $task->name }}</div>
                                </td>

                                <td>
                                    <form action="{{ route('tasks.destroy', $task->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit">{{ trans('messages.delete') }}</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif

@endsection
