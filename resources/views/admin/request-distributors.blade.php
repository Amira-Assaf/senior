@extends("layouts.admin.layout")
@section('admin-content')

<div class="breadcome-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list single-page-breadcome">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="breadcome-heading">

                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <ul class="breadcome-menu"@if (app()->getLocale()=='ar') style="direction: rtl" @endif>
                                <li>
                                    <a href="#">@lang('site.home')</a> <span class="bread-slash">/</span>
                                </li>
                                <li>
                                    <span class="bread-blod">@lang('site.request-distributor')</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- Static Table Start -->
<div class="data-table-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="sparkline13-list">
                    <div class="sparkline13-hd">
                        <div class="main-sparkline13-hd"@if (app()->getLocale()=='ar') style="direction: rtl" @endif>
                            <h1>@lang('site.request-distributor')</h1>
                            <br/>
                        </div>
                    </div>
                    <div class="sparkline13-graph">
                        <div class="datatable-dashv1-list custom-datatable-overright">
                            <div id="toolbar">
                                <select class="form-control dt-tb">
                                    <option value="">Export Basic</option>
                                    <option value="all">Export All</option>
                                    <option value="selected">Export Selected</option>
                                </select>
                            </div>
                            <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                   data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar"@if (app()->getLocale()=='ar') style="direction: rtl" @endif>
                                <thead>
                                    <tr>
                                        <th data-field="state" data-checkbox="true"></th>
                                        <th data-field="id">ID</th>
                                        <th>@lang('site.company-name')</th>
                                        {{-- <th>Products</th> --}}
                                        <th>@lang('site.mobile')</th>
                                        <th>@lang('site.company-address')</th>
                                        <th>@lang('site.country')</th>
                                        <th>@lang('site.city')</th>
                                        <th>@lang('site.date-time')</th>
                                        <th>@lang('site.action')</th>
                                    </tr>
                                </thead>
                                <tbody>
                                     {{-- <div class="row  Distributor-data  dis-area"> --  foreach  -- </div> --}}

                                    @foreach ($distributors as $distributor)
                                    <tr>
                                        <td></td>
                                        <td>{{ $distributor->id }}</td>
                                        <td>{{ $distributor->name }}</td>
                                        {{-- <td class="Distributor-data"> </td> --}}
                                        <td>{{ $distributor->mobile }}</td>
                                        <td>{{ $distributor->address }}</td>
                                        <td>{{ $distributor->user_country }}</td>
                                        <td>{{ $distributor->user_city }}</td>
                                        <td>{{ $distributor->created_at }}</td>
                                        <td><style>.mt-5{margin-top: 5px;margin-right: 5px}</style>
                                            <a href="/RequestDistributor/{{$distributor->id}}" title="View" class="btn btn-info btn-sm mt-5" ><i class="fa fa-eye" aria-hidden="true"></i></a>
                                            {{-- <a href="/RequestDistributor/{{$distributor->id}}/edit" class="btn btn-warning btn-sm mt-5"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i> </a> --}}
                                            @if (Auth::user()->hasPermission('users-delete'))
                                            <form action="{{ route('RequestDistributor.destroy',$distributor->id) }}"  method="POST">
                                                {{ csrf_field() }}
                                                <input type="hidden" name="method" value="DELETE"  />
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger mt-5  delete"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                                </div>
                                            </form> 
                                            @else
                                            <button type="" class="btn btn-danger mt-5" disabled><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                            @endif
                                        </td>
                                    </tr>
                                    @endforeach
                                 </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection


@section('admin-scripts')

<script>
    $(document).on('click','.deleteDistributor',function(){
        var DistributorID=$(this).attr('data-distributorid');
        $('#distributor_id').val(DistributorID); 
        $('#del').modal('show'); 
    });
 </script>


 
@endsection