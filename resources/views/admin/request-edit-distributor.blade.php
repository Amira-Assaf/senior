
@extends("layouts.admin.layout")
@section('admin-content')




    <!-- Single pro tab review Start-->
    <div class="single-pro-review-area mt-t-30 mg-b-15">
        <div class="container-fluid">
            <div class="row" style="background-color:white;border:solid #F6F8FA 15px">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-payment-inner-st">
                        <div class="comment_form_area">
                            <h3>Edit Distributor</h3>
                            <br />
                            <form action="{{ route('RequestDistributor.update',$distributor->id) }}" method="POST">

                                {{ csrf_field() }}
                                 @method('PUT')
                                {{-- <input type="hidden" name="status_id" value="1"> --}}

                                <div class="form-group col-md-12">
                                    <div class="i-checks pull-left">
                                        <label>
                                            @if ( $distributor->active =="1") <input type="checkbox" value="1" checked> <i></i> Is Active @else <input type="checkbox" value="0" > <i></i> Is Active @endif
                                            
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    @if ( $distributor->status_id =="3")
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="i-checks pull-left">
                                            <label>
                                                <input type="radio" value="3" name="a" checked=""> <i></i> Approved
                                            </label>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="i-checks pull-left">
                                            <label>
                                                <input type="radio" value="1" name="a"> <i></i> Pending
                                            </label>
                                        </div>
                                    </div>
                                    @else
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="i-checks pull-left">
                                            <label>
                                                <input type="radio" value="3" name="a" > <i></i> Approved
                                            </label>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="i-checks pull-left">
                                            <label>
                                                <input type="radio" value="1" name="a"checked> <i></i> Pending
                                            </label>
                                        </div>
                                    </div>
                                    @endif
                                </div>

                                <div class="form-group col-md-6">
                                    <label>@lang('site.name')</label>
                                    <input type="text" class="form-control" id="name" name="name" value="{{ $distributor->name }}">
                                    <span class="text-danger d-block" id="name-error"> </span>
                                </div>

                                <div class="form-group col-md-6">
                                    <label>@lang('site.area')</label>

                                    <input type="text" class="form-control" id="area" name="area" value="{{ $distributor->area }}" >
                                    <span class="text-danger d-block" id="area-error"></span>
                                </div>

                                <div class="form-group col-md-6">
                                    <label>@lang('site.commercial_id')</label>
                                    <input type="text" class="form-control" id="commercial_id" name="commercial_id" value="{{ $distributor->commercial_id }}" >
                                    <span class="text-danger" id="commercial_id-error"> </span>

                                </div>

                                <div class="form-group col-md-6">
                                    <label>@lang('site.tax_id')</label>

                                    <span class="text-danger" id="tax_id-error"> </span>
                                    <input type="text" class="form-control" id="tax_id" name="tax_id" value="{{ $distributor->tax_id }}">

                                </div>


                                <div class="form-group col-md-6">
                                    <label>@lang('site.country')</label>
                                    <span class="text-danger" id="country_id-error"> </span>
                                    <select name="country_id" id="country_id" class="form-control">
                                    {{-- <option value="country_id">{{ $country->country_name }}</option> --}}
                                {{-- @foreach ($countries as $country ?? '')
                                    <option value="{{ $country ?? ''->id }}">{{ $country ?? ''->country_name }}</option>
                                @endforeach --}}
                                <option value="">test</option>
                                </select>
                                </div>

                                <div class="form-group col-md-6">
                                    <label>@lang('site.city')</label>
                                    <span class="text-danger" id="city_id-error"> </span>
                                    <select name="city_id" id="city_id" class="form-control">
                                </select>
                                </div>


                                <div class="form-group col-md-6">
                                    <label>@lang('site.phone')</label>
                                    <span class="text-danger" id="phone-error"> </span>
                                    <input type="tel" class="form-control" id="phone" name="phone" value="{{ $distributor->phone }}" >
                                </div>

                                <div class="form-group col-md-6">
                                    <label>@lang('site.mobile')</label>
                                    <span class="text-danger" id="mobile-error"> </span>
                                    <input type="tel" class="form-control" id="mobile" name="mobile" value="{{ $distributor->mobile }}" >
                                </div>


                                <div class="form-group col-md-6">
                                    <label>@lang('site.fax')</label>
                                    <span class="text-danger" id="fax-error"> </span>
                                    <input type="tel" class="form-control" id="fax" name="fax" value="{{ $distributor->fax }}">
                                </div>

                                <div class="form-group col-md-6">
                                    <label>@lang('site.email')</label>
                                    <span class="text-danger" id="emial-error"> </span>
                                    <input type="email" class="form-control" id="emial" name="email"  value="{{ $distributor->email }}">
                                </div>


                                <div class="form-group col-md-6">
                                    <label>@lang('site.core_business')</label>

                                    <span class="text-danger" id="core_business-error"> </span>
                                    <select name="core_business" id="core_business" class="form-control" >
                                    <option value="">{{ $distributor->core_business }}</option>
                                    <option value="@lang('site.core-business-1')"> @lang('site.core-business-1')</option>
                                    <option value="@lang('site.core-business-2')"> @lang('site.core-business-2')</option>
                                    <option value="@lang('site.core-business-3')"> @lang('site.core-business-3')</option>
                                    <option value="@lang('site.core-business-4')"> @lang('site.core-business-4')</option>
                                   </select>
                                </div>

                                
                                <div class="form-group col-md-6">
                                    <label>@lang('site.year')</label>

                                    <span class="text-danger" id="year-error"> </span>
                                    <input type="text" class="form-control" id="year" name="year"  value="{{ $distributor->year }}" >

                                </div>
                                
                                <div class="form-group col-md-6">
                                    <label>@lang('site.sales')</label>

                                    <span class="text-danger" id="sales-error"> </span>
                                    <input type="text" class="form-control" id="sales" name="sales" value="{{ $distributor->sales }}">

                                </div>
                                <div class="form-group col-md-6">
                                    <label>@lang('site.territory')</label>

                                    <span class="text-danger" id="territory-error"> </span>
                                    <input type="text" class="form-control" id="territory" name="territory" value="{{ $distributor->territory }}" >

                                </div>

                                
                                <div  class="form-group col-md-12">
                                    <div class="chosen-select-single">
                                        <label>@lang('site.products')</label>
                                   <select id="products-select"   class="chosen-select" multiple="">
                                    {{-- @foreach ($Products as $product)
                                                <option value="{{$product->id}}">@if (app()->getLocale()=='en') {{$product->product_name}} @else {{$product->ar_name}} @endif </option>
                                    @endforeach --}}
                                   <option value="">test</option>
                                   </select>
                                   <span class="text-danger" id="product_name-error"> </span>
                                   </div>
                                </div> 
                                <div class="form-group col-md-12">
                                    <label>@lang('site.branches')</label>
                                    <span class="text-danger" id="branches-error"> </span>
                                    <textarea class="form-control" id="branches" name="branches" >{{ $distributor->branches }}</textarea>

                                </div>
                                <div class="form-group col-md-12">
                                    <label for="address">@lang('site.address')</label>
                                    <span class="text-danger" id="address-error"> </span>
                                    <textarea class="form-control" name="address" >{{ $distributor->address }}</textarea>
                                </div>
                                <div class="form-group col-md-12">
                                    <button type="submit"  id="distributor-save" value="submit" class="form-control btn btn-info mb-2 text-white">@lang('site.submit')</button>
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

@section('admin-scripts')


@endsection