<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atte</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/stamp.css') }}" />
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/">Atte</a>

<!--ヘッダー右側のリンク３つ-->
          <ul class="flex__header-nav">
            @if (Auth::check())
            <li class="header-nav__item">
                <a href="">ホーム</a>
            </li>
            <li class="header-nav__item">
                <a href="">日付一覧</a>
            </li>
            <li class="header-nav__item">
                <form action="/logout" method="post">
                    @csrf
                    <button class="header-nav__button">ログアウト</button>
                </form>
            </li>
            @endif
          </ul>

<main>

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

</main>
</div>

<footer class="footer">
    <div class="footer__inner">
        <h5>Atte, inc.</h5>
    </div>
</footer>


</body>
</html>