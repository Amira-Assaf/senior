@extends("layouts.admin.layout")
@section('admin-content')

@if (app()->getLocale()=='ar')
<style>
    .form-group{
        text-align: right;
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

<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- Static Table Start -->
<div class="data-table-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="sparkline13-list">
                    <div class="sparkline13-hd">
                        <div class="main-sparkline13-hd"@if (app()->getLocale()=='ar') style="direction: rtl" @endif>
                            <h1>@lang('site.list-distributor')</h1>
                            <div>
                                @if (Auth::user()->hasPermission('users-create'))
                                <a href="" data-toggle="modal" data-target="#add" class="btn btn-primary">@lang('site.add-distributor')</a>
                                @else
                                <a href="" class="btn btn-primary" disabled>@lang('site.add-distributor')</a>
                                @endif
                            </div>
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
                                   data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar" @if (app()->getLocale()=='ar') style="direction: rtl" @endif>
                                <thead>
                                    <tr>
                                        <th data-field="state" data-checkbox="true"></th>
                                        <th data-field="id">ID</th>
                                        <th>@lang('site.company-name')</th>
                                        {{-- <th>Products</th> --}}
                                        <th>@lang('site.mobile')</th>
                                        <th>@lang('site.company-address')</th>
                                        <th>@lang('site.action')</th>
                                    </tr>
                                </thead>
                                <tbody>
                                     {{-- <div class="row  Distributor-data  dis-area"> --  foreach  -- </div> --}}

                                    @foreach ($distributors as $distributor)
                                    <tr>
                                        <td></td>
                                        <td> {{ $distributor->id }} </td>
                                        <td> @if (app()->getLocale()=='ar') {{ $distributor->name_ar }} @else {{ $distributor->name }} @endif </td>
                                        {{-- <td class="Distributor-data"> </td> --}}
                                        <td> {{ $distributor->mobile }} </td>
                                        <td>@if (app()->getLocale()=='ar') {{ $distributor->address_ar }} @else {{ $distributor->address }} @endif </td>
                                        <td><style>.mt-5{margin-top: 5px;margin-right: 5px}</style>
                                            {{-- <a href="/Distributors/{{$distributor->id}}" title="View" class="btn btn-info btn-sm" ><i class="fa fa-eye" aria-hidden="true"></i></button> --}}
                                            <a href="/adminDistributor/{{$distributor->id}}" title="View" class="btn btn-info btn-sm mt-5" ><i class="fa fa-eye" aria-hidden="true"></i></button>
                                            
                                           
                                               @if (Auth::user()->hasPermission('users-update'))
                                               <a href="/adminDistributor/{{$distributor->id}}/edit" class="btn btn-warning btn-sm mt-5"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i> </a>
                                                @else
                                                <a href="" class="btn btn-warning btn-sm mt-5" disabled> <i class="fa fa-pencil-square-o" aria-hidden="true"></i> </a>
                                               @endif
                                            @if (Auth::user()->hasPermission('users-delete'))
                                            <form action="{{ route('adminDistributor.destroy',$distributor->id) }}"  method="POST">
                                                {{ csrf_field() }}
                                                <input type="hidden" name="method" value="DELETE"  />
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger mt-5  delete"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                                </div>
                                            </form> 
                                            @else
                                            <button type="" class="btn btn-danger mt-5 " disabled ><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                            @endif
                                            {{-- <form  action="{{ route('Distributor.update',$distributor->id) }}" method="POST">
                                                {{ csrf_field() }}
                                                @method('PUT')
                                                <input type="text" name="name"value="{{$distributor->name}}" placeholder="Enter branch name" class="form-control" />
                                                <button type="submit" class="btn btn-primary">Edit</button>
                                            </form> --}}
                                            {{-- <button class="btn btn-danger deleteDistributor" data-distributorid="{{$distributor->id}}">Delete</button> --}}
                                            {{-- <a data-toggle="modal" data-target="#del" title="View" class="btn btn-danger mt-5" data-distributorid="{{$distributor->id}}"><i class="fa fa-trash-o" aria-hidden="true"></i></a> --}}
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

    <!--Modal-->
   
    <!--Add Distributor-->
    <div id="add" class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header header-color-modal bg-color-1">
                    <h4 class="modal-title">Add New Distributor</h4>
                    <div class="modal-close-area modal-close-df">
                        <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                    </div>
                </div>
                <div class="modal-body">
                    <span class="educate-icon educate-info modal-check-pro information-icon-pro"> </span>
                    <h2>Distributor Data</h2>
                    <div class="message-content">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="review-content-section">
                                <div id="dropzone1" class="pro-ad addcoursepro">
                                    <form class="contact_us_form row form" method="POST" id="distributor-form-request" novalidate="novalidate" @if (app()->getLocale()=='ar') style="direction:rtl" @endif>

                                        {!! csrf_field() !!}
    
                                        <input type="hidden" name="status_id" value="3">
                                        {{-- <input type="hidden" name="active" value="1"> --}}
    
                                        <div class="form-group col-md-12">
                                            <label>@lang('site.name')</label>
                                            <input type="text" class="form-control" id="name" name="name" >
                                            <span class="text-danger d-block" id="name-error"> </span>
                                        </div>

                                        <div class="form-group col-md-12">
                                            <label>الإسم باللغة العربية</label>
                                            <input type="text" class="form-control" id="name_ar" name="name_ar" >
                                            <span class="text-danger d-block" id="name-error"> </span>
                                        </div>
    
                                        <div class="form-group col-md-12">
                                            <label>@lang('site.area')</label>
    
                                            <input type="text" class="form-control" id="area" name="area" >
                                            <span class="text-danger d-block" id="area-error"></span>
                                        </div>
    
                                        <div class="form-group col-md-12">
                                            <label>@lang('site.commercial_id')</label>
                                            <input type="text" class="form-control" id="commercial_id" name="commercial_id" >
                                            <span class="text-danger" id="commercial_id-error"> </span>
    
                                        </div>
    
                                        <div class="form-group col-md-12">
                                            <label>@lang('site.tax_id')</label>
    
                                            <span class="text-danger" id="tax_id-error"> </span>
                                            <input type="text" class="form-control" id="tax_id" name="tax_id" >
    
                                        </div>
    
    
                                        <div class="form-group col-md-12">
                                            <label>@lang('site.country')</label>
                                            <span class="text-danger" id="country_id-error"> </span>
                                            <select name="country_id" id="country_id" class="form-control">
                                        @foreach ($countries as $country)
                                            <option value="{{ $country->id }}">{{ $country->country_name }}</option>
                                        @endforeach
                                    </select>
                                        </div>
    
                                        <div class="form-group col-md-12">
                                            <label>@lang('site.city')</label>
                                            <span class="text-danger" id="city_id-error"> </span>
                                            <select name="city_id" id="city_id" class="form-control">
                                    </select>
                                        </div>
    
    
                                        <div class="form-group col-md-12">
                                            <label>@lang('site.phone')</label>
                                            <span class="text-danger" id="phone-error"> </span>
                                            <input type="tel" class="form-control" id="phone" name="phone" >
                                        </div>
    
                                        <div class="form-group col-md-12">
                                            <label>@lang('site.mobile')</label>
                                            <span class="text-danger" id="mobile-error"> </span>
                                            <input type="tel" class="form-control" id="mobile" name="mobile" >
                                        </div>
    
    
                                        <div class="form-group col-md-12">
                                            <label>@lang('site.fax')</label>
                                            <span class="text-danger" id="fax-error"> </span>
                                            <input type="tel" class="form-control" id="fax" name="fax" >
                                        </div>
    
                                        <div class="form-group col-md-12">
                                            <label>@lang('site.email')</label>
                                            <span class="text-danger" id="email-error"> </span>
                                            <input type="email" class="form-control" id="email" name="email" >
                                        </div>
    
    
                                        <div class="form-group col-md-12">
                                            <label>@lang('site.core_business')</label>
    
                                            <span class="text-danger" id="core_business-error"> </span>
                                            <select name="core_business" id="core_business" class="form-control">
                                            <option value="">@lang('site.core_business')</option>
                                            <option value="@lang('site.core-business-1')"> @lang('site.core-business-1')</option>
                                            <option value="@lang('site.core-business-2')"> @lang('site.core-business-2')</option>
                                            <option value="@lang('site.core-business-3')"> @lang('site.core-business-3')</option>
                                            <option value="@lang('site.core-business-4')"> @lang('site.core-business-4')</option>
                                           </select>
                                        </div>
    
                                        
                                        <div class="form-group col-md-12">
                                            <label>@lang('site.year')</label>
    
                                            <span class="text-danger" id="year-error"> </span>
                                            <input type="text" class="form-control" id="year" name="year" >
    
                                        </div>
                                        
                                        <div class="form-group col-md-12">
                                            <label>@lang('site.sales')</label>
    
                                            <span class="text-danger" id="sales-error"> </span>
                                            <input type="text" class="form-control" id="sales" name="sales">
    
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label>@lang('site.territory')</label>
    
                                            <span class="text-danger" id="territory-error"> </span>
                                            <input type="text" class="form-control" id="territory" name="territory" >
    
                                        </div>
    
                                        <div class="form-group col-md-12">
                                            <label>@lang('site.location')</label>
    
                                            <span class="text-danger" id="territory-error"> </span>
                                            <input type="text" class="form-control" id="location" name="location" >
    
                                        </div>
                                        
                                        <div  class="form-group col-md-12">
                                            <label>@lang('site.products') <span style="color: red"> @lang('site.required')</span></label>
                                            <div class="chosen-select-single">
                                         <select id="products-select"   class="chosen-select" multiple="" >
                                            @foreach ($Products as $product)
                                                        <option value="{{$product->id}}">@if (app()->getLocale()=='en') {{$product->product_name}} @else {{$product->ar_name}} @endif </option>
                                            @endforeach
                                        </select>
                                        <span class="text-danger" id="product_name-error"> </span>
                                        </div>
                                    </div> 
                                        <div class="form-group col-md-12">
                                            <label>@lang('site.branches')</label>
                                            <span class="text-danger" id="branches-error"> </span>
                                            <textarea class="form-control" id="branches" name="branches" style="height: 50px"></textarea>
    
                                        </div>

                                        <div class="form-group col-md-12">
                                            <label for="address">@lang('site.address')</label>
                                            <span class="text-danger" id="address-error"> </span>
                                            <textarea class="form-control" name="address" style="height: 50px"></textarea>
                                        </div>

                                        <div class="form-group col-md-12">
                                            <label for="address">العنوان باللغة العربية</label>
                                            <span class="text-danger" id="address-error"> </span>
                                            <textarea class="form-control" name="address_ar" style="height: 50px"></textarea>
                                        </div>

                                        <div class="form-group col-md-12">
                                            <button type="submit"  id="distributor-save" value="submit" class="btn btn-primary">@lang('site.submit')</button>
                                        </div>
                                        <a id="basicInfoNoIcon" style="display: none">Info</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <!--<a href="#">Back</a>-->
                    <a data-dismiss="modal" href="#" id="back">@lang('site.back')</a>
                </div>
            </div>
        </div>
    </div>
    <!--/Add Distributor-->



    <!--/Modal-->


@endsection


@section('admin-scripts')

<script>
    $(document).on('click','.deleteDistributor',function(){
        var DistributorID=$(this).attr('data-distributorid');
        $('#distributor_id').val(DistributorID); 
        $('#del').modal('show'); 
    });
    </script>


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
    // $(document).ready(function()
    // {
    //     $('a[href^="#"]').click(function(){

    //    var the_id = $(this).attr("href");

    //     $('html, body').animate({
    //     scrollTop:$(the_id).offset().top
    // }, 'slow');

    // return false;});
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
 
        debugger
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
                            $("#back").click();
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


    // });
        

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

                            text+=`${ myproducts.join(" , ")}`

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