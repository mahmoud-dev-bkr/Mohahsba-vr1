@extends('layouts.vertical', ['title' => 'المنتجات والتكاليف'])
@section('content')
      <div class="container-fluid">

            <section id="content-wrapper" class="content-header">
               <div class="row">
                  <div class="col-lg-12 mt-3">
                     <ul class="d-flex align-content-center">
                        <li><span  class="text-dark ml-3">المبيعات</span></li>
                        <li class="text-primary">
                           <i class="fa fa-angle-double-left mx-2 "></i><a href="Products.html">المنتجات والتكاليف</a>
                        </li>
                     </ul>
                  </div>
               </div>
            </section>
            <section>
               <div class="d-flex justify-content-sm-end mx-5">
                    <button class="btn btn-primary mx-2"> <a href="{{ route('Product.tenant') }}" class="text-light"> انشاء منتج</a> <i
                        class="fa-solid fa-plus"></i></button>
                    <button class="btn btn-primary mx-2">تصدير المنتجات <i class="fa-solid fa-right-to-bracket mx-1"></i></button>
                    <button class="btn btn-primary mx-2">استيراد المنتجات <i
                        class="fa-solid fa-right-to-bracket mx-1"></i></button>
                    <button class="btn btn-primary mx-2"> وحدات القياس <i class="fa-solid fa-right-to-bracket mx-1"></i></button>
                    <button class="btn btn-primary mx-2"> اصناف المنتجات <i
                        class="fa-solid fa-right-to-bracket mx-1"></i></button>
                    <button class="btn btn-primary mx-2"> نقل المخزون <i class="fa-solid fa-right-to-bracket mx-1"></i></button>
                    <button class="btn btn-primary mx-2"> جرد المخزون <i class="fa-solid fa-right-to-bracket mx-1"></i></button>
                </div>
               <div class="container my-3">
                  <div class="row">
                     <div class="col-md-12 hi-mohasba">
                        <h4 class="mx-4">المنتجات والتكاليف</h4>
                     </div>
                  </div>
                  @if (count($Product) > 0)

                    <section>

                        <div class="container my-5">
                            <div class="row">

                                <div class="col-md-9 ">

                                    <div class="d-flex justify-content-sm-center Product-form">

                                    <input class="form-control w-25 mx-2" type="text" placeholder="اسم المنشأة">
                                    <input class="form-control w-25 mx-2" type="text" placeholder="الاسم">
                                    <input class="form-control w-25 mx-2" type="text" placeholder="البريدالالكتروني">
                                    <input class="form-control w-25 mx-2" type="text" placeholder="رقم الأتصال الاساسي">


                                        <select class="form-control w-25" name="" id="">
                                            <optgroup>
                                                <option value="">نشط</option>
                                                <option value=""> غير نشط</option>

                                            </optgroup>
                                        </select>

                                    </div>

                                    </div>

                                    <div class="col-md-3"></div>
                                </div>

                                <div class="row">
                                    <div class="col-md-5">
                                        <div  class="d-flex justify-content-sm-start my-3 mx-2 Product-form">

                                            <select class="form-control w-25" name="" id="">
                                                <optgroup>
                                                    <option value="">الحقوق الاضافية</option>


                                                </optgroup>
                                            </select>

                                    <input class="form-control w-25 mx-2" type="text" placeholder="اسم المنشأة">

                                    <button class="btn btn-primary mx-1"><i class="fa-solid fa-magnifying-glass"></i> بحث</button>
                                    <button class="btn btn-dark mx-1 b2"><i class="fa-solid fa-arrow-rotate-left"></i> اعادة تعيين</button>


                                    </div>

                                    <div class="col-md-7"></div>
                                </div>

                            </div>



                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div >
                                    <table id="ProductsTable" class="table text-center">
                                        <thead class="table-head">
                                        <tr>

                                            <th scope="col">السيريل</th>
                                            <th scope="col">باركود</th>
                                            <th scope="col">الاسم باللغة العربية</th>
                                            <th scope="col">الاسم باللغة الانجليزية</th>
                                            <th scope="col">الوحدة</th>
                                            <th scope="col">الصنف</th>

                                            <th scope="col">نوع المنتج</th>
                                            <th scope="col">منتج للبيع</th>
                                            <th scope="col">منتج للشراء</th>
                                            <th scope="col">منتج للشراء</th>
                                            <th scope="col">   الخيارات</th>
                                        </tr>
                                        </thead>
                                        <tbody>


                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>


                    </section>
                @else
                    <div class="row bg-light pb-4 brdr">
                        <div class="col-md-12 clients ">
                            <div>
                                <img src="{{ URL('images/Products.svg') }}"  alt="">
                                <h1 class="my-3">ليس لديك أي المنتجات والتكاليف</h1>
                                <p class="text-secondary my-5">يوفر قيود صفحة خاصة بالمنتجات والتكاليف للمساهمة في تسهيل التعاملات مع المنتجات والتكاليف وملخص لبياناتهم.</p>
                                <button class="btn btn-primary mx-2 "> <a href="{{ route('Product.tenant') }}" class="text-light">اضافة المنتجات والتكاليف</a>  <i class="fa-solid fa-plus"></i></button> <button class="btn btn-primary">استيراد قائمة المنتجات والتكاليف  <i class="fa-solid fa-right-to-bracket mx-1"></i></button>
                            </div>
                        </div>
                    </div>
                  @endif

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
        let ProductsTable = null

        function setProductsDatatable() {
            var url = "{{ route('getProductsData') }}";
            ProductsTable = $("#ProductsTable").DataTable({
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
                        data: 'serial_number'
                    },
                    {
                        data: 'barCode'
                    },
                    {
                        data: 'name_ar'
                    },
                    {
                        data: 'name_en'
                    },
                    {
                        data: 'id_unit'
                    },
                    {
                        data: 'id_des'
                    },
                    {
                        data: 'type'
                    },
                    {
                        data: 'is_store'
                    },
                    {
                        data: 'is_buy'
                    },
                    {
                        data: 'is_sell'
                    },
                    {
                        data: 'action'
                    }

                ],
            });
        }
        $(function() {
            setProductsDatatable();
        });

    </script>

@endsection
