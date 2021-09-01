@extends('layout.index')
@section('page')
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
      <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
        <!--begin::Info-->
        <div class="d-flex align-items-center flex-wrap mr-2">
          <!--begin::Page Title-->
          <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Products Form</h5>
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
              <span class="text-muted pt-2 font-size-sm d-block">Edit Product</span></h3>
            </div>
          </div>
          <div class="card-body">

          <form method="post" action="/products/update">
 
 {{ csrf_field() }}
 {{ method_field('PUT') }}

 <div class="form-group">
     <label>Name</label>
     <input type="text" name="name" class="form-control" placeholder="masukkan nama produk">

     @if($errors->has('name'))
         <div class="text-danger">
             {{ $errors->first('name')}}
         </div>
     @endif

 </div>

 <div class="form-group">
     <label>Description</label>
     <input type="text" name="description" class="form-control" placeholder="masukkan deskripsi produk">

      @if($errors->has('description'))
         <div class="text-danger">
             {{ $errors->first('description')}}
         </div>
     @endif

 </div>

 <div class="form-group">
     <label>Image</label>
     <input type="text" name="image" class="form-control" placeholder="masukkan gambar produk">

      @if($errors->has('image'))
         <div class="text-danger">
             {{ $errors->first('image')}}
         </div>
     @endif

 </div>

 <div class="form-group">
     <label>Price</label>
     <input type="text" name="price" class="form-control" placeholder="masukkan harga produk">

      @if($errors->has('price'))
         <div class="text-danger">
             {{ $errors->first('price')}}
         </div>
     @endif

 </div>

 <div class="form-group">
     <label>Stock</label>
     <input type="text" name="stock" class="form-control" placeholder="masukkan stok produk">

      @if($errors->has('stock'))
         <div class="text-danger">
             {{ $errors->first('stock')}}
         </div>
     @endif

 </div>

 <div class="form-group">
     <label>ID Category</label>
     <input type="text" name="id_category" class="form-control" placeholder="masukkan id category">

      @if($errors->has('id_category'))
         <div class="text-danger">
             {{ $errors->first('id_category')}}
         </div>
     @endif

 </div>
 <div class="form-group">
     <label>ID Group</label>
     <input type="text" name="id_group" class="form-control" placeholder="masukkan id group">

      @if($errors->has('id_group'))
         <div class="text-danger">
             {{ $errors->first('id_group')}}
         </div>
     @endif

 </div>

 <div class="form-group">
     <input type="submit" class="btn btn-success" value="Simpan">
     <input type="reset" class="btn btn-danger" value="Reset" >
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