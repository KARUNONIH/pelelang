<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Invoice of {{$item->nama}}</title>

    <style>
        body {
            font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }
        p {
            font-size: 12px
        }
        .header {
            height: 100px;
        }
        .logo {
            width: 250px;
            height: 60px;
            float: left;
            margin-top: 10px
        }
        .text {
            margin-top: -10px;
            float: right;
            text-align: right;
        }
        .invoice-number {
            color: #23448d;
            font-style: italic;
            font-weight: bold;
            margin-top: -10px;
        }
        .auction-date {
            text-align: right
        }
        table {
            border-collapse: collapse;
            margin:50px auto;
            font-size: 12px
        }
        th {
            background: #e2e2e2;
            font-weight: bold;
        }
        td, th {
            padding: 10px;
            border: 1px solid #7d7d7d;
            text-align: left;
        }
        .name {
            color: #23448d;
            font-weight: bold;
        }
        i {
            font-size: 8px;
        }
        .footer-note {
            float: left;
        }
        .footer-date {
            float: right;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <img class="logo" src="https://i.ibb.co/mcZqDHm/Pelelanggray.png" alt="logo" border="0">
            <div class="text">
                <h4>INVOICE</h4>
                <p class="invoice-number">INV/{{date('Ymd', strtotime($item->paid_at))}}/PLG/{{$item->id}}</p>
            </div>
        </div>
        <hr>
        <div class="client">
            <p class="auction-date">Auction Date: {{date('d M Y', strtotime($item->complete_at))}}</p>
            <p>Bid Winner: {{ $item->user->name }}</p>
            <p>Email: {{ $item->user->email }}</p>
        </div>
        <table>
            <thead>
                <tr>
                    <th>Item Name</th>
                    <th>QTY</th>
                    <th>Start Price</th>
                    <th>Final Price</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="name" style="max-width: 500px">{{$item->nama}}</td>
                    <td>1</td>
                    <td>${{number_format($item->harga_awal)}}</td>
                    <td>${{number_format($item->harga_akhir)}}</td>
                </tr>
            </tbody>
            <tfoot>
                    <td colspan="3">Total</td>
                    <td>${{number_format($item->harga_akhir)}}</td>
            </tfoot>
          </table>
          <i class="footer-text">
            <p class="footer-notes" style="color: grey;">This invoice is valid and processed by computer
            <br>
            Please call <a style="color: #23448d; text-decoration: none;" href="asepmnv14@email.com?subject=Need%20help%20about%20Finestcarauction%20">Pelelang Support</a> if you need help.</p>
            <p style="color: grey;" class="footer-date">Last update: {{date('d M Y, h:m A e', strtotime(Carbon\Carbon::now('Asia/Jakarta')))}}</p>
          </i>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>

{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @foreach ($item as $c)

    <title>invoice {{ $c->nama }}</title>
    @endforeach
</head>
<body>
    <table>
        <tr>
            <td>Nama</td>
            <td>Harga</td>
            <td>Tanggal Pembayaran</td>
        </tr>
        @foreach ($item as $x)
        <tr>
            <td>{{ $x->nama }}</td>
            <td>{{ $x->harga_akhir }}</td>
            <td>{{ $x->paid_at }}</td>
        </tr>

        @endforeach
    </table>
</body>
</html> --}}
