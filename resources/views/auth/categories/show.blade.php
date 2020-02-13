@extends('auth.layouts.master')

@section('title', 'Категория ' . $category->name)

@section('content')
    <div class="col-md-12">
        <h1>Категория Бытовая техника</h1>
        <table class="table">
            <tbody>
            <tr>
                <th>
                    Поле
                </th>
                <th>
                    Значение
                </th>
            </tr>
            <tr>
                <td>ID</td>
                <td>{{ $category->id }}</td>
            </tr>
            <tr>
                <td>Код</td>
                <td>{{ $category->code }}</td>
            </tr>
            <tr>
                <td>Название</td>
                <td>{{ $category->name }}</td>
            </tr>
            <tr>
                <td>Описание</td>
                <td>{{ $category->description }}</td>
            </tr>
            <tr>
                <td>Картинка</td>
                <td><img src="{{ Storage::url($category->img) }}"
                         height="140px"></td>
            </tr>
            <tr>
                <td>Дата добавления категории</td>
                <td>{{ $category->created_at }}</td>
            </tr>
            <tr>
                <td>Дата редактирования категории</td>
                <td>{{ $category->updated_at }}</td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection
