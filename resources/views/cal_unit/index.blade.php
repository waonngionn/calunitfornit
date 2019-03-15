@extends('common.layout')

@section('bodycontent')
<div>
    <p>
        あなたが卒業までに必要な単位数を計算します
    </p>
    <p>
        5年生最初の選択科目を選択する際の補助ツール
    </p>
</div>

@if(isset($error_msg))
<p class="text-danger">{{$error_msg}}</p>
@endif

<form action="./result" method="post">
    {{ csrf_field() }}
    <!-- <div class="form-group">
        <label class="control-label">学年</label>
          <label>4年生</label>
        </div> -->
        <div class="form-group">
          <label class="control-label">学科</label>
          <select name="department" class="form-control">
            <option value="N" selected>学科を選択してください</option>
            <option value="M">機械工学科</option>
            <option value="E">電気電子工学科</option>
            <option value="D">電子制御工学科</option>
            <option value="S">制御情報工学科</option>
            <option value="C">物質工学科</option>
          </select>
        </div>
        <div class="form-group ">
          <label class="control-label">TOEIC以外の外部単位の合計(ドイツ語演習Ⅱなども含む)</label>
          <select name="outsideunit" class="form-control">
            <option selected>0</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            <option>6</option>
            <option>7</option>
            <option>8</option>
            <option>9</option>
            <option>10</option>
            <option>11</option>
            <option>12</option>
            <option>13</option>
            <option>14</option>
            <option>15</option>
            <option>16</option>
            <option>17</option>
            <option>18</option>
            <option>19</option>
          </select>
        </div>
        <div class="form-group">
          <label class="control-label">TOEICの点数(受けてない人は何も入力しなくて大丈夫です)</label>
          <input type="text" name="toeicscore" class="form-control" value="{{old('toeicscore')}}" placeholder="300">
        </div>
        <div class="form-group mb-5">
          <label class="control-label">落単位数（科目ではなく単位を選択してください）</label>
          <select name="dropunit" class="form-control">
            <option selected>0</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            <option>6</option>
            <option>7</option>
            <option>8</option>
            <option>9</option>
            <option>10</option>
            <option>11</option>
            <option>12</option>
            <option>13</option>
            <option>14</option>
            <option>15</option>
            <option>16</option>
            <option>17</option>
            <option>18</option>
            <option>19</option>
          </select>
        </div>
        <div class="mx-auto text-center" style="width: 10em;">
            <!-- <a href="{{url()->current()}}/result/" class="btn btn-primary">計算</a> -->
            <button class="btn btn-primary">計算</button>
        </div>
      </form>  
@endsection