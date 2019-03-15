@extends('common.layout')

@section('bodycontent')
<div>
    <h3>卒業までに必要な単位数は</h3>
    <h1 class="h1_result"><span class="h1_result_number">{{$result}}</span>単位</h1>

    <a href="https://twitter.com/share" class="twitter-share-button"
    data-url="http://waonn.sakura.ne.jp/calunitfornit/"
    data-text="わたしの卒業までに必要な単位数は{{$result}}単位でした！"
    data-lang="ja"
    data-hashtags="沼津高専単位計算"
    data-size="large"
    >ツイート</a>
</div>

<div>
    <p>
        この計算結果は5年生の必修科目をすべて取得する計算です。
        選択科目を選択する際の参考にしてください。
    </p>
</div>
@endsection