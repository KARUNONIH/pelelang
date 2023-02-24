<style type="text/css">
    table {width: 100%; border-collapse: collapse;}
    td, th {border: solid 1px black;}
    h1 {text-align: center;}
    span {float: right;}
  </style>

  <span>
    <b>Invoice No.</b>  invoice.number <br>
    <b>Date</b> invoice.invoice_date | date <br>
  </span>

  <b>Provider</b>
   account.company <br>
   account.representative <br>
   account.info | multi_line 

  <b>Customer</b>
   invoice.contact.name <br>
   invoice.contact.post_address | multi_line 

  <h1>INVOICE</h1>

  <table>
    <thead>
      <tr>
        <th>#</th>
        <th>Description</th>
        <th>Quantity</th>
        <th>Price/Unit</th>
        <th>Price</th>
      </tr>
    </thead>
    <tbody>
      {% for item in invoice.lines %}
      <tr>
        <td> item.position </td>
        <td> item.description | multi_line </td>
        <td>x item.quantity | numeric  </td>
        <td> item.price | currency </td>
        <td> item.total | currency </td>
      </tr>
      {% endfor %}
      <tr>
        <td></td>
        <td></td>
        <td></td>
        <td>Total</td>
        <td> invoice.amount | currency </td>
        </tr>
    </tbody>
  </table>
