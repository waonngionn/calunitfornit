@extends('common.layout')

@section('bodycontent')
<div>
    <h3>卒業までに必要な単位数は</h3>
    <h1 class="h1_result"><span class="h1_result_number">{{$result}}</span>単位</h1>
</div>

<div>
    <p>
        この計算結果は5年生の必修科目をすべて取得する計算です。
        選択科目を選択する際の参考にしてください。
    </p>
</div>
@endsection