<!doctype html>
<html lang="en">
<head>
    <title>Manage Agency</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<style>
    body {
        font-style: italic;
        background-image: url("https://s3.cloud.cmctelecom.vn/tinhte1/2015/01/2727114_081-top-100-photos-2014-1.jpg");

    }
    table {
        background-color: aquamarine;
    }
</style>
<body>
<form style="margin-top: 50px" action="{{route('agency.store')}}" method="post">
    @csrf
    <table align="center" class="table" style="width: 700px; border: 1px solid black">
        <thead class="thead-dark">
        <tr>
            <th style="border-radius: 5px" colspan="2"><h1>Add Agency</h1></th>
        </tr>
        <tr>
            <td>
                <label>Id Agency</label><br>
                <input type="number" name="id" required>
            </td>
            <td rowspan="2">
                <label>Address</label><br>
                <input type="text" name="address" required>
            </td>
        </tr>
        <tr>
            <td>
                <label>Name Agency</label><br>
                <input type="text" name="name_agency" required>
            </td>
        </tr>
        <tr>
            <td>
                <label>Phone Number</label><br>
                <input type="number" name="phone" required>
            </td>
            <td>
                <label>Name Manager</label><br>
                <input type="text" name="name_manager" required>
            </td>
        </tr>
        <tr>
            <td>
                <label>Email</label><br>
                <input type="email" name="email" required>
            </td>
            <td>
                <label>Status</label><br>
                <select name="status">
                    <option value="Hoạt động">Active</option>
                    <option value="Ngừng hoạt động">Stop Active</option>
                </select>
            </td>
        </tr>
        <tr>
            <td style="text-align: right" colspan="2">
                <button type="submit" class="btn btn-info">Add</button>
            </td>
        </tr>
        </thead>
    </table>
</form>




<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>
