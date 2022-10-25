@component('layouts.back')
    @slot('title') مدیریت {{ $title }} @endslot
    @slot('body')
        <div class="card">
            <div class="card-header archive-card-header">
                <div class="archive-circle-wrap">
                    <div class="archive-circle">
                        <i class="fa fa-lemon-o"></i>
                    </div>
                    <h2>لیست {{ $title }}</h2>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="archive-table">
                        @foreach ($data as $key=>$item)
                            <tr>
                                <td>
                                    @if($item->status == 1)
                                        <a href="{{ route('team-status', $item->id) }}" class="float-right"><i class="fa fa-circle ml-1" style="color: #32cd32"></i></a>
                                    @elseif($item->status == 0)
                                        <a href="{{ route('team-status', $item->id) }}" class="float-right"><i class="fa fa-circle ml-1" style="color: #ff0000"></i></a>
                                    @endif
                                    {{ $item->name }}
                                </td>
                                <td>{{ $item->title }}</td>
                                <td>{{ $item->education }}</td>
                                <td>
                                    <div>ترتیب</div>
                                    {!! Form::open(['method' => 'PATCH', 'route' => ['team-change-sort', $item->id] ]) !!}
                                    {!! Form::text('sort', $item->sort, array('class' => 'form-group')) !!}
                                    {!! Form::close() !!}
                                </td>
                                <td>
                                    <a href="{{ route('team-re-active',$item->id) }}">
                                        @if($item->show_to_index_page)
                                            <span style="color: #32cd32">نمایش در صفحه اصلی</span>
                                        @else
                                            <span style="color: #ff0000">عدم نمایش در صفحه اصلی</span>
                                        @endif
                                    </a>
                                </td>
                                <td width="140">
                                    <div class="btn-inline">
                                        <a href="{{route('team-edit',$item->id)}}" class="btn btn-sm btn-info float-left mr-1"><i class="fa fa-edit ml-1"></i>ویرایش</a>
                                        {!! Form::open(['method' => 'DELETE', 'route' => ['team-destroy', $item->id] ]) !!}
                                        {!! Form::button('<i class="fa fa-ban ml-1"></i>حذف', ['type' => 'submit', 'class' => 'btn btn-danger float-left', 'onclick' => 'return confirm("آیا مطمئن هستید؟")']) !!}
                                        {!! Form::close() !!}
                                    </div>
                                </td>

                            </tr>
                        @endforeach
                    </table>
                </div>
                <div class="paginate p-3">
                    {{ $data->links() }}
                    <a href="{{ route('team-create') }}" class="btn btn-rounded btn-primary float-left"><i
                            class="fa fa-circle-o ml-1"></i>افزودن</a>
                </div>
            </div>
        </div>
    @endslot
@endcomponent
