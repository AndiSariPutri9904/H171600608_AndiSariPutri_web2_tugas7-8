@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-success text-center">List Pengumuman</div>
                
                <div class="card-body">
                         <div class="form-group row">
                         <label  class="col-md-4 col-form-label text-md-right">ID</label>
                         <label  class="col-md-8 col-form-label text-md-left">{!! $Pengumuman->id !!}</label>
                    </div>

                    <div class="form-group row">
                         <label  class="col-md-4 col-form-label text-md-right">Judul</label>
                         <label  class="col-md-8 col-form-label text-md-left">{!! $Pengumuman->judul !!}</label>
                    </div>

                     <div class="form-group row">
                         <label  class="col-md-4 col-form-label text-md-right">Kategori</label>
                         <label  class="col-md-8 col-form-label text-md-left">{!! $Pengumuman->kategori_pengumuman_id !!}
                         </label>
                    </div>

                    <div class="form-group row">
                         <label  class="col-md-4 col-form-label text-md-right">Users Id</label>
                         <label  class="col-md-8 col-form-label text-md-left">{!! $Pengumuman->users_id !!}
                         </label>
                    </div>

                    <div class="form-group row">
                         <label  class="col-md-4 col-form-label text-md-right">Create</label>
                         <label  class="col-md-8 col-form-label text-md-left">{!! $Pengumuman->created_at->format('d/m/Y H:i') !!}</label>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <a href="{!! route('pengumuman.index')!!}" class="btn btn-primary">
                                Back
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection