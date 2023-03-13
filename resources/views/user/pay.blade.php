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
     <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    @foreach ($item as $item)
    <div class="" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title font-bold text-3xl" id="exampleModalLabel">Pembayaran </h1>
                <a href="{{ route('user.history') }}" type="button" class="btn-close bg-gray-600 relative " data-bs-dismiss="modal"
                    aria-label="Close"><i class="fa-solid fa-xmark text-white text-2xl pb-1"></i></a>
            </div>
            <div class="p-3 max-h-[600px] overflow-auto">


                    <div class="mb-3">
                        <img src="{{ asset('storage/'. $item->gambar) }}" alt="" style="width:100%; height:250px; margin:auto; ">
                        <p class="text-xl"><span class="font-semibold">{{ $item->nama }} </span>dibeli oleh <span class="font-semibold">{{ $item->user->name }}</span> sebesar  <span class="font-semibold">${{ $item->harga_akhir }}</span></p>
                    </div>
                    {{-- <div class="mb-3">
                        <p style="margin:0; padding:0;">Nama Pembeli </p>
                        <p>{{ $item->user->name }}</p>
                    </div> --}}
                    <form action=""></form>
                    <button type="button" id="pay-button" class="btn btn-success bg-green-600">Pay</button>
                    {{-- <button  class="btn btn-dark">${{ $item->harga_akhir }}</button> --}}
                </div>
            </div>
        </div>
    </div>
    @endforeach
<script type="text/javascript">
    // For example trigger on button clicked, or any time you need
    var payButton = document.getElementById('pay-button');
    payButton.addEventListener('click', function() {
        // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
        window.snap.pay('{{ $snapToken }}', {
            onSuccess: function(result) {
                /* You may add your own implementation here */
                window.location.href = '/history'
                console.log(result);
            },
            onPending: function(result) {
                /* You may add your own implementation here */
                alert("wating your payment!");
                console.log(result);
            },
            onError: function(result) {
                /* You may add your own implementation here */
                alert("payment failed!");
                console.log(result);
            },
            onClose: function() {
                /* You may add your own implementation here */
                alert('you closed the popup without finishing the payment');
            }
        })
    });
</script>
</body>
</html>
