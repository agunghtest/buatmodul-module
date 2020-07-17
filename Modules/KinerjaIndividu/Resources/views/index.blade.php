@extends('tema::layouts.master')
@section('headcontent')
<div>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-style1 mg-b-10">
            <li class="breadcrumb-item active"><a href="#">Kinerja Individu</a></li>
            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
        </ol>
    </nav>
    <h4 class="mg-b-0 tx-spacing--1">Dashboard Kinerja Individu Tahun 2020</h4>
</div>
@endsection
@section('content')
<div class="col-lg-12">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#individu" role="tab" aria-controls="home"
                aria-selected="true">Sebagai Individu</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="penilai-tab" data-toggle="tab" href="#penilai" role="tab" aria-controls="profile"
                aria-selected="false">Sebagai Penilai</a>
        </li>
    </ul>
    <div class="tab-content bd bd-gray-300 bd-t-0 pd-20" id="myTabContent">
        <div class="tab-pane fade show active" id="individu" role="tabpanel" aria-labelledby="individu-tab">
            <div class="row row-xs">
                <div class="col-lg-6 col-md-6 mg-t-10">
                    <div class="card ht-100p">
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <h6 class="mg-b-0">Sasaran Kinerja Pegawai (SKP)</h6>

                        </div>
                        <ul class="list-group list-group-flush tx-13">
                            <li class="list-group-item d-flex pd-sm-x-20">
                                <div class="avatar d-none d-sm-block"><span
                                        class="avatar-initial rounded-circle bg-success"><i
                                            data-feather="user-check"></i></span></div>
                                <div class="pd-sm-l-10">
                                    <p class="tx-medium mg-b-0">Penilai</p>
                                    <small class="tx-12 tx-color-03 mg-b-0">
                                        Nama<br>
                                        Jabatan<br>
                                        Satker<br>
                                    </small>
                                </div>
                                <div class="mg-l-auto text-right">
                                    <p class="tx-medium mg-b-0">Status Persetujuan</p>
                                    <small class="tx-12 tx-danger mg-b-0">Completed</small><br>
                                    <small class="tx-12 tx-success mg-b-0">Mar 21, 2019, 1:00pm</small>
                                </div>
                            </li>
                            <li class="list-group-item d-flex pd-sm-x-20">
                                <div class="avatar d-none d-sm-block"><span
                                        class="avatar-initial rounded-circle bg-indigo op-5"><i
                                            data-feather="clock"></i></span>
                                </div>
                                <div class="pd-sm-l-10">
                                    <p class="tx-medium mg-b-2">Tanggal Pembuatan</p>
                                    <small class="tx-12 tx-color-03 mg-b-0">Mar 21, 2019, 1:00pm</small>
                                </div>
                            </li>
                        </ul>
                        <div class="card-footer text-center tx-13">
                            <a href="" class="link-03">Klik untuk selengkapnya <i data-feather="arrow-right"
                                    class="wd-15 ht-15"></i></a>
                        </div><!-- card-footer -->
                    </div>
                </div><!-- col -->
                <div class="col-lg-6 col-md-6 mg-t-10">
                    <div class="card ht-100p">
                        <div class="card-header d-sm-flex align-items-start justify-content-between">
                            <h6 class="lh-5 mg-b-0">Perjanjian Kinerja (PK)</h6>
                        </div><!-- card-header -->
                        <div class="card-body pd-y-15 pd-x-10">
                            <div class="table-responsive">
                                <table class="table table-borderless table-sm tx-13 tx-nowrap mg-b-0">
                                    <thead>
                                        <tr class="tx-10 tx-spacing-1 tx-color-03 tx-uppercase">
                                            <th class="wd-5p">Pratinjau <i data-feather="download"
                                                    class="wd-12 ht-12 stroke-wd-3"></i></th>
                                            <th>Nama Dokumen <i data-feather="file" class="wd-12 ht-12 stroke-wd-3"></i>
                                            </th>
                                            <th class="text-right">Tanggal Unggah <i data-feather="clock"
                                                    class="wd-12 ht-12 stroke-wd-3"></i></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="align-middle text-center"><a href=""><i data-feather="paperclip"
                                                        class="wd-12 ht-12 stroke-wd-3"></i></a></td>
                                            <td class="align-middle tx-medium">Dokumen PK</td>
                                            <td class="align-middle text-right">
                                                tanggal
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="align-middle text-center"><a href=""><i data-feather="paperclip"
                                                        class="wd-12 ht-12 stroke-wd-3"></i></a></td>
                                            <td class="align-middle tx-medium">Dokumen Renaksi</td>
                                            <td class="align-middle text-right">
                                                tanggal
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div><!-- table-responsive -->
                        </div><!-- card-body -->
                        <div class="card-footer text-center tx-13">
                            <a href="" class="link-03">Klik untuk selengkapnya <i data-feather="arrow-right"
                                    class="wd-15 ht-15"></i></a>
                        </div><!-- card-footer -->
                    </div><!-- card -->
                </div><!-- col -->
            </div>

            <div class="row row-xs">
                <div class="col-lg-4 col-md-6 mg-t-10">
                    <div class="card ht-100p">
                        <div class="card-header d-sm-flex align-items-start justify-content-between">
                            <h6 class="lh-5 mg-b-0">Capaian Renaksi</h6>
                        </div><!-- card-header -->

                        <ul class="list-group list-group-flush tx-13">
                            <li class="list-group-item d-flex pd-sm-x-20">
                                <div class="avatar d-none d-sm-block"><span
                                        class="avatar-initial rounded-circle bg-orange op-5"><i
                                            data-feather="copy"></i></span>
                                </div>
                                <div class="pd-sm-l-10">
                                    <p class="tx-medium mg-b-2">Format Persetujuan</p>
                                    <small class="tx-12 tx-color-03 mg-b-0">Mar 21, 2019, 1:00pm</small>
                                </div>
                            </li>
                            <li class="list-group-item d-flex pd-sm-x-20">
                                <div class="avatar d-none d-sm-block"><span
                                        class="avatar-initial rounded-circle bg-teal"><i
                                            data-feather="users"></i></span></div>
                                <div class="pd-sm-l-10">
                                    <p class="tx-medium mg-b-0">Penilai 1 / tunggal</p>
                                    <small class="tx-12 tx-color-03 mg-b-0">
                                        Nama<br>
                                        Jabatan<br>
                                        OFK<br>
                                    </small>
                                </div>
                                <div class="mg-l-auto text-right">
                                    <p class="tx-medium mg-b-0">Status Persetujuan</p>
                                    <small class="tx-12 tx-danger mg-b-0">Completed</small><br>
                                    <small class="tx-12 tx-success mg-b-0">Mar 21, 2019, 1:00pm</small>
                                </div>
                            </li>

                            <li class="list-label">Bulan ini (Juli)</li>

                            <li class="list-group-item d-flex pd-sm-x-20">
                                <div class="media d-block d-sm-flex align-items-center">
                                    <div class="d-inline-block pos-relative">
                                        <span class="peity-donut"
                                            data-peity='{ "fill": ["#65e0e0","#e5e9f2"], "height": 110, "width": 110, "innerRadius": 46 }'>70,30</span>

                                        <div
                                            class="pos-absolute a-0 d-flex flex-column align-items-center justify-content-center">
                                            <h3 class="tx-rubik tx-spacing--1 mg-b-0">86%</h3>
                                            <span class="tx-9 tx-semibold tx-sans tx-color-03 tx-uppercase">Realisasi
                                                Penilai</span>
                                        </div>
                                    </div>
                                    <div class="media-body mg-t-20 mg-sm-t-0 mg-sm-l-20">
                                        <p class="lh-4 tx-12 tx-color-03 mg-b-15">Jumlah Kegiatan/ Rata-rata Klaim
                                            Realisasi</p>
                                        <h3 class="tx-spacing--1 mg-b-0">2 <small class="tx-13 tx-color-03">/
                                                100%</small></h3>
                                        <br>
                                        <p class="tx-medium mg-b-0">Status Persetujuan</p>
                                        <small class="tx-12 tx-danger mg-b-0">Completed</small><br>
                                        <small class="tx-12 tx-success mg-b-0">Mar 21, 2019, 1:00pm</small>
                                    </div><!-- media-body -->
                                </div><!-- media -->
                            </li>

                            <li class="list-label">BULAN SEBELUMNYA (JUNI)</li>

                            <li class="list-group-item d-flex pd-sm-x-20">
                                <div class="media d-block d-sm-flex align-items-center">
                                    <div class="d-inline-block pos-relative">
                                        <span class="peity-donut"
                                            data-peity='{ "fill": ["#65e0e0","#e5e9f2"], "height": 110, "width": 110, "innerRadius": 46 }'>97,00</span>

                                        <div
                                            class="pos-absolute a-0 d-flex flex-column align-items-center justify-content-center">
                                            <h3 class="tx-rubik tx-spacing--1 mg-b-0">97%</h3>
                                            <span class="tx-9 tx-semibold tx-sans tx-color-03 tx-uppercase">Realisasi
                                                Penilai</span>
                                        </div>
                                    </div>
                                    <div class="media-body mg-t-20 mg-sm-t-0 mg-sm-l-20">
                                        <p class="lh-4 tx-12 tx-color-03 mg-b-15">Jumlah Kegiatan/ Rata-rata Klaim
                                            Realisasi</p>
                                        <h3 class="tx-spacing--1 mg-b-0">4 <small class="tx-13 tx-color-03">/
                                                95%</small></h3>
                                        <br>
                                        <p class="tx-medium mg-b-0">Status Persetujuan</p>
                                        <small class="tx-12 tx-danger mg-b-0">Completed</small><br>
                                        <small class="tx-12 tx-success mg-b-0">Mar 21, 2019, 1:00pm</small>
                                    </div><!-- media-body -->
                                </div><!-- media -->
                            </li>
                        </ul>

                        <div class="card-footer text-center tx-13">
                            <a href="" class="link-03">Klik untuk selengkapnya <i data-feather="arrow-right"
                                    class="wd-15 ht-15"></i></a>
                        </div><!-- card-footer -->
                    </div><!-- card -->
                </div><!-- col -->

                <div class="col-lg-4 col-md-6 mg-t-10">
                    <div class="card ht-100p">
                        <div class="card-header d-sm-flex align-items-start justify-content-between">
                            <h6 class="lh-5 mg-b-0">Laporan Teknis</h6>
                        </div><!-- card-header -->

                        <ul class="list-group list-group-flush tx-13">
                            <li class="list-group-item d-flex pd-sm-x-20">
                                <div class="avatar d-none d-sm-block"><span
                                        class="avatar-initial rounded-circle bg-orange op-5"><i
                                            data-feather="copy"></i></span>
                                </div>
                                <div class="pd-sm-l-10">
                                    <p class="tx-medium mg-b-2">Format Persetujuan</p>
                                    <small class="tx-12 tx-color-03 mg-b-0">Mar 21, 2019, 1:00pm</small>
                                </div>
                            </li>
                            <li class="list-group-item d-flex pd-sm-x-20">
                                <div class="avatar d-none d-sm-block"><span
                                        class="avatar-initial rounded-circle bg-teal"><i
                                            data-feather="users"></i></span></div>
                                <div class="pd-sm-l-10">
                                    <p class="tx-medium mg-b-0">Penilai 1 / tunggal</p>
                                    <small class="tx-12 tx-color-03 mg-b-0">
                                        Nama<br>
                                        Jabatan<br>
                                        OFK<br>
                                    </small>
                                </div>
                                <div class="mg-l-auto text-right">
                                    <p class="tx-medium mg-b-0">Status Persetujuan</p>
                                    <small class="tx-12 tx-danger mg-b-0">Completed</small><br>
                                    <small class="tx-12 tx-success mg-b-0">Mar 21, 2019, 1:00pm</small>
                                </div>
                            </li>

                            <li class="list-label">Bulan ini (Juli)</li>

                            <li class="list-group-item d-flex pd-sm-x-20">
                                <div class="avatar d-none d-sm-block"><span
                                        class="avatar-initial rounded-circle bg-indigo op-5"><i
                                            data-feather="upload"></i></span></div>
                                <div class="pd-sm-l-10">
                                    <p class="tx-medium mg-b-2">Tanggal Unggah</p>
                                    <small class="tx-12 tx-color-03 mg-b-0">Mar 21, 2019, 1:00pm</small>
                                    <br><br>
                                    <p class="tx-medium mg-b-0">Status Persetujuan</p>
                                    <small class="tx-12 tx-danger mg-b-0">Completed</small><br>
                                    <small class="tx-12 tx-success mg-b-0">Mar 21, 2019, 1:00pm</small>
                                </div>
                            </li>

                            <li class="list-label">Bulan Sebelumnya (Juni)</li>

                            <li class="list-group-item d-flex pd-sm-x-20">
                                <div class="avatar d-none d-sm-block"><span
                                        class="avatar-initial rounded-circle bg-indigo op-5"><i
                                            data-feather="upload"></i></span></div>
                                <div class="pd-sm-l-10">
                                    <p class="tx-medium mg-b-2">Tanggal Unggah</p>
                                    <small class="tx-12 tx-color-03 mg-b-0">Mar 21, 2019, 1:00pm</small>
                                    <br><br>
                                    <p class="tx-medium mg-b-0">Status Persetujuan</p>
                                    <small class="tx-12 tx-danger mg-b-0">Completed</small><br>
                                    <small class="tx-12 tx-success mg-b-0">Mar 21, 2019, 1:00pm</small>
                                </div>
                            </li>
                        </ul>

                        <div class="card-footer text-center tx-13">
                            <a href="" class="link-03">Klik untuk selengkapnya <i data-feather="arrow-right"
                                    class="wd-15 ht-15"></i></a>
                        </div><!-- card-footer -->
                    </div><!-- card -->
                </div><!-- col -->

                <div class="col-lg-4 col-md-6 mg-t-10">
                    <div class="card ht-100p">
                        <div class="card-header d-sm-flex align-items-start justify-content-between">
                            <h6 class="lh-5 mg-b-0">Log Book</h6>
                        </div><!-- card-header -->

                        <ul class="list-group list-group-flush tx-13">
                            <li class="list-group-item d-flex pd-sm-x-20">
                                <div class="avatar d-none d-sm-block"><span
                                        class="avatar-initial rounded-circle bg-orange op-5"><i
                                            data-feather="copy"></i></span>
                                </div>
                                <div class="pd-sm-l-10">
                                    <p class="tx-medium mg-b-2">Format Persetujuan</p>
                                    <small class="tx-12 tx-color-03 mg-b-0">Mar 21, 2019, 1:00pm</small>
                                </div>
                            </li>
                            <li class="list-group-item d-flex pd-sm-x-20">
                                <div class="avatar d-none d-sm-block"><span
                                        class="avatar-initial rounded-circle bg-teal"><i
                                            data-feather="users"></i></span></div>
                                <div class="pd-sm-l-10">
                                    <p class="tx-medium mg-b-0">Penilai 1 / tunggal</p>
                                    <small class="tx-12 tx-color-03 mg-b-0">
                                        Nama<br>
                                        Jabatan<br>
                                        OFK<br>
                                    </small>
                                </div>
                                <div class="mg-l-auto text-right">
                                    <p class="tx-medium mg-b-0">Status Persetujuan</p>
                                    <small class="tx-12 tx-danger mg-b-0">Completed</small><br>
                                    <small class="tx-12 tx-success mg-b-0">Mar 21, 2019, 1:00pm</small>
                                </div>
                            </li>

                            <li class="list-label">Bulan ini (Juli)</li>

                            <li class="list-group-item d-flex pd-sm-x-20">
                                <div class="avatar d-none d-sm-block"><span
                                        class="avatar-initial rounded-circle bg-pink op-5"><i
                                            data-feather="book-open"></i></span></div>
                                <div class="pd-sm-l-10">
                                    <p class="tx-medium mg-b-2">Tanggal Pengajuan</p>
                                    <small class="tx-12 tx-color-03 mg-b-0">Mar 21, 2019, 1:00pm</small>
                                    <br><br>
                                    <p class="tx-medium mg-b-0">Status Persetujuan</p>
                                    <small class="tx-12 tx-danger mg-b-0">Completed</small><br>
                                    <small class="tx-12 tx-success mg-b-0">Mar 21, 2019, 1:00pm</small>
                                </div>
                            </li>

                            <li class="list-label">Bulan Sebelumnya (Juni)</li>

                            <li class="list-group-item d-flex pd-sm-x-20">
                                <div class="avatar d-none d-sm-block"><span
                                        class="avatar-initial rounded-circle bg-pink op-5"><i
                                            data-feather="book-open"></i></span></div>
                                <div class="pd-sm-l-10">
                                    <p class="tx-medium mg-b-2">Tanggal Pengajuan</p>
                                    <small class="tx-12 tx-color-03 mg-b-0">Mar 21, 2019, 1:00pm</small>
                                    <br><br>
                                    <p class="tx-medium mg-b-0">Status Persetujuan</p>
                                    <small class="tx-12 tx-danger mg-b-0">Completed</small><br>
                                    <small class="tx-12 tx-success mg-b-0">Mar 21, 2019, 1:00pm</small>
                                </div>
                            </li>
                        </ul>

                        <div class="card-footer text-center tx-13">
                            <a href="" class="link-03">Klik untuk selengkapnya <i data-feather="arrow-right"
                                    class="wd-15 ht-15"></i></a>
                        </div><!-- card-footer -->
                    </div><!-- card -->
                </div><!-- col -->
            </div>
        </div>
        <div class="tab-pane fade" id="penilai" role="tabpanel" aria-labelledby="penilai-tab">
            <h6>penilai</h6>
            <p>...</p>
        </div>
    </div>
</div>

@endsection
