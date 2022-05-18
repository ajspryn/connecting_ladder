@extends('layout.front.main')

@section('container')

        <div class="page-center">

            <!-- profile box -->
            @foreach ($users as $user)
            <div class="profile-box">
                <div class="profile-content mt-3">
                    <a href="#" class="image-section">
                        <div class="profile-img">
                            <div>
                                 @if ($user->photo)
                                <img src="{{ asset('storage/'.$user->photo)}}" class="img-fluid blur-up lazyload bg-img" alt="profile">
                                @else
                                <img src="{{ url('/') }}/assets/images/user.png" class="img-fluid blur-up lazyload bg-img" alt="profile">
                                @endif
                            </div>
                            <span class="stats">
                                <img src="../assets/images/icon/verified.png" class="img-fluid blur-up lazyload"
                                    alt="verified">
                            </span>
                        </div>
                    </a>
                    <div class="profile-detail">
                        <a href="#">
                            <h2>{{ $user->name }}</h2>
                        </a>
                        <h5>{{ $user->email }}</h5>
                        @auth
                            @if (Auth::user()->role==2)
                            <div class="description">
                                <p>Silahkan Pilih Universitas Dari calon volunteer ini</p>
                            </div>
                            <form action="/volunteer" method="POST">
                                @csrf
                                <div class="input-group">
                                    <select class="custom-select" name="universitas_id">
                                        <option>Pilih Universitas</option>
                                        @foreach ($universitass as $universitas)
                                        <option value="{{ $universitas->id }}">{{ $universitas->nama_universitas }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <input type="hidden" name="user_id" value="{{ $user->id }}">
                                <input type="hidden" name="role" value="1">
                                <input type="hidden" name="status" value="1">
                                <div class="btn-section text-right">
                                    <button type="submit" class="btn btn-solid">Daftarkan</button>
                                </div>
                            </form>
                            @endif
                        @endauth
                    </div>
                </div>
            </div>
            @endforeach

        </div>

@endsection
