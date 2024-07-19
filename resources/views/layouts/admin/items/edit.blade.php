@extends('layouts.admin')

@section('content')
    <div class="container">
        <h2>Редактировать товар</h2>
        <form method="POST" action="{{ route('items.update', $item) }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Название</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $item->name }}" required>
            </div>
            <div class="form-group">
                <label for="description">Описание</label>
                <textarea class="form-control" id="description" name="description" rows="3" required>{{ $item->description }}</textarea>
            </div>
            <div class="form-group">
                <label for="price">Цена</label>
                <input type="number" class="form-control" id="price" name="price" value="{{ $item->price }}" step="0.01" required>
            </div>
            <div class="form-group">
                <label for="category_id">Категория</label>
                <select class="form-control" id="category_id" name="category_id">
                    <option value="">Выберите категорию</option>

                </select>
            </div>
            <div class="form-group">
                <label for="hidden_for_groups">Скрыть для групп</label>
                <select class="form-control" id="hidden_for_groups" name="hidden_for_groups[]" multiple>

                </select>
            </div>
            <button type="submit" class="btn btn-primary">Сохранить</button>
        </form>
    </div>
@endsection
