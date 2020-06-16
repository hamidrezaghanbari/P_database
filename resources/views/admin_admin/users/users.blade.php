@extends('admin_admin.layout.template')


@section('body')
    <div class="az-content">
        <div class="container">
            <div style="text-align: right" class="az-content-body">

                <div style="text-align: right">

                    <h2 class="az-content-title">کاربران </h2>
                </div>



                <table id="datatable2" class="display responsive nowrap">
                    <thead>
                    <tr>
                        <th class="wd-15p">عملیات ها</th>
                        <th class="wd-15p">شماره تماس</th>
                        <th class="wd-15p">سن</th>
                        <th class="wd-20p">جنسیت</th>
                        <th class="wd-10p">عنوان</th>
                        <th class="wd-25p">نام</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(count($users) > 0)
                        @foreach($users as $user)
                            <tr>

                                <td>
                                    <button class="btn btn-primary btn-rounded">بخش ها</button>
                                    <button class="btn btn-warning btn-rounded">ویرایش</button>
                                    <button class="btn btn-danger btn-rounded">حذف</button>
                                </td>
                                <td>{{ $user->phone }}</td>
                                <td>{{ (\Carbon\Carbon::now())->diffInYears($user->date_of_birth) }}</td>
                                <td>{{ checkGender($user->sex) }}</td>
                                @if($user->doctor()->first() != null)
                                    <td>پزشک</td>
                                @else
                                    @if($user->patient()->first() != null)
                                        <td>بیمار</td>
                                    @else
                                        <td>{{ $user->employee()->first() == "" ? '----' : $user->employee()->first()->type }}</td>
                                    @endif
                                @endif
                                <td>{{ $user->name.' '.$user->family }}</td>
                            </tr>
                        @endforeach
                    @else
                        <div class="alert alert-primary">
                            هیچ بخش درمانی ثبت نشده است.
                        </div>
                    @endif
                    </tbody>
                </table>

                <div class="mg-lg-b-30"></div>

            </div><!-- az-content-body -->
        </div>
    </div><!-- az-content -->
@endsection