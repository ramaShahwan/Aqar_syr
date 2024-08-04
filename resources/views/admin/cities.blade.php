@extends('layoutadmin.master')
@section('contentadmin')
<div class="container-xxl position-relative bg-white d-flex p-0">


   <!-- Recent Sales Start -->
   <div style="padding-top: 100px;">

   <div class="container-fluid pt-4 px-4">
                <div class="bg-light text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                    <li class="nav-item dropdown d-none d-sm-flex">

                 <a class="btn btn-sm btn-primary" href="{{url('addcities')}}" style="width: 100px;font-size: 20px;    background-color:#406a98">إضافة مدينة</a>

              </li>
                    <!-- <a href="" class="btn btn-sm btn-primary" style="width: 150px;height: 40px;font-size: 20px;">اضافة مدينة </a> -->
                        <h6 class="mb-0" style="font-size: 30px;">المدن</h6>

                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-dark">
                                    <!-- <th scope="col"><input class="form-check-input" type="checkbox"></th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Invoice</th>
                                    <th scope="col">Customer</th> -->
                                    <th scope="col" style="text-align: center;font-size: 20px; width: 300px;">الأحداث</th>

                                    <th scope="col" style="text-align: center;font-size: 20px; width: 300px;">الصورة</th>
                                    <th scope="col" style="text-align: center;font-size: 20px; width: 300px;">الاسم</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($cities as $call)

                                    <td style="text-align: center;font-size: 20px;"><a class="btn btn-sm btn-danger" onclick="return confirm('هل تريد الحذف')" href="{{url('city/destroy',$call->id)}}" style="width: 90px;">حذف</a>
                                    <a class="btn btn-sm btn-primary" href="{{url('city/edit',$call->id)}}" style="width: 90px;    background-color:#28a745">تعديل</a></td>

                                    <td style="text-align: center;font-size: 20px;"><img src="{{URL::asset('/img/city/'.$call->city_image)}}" width="100px"></td>
                                    <td style="text-align: center;font-size: 20px;">{{$call->name}}</td>

                                </tr>
                                @endforeach


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Recent Sales End -->
</div>
@include('layouts.sidebar')
</div>



@endsection

