@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/attendance.css') }}">
<link rel="stylesheet" href="{{ asset('css/common.css') }}" />
@endsection

@section('content')

<div class="attendance__content">
    <div class="attendance-content__heading">
        <h2>福場凛太郎さんお疲れ様です！</h2>
    </div>

<!--データテーブル-->

<div class="data-table">
            <table>
                <tr>
                    <th>id</th>
                    <th>名前</th>
                    <th>勤務開始</th>
                    <th>勤務終了</th>
                    <th>休憩時間</th>
                    <th>勤務時間</th>
                </tr>
@foreach ($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
@endforeach
            </table>
            <div class="pagination">{{ $users->links() }}</div>
        </div>
@endsection