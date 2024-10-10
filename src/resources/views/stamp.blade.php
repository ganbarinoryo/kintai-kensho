@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/stamp.css') }}">
<link rel="stylesheet" href="{{ asset('css/common.css') }}" />
@endsection

@section('content')

<div class="stamp__content">
    <div class="stamp-form__heading">
        <h2>福場凛太郎さんお疲れ様です！</h2>
    </div>

<!--勤務開始・終了-->
    <form class="form">

    <div class="flex__form__group">

        <div class="form__group-content">
            <div class="form__clock-button">
                <button class="form__button-submit" type="submit">勤務開始
            </button>
            </div>
        </div>

        <div class="form__group-content">
            <div class="form__clock-button">
                <button class="form__button-submit" type="submit">勤務終了
            </button>
            </div>
        </div>

    </div>
    </form>

<!--休憩開始・終了-->
    <form class="form">

    <div class="flex__form__group">

        <div class="form__group-content">
            <div class="form__break-button">
                <button class="form__button-submit" type="submit">休憩開始
            </button>
            </div>
        </div>

        <div class="form__group-content">
            <div class="form__break-button">
                <button class="form__button-submit" type="submit">休憩終了
            </button>
            </div>
        </div>

    </div>
    </form>
</div>
@endsection