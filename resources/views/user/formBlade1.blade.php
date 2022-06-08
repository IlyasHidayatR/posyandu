@extends('user/userHome')
@section('content')
    <h5><i class="fas fa-user-plus fa-lg"></i> Informasi Ibu</h6>
    <div class="d-flex justify-content-center mb-4">
        <br>
        <div class="card shadow row col col-mb-4" style="width: 18rem; border-radius: 1.5rem">
            <div class="card-body">
                <div class="mb-3 row">
                    <label for="staticEmail" class="col-sm-4 col-form-label">Nama</label>
                    <div class="col-sm-8">
                        <div class="input-group">
                            <input id="search-input" type="search" id="form1" class="form-control border border-secondary border-end-0" />
                            <button id="search-button" type="button" class="btn border border-secondary border-start-0">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-4 col-form-label">NIK</label>
                    <div class="col-sm-8">
                        <input type="password" class="form-control border border-secondary" id="inputPassword">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-4 col-form-label">Tanggal Lahir</label>
                    <div class="col-sm-8">
                        <input type="date" class="form-control border border-secondary" id="inputPassword">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <h5><i class="fas fa-baby fa-lg" ></i> Informasi Balita</h6>
    <div class="d-flex justify-content-center mb-4">
        <br>
        <div class="card shadow row col col-mb-4" style="width: 18rem; border-radius: 1.5rem">
            <div class="card-body">
                <div class="mb-3 row">
                    <label for="staticEmail" class="col-sm-4 col-form-label">Nama</label>
                    <div class="col-sm-8">
                        <div class="input-group">
                            <input id="search-input" type="search" id="form1" class="form-control border border-secondary border-end-0" />
                            <button id="search-button" type="button" class="btn border border-secondary border-start-0">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-4 col-form-label">NIK</label>
                    <div class="col-sm-8">
                        <input type="password" class="form-control border border-secondary" id="inputPassword">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-4 col-form-label">Tanggal Lahir</label>
                    <div class="col-sm-8">
                        <input type="date" class="form-control border border-secondary" id="inputPassword">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-4 col-form-label">JK</label>
                    <div class="col-sm-8 mt-2">
                        <div class="d-flex justify-content-between">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Laki-laki
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Perempuan
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <h5><i class="fas fa-user-plus fa-lg"></i> Kesehatan Balita</h5>
    <div class="d-flex justify-content-center mb-4">
        <div class="card shadow row col col-mb-4" style="width: 18rem; border-radius: 1.5rem">
            <div class="card-body">
                <div class="mb-3 row">
                    <label for="staticEmail" class="col-sm-4 col-form-label">Umur</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control border border-secondary" id="inputPassword">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-4 col-form-label">Berat Badan</label>
                    <div class="col-sm-8 rounded">
                        <input type="text" class="form-control border border-secondary" id="inputPassword">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-4 col-form-label">Panjang Badan</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control border border-secondary" id="inputPassword">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-4 col-form-label">Lingkar Kepala</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control border border-secondary" id="inputPassword">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-4 col-form-label">Asi Eksklusif</label>
                    <div class="col-sm-8 mt-2">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                        <label class="form-check-label" for="flexCheckChecked">
                            Ya
                        </label>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-4 col-form-label">Imunasasi</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control border border-secondary" id="inputPassword">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bottom simpan -->
    <div class="d-flex justify-content-end mb-4">
        <button type="button" class="btn btn-primary" style="border-radius: 1rem">
        <div class="mx-3">SIMPAN</div></button>
    </div>
@endsection