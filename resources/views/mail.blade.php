{{-- {{ $name }}さん
{{ $mail }}さん
{{ $phone }}さん
{{ $address }}さん
{{ $work }}さん
{{ $mail }}さん --}}
<style>
    table,
td {
  border: 1px solid #333;
}

thead,
tfoot {
  background-color: #333;
  color: #fff;
}
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>mail</title>
</head>
作業依頼来ましたので早めに確認ください。
<table border="1">
    <tr>
        <th>依頼種類</th>
        <td>{{$work}}</td>
    </tr>
    <tr>
        <th>お名前</th>
        <td>{{$name}}</td>
    </tr>
    <tr>
      <th>メールアドレス</th>
      <td>{{$mail}}</td>
    </tr>
    <tr>
      <th>電話番号</th>
      <td>{{$phone}}</td>
    </tr>
    <tr>
        <th>メッセージ</th>
        <td>{{$worktext}}</td>
      </tr>
  </table>
</body>
</html>
