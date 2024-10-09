<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atte</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/attendance.css') }}" />
</head>
<body>
        <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/">Atte</a>

<!--ヘッダー右側のリンク３つ-->
            <ul class="flex__header-nav">
            @if (Auth::check())
            <li class="header-nav__item">
                <a href="/">ホーム</a>
            </li>
            <li class="header-nav__item">
                <form action="/attendance" method="get">
                    @csrf
                    <button class="header-nav__button">日付一覧</button>
                </form>
            </li>
            <li class="header-nav__item">
                <form action="/logout" method="post">
                    @csrf
                    <button class="header-nav__button">ログアウト</button>
                </form>
            </li>
            @endif
          </ul>
</header>


<main>

<div class="attendance__content">
    <div class="attendance-content__heading">
        <h2>福場凛太郎さんお疲れ様です！</h2>
    </div>

<!--データテーブル-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
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
<footer class="footer">
    <div class="footer__inner">
        <h5>Atte, inc.</h5>
    </div>
</footer>
</body>
</html>