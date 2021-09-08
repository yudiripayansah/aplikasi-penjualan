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
              @if (\Session::has('success') || \Session::has('error'))
                  <div class="alert {{(\Session::has('success')) ? 'alert-success' : 'alert-danger'}} alert-dismissible fade show">
                      @php
                          $msg = (\Session::get('success')) ? \Session::get('success') : \Session::get('error');
                      @endphp
                      {{$msg}}
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
              @endif
              <div class="table-responsive">
                <!--begin: Datatable-->
                <table id="table-user" class="table table-bordered table-striped table-hover">
                  <thead>
                    <tr>
                      <th class="text-center" title="No" width="5%">No</th>
                      <th class="text-center" title="No" width="5%">ID Purchase</th>
                      <th class="text-center" title="Name">ID Product</th>
                      <th class="text-center" title="Username">Price</th>
                      <th class="text-center" title="Email">Description</th>
                      <th class="text-center" title="Action" width="15%">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach ($listData as $key=>$ld)
                  <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$ld->id_purchase}}</td>
                    <td>{{$ld->id_product}}</td>
                    <td>{{$ld->price}}</td>
                    <td>{{$ld->description}}</td>
                    <td class="text-center">
                      <a href="/purchaseitems/form/update/{{$ld->id}}" class="btn btn-info btn-sm mx-1">Update</a>
                      <button class="btn btn-danger btn-sm mx-1" id="btn-delete" data-id="{{$ld->id}}">Delete</button>
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
    <div class="modal" tabindex="-1" role="dialog" id="modal-hapus">
      <div class="modal-dialog" role="document">
        <form action="/purchaseitems/delete" method="post">
          <input type="hidden" name="_token" value="{{ csrf_token() }}" />
          <input type="hidden" name="id" id="delete-id"/>
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Hapus Data</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Yakin ingin menghapus data ini?</p>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-danger">Hapus</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
            </div>
          </div>
        </form>
      </div>
    </div>
@endsection
@section('script')
<script>
  $(document).ready(()=>{
    $('#table-user').DataTable()
    $('#btn-delete').click(function(){
      let deleteId = $(this).attr('data-id')
      $('#modal-hapus').modal('show')
      $('#delete-id').val(deleteId)
    })
  })
</script>
@endsection