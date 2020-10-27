@extends('layouts.app')
@section('titleBlock')  Список заказов   @endsection
@section('content')
    <?php date_default_timezone_set('Europe/Moscow'); ?>
<h1 class="h1">Список заказов </h1>
<a href="{{ 'overdue' }}" class="a"> просроченные </a>
<a href="{{ 'current' }}" class="a"> текущие </a>
<a href="{{ 'new' }}" class="a"> новые </a>
<a href="{{ 'ready' }}" class="a"> выполненные </a>
{{ $items->links() }}

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
<table class="table">
    <thead>
    <tr>
        <th>#Id</th>
        <th>Статус</th>
        <th>Название клиента</th>
        <th>Состав заказа (название, кол-во товаров)</th>
        <th>Стоимость заказа</th>
    </tr>
    </thead>
    @foreach($items as $key => $value)
        <?php
        $totalCost = 0;
        ?>
        <tbody>
        <tr> <td >
                <a class="active" href="{{'/orders/'.$items[$key][0]->id}}"> {{$items[$key][0]->id}} </a>
            </td>
            <td>{{$items[$key][0]->status}}</td>
            <td>{{$items[$key][0]->partner}}</td>
            <td>

                @foreach($value as $index => $val)
                    <table class="">
                        <tbody>
                        <td>{{$val->productName}}</td>
                        <td>{{$val->quantity}}</td>
                        </tbody>
                    </table>
                @endforeach
            </td>
            @foreach($value as $index => $val)
                <?php
                $totalCost += $val->price*$val->quantity;
                ?>
            @endforeach
            <td>{{ $totalCost }}</td>
        </tr>
        </tbody>
    @endforeach
</table>
@endsection
