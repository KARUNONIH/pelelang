<style type="text/css">
    table {width: 100%; border-collapse: collapse;}
    td, th {border: solid 1px black; text-align: center; text-transform: capitalize;}
    h1 {text-align: center;}
    span {float: right;}
  </style>

  <span>
    <b>Invoice No.</b>1<br>
    <b>Date </b>{{$date}}<br>
  </span>

  {{-- <b>Provider</b> --}}
   Karuno Company<br>
   Pelelang<br>
   karuno.company@gmail.com | +62895326112374

  {{-- <b>Customer</b>
   invoice.contact.name <br> --}}

  <h1>Monthly Report</h1>

  <table>
    <thead>
      <tr>
        <th>No</th>
        <th>Nama Barang</th>
        <th>Pemenang</th>
        <th>Tanggal Dibuat</th>
        <th>Tanggal Selesai</th>
        <th>Harga Awal</th>
        <th>harga akhir</th>
        <th>Profit</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($item as $item)
        <tr>
          <td>{{$loop->iteration}}</td>
          <td>{{$item->nama}}</td>
          <td>{{ $item->user->name }}</td>
          <td>{{Carbon\Carbon::parse($item->created_at)->format('Y-m-d')}}</td>
          <td>{{Carbon\Carbon::parse($item->complete_at)->format('Y-m-d')}}</td>
          <td>${{$item->harga_awal}}</td>
          <td>${{$item->harga_akhir}}</td>
          <td>${{ $item->harga_akhir - $item->harga_awal }}</td>
        </tr>

        @endforeach
        <tr>
            <td colspan="7">Total profit</td>
            <td>${{ $total }}</td>
        </tr>
      {{-- {% for item in invoice.lines %} --}}
      {{-- {% endfor %}
      <tr>
        <td></td>
        <td></td>
        <td></td>
        <td>Total</td>
        <td> invoice.amount | currency </td>
        </tr> --}}
    </tbody>
  </table>
