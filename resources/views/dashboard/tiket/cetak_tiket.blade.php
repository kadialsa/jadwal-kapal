<!DOCTYPE html>
<html>

<head>
    <style>
        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td,
        #customers th {
            border: 1px solid #ddd;
            padding: 2px;
        }

        #customers tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #customers tr:hover {
            background-color: #ddd;
        }

        #customers h1 {
            background-color: #ddd;
        }

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #262b29;
            color: white;
        }
    </style>
</head>

<body>


    <table width="100%">
        <tr>
            {{-- <td width="25" align="center"><img src="img/wakatobi.jpg" width="60%"></td> --}}
            <td width="50" align="center">
                <h2>TIKET</h2>

                <hr>
            </td>
        </tr>
    </table>



    <h4 style="background-color: rgb(238, 191, 37); margin-bottom: 0px;">Nama Penumpang</h4>
    <p>{{ $tiket->nama_pesan_212356 }}</p>

    <h4 style="background-color: rgb(238, 191, 37); margin-bottom: 0px;">Tanggal Keberangkatan</h4>
    <p>{{ $tiket->tblJadwalKapal_212356->tanggal_berangkat_212356 }}</p>

    <h4 style="background-color: rgb(238, 191, 37); margin-bottom: 0px;">Jam Keberangkatan</h4>
    <p>{{ $tiket->tblJadwalKapal_212356->jam_berangkat_212356 }}</p>

    <h4 style="background-color: rgb(238, 191, 37); margin-bottom: 0px;">Pelabuhan Asal</h4>
    <p>{{ $tiket->tblJadwalKapal_212356->pelabuhan_asal_212356 }}</p>

    <h4 style="background-color: rgb(238, 191, 37); margin-bottom: 0px;">Pelabuhan Tujuan</h4>
    <p>{{ $tiket->tblJadwalKapal_212356->pelabuhan_tujuan_212356 }}</p>

    <h4 style="background-color: rgb(238, 191, 37); margin-bottom: 0px;">Harga Tiket</h4>
    <p>{{ $tiket->tblJadwalKapal_212356->harga_tiket_212356 }}</p>

</body>

</html>
