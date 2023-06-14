@extends('layouts.vertical', ['title' => 'اضافة فاتورة شراء'])
@section('content')
<div class="container-fluid">

    <section id="content-wrapper" class="content-header">
        <div class="row">

            <div class="col-lg-12 mt-3">
                <ul class="d-flex align-content-center">

                    <li><span class="text-dark ml-3">المشتريات</span></li>
                    <li class="text-dark">
                        <i class="fa fa-angle-double-left mx-2 "></i><a href="purchase-orders.html"> فاتورة شراء</a>
                    </li>
                    <li class="text-primary">
                        <i class="fa fa-angle-double-left mx-2 "></i><a href="add-purch-order.html"> إنشاء فاتورة شراء </a>
                    </li>
                </ul>
            </div>



        </div>
    </section>


    <section>
        <div class="d-flex justify-content-sm-end mx-5">
            <button class="btn btn-primary mx-2"> <a href="purchase-orders.html" class="text-light">رجوع</a></button>
        </div>
        <div class="container my-3">
            <div class="row">
                <div class="col-md-12 hi-mohasba">

                    <h4 class="mx-4"> إنشاء فاتورة شراء</h4>
                </div>

            </div>
            <div class="row bg-light pb-4 brdr">

                <form action="{{ route('Purchase_Invoices.create.post') }}" method="post">
                    @csrf
                    <div class="col-md-6 ">

                        <div class="form my-5">

                            <div class="d-flex align-content-center justify-content-sm-between">
                                <label class="mt-3 ml-5"> المرجع</label><input name="code" type="text" class="form-control w-75 my-2">
                                </div>

                                <div class="d-flex align-content-center justify-content-sm-between">
                                <label class="mt-3 ml-5">الوصف</label><input name="Note" type="text" class="form-control w-75 my-2">
                                </div>

                                <div class="d-flex align-content-center justify-content-sm-between my-3">
                                    <label class="mt-3 ml-5">المورد</label>
                                    <select  class="form-control w-75" name="id_supplers" id="">
                                        <optgroup>
                                            <option value="30">اختار مورد</option>
                                            @foreach ($Suppliers as $Supplier )
                                                <option value="{{ $Supplier->id }}">{{ $Supplier->name }}</option>
                                            @endforeach
                                        </optgroup>
                                    </select>
                                </div>

                                <div class="d-flex align-content-center justify-content-sm-between">
                                <label class="mt-3 ml-5"> تاريخ الإصدار</label><input name="Date_start" type="date" class="form-control w-75 my-2">
                                </div>

                                <div class="d-flex align-content-center justify-content-sm-between my-3">
                                <label class="mt-3 ml-5">شروط الدفع</label>
                                <select  class="form-control w-75" name="payment_terms" id="">
                                    <optgroup>
                                        <option value="30">نفس يوم الاصدار</option>
                                        <option value="30">بعد 7 يوم</option>
                                        <option value="30">بعد 10 يوم</option>
                                        <option value="30">بعد 30 يوم</option>
                                        <option value="30">بعد 60 يوم</option>
                                        <option value="30">بعد 90 يوم</option>
                                    </optgroup>
                                </select>
                                </div>





                            <div class="d-flex align-content-center justify-content-sm-between">
                                <label class="mt-3 ml-5"> تاريخ الاستحقاق </label><input name="Date_end" type="date"
                                    class="form-control w-75 my-2">
                            </div>



                            <div class="d-flex align-content-center justify-content-sm-between">
                                <label class="mt-3 ml-5"> تاريخ التوريد </label><input type="date" name="Date_Groce_Period"
                                    class="form-control w-75 my-2">
                            </div>



                        </div>




                    </div>

                    <div class="col-md-6 mt-5 ">

                        <div class="mb-3">
                            <div class="sub-head">
                                <h5 class="mx-4"> تفاصيل بيانات العميل </h5>
                            </div>

                            <div class="fatora d-flex justify-content-around">

                                <div>
                                    <h5>الاسم</h5>
                                    <h5>الهاتف</h5>
                                    <h5>البريد الإلكتروني</h5>
                                    <h5>الرقم الضريبي</h5>
                                </div>

                                <div class="text-secondary">
                                    <h5>احمد</h5>
                                    <h5>01112345125</h5>
                                    <h5> ahmed123@gmail.com</h5>
                                    <h5> 5504</h5>
                                </div>


                            </div>
                        </div>


                    </div>

                    <div>
                        <table class="table text-center">
                            <thead class="table-head" id="products">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">المنتج</th>
                                    <th scope="col">الوصف </th>
                                    <th scope="col">الكمية </th>
                                    <th scope="col">سعر الوحدة </th>
                                    <th scope="col">شامل؟</th>
                                    <th scope="col">الخصم</th>
                                    <th scope="col">الاجمالي قبل الضريبة </th>
                                    <th scope="col">الضريبة %</th>
                                    <th scope="col">قيمة الضريبة </th>
                                    <th scope="col">القيمة </th>

                                </tr>
                            </thead>
                            <tbody class="text-center" id="t-body">

                            </tbody>
                        </table>
                        <a class="btn btn-primary" onclick="addCode()">اضافةالمزيد</a>
                    </div>


                    <div class="col-md-8 my-3"></div>

                    <div class="col-md-4 my-3 calc d-flex justify-content-around align-content-center ">

                        <div class="text-primary">
                            <h2><span>الاجمالي قبل الضريبة</span></h2>
                            <h2><span>قيمة الضريبة</span></h2>
                            <h2><span>المجموع</span></h2>
                        </div>
                        <div>
                            <h2 ><span id="total_before">00.00</span> </h2>
                            <h2><span  id="tax_value">00.00</span> </h2>
                            <h2><span  id="total_after">00.00</span> </h2>
                            <input type="text" name="total_with_tax" id="total_with_tax" hidden>
                            <input type="text" name="total"          id="total" hidden>
                            <input type="text" name="tax_value"      id="total_tax_value" hidden>


                        </div>


                    </div>

                    <div>
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseOne" aria-expanded="false"
                                        aria-controls="flush-collapseOne">
                                        الشروط والأحكام
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">Placeholder content for this accordion, which is intended to
                                        demonstrate
                                        the <code>.accordion-flush</code> class. This is the first item's accordion body.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                        aria-controls="flush-collapseTwo">
                                        ملاحظات
                                    </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">Placeholder content for this accordion, which is intended to
                                        demonstrate
                                        the <code>.accordion-flush</code> class. This is the second item's accordion body.
                                        Let's imagine
                                        this being filled with some actual content.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseThree" aria-expanded="false"
                                        aria-controls="flush-collapseThree">
                                        السندات
                                    </button>
                                </h2>
                                <div id="flush-collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">

                                        <div class="form my-5">

                                            <div class="d-flex align-content-center justify-content-sm-between">
                                                <label class="mt-3 ml-5"> رقم المرجع</label><input type="text"
                                                    class="form-control w-75 my-2">
                                            </div>

                                            <div class="d-flex align-content-center justify-content-sm-between my-3">
                                                <label class="mt-3 ml-5">الجهة</label>
                                                <select class="form-control w-75" name="" id="">
                                                    <optgroup>
                                                        <option value="">1</option>
                                                        <option value=""> 2</option>

                                                    </optgroup>
                                                </select>
                                            </div>


                                            <div class="d-flex align-content-center justify-content-sm-between my-3">
                                                <label class="mt-3 ml-5">الحساب</label>
                                                <select class="form-control w-75" name="" id="">
                                                    <optgroup>
                                                        <option value="">1</option>
                                                        <option value="">2 </option>

                                                    </optgroup>
                                                </select>
                                            </div>


                                            <div class="d-flex align-content-center justify-content-sm-between my-3">
                                                <label class="mt-3 ml-5">النوع</label>
                                                <select class="form-control w-75" name="" id="">
                                                    <optgroup>
                                                        <option value="">1</option>
                                                        <option value=""> 2</option>

                                                    </optgroup>
                                                </select>
                                            </div>


                                            <div class="d-flex align-content-center justify-content-sm-between">
                                                <label class="mt-3 ml-5">الوصف</label><input type="text"
                                                    class="form-control w-75 my-2">
                                            </div>


                                            <div class="d-flex align-content-center justify-content-sm-between">
                                                <label class="mt-3 ml-5"> التاريخ</label><input type="date"
                                                    class="form-control w-75 my-2">
                                            </div>



                                            <div class="d-flex align-content-center justify-content-sm-between">
                                                <label class="mt-3 ml-5">تخصيص السند تلقائيًا حسب أقدمية
                                                    الفواتير</label><input type="checkbox" class=" m-auto my-2">

                                            </div>



                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingFive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseFive" aria-expanded="false"
                                        aria-controls="flush-collapseThree">
                                        المرفقات
                                    </button>
                                </h2>
                                <div id="flush-collapseFive" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <div class="col-md-12 add-sub">
                                            <h5 class="text-primary">المرفقات</h5>

                                            <div class="d-flex align-content-center justify-content-center text-center">
                                                <div>
                                                    <button class="btn btn-light">تصفح ملفاتك</button>
                                                    <h5 class="my-3">او</h5>
                                                    <h5>قم بسحب الملفات مباشرة هنا</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseFour" aria-expanded="false"
                                        aria-controls="flush-collapseOne">
                                        معلومات إضافية
                                    </button>
                                </h2>
                                <div id="flush-collapseFour" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body"><label class="mx-4">إضافة إلى</label><input type="radio">
                                        مشروع <input type="radio"> مهمة
                                        <br>
                                        <div class="d-flex align-content-center justify-content-sm-between my-3">
                                            <label class="mt-3 ml-5">إضافة مشروع/ مهمة</label>
                                            <select class="form-control w-75" name="" id="">
                                                <optgroup>
                                                    <option value="">1</option>
                                                    <option value=""> 2</option>

                                                </optgroup>
                                            </select>
                                        </div>

                                    </div>
                                </div>
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
<script>
    let id = 0;
    let Total_array = [];
    let sumVal = 0;
    let sumValBefore = 0;
    let sumValTax = 0;
    var Total_value = [];
    var Total_before = [];
    var Total_Tax = [];
    function addCode() {

        var table = document.getElementById("t-body");
        var row   = table.insertRow(-1);
        var cell1 = row.insertCell(0);
        var cell2 = row.insertCell(1);
        var cell3 = row.insertCell(2);
        var cell4 = row.insertCell(3);
        var cell5 = row.insertCell(4);
        var cell6 = row.insertCell(5);
        var cell7 = row.insertCell(6);
        var cell8 = row.insertCell(7);
        var cell9 = row.insertCell(8);
        var cell10 = row.insertCell(9);
        var cell11 = row.insertCell(10);
        // id="product_${id}"
        cell1.innerHTML = `${id}`;
        cell2.innerHTML =
        `<select id="product_${id}"  onchange="myFunction(${id})" name="test[]"  class="form-control w-50 mx-5 px-2" >
            <optgroup>
                <option  value="">-</option>
                @foreach ($products as $product )
                    <option  value="{{ $product->id }}">{{ $product->name_en  }}</option>
                @endforeach
            </optgroup>
        </select>`;
        cell3.innerHTML = `<input id="dec_product_${id}"      type="text" class="form-control w-100">`;
        cell4.innerHTML = `<input id="qun_product_${id}" value="1" onfocusout="qunpriceproduct(${id})"    name="test[]" type="text" class="form-control w-100">`;
        cell5.innerHTML = `<input id="price_unit_product_${id}"    name="test[]" type="text" class="form-control w-100">`;
        cell6.innerHTML = `<input id="inc_desc_product_${id}" name="test[]" type="checkbox" class=" value="off" w-100">`;
        cell7.innerHTML = `<input id="desc_product_${id}"     name="test[]" type="text" class="form-control w-100">`;
        cell7.innerHTML = `<input id="desc_product_${id}"     name="test[]" type="text" class="form-control w-100">`;
        cell8.innerHTML = `<input id="price_before_tax_product_${id}"     name="test[]" type="text" class="form-control w-100">`;
        cell9.innerHTML =
        `<select id="product_tax_${id}" onchange="calcTax(${id})"   name="test[]"  class="form-control w-50 mx-5 px-2" >
            <optgroup>
                <option  value="">-</option>
                <option value="0">0.0%</option>
                <option value="15">15%</option>
            </optgroup>
        </select>`;
        cell10.innerHTML = `<input id="Tax_value_${id}"  value="0"   name="test[]" type="text" class="form-control w-100">`;
        cell11.innerHTML = `<input style="width:100%" id="Total_${id}"     name="test[]" type="text" class="form-control w-100">`;
        Total_value[id] = 0;
        Total_before[id] = 0;
        Total_Tax[id] = 0;
        id += 1


    }
    function myFunction(id) {
        product_id  = document.getElementById('product_'+id).value;
        product_des = document.getElementById('dec_product_'+id);
        PriceUnitProduct = document.getElementById('price_unit_product_'+id);
        priceBeforeTaxProduct = document.getElementById('price_before_tax_product_'+id);
        Total                 = document.getElementById('Total_'+id);
        $(document).ready(function () {
            // alert('dadas');
            var ProductURL = "/dashboard/Product/"+product_id;
            $.get(ProductURL, function (data) {

                product_des.value           = data.Note;
                PriceUnitProduct.value      = data.buy;
                priceBeforeTaxProduct.value = data.buy;
                Total.value = data.buy;
                Total_value[id] = data.buy;
                Total_before[id] = data.buy;
                getSum();
            })
        });


    }
    function calcTax(id) {
        Tax              = document.getElementById('product_tax_'+id).value;
        PriceUnitProduct = document.getElementById('price_unit_product_'+id).value;
        qunProduct       = document.getElementById('qun_product_'+id).value;
        TaxValue         = document.getElementById('Tax_value_'+id);
        Total            = document.getElementById('Total_'+id);
        inttaotal        = document.getElementById('Total_'+id).value;
        TaxValue.value   = ( PriceUnitProduct * qunProduct )  * (Tax / 100);
        Totalwithtax     = document.getElementById('Tax_value_'+id).value;

        Total.value      = parseFloat(inttaotal) + parseFloat(Totalwithtax);
        Total_value[id]  = parseFloat(inttaotal) + parseFloat(Totalwithtax);
        Total_Tax[id]    = ( PriceUnitProduct * qunProduct )  * (Tax / 100);
        getSum();


    }
    function qunpriceproduct (id) {
        Tax              = document.getElementById('product_tax_'+id).value;
        PriceUnitProduct = document.getElementById('price_unit_product_'+id).value;
        qunProduct       = document.getElementById('qun_product_'+id).value;
        priceBeforeTaxProduct = document.getElementById('price_before_tax_product_'+id);
        Total                 = document.getElementById('Total_'+id);
        priceBeforeTaxProduct.value = PriceUnitProduct * qunProduct;
        Totalwithtax     = document.getElementById('Tax_value_'+id).value;
        inttaotal        = document.getElementById('Total_'+id).value;
        Total.value = ( parseFloat(inttaotal) * qunProduct ) + parseFloat(Totalwithtax)  ;

        Total_value[id] = ( parseFloat(inttaotal) * qunProduct ) + parseFloat(Totalwithtax);
        Total_before[id] = PriceUnitProduct * qunProduct;
        getSum();
    }

    function getSum() {
        for (let index = 0; index < Total_value.length; index++) {

            sumVal       += Total_value[index];
            sumValTax    += Total_Tax[index];
            sumValBefore += Total_before[index];

        }
        document.getElementById("total_after").innerHTML =  sumVal;
        document.getElementById("tax_value").innerHTML =  sumValTax;
        document.getElementById("total_before").innerHTML =  sumValBefore;

        document.getElementById('total_with_tax').value   = sumValBefore;
        document.getElementById('total').value            = sumVal;
        document.getElementById('total_tax_value').value        = sumValTax;
        console.log(sumValTax);
        sumVal = 0;
        sumValTax = 0;
        sumValBefore = 0;

    }


</script>
@endsection
