@extends('layout.index')
@section('page')
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
      <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
        <!--begin::Info-->
        <div class="d-flex align-items-center flex-wrap mr-2">
          <!--begin::Page Title-->
          <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Orders Form</h5>
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
              <h3 class="card-label">Orders
              <span class="text-muted pt-2 font-size-sm d-block">Orders Form</span></h3>
            </div>
          </div>
          <div class="card-body">
            <form action="/orders/save" method="post">
              <input type="hidden" name="_token" value="{{ csrf_token() }}" />
              @if ($formData)
                <input type="hidden" name="id" value="{{$formData['id']}}">
              @endif
              <div class="row">
                <div class="col-6 col-sm-4">
                  <div class="form-group">
                    <label for="id_customer">ID_Customer</label>
                    <input type="text" name="id_customer" id="id_customer" class="form-control" value="{{($formData) ? $formData['name'] : null}}">
                    </div>
                  </div>
                <div class="col-6 col-sm-4">
                  <div class="form-group">
                    <label for="type">Type</label>
                    <input type="text" name="type" id="type" class="form-control" value="{{($formData) ? $formData['username'] : null}}">
                    </div>
                  </div>
                  <div class="col-6 col-sm-4">
                  <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" id="nama" class="form-control" value="{{($formData) ? $formData['username'] : null}}">
                    </div>
                  </div>
                  <div class="col-6 col-sm-4">
                  <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" name="address" id="address" class="form-control" value="{{($formData) ? $formData['username'] : null}}">
                  </div>  
                </div>
                <div class="col-6 col-sm-4">
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" class="form-control" value="{{($formData) ? $formData['email'] : null}}">
                  </div>
                </div>
                <div class="col-6 col-sm-4">
                  <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" name="phone" id="phone" class="form-control" value="{{($formData) ? $formData['phone'] : null}}">
                  </div>
                </div>
                <div class="col-6 col-sm-4">
                  <div class="form-group">
                    <label for="total_item">Total_Item</label>
                    <input type="text" name="total_item" id="total_item" class="form-control" value="{{($formData) ? $formData['password'] : null}}">
                  </div>
                </div>
                <div class="col-6 col-sm-4">
                  <div class="form-group">
                    <label for="total_price">Total_Price</label>
                    <input type="text" name="total_price" id="total_price" class="form-control" value="{{($formData) ? $formData['password'] : null}}">
                    </div>
                  </div>
                  <div class="col-6 col-sm-4">
                  <div class="form-group">
                    <label for="descreption">Descreption</label>
                    <input type="text" name="descreption" id="descreption" class="form-control" value="{{($formData) ? $formData['password'] : null}}">
                    </div>
                  </div>
                  <div class="col-6 col-sm-4">
                  <div class="form-group">
                    <label for="status">Status</label>
                    <input type="text" name="status" id="status" class="form-control" value="{{($formData) ? $formData['password'] : null}}">
                    </div>
                  </div>
                <div class="col-12 text-right">
                  <a href="/orders" class="btn btn-secondary">Cancel</a>
                  <button class="btn btn-primary ml-3" type="submit">Save</button>
                </div>
              </div>
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