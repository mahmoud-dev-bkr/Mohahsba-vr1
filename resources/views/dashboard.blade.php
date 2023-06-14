@extends('layouts.vertical', ['title' => 'لوحة التحكم'])
@section('content')
      <div class="container-fluid">

        <section id="content-wrapper" class="content-header">
            <div class="row">
                <div class="col-lg-12 mt-3">
                    <ul class="d-flex align-content-center">
                        <li><span  class="text-dark ml-3">الصفحة الرئيسية</span></li>
                        <li class="text-primary">
                            <i class="fa fa-angle-double-left mx-2 "></i><a href="dashboard.html">لوحةالمتابعة</a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <section>
            <div class="container my-3">
                <div class="row">
                    <div class="col-md-12 hi-mohasba">
                        <h4 class="mx-4">مرحبا بك في محاسبة</h4>
                    </div>
                </div>
                <div class="row bg-light pb-4 brdr">
                    <div class="col-md-6">
                        <div class="my-3">
                            <h5>خطوات عامة</h5>
                            <p class="text-secondary">(هذه الخطوات هي لمساعدتك لتبدأ باستخدام قيود)</p>
                        </div>
                        <div>
                            <ul class="mohasba-list">
                                <li><i class="fa-solid fa-box-open"></i> <a href="">ليس لديك أي منتجات، اضغط هنا لإضافة منتج</a></li>
                                <li><i class="fa-solid fa-users users-icon "></i> <a href="">ليس لديك أي عملاء، اضغط هنا لإضافة عميل</a></li>
                                <li><i class="fa-solid fa-handshake-simple"></i> <a href="">ليس لديك أي موردين، اضغط هنا لإضافة مورد</a></li>
                                <li><i class="fa-solid fa-file-circle-check"></i> <a href="">ليس لديك أي فواتير مشتريات، اضغط هنا لإضافة فاتورة مشتريات</a></li>
                                <li><i class="fa-solid fa-file-invoice-dollar"></i> <a href="">ليس لديك أي فواتير مبيعات، اضغط هنا لإضافة فاتورة مبيعات</a></li>
                                <li><i class="fa-solid fa-location-arrow"></i> <a href="">لديك 1 مواقع. اضغط هنا لإضافة المزيد</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="my-3">
                            <h5>خطوات متقدمة</h5>
                            <p class="text-secondary">(هذه الخطوات هي للمستخدمين الذين لديهم خبرة محاسبية)</p>
                        </div>
                        <div>
                            <ul class="mohasba-list">
                                <li><i class="fa-solid fa-chart-column"></i> <a href="">اضغط هنا لإضافة حساب </a></li>
                                <li><i class="fa-solid fa-receipt"></i> <a href="">اضغط هنا لإضافة رصيد افتتاحي</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
      </div>
@endsection
@section('script')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
         integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="{{ URL('js/main.js') }}"></script>
      <!-- Plugins js-->
    <script src="{{ asset('assets/libs/datatables/datatables.min.js') }}"></script>
    <script src="{{ asset('assets/libs/pdfmake/pdfmake.min.js') }}"></script>
    <script>
        let ClientsTable = null

        function setClientsDatatable() {
            var url = "{{ route('getClientsData') }}";
            ClientsTable = $("#ClientsTable").DataTable({
                processing: true,
                serverSide: true,
                dom: 'Blfrtip',
                lengthMenu: [0, 5, 10, 20, 50, 100, 200, 500],
                pageLength: 9,
                sorting: [0, "DESC"],
                ordering: false,
                ajax: url,

                drawCallback: function(settings) {
                    $('.dataTables_paginate > .pagination').addClass('pagination-rounded');
                    //delete
                    $('.delete').click(function(e) {

                        var that = $(this)

                        e.preventDefault();

                        var n = new Noty({
                            text: "@lang('تأكيد الحذف')",
                            type: "warning",
                            killer: true,
                            buttons: [
                                Noty.button("@lang('نعم')", 'btn btn-success mr-2',
                                    function() {
                                        that.closest('form').submit();
                                    }),

                                Noty.button("@lang('لا')", 'btn btn-primary mr-2',
                                    function() {
                                        n.close();
                                    })
                            ]
                        });

                        n.show();

                    }); //end of delete
                },

                language: {
                    paginate: {
                        "previous": "<i class='mdi mdi-chevron-left'>",
                        "next": "<i class='mdi mdi-chevron-right'>"
                    },
                },

                columns: [{
                        data: 'name'
                    },
                    {
                        data: 'email'
                    },
                    {
                        data: 'phon'
                    },
                    {
                        data: 'Tex_Number'
                    },
                    {
                        data: 'status'
                    },
                    {
                        data: 'action'
                    }

                ],
            });
        }
        $(function() {
            setClientsDatatable();
        });

    </script>
    

@endsection
