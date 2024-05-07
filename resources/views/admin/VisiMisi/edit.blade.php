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
                  <textarea name="misi" id="misi" class="form-control p-input"  rows="5"  >{{$visimisi->visi}}</textarea>
                </div>
                <div class="form-group">
                    <label for="misi">Misi</label>
                    <textarea name="misi" id="misi" class="form-control p-input"  rows="5"  >{{$visimisi->misi}}</textarea>

                        
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