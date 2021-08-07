<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Thêm Khách Hàng:</h1>
    <form action="{{ route('customers.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <table>
            <tr>
                <td>Chọn ảnh đại diện:</td>
                <td><input type="file" name="avatar" id="" required></td>
            </tr>
            <tr>
                <td>Họ Và Tên:</td>
                <td><input type="text" name='name' required></td>
            </tr>
            <tr>
                <td>Giới Tính:</td>
                <td><select name="gender" id="" required> 
            <option value="1">Nam</option>
            <option value="0">Nữ</option>
        </select></td>
            </tr>
            <tr>
                <td> Số điện thoại:</td>
                <td><input type="tel" name="phone" id="" pattern="[0][0-9]{9}" required></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="email" name="email" id="" required></td>
            </tr>
            <tr>
                <td colspan="2"><button>Ok</button></td>
            </tr>

        </table>
    </form>
</body>
</html>