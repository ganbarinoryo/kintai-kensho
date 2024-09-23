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
            <div class="flex__header__rink">
                <a href="">ホーム</a>
                <a href="">日付一覧</a>
                <a href="">ログアウト</a>
            </div>
        </div>

<div class="stamp__content">
    <div class="stamp-form__heading">
        <h2>福場凛太郎さんお疲れ様です！</h2>
    </div>


<!--勤務開始・終了-->
    <form class="form">

    <div class="flex__form__group">

        <div class="form__group-content">
            <div class="form__button">
                <button class="form__clock-in-submit" type="submit">勤務開始
            </button>
            </div>
        </div>

        <div class="form__group-content">
            <div class="form__button">
                <button class="form__clock-out-submit" type="submit">勤務終了
            </button>
            </div>
        </div>

    </div>
    </form>

<!--休憩開始・終了-->
    <form class="form">

    <div class="flex__form__group">

        <div class="form__group-content">
            <div class="form__button">
                <button class="form__break-in-submit" type="submit">休憩開始
            </button>
            </div>
        </div>

        <div class="form__group-content">
            <div class="form__button">
                <button class="form__break-out-submit" type="submit">休憩終了
            </button>
            </div>
        </div>

    </div>
    </form>



</body>
</html>