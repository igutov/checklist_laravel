@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>
                    <div class="card-body">
                        <form method="POST" class="form-inline" action="{{ route('list.store') }}">
                            @csrf
                            
                            <div class="input-group">
                                <input type="text" name="name" value="" class="form-control" aria-label="Default">
                                <div class="input-group-prepend">
                                    <button type="submit" class="btn btn-primary" name="create">
                                        Создать новую категорию
                                    </button>
                                </div>
                            </div>
                        </form>

                        <form method="POST" action="{{ route('task.index') }}">
                            @csrf

                            <div class="input-group mb-2">
                                <label class="my-2 mr-2" for="inlineFormCustomSelectPref">Мои категории:</label>
                                <select class="custom-select col" id="inlineFormCustomSelectPref" name="list_id">
                                    @forelse ($lists as $list)
                                        <option value="{{ $list->id }}">
                                            {{ $list->name }}
                                        </option>
                                    @empty
                                        <option value="">
                                            Списков нет
                                        </option>
                                    @endforelse
                                </select>
                            </div>

                            <div class="input-group">
                                <input type="text" name="task" value="" class="form-control" aria-label="Default">
                                <div class="input-group-prepend">
                                    <button type="submit" class="btn btn-primary">
                                        Сохранить запись
                                </div>
                            </div>

                            <ul class="list-group list-group-flush">
                                @forelse ($tasks as $task)
                                    <li class="list-group-item">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                            <label class="form-check-label" for="defaultCheck1">
                                                {{ $task->task }}
                                            </label>
                                        </div>
                                    </li>
                                @empty
                                    <li class="list-group-item">
                                        <div class="form-check">
                                            <label class="form-check-label" for="defaultCheck1">
                                                {{ $task->task }}
                                            </label>
                                        </div>
                                    </li>
                                @endforelse
                            </ul>

                        </form>

                        <form action="{{ route('task.store') }}" method="post">

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<script>

</script>
