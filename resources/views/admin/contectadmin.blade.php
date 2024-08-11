@extends('layoutadmin.master')
@section('contentadmin')
<div class="container-xxl position-relative bg-white d-flex p-0">


   <!-- Recent Sales Start -->
   <div style="padding-top: 100px;">

   <div class="container-fluid pt-4 px-4">
                <div class="bg-light text-center rounded p-4">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <li class="nav-item dropdown d-none d-sm-flex">



              </li>
                    <!-- <a href="" class="btn btn-sm btn-primary" style="width: 150px;height: 40px;font-size: 20px;">اضافة مدينة </a> -->
                        <h6 class="mb-0" style="font-size: 30px;">الرسائل الواردة</h6>

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
                                    <th scope="col" style="text-align: center;font-size: 20px; width: 300px;">الرسالة</th>

                                    <th scope="col" style="text-align: center;font-size: 20px; width: 300px;">البريد الالكتروني</th>
                                    <th scope="col" style="text-align: center;font-size: 20px; width: 300px;">الاسم</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($contacts as $calll)

                                <tr>
                                <td style="text-align: center;font-size: 20px;"><a class="btn btn-sm btn-danger" onclick="return confirm('هل تريد الحذف')" href="{{url('contact/destroy',$calll->id)}}" style="width: 90px;">حذف</a>
                                    </td>
                                    <td style="text-align: center;font-size: 20px;">{{$calll->message}}</td>
                                    <td style="text-align: center;font-size: 20px;">{{$calll->email}}</td>
                                    <td style="text-align: center;font-size: 20px;">{{$calll->name}}</td>
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

