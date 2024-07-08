<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <form action="/" method="GET">
            <button> Home </button>
        </form>
    </div>

    <div style="border: 3px solid black;">
        <h2>Register</h2>
        <form action="/register" method="POST">
            @csrf
            <h4>
                <input name="NIK" type="text" placeholder="Masukkan NIK" style="border-block-color: #b3b3b3">
            </h4>
            <h4>
                <input name="email" type="text" placeholder="E-mail" style="border-block-color: #b3b3b3">
            </h4>
            <h4>
                <input name="name" type="text" placeholder="Masukkan Nama Lengkap" style="border-block-color: #b3b3b3">
            </h4>
            <h4>
                <input name="tempat-lahir" type="text" placeholder="Tempat Lahir" style="border-block-color: #b3b3b3">
            </h4>
            <h4>
                <input name="tanggal-lahir" type="date" placeholder="Tanggal Lahir" style="border-block-color:  #b3b3b3">
            </h4>
            <div>
                <h4> Jenis Kelamin :
                    <input name="jenis-kelamin" type="radio" value="Laki-laki"> Laki-laki
                    <input name="jenis-kelamin" type="radio" value="Perempuan"> Perempuan
                </h4>
            </div>
            <div>
                <h4>
                    <select name="status-pernikahan" id="status-pernikahan">
                        <option value="" disabled selected>Pilih Status Pernikahan</option>
                        <option value="Nikah"> Nikah </option>
                        <option value="Belum Nikah"> Belum Nikah</option>
                    </select>
                </h4>        
            </div>
            <div>
                <input name="nomor-hp" type="number" placeholder="Nomor HP">
            </div>
            <div>
                <textarea name="alamat" id="" cols="30" rows="5" placeholder="Alamat Lengkap">

                </textarea>
            </div>
            <button> Save </button>
        </form>
    </div>
</body>
  
</html>