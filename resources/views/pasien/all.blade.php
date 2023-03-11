
@extends('layout.main')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-ad-12">
                <h1 class="text-light" style="text-align: center">Data Pasien</h1>
                @if (session()->has('Successfully'))
                    <div class="alert alert-success col-lg-12" role="alert">
                        {{ session('Successfully') }}
                    </div>
                @endif
                <br>
                    <div class="card-body">
                        <div class="row g-3 align-items-center float-end">
                            <div class="col-auto">
                                <form action="/pasien/all" method="GET">
                                    <div class="input-group mb-3">
                                        <div class="col-md-4 me-2">
                                            <select name="dokter_id" class="form-select">
                                                <option selected value="0" name="dokter_id" style="text-align: center"
                                                    id="dokter_id">Penyakit</option>
                                                @foreach ($data_dokter as $doctor)
                                                    @if (request('dokter_id') == $doctor->id)
                                                        <option name="dokter_id" value="{{ $doctor->id }}" selected> {{ $doctor->keahlian }} </option>
                                                    @else
                                                        <option name="dokter_id" value="{{ $doctor->id }}">{{ $doctor->keahlian }} </option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                        <input type="search" name="search" class="form-control" placeholder="Search.." aria-describedby="passwordHelpInline">
                                        <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Search</button>
                                      </div>
                                </form>
        
                                
                            </div>
                        </div>
                        
                        <table class="table table-dark table-hover">
                            <thead>
                                <tr align="center" class="table-active">
                                    <th scope="col">Id</th>
                                    <th scope="col" class="text-start">Kode</th>
                                    <th scope="col" class="text-start">Nama Pasien</th>
                                    <th scope="col" class="text-start">Birth</th>
                                    <th scope="col" class="text-start">Diagnosa</th>
                                    <th scope="col" class="text-start">Email</th>
                                    <th scope="col" class="text-start">Alamat</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($data_pasien->count())
                                    @foreach ($data_pasien as $pasien)
                                        <tr align="center">
                                            <td class="align-middle"><?= $loop->iteration ?></td>
                                            {{-- <td class="align-middle"><?= $pasien->id ?></td> --}}
                                            <td class="text-start align-middle"><?= $pasien->kode_pasien ?></td>
                                            <td class="text-start align-middle"><?= $pasien->nama_pasien ?></td>
                                            <td class="text-start align-middle"><?= $pasien->birthday ?></td>
                                            <td class="text-start align-middle"><?= $pasien->dokter->keahlian ?></td>
                                            <td class="text-start align-middle"><?= $pasien->email ?></td>
                                            <td class="text-start align-middle"><?= Str::limit($pasien->alamat, 18) ?>
                                            </td>
                                            <td class="text-start">
                                                <a type="button" class="btn btn-outline-warning"
                                                    href="detail/{{ $pasien->id }}">Detail
                                                    Data</a>
                                                {{-- <a type="button" class="btn btn-outline-primary"
                                                    href="edit/{{ $pasien->id }}">Edit
                                                    Data</a>
                                                <form action="delete/{{ $pasien->id }}" method="post" class="d-inline">
                                                    @method('delete')
                                                    @csrf
                                                    <button class="btn btn-outline-danger"
                                                        onclick="return  confirm('Apakah Anda Yakin') ">Hapus</button>
                                                </form> --}}
                                            </td>
                                        </tr>
                                    @endforeach
                                {{-- @elseif ($data_pasien->count())
                                    <div class="form-group">
                                        <a type="button" class="btn btn-warning" href="/admin/pasien/all">Back</a>
                                    </div> --}}
                                @else
                                    <tr>
                                        <td colspan="8" align="center">Data Tidak Ditemukan</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                        {{ $data_pasien->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
