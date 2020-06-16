@extends('admin_admin.layout.template')


@section('body')
    <div class="az-content">
        <div class="container">
            <div style="text-align: right" class="az-content-body">

                <div style="text-align: right   ">

                    <h2 class="az-content-title"> ویزیت ها   @if(isset($description))   ( {{ $description }} ) @endif  </h2>
                </div>



                <table id="datatable2" class="display responsive nowrap">
                    <thead>
                    <tr>
                        <th class="wd-15p">عملیات ها</th>
                        <th class="wd-15p">ساعت</th>
                        <th class="wd-20p">تاریخ</th>
                        <th class="wd-10p">بیمار</th>
                        <th class="wd-25p">پزشک</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(count($visits) > 0)
                        @foreach($visits as $visit)
                            <tr>

                                <td>
                                    <button onclick="window.location='{{ route('visit_medicines', ['visit_id'=>$visit->id]) }}'" class="btn btn-primary btn-rounded">دارو ها</button>
                                    <button class="btn btn-warning btn-rounded">ویرایش</button>
                                    <button class="btn btn-danger btn-rounded">حذف</button>
                                </td>
                                <td>{{ \Hekmatinasser\Verta\Verta::instance($visit->time)->format('h-m') }}</td>
                                <td>{{ \Hekmatinasser\Verta\Verta::instance($visit->time)->format('Y-n-j') }}</td>

                                <td>
                                    {{ $visit->patient()->first()->user()->first()->name.' '.$visit->patient()->first()->user()->first()->family }}
                                </td>
                                <td>
                                    {{ $visit->doctor()->first()->user()->first()->name.' '.$visit->doctor()->first()->user()->first()->family }}
                                </td>
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