@extends('layout.front.main')

@section('container')

<div class="page-center">

    <div class="create-post">
        <div class="static-section">
            <div class="card-title">
                <h3>Tambah Universitas</h3>
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
            <form action="/universitas" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="search-input input-style icon-right mb-2">
                    <input type="text" class="form-control enable" placeholder="Nama Universitas" name="nama_universitas" required>
                </div>
                <div class="form mb-2">
                    <label for="foto">Upload Logo</label>
                    <input type="file" name="logo" required>
                </div>
                <div class="form mb-2">
                    <label for="foto">Foto Cover</label>
                    <input type="file" name="foto_cover">
                </div>
                <div class="search-input input-style icon-right mb-2">
                    <input type="text" class="form-control enable" placeholder="Alamat" name="alamat" required>
                </div>
                <div class="search-input input-style icon-right mb-2">
                    <input type="text" class="form-control enable" placeholder="Provinsi" name="provinsi" required>
                </div>
                <div class="search-input input-style icon-right mb-2">
                    <input type="text" class="form-control enable" placeholder="Kabupaten / Kota" name="kabkota" required>
                </div>
                <div class="search-input input-style icon-right mb-2">
                    <input type="text" class="form-control enable" placeholder="Kecamatan" name="kecamatan" required>
                </div>
                <div class="search-input input-style icon-right mb-2">
                    <input type="text" class="form-control enable" placeholder="Desa" name="desa" required>
                </div>
                <div class="search-input input-style icon-right mb-2">
                    <input type="text" class="form-control enable" placeholder="Email Universitas" name="alamat_email">
                </div>
                <div class="search-input input-style icon-right mb-2">
                    <input type="text" class="form-control enable" placeholder="No Telp Universitas" name="no_telp">
                </div>
                <div class="search-input input-style icon-right mb-2">
                    <input id="deskripsi" type="hidden" name="deskripsi" required>
                    <trix-editor input="deskripsi"></trix-editor>
                </div>
                <div class="post-btn">
                    <button type="submit">Upload</button>
                </div>
            </form>
        </div>
    </div>

</div>

@endsection
