<html>
    <head>
        <title>Form Input Barang</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script>
             function validasiForm(){
                const nama = document.getElementById("namabarang").value;
                const price = document.getElementById("harga").value;
                const code = document.getElementById("kbarang").value;

                if(namabarang == ""){
                    alert("Nama Barang wajib di isi");
                    return false;
                }
                if(nama.length < 10){
                    alert("Nama barang minimal 10 karakter");
                    return false;
                }
                if(harga == ""){
                    alert("Harga wajib di isi");
                    return false;
                }
                var angka = /^[0-9]+$/;
                if(!harga.match(angka)){
                    alert("Harga hanya diisi menggunakan angka saja!");
                    return false;
                }
                if(harga<=5000){
                    alert("Minimal harga yaitu 5000")
                    return false;
                }
                if(document.getElementById("jenisbarang").selectedIndex == 0){
                    alert("Pilih Jenis Barang!");
                    return false;
                }
                if(kbarang == ""){
                    alert("Kode Barcode wajib di isi");
                    return false;
                }
                var angka = /^[0-9]+$/;
                if(!kbarang.match(angka)){
                    alert("Harga hanya diisi menggunakan angka saja!");
                    return false;
                }
                if(kbarang.length < 10){
                    alert("Kode barcode minimal memiliki 10 karakter");
                    return false;
                }
            }
        </script>
        <style>
            body {
            background-color: #f0f2f5;
            font-family: 'Open Sans', sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            margin: 0;
            }
          .container {
	        background-color: #fff;
	        border-radius: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
            margin-block: 50px;
            width: 800px;
            height: 400px;
	        overflow: hidden;
            }

            h2 {
              color: #1877f2;
              text-align: center;
              margin-left: 20px;
              font-weight: bold;
            }

            p {
                text-align: center;
                color: gray;
                font-size: 10px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <br>
            <h2>Form Input Barang</h2>
            <br>
            <form action="https://www.facebook.com/" onsubmit="return validasiForm()">
                <div class="form-group row">
                    <label class="col-sm-3" for="namabarang">Nama Barang:</label>
                    <div class="col-sm-9"> <input type="text" name="namabarang" id="namabarang" size="30" class="form-control form-control-sm" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3" for="harga">Harga:</label>
                    <div class="col-sm-9"> <input type="text" name="harga" id="harga" size="30" class="form-control form-control-sm" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3" for="jenisbarang">Jenis Barang:</label>
                    <div class="col-sm-9"> <select name="jenisbarang" id="jenisbarang" required>
                        <option selected="" value="Default">(Pilih Jenis Barang)</option>
                        <option value="FD">Makanan</option>
                        <option value="DR">Minuman</option>
                        <option value="NO">Non Makanan Minuman</option>
                    </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3" for="kbarang">Kode Barang:</label>
                    <div class="col-sm-9"> <input type="text" name="kbarang" id="kbarang" size="30" class="form-control form-control-sm" required>
                    </div>
                </div>
                <br>
                <div class="form-group row, a, col text-center" >
                    <input class="col-sm-3, btn btn-primary center-block" type="submit" value="Kirim"/>
                    <input class="col-sm-3, btn btn center-block" type="reset" value="Reset" />
                </div>
            </form>
            <div class="form-group row">
                <p class="col-sm-12">Rih Prajna Nurfatikha|Prajna|5026201067</p>
            </div>
        </div>
    </body>
</html>
