@extends('layouts.vertical', ['title' => 'اضافة موردء'])
@section('content')
      <div class="container-fluid">
        <section id="content-wrapper" class="content-header">
            <div class="row">
    
              <div class="col-lg-12 mt-3">
                <ul class="d-flex align-content-center">
    
                  <li><span class="text-dark ml-3">المنتجات والتكاليف</span></li>
                  <li class="text-dark">
                    <i class="fa fa-angle-double-left mx-2 "></i><a href="products-and-costs.html"> المنتجات والتكاليف</a>
                  </li>
                  <li class="text-primary">
                    <i class="fa fa-angle-double-left mx-2 "></i><a href="add-product.html">إنشاء منتج</a>
                  </li>
                </ul>
              </div>
    
    
    
            </div>
          </section>
    
    
          <section>
            <div class="d-flex justify-content-sm-end mx-5"><button class="btn btn-primary mx-2"> <a
                  href="products-and-costs.html" class="text-light"> رجوع</a> </button>
            </div>
            <div class="container my-3">
              <div class="row">
                <div class="col-md-12 hi-mohasba">
    
                  <h4 class="mx-4">إنشاء منتج</h4>
                </div>
    
              </div>
              <div class="row bg-light pb-4 brdr">
    
                <div class="col-md-12 clients ">
    
                  <div class="container-fluid main-bg">
    
    
                    <!-- Responsive Arrow Progress Bar -->
                    <div class="arrow-steps clearfix">
                      <div class="step current bg-primary"> <span> <a href="#">نوع المنتج</a></span> </div>
                      <div class="step bg-success mx-2"> <span><a href="#" class="text-white">منتج</a></span> </div>
                      <div class="step d-none"> <span><a href="#"></a></span> </div>
    
                    </div>
                  </div>
    
    
    
    
    
    
                </div>
    
    
                <div class="row">
    
    
                  <div class="col-md-7">
                    <h6 class="text-primary w-100">ملاحظة: اضغط على "الخطوة الأولى" لاختيار نوع قيد مختلف</h6>
    
                    <div class="form my-5">
    
                      <div class="d-flex align-content-center justify-content-around">
                        <label class="mt-3 mx-4 "> الاسم العربي</label><input type="text" class="form-control w-50 my-2">
                      </div>
    
                      <div class="d-flex align-content-center justify-content-around">
                        <label class="mt-3 mx-2 ">الرقم التسلسلي</label><input type="text" class="form-control w-50 my-2">
                      </div>
    
                      <div class="w-75 mx-auto my-3">
                        <button class="btn btn-primary">توليد رقم تسلسلي</button>
    
                      </div>
    
    
                      <div class="my-5">
    
                        <div class="d-flex align-content-center  my-3">
                          <label class="mt-3 mx-5"> وحدة القياس </label>
                          <select class="form-control w-50 mx-4" name="" id="">
                            <optgroup>
                              <option value="">1</option>
                              <option value=""> 2</option>
    
                            </optgroup>
                          </select>
                          <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            <i class="fa-solid fa-plus"></i>
                          </button>
                        </div>
    
    
                        <div class="d-flex align-content-center my-3">
                          <label class="mt-3 mx-5 px-2"> لضريبة %</label>
                          <select class="form-control w-50 mx-4" name="" id="">
                            <optgroup>
                              <option value="">1</option>
                              <option value=""> 2</option>
    
                            </optgroup>
                          </select>
                        </div>
    
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                          aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel"> وحدة القياس</h1>
                                <button type="button" class="btn-close mx-3" data-bs-dismiss="modal"
                                  aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
    
                                <div class="modal-form">
    
                                  <div class="d-flex align-content-center justify-content-around">
                                    <label class="mt-3 ml-5"> وحدة القياس</label><input type="text"
                                      class="form-control w-50 my-2">
                                  </div>
    
                                  <div class="d-flex align-content-center justify-content-around">
                                    <label class="mt-3 ml-5"> طريقة العرض</label><input type="text"
                                      class="form-control w-50 my-2">
                                  </div>
    
    
                                  <div class="d-flex align-content-center my-3">
                                    <label class="mt-3 mx-5 px-2">نوع الوحدة</label>
                                    <select class="form-control w-50 mx-4" name="" id="">
                                      <optgroup>
                                        <option value="">1</option>
                                        <option value=""> 2</option>
    
                                      </optgroup>
                                    </select>
                                  </div>
    
    
    
                                </div>
    
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">الغاء</button>
                                <button type="button" class="btn btn-primary"> حفظ</button>
                              </div>
                            </div>
                          </div>
                        </div>
    
                      </div>
    
    
    
    
    
    
    
    
    
    
                    </div>
    
                  </div>
    
    
    
    
                  <div class="col-md-5">
                    <div class="form my-5">
    
                      <div class="d-flex align-content-center justify-content-sm-between">
                        <label class="mt-3 ml-5"> الاسم الانجليزي</label><input type="text" class="form-control w-75 my-2">
                      </div>
    
                      <div class="d-flex align-content-center justify-content-sm-between my-3">
                        <label class="mt-3 ml-5"> الصنف</label>
                        <select class="form-control w-50" name="" id="">
                          <optgroup>
                            <option value="">1</option>
                            <option value=""> 2</option>
    
                          </optgroup>
                        </select>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                          data-bs-target="#exampleModal2">
                          <i class="fa-solid fa-plus"></i>
                        </button>
                      </div>
    
    
                      <div class="d-flex align-content-center justify-content-sm-between">
                        <label class="mt-3 ml-5"> الوصف </label><input type="text" class="form-control w-75 my-2">
                      </div>
    
                      <div class="d-flex align-content-center justify-content-sm-between">
                        <label class="mt-3 ml-5"> الباركود </label><input type="text" class="form-control w-75 my-2">
                      </div>
    
    
                      <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h1 class="modal-title fs-5" id="exampleModalLabel"> الصنف </h1>
                              <button type="button" class="btn-close mx-3" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
    
                              <div class="modal-form">
    
                                <div class="d-flex align-content-center justify-content-around">
                                  <label class="mt-3 "> اسم الصنف</label><input type="text" class="form-control w-50 my-2">
                                </div>
    
                                <div class="d-flex align-content-center justify-content-around">
                                  <label class="mt-3 "> الوصف</label><input type="text" class="form-control w-50 my-2">
                                </div>
    
                                <div class="d-flex align-content-center my-3">
                                  <label class="mt-3 mx-4">الصنف الاساسي</label>
                                  <select class="form-control w-50 mx-5 px-2" name="" id="">
                                    <optgroup>
                                      <option value="">1</option>
                                      <option value=""> 2</option>
    
                                    </optgroup>
                                  </select>
                                </div>
    
    
                              </div>
    
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">الغاء</button>
                              <button type="button" class="btn btn-primary"> حفظ</button>
                            </div>
                          </div>
                        </div>
                      </div>
    
                    </div>
    
                  </div>
    
                  <div class="col-md-12">
                    <div>
                      <h6 class="my-3">تحويل الوحدات</h6>
                      <table class="table text-center">
                        <thead class="table-head">
                          <tr>
    
                            <th scope="col">وحدة واحدة من </th>
                            <th scope="col">= </th>
                            <th scope="col"> عدد </th>
                            <th scope="col">من الوحدة</th>
                            <th scope="col">سعر شراء الوحدة</th>
                            <th scope="col">سعر الشراء يشمل الضريبة؟</th>
                            <th scope="col">سعر بيع الوحدة</th>
                            <th scope="col">سعر البيع يشمل الضريبة؟</th>
                            <th scope="col">الباركود </th>
    
                          </tr>
                        </thead>
                        <tbody class="text-center">
                          <tr>
    
                            <td><select class="form-control w-50 mx-5 px-2" name="" id="">
                                <optgroup>
                                  <option value="">1</option>
                                  <option value=""> 2</option>
    
                                </optgroup>
                              </select></td>
                            <td>=</td>
                            <td><input type="text" class="form-control w-50"></td>
                            <td><select class="form-control w-50 mx-5 px-2" name="" id="">
                                <optgroup>
                                  <option value="">1</option>
                                  <option value=""> 2</option>
    
                                </optgroup>
                              </select></td>
                            <td><input type="text" class="form-control w-50"></td>
                            <td><input type="checkbox" class=" w-50"></td>
                            <td><input type="text" class="form-control w-50"></td>
                            <td><input type="checkbox" class=" w-50"></td>
                            <td><input type="text" class="form-control w-50"></td>
    
    
                          </tr>
    
                        </tbody>
                      </table>
                      <button class="btn btn-primary">اضافةالمزيد</button>
                    </div>
    
                    <div class="my-5">
                      <h6 class="my-2 ">صوره المنتج</h6>
                      <input type="file" class="form-control w-50 my-3">
    
    
                      <div class="w-50">
                        <div class="d-flex align-content-center justify-content-start text-primary"><input type="checkbox"
                            class=" w-50 my-3"><span class="mt-2">المنتج مخزون </span></div>
                        <div class="d-flex align-content-center justify-content-start text-primary"><input type="checkbox"
                            class=" w-50 my-3"><span class="mt-2"> يُبَاع </span></div>
                        <div class="d-flex align-content-center justify-content-start text-primary"><input type="checkbox"
                            class=" w-50 my-3"><span class="mt-2">يُشتَرى </span></div>
    
                      </div>
    
                      <div class="btn-holder">
                        <button class="btn btn-primary submit">حفظ </button> <button
                          class="btn btn-dark re-submit">الغاء</button>
    
                      </div>
    
                    </div>
                  </div>
                </div>
    
    
              </div>
    
    
    
    
            </div>
          </section>
      </div>
@endsection
@section('script')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
</script>
<script src="{{ URL('js/main.js') }}"></script>
@endsection
