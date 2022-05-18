@extends('layout.front.main')

@section('container')

<div class="page-center">

    <div class="create-post">
        <div class="static-section">
            <div class="card-title">
                <h3>Tambah forum</h3>
                <div class="settings">
                    <div class="setting-btn ms-2 setting-dropdown no-bg">
                        <div class="btn-group custom-dropdown arrow-none dropdown-sm">
                            <div role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="icon icon-font-color iw-14"
                                    data-feather="more-horizontal"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <form action="/forum" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="search-input input-style icon-right mb-2">
                    <input type="text" class="form-control enable" placeholder="Judul Forum" name="judul" required>
                </div>
                <div class="form mb-2">
                    <label for="foto">Upload Foto</label>
                    <input type="file" name="foto">
                </div>
                <div class="search-input input-style icon-right mb-2">
                    <input type="text" class="form-control enable" placeholder="Kategori" name="kategori" required>
                </div>
                <div class="search-input input-style icon-right mb-2">
                    <input id="isi" type="hidden" name="isi" required>
                    <trix-editor input="isi"></trix-editor>
                </div>
                <div class="search-input input-style icon-right">
                    <input type="hidden" class="form-control enable" name="user_id"
                        value="{{ Auth::user()->id }}">
                </div>
        </div>
        <div class="post-btn">
            <button type="submit">Upload</button>
        </div>
        </form>
    </div>

</div>

@endsection
