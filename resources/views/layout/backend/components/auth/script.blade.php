

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
        $('#booking_block' + 1).on('change', function() {
            var booking_block = this.value;
            $('#square_feet' + 1).val('');
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
                            $('#plot_id' + 1).empty();
                            var $select = $('#plot_id' + 1).append(
                                $('<option>', {
                                    value: '0',
                                    text: 'Choose..'
                                }));
                            $('#plot_id' + 1).append($select);

                            var len = response['data'].length;
                            if (len > 0) {
                                for (var i = 0; i < len; i++) {

                                    $('#plot_id' + 1).append($('<option>', {
                                        value: response['data'][i].id,
                                        text: response['data'][i].plot_no
                                    }));
                                }
                            }
                        } else {
                            $('#plot_id' + 1).empty();
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




        $('#booking_block' + 2).on('change', function() {
            var booking_block = this.value;
            $('#square_feet' + 2).val('');
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
                            $('#plot_id' + 2).empty();
                            var $select = $('#plot_id' + 2).append(
                                $('<option>', {
                                    value: '0',
                                    text: 'Choose..'
                                }));
                            $('#plot_id' + 2).append($select);

                            var len = response['data'].length;
                            if (len > 0) {
                                for (var i = 0; i < len; i++) {

                                    $('#plot_id' + 2).append($('<option>', {
                                        value: response['data'][i].id,
                                        text: response['data'][i].plot_no
                                    }));
                                }
                            }
                        } else {
                            $('#plot_id' + 2).empty();
                        }
                    }
                });
        });


                $('#plot_id' + 2).on('change', function() {
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
                            $("#square_feet" + 2).val(response['data']);
                        }
                    });
                });






        $('#booking_block' + 3).on('change', function() {
            var booking_block = this.value;
            $('#square_feet' + 3).val('');
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
                            $('#plot_id' + 3).empty();
                            var $select = $('#plot_id' + 3).append(
                                $('<option>', {
                                    value: '0',
                                    text: 'Choose..'
                                }));
                            $('#plot_id' + 3).append($select);

                            var len = response['data'].length;
                            if (len > 0) {
                                for (var i = 0; i < len; i++) {

                                    $('#plot_id' + 3).append($('<option>', {
                                        value: response['data'][i].id,
                                        text: response['data'][i].plot_no
                                    }));
                                }
                            }
                        } else {
                            $('#plot_id' + 3).empty();
                        }
                    }
                });
        });


                $('#plot_id' + 3).on('change', function() {
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
                            $("#square_feet" + 3).val(response['data']);
                        }
                    });
                });


      

       
        $('#booking_block' + 4).on('change', function() {
            var booking_block = this.value;
            $('#square_feet' + 4).val('');
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
                            $('#plot_id' + 4).empty();
                            var $select = $('#plot_id' + 4).append(
                                $('<option>', {
                                    value: '0',
                                    text: 'Choose..'
                                }));
                            $('#plot_id' + 4).append($select);

                            var len = response['data'].length;
                            if (len > 0) {
                                for (var i = 0; i < len; i++) {

                                    $('#plot_id' + 4).append($('<option>', {
                                        value: response['data'][i].id,
                                        text: response['data'][i].plot_no
                                    }));
                                }
                            }
                        } else {
                            $('#plot_id' + 4).empty();
                        }
                    }
                });
        });


                $('#plot_id' + 4).on('change', function() {
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
                            $("#square_feet" + 4).val(response['data']);
                        }
                    });
                });



      

       


        $(document).on('click', '.remove-extratr', function() {
            $(this).parents('tr').remove();
        });
   });




   $(document).on("keyup", 'input.payableamount', function() {
        var payableamount = $(this).val();
        var bookingtotal_balance = $(".bookingtotal_balance").val();
        //alert(bill_paid_amount);
        var balance_amount = Number(bookingtotal_balance) - Number(payableamount);
        $('.paymentbalance').val(balance_amount.toFixed(2));
    });


    $(document).on("keyup", 'input.payableamount', function() {
            var payableamount = $(this).val();
            var bookingtotal_balance = $(".bookingtotal_balance").val();

            if (Number(payableamount) > Number(bookingtotal_balance)) {
                alert('!Paid Amount is More than of Total!');
                $(".paidamount").val('');
            }
    });
    </script>
