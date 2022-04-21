<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>qwords</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>
    
    <section class="t-header">
        <h3>
            Halaman Transaksi
        </h3>
    </section>

    <section class="t-content">
        <table border="1" cellpadding="5" cellspacing="0">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode</th>
                    <th>Tgl Transaksi</th>
                    <th>Qty</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $d)
                <tr>
                    <td>{{  $loop->iteration}}</td>
                    <td>{{ $d->kode }}</td>
                    <td>{{ $d->tgl_transaksi }}</td>
                    <td>{{ $d->qty }}</td>
                    <td>
                        @if($d->status == 1)
                            Berhasil
                        @else
                            Gagal
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </section>

</body>
</html>