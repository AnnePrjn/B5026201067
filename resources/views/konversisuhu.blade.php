<?php
            if (isset($_POST['konversi_suhu'])) {
                $suhu           = $_POST['suhu'];
                $type_konversi  = $_POST['konversi_suhu'];

            if ($type_konversi == "1") {
                $perhitungan = $suhu + 273.15;
                ?><script>alert('<?php echo "Suhu $suhu °C = "; echo "$perhitungan °K";?>');</script><?php
                }

            elseif ($type_konversi == "2") {
                $perhitungan = ((9/5) * $suhu + 32);
                ?><script>alert('<?php echo "Suhu $suhu °C = "; echo "$perhitungan °F";?>');</script><?php
                }

            elseif ($type_konversi == "0") {
                ?><script>alert('Tipe konversi suhu belum dipilih!');</script><?php
                }
                }
            ?>

