<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User | Pay</title>
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

                <form action="{{ route('order.checkout', ['item_id'=>$item->id]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <img src="{{ asset('storage/'. $item->gambar) }}" alt="" style="width:100%; height:250px; margin:auto;">
                        <p>{{ $item->nama }}</p>
                    </div>
                    <div class="mb-3">
                        <p style="margin:0; padding:0;">Nama Pembeli </p>
                        <p>{{ $item->user->name }}</p>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nomor Telepon</label>
                        <input type="text" class="form-control" id="exampleInputEmail1"
                            name="phone" aria-describedby="emailHelp">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Alamat</label>
                        <textarea class="form-control" placeholder="" id="floatingTextarea" name="address"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Checkout</button>
                    <a href="" class="btn btn-dark">${{ $item->harga_akhir }}</a>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>
