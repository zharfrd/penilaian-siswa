<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Penilaiam Siswa</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    @include('partials.header')
    <div class="menu">
        <a href="/">Home</a>
    </div>

    <div class="kiri-atas">
        <fieldset>
            <center>
                <button onclick="tapilkan_login_admin()" class="button-primary">Admin</button>
                <button onclick="tampilkan_login_siswa()" class="button-primary">Siswa</button>
                <button onclick="tampilkan_login_guru()" class="button-primary">Guru</button>
                <hr>
                Pilih Login Yang Sesuai dengan posisi anda
                <hr>
            </center>

            <div id="login_admin" class="container-login" style="display: none">
                <center>
                    <b>Login Admin</b>
                    <p>{{ session('error') }}</p>
                </center>
                <form action="/login_admin" method="post"></form>
                    @csrf
                    <table>
                        <tr>
                            <td width="25%"><strong>kode admin</strong></td>
                            <td width="25%"></td>
                        </tr>
                    </table>
            </div>
        </fieldset>

    </div>

</body>
</html>
