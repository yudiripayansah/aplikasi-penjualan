@extends('layout.index')
@section('page')
  <!--begin::Subheader-->
  <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
          <!--begin::Info-->
          <div class="d-flex align-items-center flex-wrap mr-2">
            <!--begin::Page Title-->
            <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Purchase Items</h5>
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
                <span class="text-muted pt-2 font-size-sm d-block">Purchase Items list data</span></h3>
              </div>
              <div class="card-toolbar">
                <!--begin::Button-->
                <a href="/purchaseitems/form/add" class="btn btn-primary font-weight-bolder">Add New</a>
                <!--end::Button-->
              </div>
            </div>
            <div class="card-body">
              <div class="table-responsive">
              <!--end: Datatable-->
              </div>
          </div>
        </div>
        <!--end::Card-->
      </div>
      <!--end::Container-->
</div>
@endsection