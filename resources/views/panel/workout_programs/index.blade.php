@extends('panel.includes.tables.template1',['total' => count($workoutPrograms)])

@section('title','برنامه‌های تمرینی')

@section('breadcrumb')
    <li class="breadcrumb-item active"><a href="{{ route('panel.admin.workout-programs.index') }}">برنامه‌های تمرینی</a>
    </li>
@endsection


@section('content-header')
    <div class="w-100 d-flex justify-content-md-end justify-content-center">
        <a type="button" href="{{ route('panel.admin.workout-programs.create') }}"
           class="btn btn-lg text-white border-0 mb-1"
           style="background:none;background-image: linear-gradient(to left, #5c1ac3 0%, transparent 100%);margin-left: 7px">
            برنامه تمرینی جدید
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                 stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                 class="feather feather-plus">
                <line x1="12" y1="5" x2="12" y2="19"></line>
                <line x1="5" y1="12" x2="19" y2="12"></line>
            </svg>
        </a>
    </div>
@endsection

@section('table-header')
    <tr>
        <th class="text-left" style="width: 20px">#</th>
        <th>ورزشکار</th>
        <th>تاریخ آغاز</th>
        <th>مدت (روز)</th>
        <th>توضیحات</th>
        <th>
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                 stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                 class="feather feather-settings">
                <circle cx="12" cy="12" r="3"></circle>
                <path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path>
            </svg>
        </th>
    </tr>
@endsection

@section('table-body')
    @php $index=1; @endphp
    @foreach($workoutPrograms as $workoutProgram)
        <tr>
            <td>{{ $index }}</td>
            <td>{{ $workoutProgram->getRequesterName() }}</td>
            <td>{{ \Morilog\Jalali\Jalalian::forge($workoutProgram->from)->format('%y-%m-%d')}}</td>
            <td>{{ $workoutProgram->duration }}</td>
            <td title="{{ $workoutProgram->comment }}">{{ ellipsize($workoutProgram->comment) ?? '-' }}</td>
            <td>
                <ul class="table-controls">
                    <li><a href="{{ route('panel.workout-programs.export-pdf',$workoutProgram) }}" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-download text-secondary px-1 mb-1">
                                <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                <polyline points="7 10 12 15 17 10"></polyline>
                                <line x1="12" y1="15" x2="12" y2="3"></line>
                            </svg>
                        </a></li>
                    <li><a href="{{ route('panel.workout-programs.show', $workoutProgram) }}" class="bs-tooltip"
                           data-toggle="tooltip" data-placement="top" title=""
                           data-original-title="مشاهده">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75"
                                 stroke-linecap="round" stroke-linejoin="round"
                                 class="feather feather-eye px-1 text-primary">
                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                <circle cx="12" cy="12" r="3"></circle>
                            </svg>
                        </a></li>
                    <li><a href="{{ route('panel.admin.workout-programs.edit', $workoutProgram) }}" class="bs-tooltip"
                           data-toggle="tooltip" data-placement="top" title=""
                           data-original-title="ویرایش">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                 stroke-linecap="round" stroke-linejoin="round"
                                 class="feather feather-edit-2 px-1 text-warning">
                                <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                            </svg>
                        </a></li>
                    <li>
                        <form class="d-none" method="post"
                              action="{{ route('panel.admin.workout-programs.destroy', $workoutProgram) }}">
                            @csrf
                            @method('DELETE')
                        </form>
                        <a href="#delete-modal" data-toggle="modal" onclick="$(this).addClass('deletable');">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                 stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                 class="feather feather-trash text-dark p-1 br-6 mb-1">
                                <polyline points="3 6 5 6 21 6"></polyline>
                                <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                            </svg>
                        </a>
                    </li>
                </ul>
            </td>
        </tr>
        @php $index++; @endphp
    @endforeach
@endsection
