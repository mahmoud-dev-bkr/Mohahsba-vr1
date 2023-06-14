@extends('layouts.vertical', ['title' => 'تعديل موقع'])
@section('content')
<div class="container-fluid">


    <section id="content-wrapper" class="content-header">
        <div class="row">

              <div class="col-lg-12 mt-3">
              <ul class="d-flex align-content-center">

              <li><span  class="text-dark ml-3">المنتجات والتكاليف</span></li>
              <li class="text-dark">
              <i class="fa fa-angle-double-left mx-2 "></i><a href="sites.html"> المواقع</a>
              </li>
              <li class="text-primary">
                <i class="fa fa-angle-double-left mx-2 "></i><a href="add-site.html">إنشاء  موقع</a>
                </li>
              </ul>
              </div>



        </div>
    </section>


    <section>
        <div class="d-flex justify-content-sm-end mx-5">
            <button class="btn btn-primary mx-2"> <a href="{{ route('Site.index') }}" class="text-light">رجوع</a></button>
            </div>
      <div class="container my-3">
        <div class="row">
            @if(session()->has('message'))
            {{dd('vbnm')}}
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif
          <div class="col-md-12 hi-mohasba">

              <h4 class="mx-4">إنشاء موقع</h4>
            </div>

        </div>
        <div class="row bg-light pb-4 brdr">



         <div class="col-md-8 ">

            <div class="form my-5 px-5">

                <div class="d-flex align-content-center justify-content-sm-between">
         <form action="{{ route('Site.edit', $Site->id)}}" method="post">
          @csrf
                <label class="mt-3 w-25">الاسم الانجليزي</label><input value="{{ $Site-> name_en  }}" type="text" name="name_en" class="form-control  w-75 my-2">
                </div>

                <div class="d-flex align-content-center justify-content-sm-between">
                       <label class="mt-3  w-25">الاسم العربي</label><input value="{{$Site-> name_ar   }}" type="text" name="name_ar" class="form-control w-75 my-2">
                       </div>

                <div class="d-flex align-content-center justify-content-sm-between">
                    <label class="mt-3 ml-5">حساب المخزون</label>
                    <select class="form-control w-75 my-2" name="Inventory_id" id="">
                        <optgroup>
                            @foreach ( $Inventory as  $Inventory)
                                <option {{ $Inventory->id == $Site->Inventory_id ? 'selected' : '' }} value="{{ $Inventory->id  }}">{{ $Inventory->name  }}</option>

                            @endforeach



                        </optgroup>
                    </select>
                    </div>


                    <div class="my-3">
                        <div class="sub-head h-50"><h6 class="mx-4 py-2"> تفاصيل العنوان</h6></div>

                        <div class="fatora">

                            <div class="d-flex ">
                                <input placeholder="اسم الشارع" type="text" class="form-control inp-width  my-2">
                                <input placeholder="رقم المبني" type="text" class="form-control inp-width my-2">
                            </div>

                        <div class="d-flex ">
                            <input placeholder="مدينة" type="text" class="form-control inp-width  my-2">
                            <input placeholder="منطقة" type="text" class="form-control inp-width my-2">
                        </div>
                        <div class="d-flex ">
                            <input placeholder="الرمز البريدي" type="text" class="form-control inp-width  my-2">
                            <select aria-placeholder="hi" class="form-control inp-width handle my-2" name="" id="">
                                <optgroup>
                                    <option value="">مصر</option>
                                    <option value="">سوريا</option>

                                </optgroup>
                            </select>
                        </div>






                    </div>
                        </div>

                        <div class="btn-holder">
                            <button class="btn btn-primary submit">حفظ</button>

                            <button class="btn btn-dark re-submit">الغاء</button>

                            </div>
            </form>
        </div>


         </div>

         <div class="col-md-4 mt-5 ">




         </div>





        </div>





      </div>
    </section>

</div>
@endsection

