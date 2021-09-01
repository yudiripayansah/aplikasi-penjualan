@extends('layout.index')
@section('page')
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
      <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
        <!--begin::Info-->
        <div class="d-flex align-items-center flex-wrap mr-2">
          <!--begin::Page Title-->
          <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Purchase Item Form</h5>
          <!--end::Page Title-->
        </div>
        <!--end::Info-->
      </div>
    </div>
    <!--end::Subheader-->
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
      <!--begin::Container--> 
      <div class="container">
        <!--begin::Card-->
        <div class="card card-custom">
          <div class="card-header flex-wrap border-0 pt-6 pb-0">
            <div class="card-title">
              <h3 class="card-label">Purchase Items
              <span class="text-muted pt-2 font-size-sm d-block">Purchase Item Form</span></h3>
            </div>
          </div>
          <div class="card-body">
            <form action="/purchaseitems/store" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                <div class="form-group">
                  <label for="id_purchase">ID Purchase</label>
                  <input type="text" class="form-control" name="id_purchase">
                </div>
                <div class="form-group">
                  <label for="id_product">ID Product</label>
                  <input type="text" class="form-control" name="id_product">
                </div>
                <div class="form-group">
                  <label for="price">Price</label>
                  <input type="text" class="form-control" name="price">
                </div>
                <div class="form-group">
                  <label for="description">Description</label>
                  <input type="text" class="form-control" name="description">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
        <!--end::Card-->
      </div>
      <!--end::Container-->
    </div>
    <!--end::Entry-->
@endsection
@section('script')
<script>
  $(document).ready(()=>{
    
  })
</script>
@endsection