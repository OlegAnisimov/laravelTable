@extends('layouts.app')
@section('titleBlock')   Orders @endsection
@section('content')
    <h1 class="h1">Orders </h1>
    <a href="" class="a"> просроченные </a>
    <a href="" class="a"> текущие </a>
    <a href="" class="a"> новые </a>
    <a href="" class="a"> выполненные </a>
    {{ $pag->links() }}
    <table class="table">
        <thead>
        <tr>
            <th>#</th>
            <th>Статус</th>
            <th>Название клиента</th>
            <th>Состав заказа (название, кол-во товаров)</th>
            <th>Cost</th>
        </tr>
        </thead>
        @foreach($pag as $key => $value)
            <?php
            $totalCost = 0;
            ?>
            <tbody>
            <tr> <td >
                    <a class="active" href="{{'/order/'.$key}}"> {{$pag[$key][0]->id}} </a>

                </td>
                <td>{{$pag[$key][0]->status}}</td>
                <td>{{$pag[$key][0]->partner}}</td>
                <td>

                    @foreach($value as $index => $val)
                        <table class="">
                            <tbody>
                            <td>{{$val->productName}}</td>
                            <td>{{$val->quantity}}</td>
                                                        <td>{{$val->quantity*$val->price}}</td>
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
