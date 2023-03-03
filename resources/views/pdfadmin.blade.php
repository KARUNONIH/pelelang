<style type="text/css">
    table {width: 100%; border-collapse: collapse;}
    td, th {border: solid 1px black; text-align: center;}
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
        <th>Item Name</th>
        <th>HIGTHEST BID USER</th>
        <th>COMPLETE at</th>
        <th>FINAL BID</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($item as $item)
        <tr>
          <td>{{$loop->iteration}}</td>
          <td>{{$item->nama}}</td>
          <td>{{ $item->user->name }}</td>
          <td>{{$item->complete_at}}</td>
          <td>${{$item->harga_akhir}}</td>
        </tr>

        @endforeach
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
