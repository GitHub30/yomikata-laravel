<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YOMIKATA</title>
</head>

<body>
    <header>
        <p>YOMIKATA</p>
        <p>ちょっと読み方決めようぜ。</p>
    </header>
    <nav>
        <a href="">ホーム</a>
        <a href="">YOMIKATAとは？</a>
        <a href="">単語の調べ方</a>
        <a href="">単語の登録方法</a>
        <a href="">利用の注意事項</a>
    </nav>
    <aside>
        <form action="">
            <input type="text">
            <button>検索</button>
        </form>
        <p>単語登録件数:4787件</p>
        <button>ツイート</button>
        <details>
            <summary>a</summary>
            <p>ここに詳細情報が入ります。</p>
        </details>
        <details>
            <summary>b</summary>
            <p>ここに詳細情報が入ります。</p>
        </details>
        <details>
            <summary>c</summary>
            <p>ここに詳細情報が入ります。</p>
        </details>
    </aside>
    <main>
    @foreach ($words as $word)
        <p>このユーザーは：{{ $word->name }}</p>
    @endforeach
    <form method="post">
        @csrf
        <input name="name">
        <input type="submit">
    </form>
    </main>
</body>

</html>
