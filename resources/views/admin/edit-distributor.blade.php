
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
                                    <span class="bread-blod">@lang('site.list-distributor')</span>
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
                            <h3>@lang('site.edit-distributor')</h3>
                            <br />
                            <form action="{{ route('Distributor.update',$distributor->id) }}" method="POST">

                                {{ csrf_field() }}
                                 @method('PUT')

                                <div class="form-group col-md-6">
                                    <label>@lang('site.name')</label>
                                    <input type="text" class="form-control" id="name" name="name" value="{{ $distributor->name }}">
                                    <span class="text-danger d-block" id="name-error"> </span>
                                </div>

                                <div class="form-group col-md-6">
                                    <label>@lang('site.ar-name')</label>
                                    <input type="text" class="form-control" id="name_ar" name="name_ar" value="{{ $distributor->name_ar }}">
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

                            


                                {{-- <div class="form-group col-md-6">
                                    <label>@lang('site.country')</label>
                                    <span class="text-danger" id="country_id-error"> </span>
                                    <select name="country_id" id="country_id" class="form-control">
                                    <option value="country_id">{{ $country->country_name }}</option>
                                @foreach ($countries as $country ?? '')
                                    <option value="{{ $country ?? ''->id }}">{{ $country ?? ''->country_name }}</option>
                                @endforeach
                                <option value="">test</option>
                                </select>
                                </div>  --}}

                                {{-- <div class="form-group col-md-6">
                                    <label>@lang('site.city')</label>
                                    <span class="text-danger" id="city_id-error"> </span>
                                    <select name="city_id" id="city_id" class="form-control">
                                </select>
                                </div> --}}


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


                                {{-- <div class="form-group col-md-6">
                                    <label>@lang('site.core_business')</label>

                                    <span class="text-danger" id="core_business-error"> </span>
                                    <select name="core_business" id="core_business" class="form-control" >
                                    <option value="">{{ $distributor->core_business }}</option>
                                    <option value="@lang('site.core-business-1')"> @lang('site.core-business-1')</option>
                                    <option value="@lang('site.core-business-2')"> @lang('site.core-business-2')</option>
                                    <option value="@lang('site.core-business-3')"> @lang('site.core-business-3')</option>
                                    <option value="@lang('site.core-business-4')"> @lang('site.core-business-4')</option>
                                   </select>
                                </div> --}}

                                
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

                                <div class="form-group col-md-12">
                                    <label>@lang('site.location')</label>

                                    <span class="text-danger" id="territory-error"> </span>
                                    <input type="text" class="form-control" id="location" name="location" value="{{ $distributor->location }}" >

                                </div>
                                
                                {{-- <div  class="form-group col-md-6">
                                    <label>@lang('site.products')</label>
                                    <br/>
                                   <span class="text-danger" id="product_name-error"> </span>
                                   @foreach ($DistributorProduct as $DistributorProduct)
                                   <input  type="checkbox" value="{{ $DistributorProduct ->product_id }}" name="products[]"  checked > {{ $DistributorProduct ->product ->product_name }}  
                                   <br/>
                                   @endforeach
                                </div> --}}

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
                                    <label for="address">@lang('site.ar-address')</label>
                                    <span class="text-danger" id="address-error"> </span>
                                    <textarea class="form-control" name="address_ar" >{{ $distributor->address_ar }}</textarea>
                                </div>


                                <div class="form-group col-md-12">
                                    <button type="submit"  id="distributor-save" value="submit" class="form-control btn btn-info mb-2 text-white">@lang('site.submit')</button>
                                </div>
                                <div class="form-group col-md-12">
                                    {{-- <button type="submit"  id="" value="submit" class="form-control btn btn-info mb-2 text-white" >Back</button> --}}
                                    <a href="/admin/distributors" title="View" class="btn btn-info" >@lang('site.back')</a>
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


function  getCityBycountryId(countryid )
{
    var text = "";
    $.ajax(
        {
          url: "/lookup/getCitiesByCountryId/" +countryid,
          type: "get",
          dataType: "json",
          async:false, 
          success: function(response) 
          {  
            $.each(response, function(index, item) 
            {
                text += `<option value="${item.id}">  ${item.city_name} </option>`
            });

          
          }

        });

          return text;  
}

// scroll with click to an id
    $(document).ready(function()
    {
        $('a[href^="#"]').click(function(){

       var the_id = $(this).attr("href");

        $('html, body').animate({
        scrollTop:$(the_id).offset().top
    }, 'slow');

    return false;});
//end smoth scroll

// Filter onchange CitySelect
    $('#cityFilter').change(function()
    {
        $('.btn-search').trigger('click');
    });
// End Onchange

// Filter onchange CountryFilter
$('#countryFilter').change(function()
    {
        $('#cityFilter').val(0);
        $('.btn-search').trigger('click');
    });
// End Onchange

        $("#countryFilter").on("change", function(e) {
            text=getCityBycountryId($(this).val())
            $("#cityFilter").html('  <option selected value="0">@lang('site.select-city')</option>'+text);
            });

            $("#country_id").on("change", function(e) {
                $.ajax({
                    url: "/lookup/getCitiesByCountryId/" + $("#country_id").val(),
                    type: "get",
                    dataType: "json",
                    success: function(response) {
                        var text = "";
                        $.each(response, function(index, item) {
                            text += `<option value="${item.id}">  ${item.city_name} </option>`
                        });
                        $("#city_id").html(text);
                    }
                })
            });


            $("#distributor-save").click(function(e)
            {
                e.preventDefault();
                
             var mydata= $("#distributor-form-request").serializeArray() ; 
             var products = $('#products-select').val();
             mydata.push({name: "products", value:products}); 
 
        
             $("#distributor-form-request  .text-danger").text("");
           
             $.ajax(
                {
                    url: "{{ route('Distributor.store') }}",
                    type: "post",
                    dataType: "json",
                    data: mydata ,  
                    success: function(response)
                    {
                   
                        if (response.status == true)
                        {
                            // alert("تم ارسال طلبك بنجاح") ;
                            $("#distributor-form-request input").val("");
                            $("#distributor-form-request select").val("");
                            $("#distributor-form-request textarea").val("");
                            
                            $("#basicInfoNoIcon").click();
                        } 
                        else
                        {
                            $.each(response.errors, function(key, value) {
                                $("#" + key + "-error").text(value[0]); 
                                $("#" + key).addClass("is-invalid");
                            });
                        }
                    }
                });
            });

            $.ajaxSetup(
            {
                headers: 
                {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
       

        //    $(".products li").click(function(e)
        //    {
        //      e.preventDefault(); 
        //      var id= $(this).attr("data-id"); 
        //      $(".products li").removeClass("dis-active");
        //      $(this).addClass("dis-active"); 
        //     //  getAllDistributorByFilter(id); 
        //      $('.btn-search').trigger('click');
        //     }); 
            getAllDistributorByFilter();

  $(".btn-search").click(function(e){
      debugger
      e.preventDefault(); 
var     productId = $(".products li.dis-active").attr("data-id");
var  countryid=  $("#countryFilter").val();  
var  cityid=  $("#cityFilter").val(); 
debugger
if (cityid==0 ){
    cityid="all";
}
if (countryid==0 ){
    countryid="all";
}

   getAllDistributorByFilter(productId,countryid,cityid); 



  })


    });
        

     getAllDistributorByFilter();
       

    function getAllDistributorByFilter (productId="all" , countryId="all", cityId="all"  )
    {
        
            $.ajax(
                {
                    url: "/Distributor/getAllDistributorByFilter",
                    type: "get",
                    dataType: "json",
                    data:{productId: productId,country_id:countryId,  city_id:cityId},
                    success:function(res)
                    {     
                       var  distrubutersDistinct= res.filter((v,i,a)=>{
                          return   a.findIndex(t=>(t.distributorId === v.distributorId))===i         
                           }                   
                           )
                       $(".Distributor-data").html("");
                       var text=""; 
                       $.each(distrubutersDistinct,function(index,item)
                       {
                      var products=   res.filter(x => x.distributorId == item.distributorId  );
                      @if (app()->getLocale()=='en') var myproducts= products.map(a=>a.product_name);
                      @else var myproducts= products.map(a=>a.ar_name); @endif
                      
                            text+=` <div class="col-md-12 col-sm-12">
                                <div class="card dis-item">
                                  <div class="card-header bg-info text-white">@if (app()->getLocale()=='en') ${item.name}  @else ${item.name_ar} @endif </div>
                                    <div class="card-body" @if (app()->getLocale()=='ar') style="direction:rtl;text-align:right" @endif >
                                        <h5 class="card-title"><i class="fa fa-home"></i> @lang('site.address'): <span> @if (app()->getLocale()=='en') ${item.address}  @else ${item.address_ar} @endif </span></h5>
                                        <h5 class="card-title"><i class="fa fa-phone"> </i> @lang('site.mobile') : <span> ${item.mobile} </span></h5>
                                        <h5 class="card-title"><i class="fa fa-list-alt"></i> @lang('site.category'): <span> ${ myproducts.join(" , ")}</span></h5>
                                        <h5 class="card-title"><a href="${item.location}"><i class="fa fa-map-marker"></i> @lang('site.location')</a></h5>
                                    </div>
                                 </div>
                               </div>`
                        }) ;
                        $(".Distributor-data").html(text);
                    }                   
                });
    }

</script>

<script>
    $(document).ready(function(){
      $("#myInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#myTable tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });

    $(".products li").click(function(e)
           {
             e.preventDefault(); 
             var id= $(this).attr("data-id"); 
             $(".products li").removeClass("dis-active");
             $(this).addClass("dis-active"); 
             if(id!='all'){
                var value = $(this).text().toLowerCase().trim();
    $(".Distributor-data .card").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
             }
             else{
                $('.btn-search').trigger('click');
             }
            }); 

    </script>

@endsection