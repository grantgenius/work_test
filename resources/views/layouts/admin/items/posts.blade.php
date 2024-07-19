@extends('layouts.admin')
@section('content')

        <div>

                @foreach ($items as $item)
                    <div class="item">
                        <span>Название</span>
                        <h3>{{ $item->name }}</h3>
                        <span>Описание</span>
                        <p>{{ $item->description }}</p>
                        <span>Цена</span>
                        <p>{{ $item->price }}</p>
                        <span>Категории</span>
                        <p>{{ $item->category }}</p>
                        <a href="{{ route('items.edit', $item->id) }}" class="btn btn-warning">Редактировать</a>
                        <form action="{{ route('items.destroy', $item->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Удалить</button>
                        </form>
                    </div>
                @endforeach

                </tbody>
            </table>
            </body>
            </html>
        </div>

@endsection
