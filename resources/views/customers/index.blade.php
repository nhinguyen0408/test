<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Danh sách khách hàng: </h1>
    <a href="{{url('customers/create')}}">Thêm Khách Hàng</a>
    <form method="get">
        <input type="text" name="search" id="" placeholder="Search name or email"> <button>OK</button>
    </form>
    @if(isset($search))
    <h3>Tìm kiếm của: {{$search}}</h3>
    @endif
    <table border="0" cellspacing="10px" cellpadding="10px">
        <tr>
            <th>Mã</th>
            <th>Ảnh đại diện</th>
            <th>Tên</th>
            <th>Giới tính</th>
            <th>Số điện thoại</th>
            <th>Email</th>
        </tr>
        @if (isset($data_search) && count($data_search))
            @foreach ($data_search as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>@if($item->avatar == null) {{'Null'}} @else {{$item->avatar}} @endif</td>
                <td>{{$item->name}}</td>
                <td>@if($item->gender == 1) {{'Nam'}} @else {{"Nữ"}} @endif</td>
                <td>{{$item->phone}}</td>
                <td>{{$item->email}}</td>
            </tr>
        @endforeach
        @elseif (isset($data_cus) && count($data_cus))
        @foreach ($data_cus as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>@if($item->avatar == null) {{'Null'}} @else {{$item->avatar}} @endif</td>
                <td>{{$item->name}}</td>
                <td>@if($item->gender == 1) {{'Nam'}} @else {{"Nữ"}} @endif</td>
                <td>{{$item->phone}}</td>
                <td>{{$item->email}}</td>
            </tr>
        @endforeach
        @endif
    </table>
</body>
</html>