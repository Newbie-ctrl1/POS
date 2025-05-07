<body>
    <h1>Form Data User</h1>
    <form method = "post" action="{{ url('/user/tambah_simpan') }}">
       
        @csrf

        <label>Username</label>
        <input type="text" name="username" placeholder="Masukan Username">
        <br>
        <label>Nama</label>
        <input type="text" name="nama" placeholder="Masukan Nama">
        <br>
        <label>Password</label>
        <input type="password" name="password" placeholder="Masukan Nama">
        <br>
        <label>Level ID</label>
        <input type="number" name="level_id" placeholder="masukan ID Level">
        <br><br>
        <input type="submit" class="btn btn-succes" value="simpan">

    </form>
</body>