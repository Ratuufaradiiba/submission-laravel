@extends('landingpage.layouts.appdetail')
@section('content')
<div class="single-post">
    <div class="post-header mb-5 text-center">
        <h2 class="post-title mt-2">
            Kategori Data
        </h2>
        @if ($message = Session::get('success'))
        <div class="alert alert-success shadow-sm">
            <p>{{ $message }}</p>
        </div>
        @endif
        <div class="card-body px-0 pt-5 pb-2">
                <a href="{{ route('kategori.create') }}" class="btn btn-sm btn-primary shadow-sm mb-5">
                    Tambah</a>
            <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    No</th>
                                <th
                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Kategori</th>
                                <th
                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($kategori as $row)
                                <tr>
                                    <td>
                                        <div class="d-flex px-2">
                                            <div class="my-auto">
                                                <h6 class="mb-0 text-sm">{{ $no++ }}</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-sm mb-0">{{ $row->nama }}</p>
                                    </td>
                                    <td class="align-middle">
                                        <form method="POST" id="formDelete">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{ route('kategori.edit', $row->id) }}"
                                                class="btn btn-info shadow-sm text-xs" data-toggle="tooltip"
                                                data-original-title="Edit user">
                                                Edit
                                            </a>
                                            &nbsp;
                                            <button type="button"
                                                class="btn btn-danger shadow-sm text-xs btnDelete"
                                                data-action="{{ route('kategori.destroy', $row->id) }}"
                                                data-toggle="tooltip" data-original-title="Edit user">
                                                Hapus
                                            </button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
