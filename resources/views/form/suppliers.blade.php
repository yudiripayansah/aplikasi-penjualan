@extends('layout.index')
@section('page')
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
      <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
        <!--begin::Info-->
        <div class="d-flex align-items-center flex-wrap mr-2">
          <!--begin::Page Title-->
          <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Suppliers Form</h5>
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
              <h3 class="card-label">Suppliers
              <span class="text-muted pt-2 font-size-sm d-block">Suppliers Form</span></h3>
            </div>
          </div>
          <div class="card-body">
            <form action="/suppliers/save" method="post">
              <input type="hidden" name="_token" value="{{ csrf_token() }}" />
              @if ($formData)
                <input type="hidden" name="id" value="{{$formData['id']}}">
              @endif
              <div class="row">
                <div class="col-6 col-sm-4">
                  <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{($formData) ? $formData['name'] : null}}">
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
                    <label for="address">Address</label>
                    <input type="text" name="address" id="address" class="form-control" value="{{($formData) ? $formData['address'] : null}}">
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
                    <label for="image">Image</label>
                    <input type="text" name="image" id="image" class="form-control" value="{{($formData) ? $formData['image'] : null}}">
                  </div>
                </div>
                <div class="col-6 col-sm-4">
                  <div class="form-group">
                    <label for="role">Role</label>
                    <select name="role" id="role" class="form-control">
                      <option value="ADMIN" {{($formData && $formData['role'] == 'ADMIN') ? 'selected' : null}}>ADMIN</option>
                      <option value="MANAGER" {{($formData && $formData['role'] == 'MANAGER') ? 'selected' : null}}>MANAGER</option>
                      <option value="SUPPLIERS" {{($formData && $formData['role'] == 'SUPPLIERS') ? 'selected' : null}}>SUPPLIERS</option>
                    </select>
                  </div>
                </div>
                <div class="col-6 col-sm-12">
                  <div class="form-group">
                    <label for="image">Image</label>
                    <input type="text" name="image" id="image" class="form-control" value="{{($formData) ? $formData['image'] : null}}">
                  </div>
                </div>
                <div class="col-12 text-right">
                  <a href="/suppliers" class="btn btn-secondary">Cancel</a>
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