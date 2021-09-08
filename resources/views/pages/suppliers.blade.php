@extends('layout.index')
@section('page')
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
      <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
        <!--begin::Info-->
        <div class="d-flex align-items-center flex-wrap mr-2">
          <!--begin::Page Title-->
          <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Suppliers</h5>
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
              <span class="text-muted pt-2 font-size-sm d-block">Suppliers list data</span></h3>
            </div>
            <div class="card-toolbar">
              <!--begin::Button-->
              <a href="/suppliers/form/add" class="btn btn-primary font-weight-bolder">Add New</a>
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
              <table id="table-suppliers" class="table table-bordered table-striped table-hover">
                <thead>
                  <tr>
                  <th class="text-center" title="Name">Name</th>
                    <th class="text-center" title="Email">Email</th>
                    <th class="text-center" title="Address">Address</th>
                    <th class="text-center" title="Phone">Phone</th>
                    <th class="text-center" title="Image" width="15%">Image</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($listData as $key=>$ld)
                  <tr>
                  <td>{{$key+1}}</td>
                    <td>{{$ld->name}}</td>
                    <td>{{$ld->username}}</td>
                    <td>{{$ld->email}}</td>
                    <td class="text-center">{{$ld->phone}}</td>
                    <td class="text-center">{{$ld->role}}</td>
                    <td class="text-center">
                      <a href="/suppliers/form/update/{{$ld->id}}" class="btn btn-info btn-sm mx-1">Update</a>
                      <button class="btn btn-danger btn-sm mx-1" id="btn-delete" data-id={{$ld->id}}>delete</button>
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
        <form action="/suppliers/delete" method="post">
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
    $('#table-suppliers').DataTable()
    $('#btn-delete').click(function(){
      let deleteId = $(this).attr('data-id')
      $('#modal-hapus').modal('show')
      $('#delete-id').val(deleteId)
    })
  })
</script>
@endsection