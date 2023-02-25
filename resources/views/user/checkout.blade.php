<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User | Pay</title>
     <!-- @TODO: replace SET_YOUR_CLIENT_KEY_HERE with your client key -->
     <script type="text/javascript"
     src="https://app.sandbox.midtrans.com/snap/snap.js"
     data-client-key="{{ config('midtrans.client_key') }}"></script>
   <!-- Note: replace with src="https://app.midtrans.com/snap/snap.js" for Production environment -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <div class="" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Pembayaran</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="p-3 max-h-[600px] overflow-auto">


                    {{-- <div class="mb-3">
                        <img src="{{ asset('storage/'. $item->gambar) }}" alt="" style="width:100%; height:250px; margin:auto;">
                        <p>{{ $item->nama }}</p>
                    </div>
                    <div class="mb-3">
                        <p style="margin:0; padding:0;">Nama Pembeli </p>
                        <p>{{ $item->user->name }}</p>
                    </div> --}}
                    

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama </label>
                        <p>{{ $order->name }}</p>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nomor Telepon</label>
                        <p>{{ $order->phone }}</p>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Alamat</label>
                        <p>{{ $order->address }}</p>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Total price</label>
                        <p>{{ $order->total_price }}</p>
                    </div>

                    <button id="pay-button" class="btn btn-primary">Checkout</button>
                    {{-- <a href="" class="btn btn-dark">${{ $item->harga_akhir }}</a> --}}

            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    // For example trigger on button clicked, or any time you need
    var payButton = document.getElementById('pay-button');
    payButton.addEventListener('click', function () {
      // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
      window.snap.pay('{{ $snapToken }}', {
        onSuccess: function(result){
          /* You may add your own implementation here */
          alert("payment success!"); console.log(result);
        },
        onPending: function(result){
          /* You may add your own implementation here */
          alert("wating your payment!"); console.log(result);
        },
        onError: function(result){
          /* You may add your own implementation here */
          alert("payment failed!"); console.log(result);
        },
        onClose: function(){
          /* You may add your own implementation here */
          alert('you closed the popup without finishing the payment');
        }
      })
    });
  </script>
</body>
</html>
