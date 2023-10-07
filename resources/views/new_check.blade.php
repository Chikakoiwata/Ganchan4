<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>TFA調整さん | 新規確認事項</title>
        <!-- Material Design for Bootstrap 読み込み 開始 -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
        <link rel="stylesheet" href="{{ asset('css/mdb.min.css') }}" />
        <script type="text/javascript" src="{{ asset('js/mdb.min.js') }}" defer></script>
        <!-- Material Design for Bootstrap 読み込み 終了 -->
    </head>
    <body class="font-sans antialiased bg-light">
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-12 col-md-10 col-lg-8">

<!-- 新規確認事項登録フォーム 開始 -->
<form action="{{ route('checks.store') }}" method="POST" class="card card-body shadow-2 mb-3">
    @csrf

    <p class="mb-1 text-gray-400 font-weight-bold" style="font-size: 0.8rem;">新規確認事項登録</p>
    <label for="country">Country:</label>
    <input type="text" id="country" name="country" required>
    <label for="tax">Tax:</label>
    <input type="text" id="tax" name="tax" required>
    <label for="tax_url">Tax URL:</label>
    <input type="text" id="tax_url" name="tax_url" required>
    <label for="danger">Danger:</label>
    <input type="text" id="danger" name="danger" required>
    <label for="danger_url">Danger URL:</label>
    <input type="text" id="danger_url" name="danger_url" required>
    <label for="remarks">Remarks:</label>
    <input type="text" id="remarks" name="remarks" required>
    
    <!-- 提出ボタン -->
    <button type="submit" class="btn btn-primary btn-lg btn-block shadow-0 font-weight-bold">新規確認事項登録</button>

    <a href="{{ route('checks.index') }}" class="btn btn-primary mt-2">戻る</a>
</form>
<!-- 新規確認事項登録フォーム 終了 -->

            </div>
        </div>
    </div>
    </body>
</html>
