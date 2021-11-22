<html>
    <head>
        <meta charset="UTF-8">
        <title>Konversi Suhu</title>
        <link type="text/css" href="../CSS/Style.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <style>
               body {
            background-color: #f0f2f5;
            font-family: 'Open Sans', sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0;
            }
          .container {
            background-color: #fff;
            border-radius: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
            margin-block: 50px;
            overflow: hidden;
            }
        </style>
    </head>
    <body>
        <div class="container" id="isi">
            <br>
            <legend><h1 class="home" align="center">Konversi Suhu</h1>
                <hr>
        <form name="konversi_suhu" action="konversi" method="POST" action="#">
            @csrf
            <table cellspacing="3" cellpadding="5" align="center">
                <tr>
                    <td align="right">Suhu</td>
                    <th>:</th>
                    <td><input type="text" name="suhu" placeholder="Masukkan Suhu"></td>
                </tr>
                <tr>
                    <td align="right">Tipe Konversi</td>
                    <th>:</th>
                    <td>
                        <select name="konversi_suhu">
                            <optgroup label="Type Konversi Suhu">
                                <option value="0" hidden selected>- - - Pilih Konversi - - -</option>
                                <option value="1">Celcius ke Kelvin</option>
                                <option value="2">Celcius ke Fahrenheit</option>
                            </optgroup>
                        </select>
                    </td>
                </tr>
                <tr align="center">
                    <th colspan="3"><input type="submit" class="btn btn-primary" name="konversi" value="Konversi"></th>
                </tr>
            </table>
        </form>


</body>
</html>
