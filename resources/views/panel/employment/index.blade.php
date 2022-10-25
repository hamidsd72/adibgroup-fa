@component('layouts.back')
    @slot('title') {{ $title }} @endslot
@slot('body')
<div class="card">
    <div class="card-header archive-card-header">
        <div class="archive-circle-wrap">
            <div class="archive-circle">
                <a href="http://adib-it.com/" target="_blank">
                    <img src="http://www.support.adibhost.com/img/logo.png" style="margin-top: 10px;"></a>                    </div>
            <h2>لیست {{ $title }}</h2>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-data table-togglable table-bordered pull-right w-100">
                <thead>
                <tr>
                    <th data-toggle="true">نام نام خانوادگی</th>
                    <th data-hide="phone">دسته بندی شغل</th>
                    <th data-hide="phone">سن</th>
                    <th data-hide="phone">تحصیلات</th>
                    <th data-hide="phone">موبایل</th>
                    <th data-hide="phone">تاریخ ثبت</th>
                    <th data-hide="phone">رزومه</th>
                </tr>
                </thead>
                <tbody>
                @foreach($items as $item)
                <tr>
                    <td>{{ $item->name }} @if($item->see == 0)<span style="color: red;">جدید</span> @endif</td>
                    <td>@if($item->experts){{ $item->experts }} @endif</td>
                    {{-- <td>@if($item->category){{ $item->category->name }} @endif</td> --}}
                    <td>{{ $item->age }}</td>
                    <td>{{ $item->education }}</td>
                    <td>{{ $item->mobile }}</td>
                    <td>{{ my_jdate($item->created_at, 'Y/m/d') }}</td>
                    <td><a href="@if($item->attachment){{ url($item->attachment->path) }}@endif"><i class="fa fa-download ml-2"></i>دانلود</a></td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="paginate p-3">
            {{ $items->links() }}
        </div>
    </div>
</div>
<?php
$employments = App\Employment::where('see',0)->get();
foreach ($employments as $employment){
    $employment->see = 1;
    $employment->save();
}
?>
@endslot
@endcomponent