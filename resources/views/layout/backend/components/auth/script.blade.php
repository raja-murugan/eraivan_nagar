

    <!-- latest jquery-->
    <script src="{{ asset('assets/backend/js/jquery.min.js') }}"></script>
    <!-- Bootstrap js-->
    <script src="{{ asset('assets/backend/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <!-- feather icon js-->
    <script src="{{ asset('assets/backend/js/icons/feather-icon/feather.min.js') }}"></script>
    <script src="{{ asset('assets/backend/js/icons/feather-icon/feather-icon.js') }}"></script>
    <!-- scrollbar js-->
    <script src="{{ asset('assets/backend/js/scrollbar/simplebar.js') }}"></script>
    <script src="{{ asset('assets/backend/js/scrollbar/custom.js') }}"></script>
    <!-- Sidebar jquery-->
    <script src="{{ asset('assets/backend/js/config.js') }}"></script>
    <!-- Plugins JS start-->
    <script src="{{ asset('assets/backend/js/sidebar-menu.js') }}"></script>
    <script src="{{ asset('assets/backend/js/sidebar-pin.js') }}"></script>
    <script src="{{ asset('assets/backend/js/clock.js') }}"></script>
    <script src="{{ asset('assets/backend/js/slick/slick.min.js') }}"></script>
    <script src="{{ asset('assets/backend/js/slick/slick.js') }}"></script>
    <script src="{{ asset('assets/backend/js/header-slick.js') }}"></script>
    <script src="{{ asset('assets/backend/js/chart/apex-chart/apex-chart.js') }}"></script>
    <script src="{{ asset('assets/backend/js/chart/apex-chart/stock-prices.js') }}"></script>
    <script src="{{ asset('assets/backend/js/chart/apex-chart/moment.min.js') }}"></script>
    <script src="{{ asset('assets/backend/js/notify/bootstrap-notify.min.js') }}"></script>
    <script src="{{ asset('assets/backend/js/dashboard/default.js') }}"></script>
    <script src="{{ asset('assets/backend/js/notify/index.js') }}"></script>
    <script src="{{ asset('assets/backend/js/typeahead/handlebars.js') }}"></script>
    <script src="{{ asset('assets/backend/js/typeahead/typeahead.bundle.js') }}"></script>
    <script src="{{ asset('assets/backend/js/typeahead/typeahead.custom.js') }}"></script>
    <script src="{{ asset('assets/backend/js/typeahead-search/handlebars.js') }}"></script>
    <script src="{{ asset('assets/backend/js/typeahead-search/typeahead-custom.js') }}"></script>
    <script src="{{ asset('assets/backend/js/height-equal.js') }}"></script>
    <script src="{{ asset('assets/backend/js/animation/wow/wow.min.js') }}"></script>

    <script src="{{ asset('assets/backend/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/backend/js/datatable/datatables/datatable.custom.js') }}"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="{{ asset('assets/backend/js/script.js') }}"></script>
    {{-- <script src="{{ asset('assets/backend/js/theme-customizer/customizer.js') }}"></script> --}}
    <script>
        new WOW().init();



        var i = 1;
   var j = 1;
   $(document).ready(function() {
        $('#booking_block').on('change', function() {
         var booking_block = this.value;
         $('.square_feet').val('');
                $.ajax({
                    url: '/Getplots/',
                    type: 'get',
                    data: {
                            _token: "{{ csrf_token() }}",
                            booking_block: booking_block
                        },
                    dataType: 'json',
                    success: function(response) {
                        //
                        console.log(response);
                        if (response.status !== 'false') {
                            $('.plot_id').empty();
                            var $select = $(".plot_id").append(
                                $('<option>', {
                                    value: '0',
                                    text: 'Choose..'
                                }));
                            $(".plot_id").append($select);

                            var len = response['data'].length;
                            if (len > 0) {
                                for (var i = 0; i < len; i++) {

                                    $(".plot_id").append($('<option>', {
                                        value: response['data'][i].id,
                                        text: response['data'][i].plot_no
                                    }));
                                }
                            }
                        } else {
                            $('.plot_id').empty();
                        }
                        
                        
                    }
                });
        });


                $('#plot_id' + 1).on('change', function() {
                    var plot_id = this.value;
                    console.log(plot_id);
                    $.ajax({
                        url: '/Getplotsqarefeet/',
                        type: 'get',
                        data: {
                                _token: "{{ csrf_token() }}",
                                plot_id: plot_id
                            },
                        dataType: 'json',
                        success: function(response) {
                            console.log(response);
                            $("#square_feet" + 1).val(response['data']);
                        }
                    });
                });


      $(document).on('click', '.addproductfields', function() {
         ++i;
            $(".bookingplot_fields").append(
                    '<tr>' +
                    '<td><input type="hidden"id="bookingplot_id"name="bookingplot_id[]" /><select class="form-control js-example-basic-single plot_id select" name="plot_id[]" id="plot_id' + i + '" required><option selected="" disabled="" value="">Choose...</option></select></td>' +
                    '<td><input type="text" class="form-control square_feet" id="square_feet' + i + '" name="square_feet[]" readonly placeholder="Square Feet" value="" required /><input type="hidden" class="form-control plot_no" id="plot_no' + i + '" name="plot_no[]"/></td>' +
                    '<td><button style="width: 35px;"class="py-1 text-white remove-extratr font-medium rounded-lg text-sm  text-center btn btn-danger" type="button" id="" value="Add">-</button></td>' +
                    '</tr>'
                );
                var booking_block = $("#booking_block").val();

                $.ajax({
                    url: '/Getplots/',
                    type: 'get',
                    data: {
                            _token: "{{ csrf_token() }}",
                            booking_block: booking_block
                        },
                    dataType: 'json',
                    success: function(response) {
                        //
                        console.log(response);
                        var len = response['data'].length;

                        var selectedValues = new Array();

                        if (len > 0) {
                            for (var i = 0; i < len; i++) {

                                    var id = response['data'][i].id;
                                    var plot_no = response['data'][i].plot_no;
                                    var option = "<option value='" + id + "'>" + plot_no +
                                        "</option>";
                                    selectedValues.push(option);
                            }
                        }
                        ++j;
                        $('#plot_id' + j).append(selectedValues);
                    }
                });



                $('#plot_id' + i).on('change', function() {
                    var plot_id = this.value;
                    console.log(plot_id);
                    $.ajax({
                        url: '/Getplotsqarefeet/',
                        type: 'get',
                        data: {
                                _token: "{{ csrf_token() }}",
                                plot_id: plot_id
                            },
                        dataType: 'json',
                        success: function(response) {
                            console.log(response);
                            $("#square_feet" + j).val(response['data']);
                        }
                    });
                });


        });
        $(document).on('click', '.remove-extratr', function() {
            $(this).parents('tr').remove();
        });
   });
    </script>
