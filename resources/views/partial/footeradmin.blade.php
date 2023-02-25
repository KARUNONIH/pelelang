<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

  <!-- plugin for charts  -->
  <script src="{{  asset('/js/plugins/chartjs.min.js')}}" async></script>
  <!-- plugin for scrollbar  -->
  <script src="{{  asset('/js/plugins/perfect-scrollbar.min.js')}}" async></script>
  <!-- github button -->
  <script async defer src="https://buttons.github.io/buttons.js')}}"></script>
  <!-- main script file  -->
  <script src="{{  asset('/js/soft-ui-dashboard-tailwind.js?v=1.0.4')}}" async></script>
  {{-- flowbite --}}
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
  <script>
    $('#updateItem').on('shown.bs.modal', function(e) {
        var html = `
      <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Edit barang</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="${$(e.relatedTarget).data('url')}" method="POST" enctype= multipart/form-data>
          @csrf
          @method('PUT')
          <div class="modal-body">
              <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Nama Kategori</label>
                  <input type="text" name="nama" value="${$(e.relatedTarget).data('nama')}" class="form-control" id="exampleFormControlInput1"
                      placeholder="name@example.com">
              </div>
              <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Gambar</label>
                    <input type="file" name="gambar" value="${$(e.relatedTarget).data('gambar')}" class="dropify max-w-[400px] max-h-[300px]"
                        data-allowed-file-extensions="jpg jpeg png" />
                </div>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
          </div>
      </form>
      `;
        $('#modal-content').html(html);
    });
</script>
  <script src="{{ asset('js/dropify.js') }}"></script>
  <script>
    $('.dropify').dropify();
  </script>
  <script>
    $('#updateItem').on('shown.bs.modal', function(e) {
        var html = `
      <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Edit barang</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="${$(e.relatedTarget).data('url')}" method="POST" enctype= multipart/form-data>
          @csrf
          @method('PUT')
          <div class="modal-body">
              <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Nama Kategori</label>
                  <input type="text" name="nama" value="${$(e.relatedTarget).data('nama')}" class="form-control" id="exampleFormControlInput1"
                      placeholder="name@example.com">
              </div>
              <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Gambar</label>
                    <input type="file" name="gambar" value="{{ old('storage/gambar') }}" class="dropify max-w-[400px] max-h-[300px]"
                        data-allowed-file-extensions="jpg jpeg png" />
                </div>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
          </div>
      </form>
      `;
        $('#modal-content').html(html);
    });
</script>
  {{-- <script>
    $(document).ready(function() {
      $('#submitBtn').click(function(e) {
        e.preventDefault();

        var formData = new FormData($('#editForm')[0]);

        $.ajax({
          url: '{{ route('item.update') }}',
          type: 'POST',
          data: formData,
          contentType: false,
          processData: false,
          success: function(data) {
            $('#editModal').modal('hide');
            window.location.reload();
          },
          error: function(xhr, status, error) {
            console.error(error);
          }
        });
      });
    });
  </script> --}}
  @yield('js')
    {{-- <script>

  $('#update-item').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget)
    var id = button.data('id')
    var nama = button.data('nama')
    var kategori = button.data('kategori')

    var modal = $(this)
    modal.find('#update-id').val(id)
    modal.find('#nama').val(nama)
    modal.find('#kaategori').val(kategori)
  });
</script> --}}

  <script>
    $('#UpdateModal').on('shown.bs.modal', function(e) {
        var html = `
      <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Edit barang</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="${$(e.relatedTarget).data('url')}" method="POST">
          @csrf
          @method('PUT')
          <div class="modal-body">
              <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Nama Kategori</label>
                  <input type="text" name="nama_kategori" value="${$(e.relatedTarget).data('nama_kategori')}" class="form-control" id="exampleFormControlInput1"
                      placeholder="name@example.com">
              </div>

          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
          </div>
      </form>
      `;
        $('#modal-content').html(html);
    });
</script>
  <script>
    document.addEventListener('readystatechange', event => {
        if (event.target.readyState === "complete") {
            var clockdiv = document.getElementsByClassName("clockdiv");
            var countDownDate = new Array();
            for (var i = 0; i < clockdiv.length; i++) {
                countDownDate[i] = new Array();
                countDownDate[i]['el'] = clockdiv[i];
                countDownDate[i]['time'] = new Date(clockdiv[i].getAttribute('data-date')).getTime();
                countDownDate[i]['days'] = 0;
                countDownDate[i]['hours'] = 0;
                countDownDate[i]['seconds'] = 0;
                countDownDate[i]['minutes'] = 0;
            }
            var countdownfunction = setInterval(function() {
                for (var i = 0; i < countDownDate.length; i++) {
                    var now = new Date().getTime();
                    var distance = countDownDate[i]['time'] - now;
                    countDownDate[i]['days'] = Math.floor(distance / (1000 * 60 * 60 * 24));
                    countDownDate[i]['hours'] = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 *
                        60 * 60));
                    countDownDate[i]['minutes'] = Math.floor((distance % (1000 * 60 * 60)) / (1000 *
                        60));
                    countDownDate[i]['seconds'] = Math.floor((distance % (1000 * 60)) / 1000);
                    if (distance < 0) {
                        countDownDate[i]['el'].innerHTML = "Expired";
                    } else {
                        countDownDate[i]['el'].querySelector('.days').innerHTML = countDownDate[i][
                            'days'
                        ];
                        countDownDate[i]['el'].querySelector('.hours').innerHTML = countDownDate[i][
                            'hours'
                        ];
                        countDownDate[i]['el'].querySelector('.minutes').innerHTML = countDownDate[i][
                            'minutes'
                        ];
                        countDownDate[i]['el'].querySelector('.seconds').innerHTML = countDownDate[i][
                            'seconds'
                        ];
                    }
                }
            }, 1000);
        }
    });
</script>
</html>
