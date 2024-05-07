@extends('admin.template.main')
@section('main')
<div class="content-wrapper">
    <h3 class="page-heading mb-4">Visi Misi</h3>
    <div class="row mb-2">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title mb-4">Edit Visi Misi</h5>
              <form action="{{route('visi-misi.update', $visimisi->id) }}" method="POST" class="forms-sample">
                @csrf
                @method('PUT')
                <div class="form-group">
                  <label for="visi">Visi</label>
                    <input type="text" class="form-control " id="visi" name="visi" rows="5" value="{{$visimisi->visi}}">
                </div>
                <div class="form-group">
                    <label for="misi">Misi</label>
                    {{-- <textarea name="misi" id="misi" class="form-control p-input"  rows="5"  value="{{$visimisi->misi}}" > --}}
                        <input type="text" class="form-control " id="misi" name="misi" rows="5" value="{{$visimisi->misi}}">

                        
                    {{-- </textarea> --}}
                  </div>
               
                <div class="form-group">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
</div>
@endsection