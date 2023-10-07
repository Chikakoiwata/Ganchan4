<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>TFA調整さん | 確認事項</title>
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


@foreach($prices as $price)
    <!-- ぼやき表示用のカード 開始 -->
    <a href="{{ route('projects.price', $price->id) }}" class="text-decoration-none text-dark">
        <div class="card card-body shadow-2 mb-2">
            <div class="d-flex justify-content-between">
                <p>
                    <span class="font-weight-bold mr-2">{{ $price->country }}</span>
                    <span style="font-size: 0.8rem;">{{ $price->tax }}</span>    
                    <span style="font-size: 0.8rem;">{{ $price->tax_url }}</span>
                    <span style="font-size: 0.8rem;">{{ $price->danger }}</span>    
                    <span style="font-size: 0.8rem;">{{ $price->danger_url }}</span>
                    <span style="font-size: 0.8rem;">{{ $price->remarks }}</span>    
                    <span style="font-size: 0.8rem;">{{ $price->user_id}}</span>
                    <span style="font-size: 0.8rem;">{{ $price->tax }}</span>    
                   
                </p>
            </div>

        </div>
    </a>
    <!-- ぼやき表示用カード終了 -->
@endforeach
<a href="{{ route('back_to_projects') }}" class="btn btn-primary mt-2">戻る</a>
            </div>
        </div>
    </div>
    </body>
</html>