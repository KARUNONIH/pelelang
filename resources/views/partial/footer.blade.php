{{-- <script src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>
<script>
    $('#search').on('keyup', function() {
        search();
    });
    search();

    function search() {
        var keyword = $('#search').val();
        $.post('{{ route('user.search') }}', {
                _token: $('meta[name="csrf-token"]').attr('content'),
                keyword: keyword
            },
            function(data) {
                table_post_row(data);
                console.log(data);
            });
    }
    // table row with ajax
    function table_post_row(res) {
        let htmlView = '';
        if (res.employees.length <= 0) {
            htmlView += `
           <tr>
              <td colspan="4">No data.</td>
          </tr>`;
        }
        for (let i = 0; i < res.employees.length; i++) {
            htmlView += `
            <tr>
               <td>` + (i + 1) + `</td>
                  <td>` + res.employees[i].nama + `</td>
                   <td>` + res.employees[i].deskripsi + `</td>
            </tr>`;
        }
        $('tbody').html(htmlView);
    }
</script> --}}
{{-- <script type="text/javascript">
    $(document).ready(function() {
        $('#search').on('keyup', function() {
            var query = $(this).val();

            $.ajax({
                url: "{{ url('/search') }}",
                type: "GET",
                data: {
                    'search': query
                },
                success: function(data) {
                    $('#result').html('');
                    if (data.length > 0) {
                    $.each(data, function(index, item) {
                        var link = "<a href='/items/" + item.id + "'>" + item.nama +
                            "</a>";
                        $('#result').append(
                            '<tr class="text-white"><td class="w-[180px] ">' +
                            link +
                            '</td><td class="w-[50px] "></td><td><p  class="truncate w-[270px]">' +
                            item.deskripsi + '</p></td></tr>');
                    });
                    $('#error').hide();
                    $('#result').show();
                        } else {
                            $('#error').show();
                            $('#result').hide();
                        }
                }
            });
            if (query == '') {
                    $('#result').hide();
                }
        });
    });
</script> --}}

<script type="text/javascript">
    $(document).ready(function() {
        $('#search').on('keyup', function() {
            var query = $(this).val();

            $.ajax({
                url: "{{ url('/search') }}",
                type: "GET",
                data: {
                    'search': query
                },
                success: function(data) {
                    if (query == '') {
                        $('#result').hide();

                    } else {
                        $('#result').html('');
                    if (data.length > 0) {
                        $.each(data, function(index, item) {
                            var link = "<a href='/item/" + item.id + "'>" + item.nama +"</a>";
                            $('#result').append('<tr class="text-white"><td>' +link +'</td></tr>');
                        });
                        $('#error').hide();
                        $('#result').show();
                    } else {
                        $('#error').show();
                        $('#result').hide();
                    }
                    }

                }
            });
        });
    });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.3.min.js"
    integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
<!-- plugin for charts  -->
<script src="{{ asset('/js/plugins/chartjs.min.js') }}" async></script>
<!-- plugin for scrollbar  -->
<script src="{{ asset('/js/plugins/perfect-scrollbar.min.js') }}" async></script>
<!-- github button -->
<script async defer src="https://buttons.github.io/buttons.js')}}"></script>
<!-- main script file  -->
<script src="{{ asset('/js/soft-ui-dashboard-tailwind.js?v=1.0.4') }}" async></script>
<script src="{{ asset('js/sweetalert2.all.min.js') }}"></script>
{{-- <script>
    $(function() {
        for (var i = 0; i < $('.list').length; i++) {
            var this_el = $('.list').eq(i);
            var interval = null;

            $(this_el).hover(function() {
                var that = $(this);
                var this_indent = 0;
                interval = setInterval(function() {
                    this_indent--;
                    if (this_indent < that.width() * -1)
                        this_indent = that.width();
                    that.css('text-indent', this_indent);
                }, 15);

            }, function() {
                clearInterval(interval);
                $(this).css('text-indent', 0);
            });
        }

    });
</script> --}}
{{-- <script>
    $(document).ready(function() {
        $('#search-form').on('submit', function(e) {
            e.preventDefault();
            var query = $('#search-input').val();
            $.ajax({
                url: $(this).attr('action'),
                method: 'GET',
                data: {
                    query: query
                },
                success: function(response) {
                    $('#search-results').html(response);
                }
            });
        });
    });
</script> --}}
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
<script>
    document.addEventListener('readystatechange', event => {
        if (event.target.readyState === "complete") {
            var chover = document.getElementsByClassName("chover");
            var chovera = document.getElementsByClassName("chovera");
            var countDownDate = new Array();
            for (var i = 0; i < chover.length; i++) {
                countDownDate[i] = new Array();
                countDownDate[i]['el'] = chover[i];
                countDownDate[i]['al'] = chovera[i];
                countDownDate[i]['time'] = new Date(chover[i].getAttribute('data-date')).getTime();
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
                        countDownDate[i]['el'].classList.remove("right-8", "text-3xl");
                        countDownDate[i]['el'].classList.add("right-[65px]", "uppercase", "text-5xl");
                        countDownDate[i]['al'].classList.add("brightness-[50%]");
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
<script>
    document.addEventListener('readystatechange', event => {
        if (event.target.readyState === "complete") {
            var end = document.getElementsByClassName("end");
            var almost = document.getElementsByClassName("almost");
            var countDownDate = new Array();
            for (var i = 0; i < end.length; i++) {
                countDownDate[i] = new Array();
                countDownDate[i]['el'] = end[i];
                countDownDate[i]['al'] = almost[i];
                countDownDate[i]['time'] = new Date(end[i].getAttribute('data-date')).getTime();
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
