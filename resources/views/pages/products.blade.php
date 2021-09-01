@extends('layout.index')
@section('page')
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
      <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
        <!--begin::Info-->
        <div class="d-flex align-items-center flex-wrap mr-2">
          <!--begin::Page Title-->
          <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Products</h5>
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
              <h3 class="card-label">Products
              <span class="text-muted pt-2 font-size-sm d-block">Products list data</span></h3>
            </div>
            <div class="card-toolbar">
              <!--begin::Button-->
              <a href="/products/form/add" class="btn btn-primary font-weight-bolder">Add New</a>
              <!--end::Button-->
            </div>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <!--begin: Datatable-->
              <table id="table-products" class="table table-bordered table-striped table-hover">
                <thead>
                  <tr>
                    <th class="text-center" title="No" width="5%">No</th>
                    <th class="text-center" title="Name">Name</th>
                    <th class="text-center" title="Description">Description</th>
                    <th class="text-center" title="Image">Image</th>
                    <th class="text-center" title="Price">Price</th>
                    <th class="text-center" title="Stock">Stock</th>
                    <th class="text-center" title="Id_Category">ID Category</th>
                    <th class="text-center" title="Id_Group">ID Group</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($listData as $key=>$ld)
                  <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$ld->name}}</td>
                    <td>{{$ld->description}}</td>
                    <td>{{$ld->image}}</td>
                    <td>{{$ld->price}}</td>
                    <td>{{$ld->stock}}</td>
                    <td class="text-center">{{$ld->id_category}}</td>
                    <td class="text-center">{{$ld->id_group}}</td>
                    <td class="text-center">
                      <a href="/products/form/edit" class="btn btn-info btn-sm mx-1">Update</a>
                      <button class="btn btn-danger btn-sm mx-1">delete</button>
                    </td>  
                  </tr>
                  @endforeach
                </tbody>
              </table>
              <!--end: Datatable-->
            </div>
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
    $('#table-products').DataTable()
  })
</script>
@endsection