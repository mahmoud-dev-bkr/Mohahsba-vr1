@extends('layouts.vertical', ['title' => 'دفع فاتورة شراء'])
@section('content')
<div class="container-fluid">

    <section id="content-wrapper" class="content-header">
        <div class="row">

            <div class="col-lg-12 mt-3">
                <ul class="d-flex align-content-center">

                    <li><span class="text-dark ml-3">المشتريات</span></li>
                    <li class="text-dark">
                        <i class="fa fa-angle-double-left mx-2 "></i><a href="purchase-orders.html"> دفع فاتورة شراء</a>
                    </li>
                    <li class="text-primary">
                        <i class="fa fa-angle-double-left mx-2 "></i><a href="add-purch-order.html">دفع فاتورة شراء</a>
                    </li>
                </ul>
            </div>



        </div>
    </section>


    <section>
        <div class="d-flex justify-content-sm-end mx-5">
            <button class="btn btn-primary mx-2"> <a href="{{ route('Purchase_Invoices.index') }}" class="text-light">رجوع</a></button>
        </div>
        <div class="container my-3">
            <div class="row">
                <div class="col-md-12 hi-mohasba">

                    <h4 class="mx-4">دفع فاتورة شراء</h4>
                    <h4 class="mx-4">دفع فاتورة شراء</h4>
                </div>

            </div>
            <div class="row bg-light pb-4 brdr">

                <form action="{{ route('Purchase_Invoices.payment.post') }}" method="post">
                    @csrf
                    <div class="col-md-6 ">

                        <div class="form my-5">

                            <div class="d-flex align-content-center justify-content-sm-between">
                                <label class="mt-3 ml-5"> المرجع</label><input name="code" type="text" class="form-control w-75 my-2">

                            </div>
                                <input name="PurchaseInvoices_id" value="{{ $PurchaseInvoices->id }}" type="text" class="form-control w-75 my-2" hidden>
                                <input name="type" value="1" type="text" class="form-control w-75 my-2" hidden>

                                <div class="d-flex align-content-center justify-content-sm-between">
                                    <label class="mt-3 ml-5">الوصف</label><input name="Note" type="text" class="form-control w-75 my-2">
                                </div>

                                <div class="d-flex align-content-center justify-content-sm-between my-3">
                                    <label class="mt-3 ml-5">العميل</label>
                                    <select  class="form-control w-75" name="id_supplers" id="">
                                        <optgroup>
                                            @foreach ($Suppliers as $Supplier )
                                                <option value="{{ $Supplier->id }}">{{ $Supplier->name }}</option>
                                            @endforeach
                                        </optgroup>
                                    </select>
                                </div>

                                <div class="d-flex align-content-center justify-content-sm-between">
                                <label class="mt-3 ml-5"> تاريخ الإصدار</label><input name="Date" type="date" class="form-control w-75 my-2">
                                </div>

                                <div class="d-flex align-content-center justify-content-sm-between my-3">
                                <label class="mt-3 ml-5">الحساب</label>
                                <select  class="form-control w-75" name="id_Account" id="">
                                    <optgroup>
                                        <option value="30">اختار الحساب</option>
                                        @foreach ($accounts as $account )
                                            <option value="{{ $account->id }}">{{ $account->name }}</option>
                                        @endforeach
                                    </optgroup>
                                </select>
                                </div>



                            <div class="d-flex align-content-center justify-content-sm-between">
                                <label class="mt-3 ml-5">القيمة</label><input type="text" name="Amount" id="Amount" value="{{ $PurchaseInvoices->total }}"
                                    class="form-control w-75 my-2">
                            </div>
                            <div class="d-flex align-content-center justify-content-sm-between">
                                <label class="mt-3 ml-5">المتبقي</label><input type="text" disabled id="total"
                                    class="form-control w-75 my-2">
                            </div>



                        </div>




                    </div>



                    <div class="btn-holder">
                        <button class="btn btn-primary submit" >حفظ وموافقة</button> <button
                            class="btn btn-dark re-submit">حفظ
                            كمسودة</button>

                    </div>
                </form>
            </div>





        </div>
</div>
@endsection
@section('script')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
</script>
<script src="{{ URL('js/main.js') }}"></script>
@endsection
