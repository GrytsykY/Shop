@extends('layouts.master')

@section('content')
    <h1 class="text-center">Подтвердите заказ:</h1>
    <div class="container">
        <div class="row justify-content-center">
            <p>Общая стоимость заказа: <b style="color: red">{{$order->calculateFullSum()}} грн.</b></p>
            <form action="{{route('basket-confirm')}}" method="POST">
                <div>
                    <p>Укажите свои имя и номер телефона, чтобы наш менеджер мог с вами связаться:</p>
                    @csrf
                    <div class="container text-center">
                        <div class="form-group row">
                            <label for="name" class="control-label col-lg-offset-3 col-lg-2">Имя: </label>
                            <div class="col-lg-4">
                                <input type="text" name="name" id="name" value="" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="phone" class="control-label col-lg-offset-3 col-lg-2">Номер
                                телефона: </label>
                            <div class="col-lg-4">
                                <input type="tel" name="phone" id="phone" value="" required
                                       class="form-control">
                            </div>
                        </div>
                        @guest
                            <div class="form-group row">
                                <label for="name" class="control-label col-lg-offset-3 col-lg-2">Email: </label>
                                <div class="col-lg-4">
                                    <input type="text" name="email" id="email" value="" class="form-control" required>
                                </div>
                            </div>
                        @endguest

                    </div>
                    <br>

                    <input type="submit" class="text-center btn btn-success" value="Подтвердить заказ">
                </div>
            </form>
        </div>
    </div>
@endsection