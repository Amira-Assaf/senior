
@extends("layouts.admin.layout")
@section('admin-content')

@if (app()->getLocale()=='ar')
<style>
    .form-group{
        text-align: right;
    }
    .form-control{
        text-align: right;
    }
    #distributor-save{
        text-align: center;
    }
</style>
@endif

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

    <!-- Single pro tab review Start-->
    <div class="single-pro-review-area mt-t-30 mg-b-15">
        <div class="container-fluid">
            <div class="row" style="background-color:white;border:solid #F6F8FA 15px">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-payment-inner-st">
                        <div class="comment_form_area"@if (app()->getLocale()=='ar') style="direction: rtl" @endif>
                            <h3>@lang('site.view-distributor')</h3>
                            <br />
                            <form action="{{ route('Distributor.show',$distributor->id) }}" method="GET">

                                <div class="form-group col-md-6">
                                    <label>@lang('site.name')</label>
                                    <input type="text" class="form-control" id="name" name="name" value="{{ $distributor->name }}"disabled>
                                    <span class="text-danger d-block" id="name-error"> </span>
                                </div>

                                <div class="form-group col-md-6">
                                    <label>@lang('site.area')</label>

                                    <input type="text" class="form-control" id="area" name="area" value="{{ $distributor->area }}"disabled >
                                    <span class="text-danger d-block" id="area-error"></span>
                                </div>

                                <div class="form-group col-md-6">
                                    <label>@lang('site.commercial_id')</label>
                                    <input type="text" class="form-control" id="commercial_id" name="commercial_id" value="{{ $distributor->commercial_id }}" disabled>
                                    <span class="text-danger" id="commercial_id-error"> </span>

                                </div>

                                <div class="form-group col-md-6">
                                    <label>@lang('site.tax_id')</label>

                                    <span class="text-danger" id="tax_id-error"> </span>
                                    <input type="text" class="form-control" id="tax_id" name="tax_id" value="{{ $distributor->tax_id }}"disabled>

                                </div>


                                <div class="form-group col-md-6">
                                    <label>@lang('site.country')</label>
                                    <span class="text-danger" id="country_id-error"> </span>
                                    <input type="text" class="form-control" id="user_country" name="user_country" value="{{ $distributor->user_country }}"disabled>
                                </div>

                                <div class="form-group col-md-6">
                                    <label>@lang('site.city')</label>
                                    <span class="text-danger" id="city_id-error"> </span>
                                    <input type="text" class="form-control" id="user_city" name="user_city" value="{{ $distributor->user_city }}"disabled>
                                </div>


                                <div class="form-group col-md-6">
                                    <label>@lang('site.phone')</label>
                                    <span class="text-danger" id="phone-error"> </span>
                                    <input type="tel" class="form-control" id="phone" name="phone" value="{{ $distributor->phone }}" disabled>
                                </div>

                                <div class="form-group col-md-6">
                                    <label>@lang('site.mobile')</label>
                                    <span class="text-danger" id="mobile-error"> </span>
                                    <input type="tel" class="form-control" id="mobile" name="mobile" value="{{ $distributor->mobile }}" disabled>
                                </div>


                                <div class="form-group col-md-6">
                                    <label>@lang('site.fax')</label>
                                    <span class="text-danger" id="fax-error"> </span>
                                    <input type="tel" class="form-control" id="fax" name="fax" value="{{ $distributor->fax }}" disabled>
                                </div>

                                <div class="form-group col-md-6">
                                    <label>@lang('site.email')</label>
                                    <span class="text-danger" id="email-error"> </span>
                                    <input type="email" class="form-control" id="email" name="email"  value="{{ $distributor->email }}" disabled>
                                </div>


                                <div class="form-group col-md-6">
                                    <label>@lang('site.core_business')</label>

                                    <span class="text-danger" id="core_business-error"> </span>
                                    <input type="text" class="form-control" id="core_business" name="core_business"  value="{{ $distributor->core_business }}" disabled>
                                </div>

                                
                                <div class="form-group col-md-6">
                                    <label>@lang('site.year')</label>

                                    <span class="text-danger" id="year-error"> </span>
                                    <input type="text" class="form-control" id="year" name="year"  value="{{ $distributor->year }}" disabled >

                                </div>
                                
                                <div class="form-group col-md-6">
                                    <label>@lang('site.sales')</label>

                                    <span class="text-danger" id="sales-error"> </span>
                                    <input type="text" class="form-control" id="sales" name="sales" value="{{ $distributor->sales }}" disabled>

                                </div>
                                <div class="form-group col-md-6">
                                    <label>@lang('site.territory')</label>

                                    <span class="text-danger" id="territory-error"> </span>
                                    <input type="text" class="form-control" id="territory" name="territory" value="{{ $distributor->territory }}" disabled >

                                </div>

                                
                                <div  class="form-group col-md-6">
                                    <label>@lang('site.products')</label>
                                    <br/>
                                   <span class="text-danger" id="product_name-error"> </span>
                                   @foreach ($DistributorProduct as $DistributorProduct)
                                   <input class="checkbox"  type="checkbox" value="{{ $DistributorProduct ->product_id }}" name="products[]"  checked disabled> @if (app()->getLocale()=='ar') {{ $DistributorProduct ->product ->ar_name }} @else {{ $DistributorProduct ->product ->product_name }} @endif
                                   <br/>
                                 @endforeach
                                   </div>

                                <div class="form-group col-md-6">
                                    <label>@lang('site.branches')</label>
                                    <span class="text-danger" id="branches-error"> </span>
                                    <textarea class="form-control" id="branches" name="branches" disabled >{{ $distributor->branches }}</textarea>

                                </div>
                                <div class="form-group col-md-12">
                                    <label for="address">@lang('site.address')</label>
                                    <span class="text-danger" id="address-error"> </span>
                                    <textarea class="form-control" name="address" disabled>{{ $distributor->address }}</textarea>
                                </div>
                                <div class="form-group col-md-12">
                                    {{-- <button type="submit"  id="" value="submit" class="form-control btn btn-info mb-2 text-white" >Back</button> --}}
                                    <a href="/RequestDistributor" title="View" class="btn btn-info" >@lang('site.back')</a>
                                </div>
                                
                                {{-- <button id="basicInfoNoIcon" style="display: none">Info</button> --}}
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script>


</script>
@endsection