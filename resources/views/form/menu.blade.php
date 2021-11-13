@extends('layout.index')
@section('page')
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
      <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
        <!--begin::Info-->
        <div class="d-flex align-items-center flex-wrap mr-2">
          <!--begin::Page Title-->
          <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Menu Form</h5>
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
              <h3 class="card-label">Menu
              <span class="text-muted pt-2 font-size-sm d-block">Menu Form</span></h3>
            </div>
          </div>
          <div class="card-body">
            <form action="/menu/save" method="post">
              <input type="hidden" name="_token" value="{{ csrf_token() }}" />
              @if ($formData)
                <input type="hidden" name="id" value="{{$formData['id']}}">
              @endif
              <div class="row">
                <div class="col-6 col-sm-4">
                  <div class="form-group">
                    <label for="id_parent">Id_parent</label>
                    <input type="text" name="id_parent" id="id_parent" class="form-control" value="{{($formData) ? $formData['id_parent'] : null}}">
                  </div>
                </div>
                <div class="col-6 col-sm-4">
                  <div class="form-group">
                    <label for="label">Label</label>
                    <input type="text" name="label" id="label" class="form-control" value="{{($formData) ? $formData['label'] : null}}">
                  </div>
                </div>
                <div class="col-6 col-sm-4">
                  <div class="form-group">
                    <label for="link">Link</label>
                    <input type="text" name="link" id="link" class="form-control" value="{{($formData) ? $formData['link'] : null}}">
                  </div>
                </div>
                <div class="col-6 col-sm-12">
                  <div class="form-group">
                    <label for="image">Image</label>
                    <input type="text" name="image" id="image" class="form-control" value="{{($formData) ? $formData['image'] : null}}">
                  </div>
                </div>
                <div class="col-12 text-right">
                  <a href="/menu" class="btn btn-secondary">Cancel</a>
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