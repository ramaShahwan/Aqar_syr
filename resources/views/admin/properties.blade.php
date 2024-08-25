@extends('layoutadmin.master')
@section('contentadmin')
<div class="container-xxl position-relative bg-white d-flex p-0">

   <!-- Recent Sales Start -->
   <div style="padding-top: 100px;
    padding-right: 300px;">
   <div class="container-fluid pt-4 px-4">
                <div class="bg-light text-center rounded p-4"style="width:3000px;">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                    <li class="nav-item dropdown d-none d-sm-flex">

                 <a class="btn btn-sm btn-primary" href="{{url('property/create')}}" style="width: 100px;font-size: 20px;    background-color:#406a98">إضافة عقار</a>

              </li>
                    <!-- <a href="" class="btn btn-sm btn-primary" style="width: 150px;height: 40px;font-size: 20px;">اضافة مدينة </a> -->
                        <h6 class="mb-0" style="font-size: 30px;">العقارات</h6>

                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-dark">
                                    <!-- <th scope="col"><input class="form-check-input" type="checkbox"></th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Invoice</th>
                                    <th scope="col">Customer</th> -->
                                    <th scope="col" style="text-align: center;font-size: 20px; width: 700px;">الأحداث</th>

                                    <!-- <th scope="col" style="text-align: center;font-size: 20px; width: 500px;">المالك</th> -->
                                    <th scope="col" style="text-align: center;font-size: 20px; width: 500px;">الحي</th>
                                    <th scope="col" style="text-align: center;font-size: 20px; width: 500px;">مميزات العقار</th>

                                    <th scope="col" style="text-align: center;font-size: 20px; width: 500px;">فيديو</th>

                                    <th scope="col" style="text-align: center;font-size: 20px; width: 500px;">اتجاه المنزل</th>
                                    <th scope="col" style="text-align: center;font-size: 20px; width: 500px;">عرض الشارع</th>
                                    <th scope="col" style="text-align: center;font-size: 20px; width: 500px;">سعر المتر</th>
                                    <th scope="col" style="text-align: center;font-size: 20px; width: 500px;">عدد المشاهدات</th>
                                    <th scope="col" style="text-align: center;font-size: 20px; width: 500px;">الوصف</th>
                                    <th scope="col" style="text-align: center;font-size: 20px; width: 500px;">الطابق</th>
                                    <th scope="col" style="text-align: center;font-size: 20px; width: 500px;">الرخصة</th>
                                    <th scope="col" style="text-align: center;font-size: 20px; width: 500px;">الوجهة</th>
                                    <th scope="col" style="text-align: center;font-size: 20px; width: 500px;">الفضاء</th>
                                    <th scope="col" style="text-align: center;font-size: 20px; width: 500px;">حالة</th>
                                    <th scope="col" style="text-align: center;font-size: 20px; width: 500px;">سعر</th>
                                    <th scope="col" style="text-align: center;font-size: 20px; width: 500px;">عدد الحمامات</th>
                                    <th scope="col" style="text-align: center;font-size: 20px; width: 500px;">عدد الغرف</th>
                                    <th scope="col" style="text-align: center;font-size: 20px; width: 500px;">الغاية</th>
                                    <th scope="col" style="text-align: center;font-size: 20px; width: 500px;">النوع</th>
                                    <th scope="col" style="text-align: center;font-size: 20px; width: 500px;">الصورة</th>
                                    <!-- <th scope="col" style="text-align: center;font-size: 20px; width: 500px;">الاسم</th> -->
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($props as $call)

                                <tr>

                                    <td style="text-align: center;font-size: 20px;"><a class="btn btn-sm btn-danger" onclick="return confirm('هل تريد الحذف')" href="{{url('property/destroy',$call->id)}}"  style="width: 90px;">حذف</a>
                                    <a class="btn btn-sm btn-primary" href="{{url('property/edit', $call->id)}}" style="width: 90px;    background-color:#28a745">تعديل</a></td>
                                    <td style="text-align: center;font-size: 20px;">{{$call->neighborhood->name}}</td>

                                    <td style="text-align: center;font-size: 20px;">{{$call->features}}</td>
                                    @if( $call->estate_video)
                                    <td style="text-align: center;font-size: 20px;"><video src="{{URL::asset('/img/estate/'.$call->estate_video)}}" width="100px"height="50px" controls></video></td>
                                    @endif
                                    <td style="text-align: center;font-size: 20px;">{{$call->location}}</td>
                                    <td style="text-align: center;font-size: 20px;">{{$call->street_width}}</td>
                                    <td style="text-align: center;font-size: 20px;">{{$call->meter_price}}</td>
                                    <td style="text-align: center;font-size: 20px;">{{$call->number_show}}</td>
                                    <td style="text-align: center;font-size: 20px;">{{$call->description}}</td>
                                    <td style="text-align: center;font-size: 20px;">{{$call->floor}}</td>
                                    <td style="text-align: center;font-size: 20px;">{{$call->license}}</td>
                                    <td style="text-align: center;font-size: 20px;">{{$call->direction}}</td>
                                    <td style="text-align: center;font-size: 20px;">{{$call->space}}</td>
                                    <td style="text-align: center;font-size: 20px;">{{$call->state}}</td>
                                    <td style="text-align: center;font-size: 20px;">{{$call->price}}</td>
                                    <td style="text-align: center;font-size: 20px;">{{$call->bathroom}}</td>
                                    <td style="text-align: center;font-size: 20px;">{{$call->room}}</td>
                                    <td style="text-align: center;font-size: 20px;">{{$call->purpose}}</td>
                                    <td style="text-align: center;font-size: 20px;">{{$call->type}}</td>
                                    <td style="text-align: center;font-size: 20px;"><img src="{{URL::asset('/img/estate/'.$call->estate_image)}}" width="100px"height="50px"></td>
                                    <!-- <td style="text-align: center;font-size: 20px;">{{$call->name}}</td> -->

                                </tr>
                                @endforeach


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Recent Sales End -->
</div>
@include('layoutadmin.sidebar')
</div>



@endsection


