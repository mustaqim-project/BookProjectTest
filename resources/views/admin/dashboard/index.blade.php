@extends('admin.layouts.master')

@section('content')


@php
use App\Models\Buku;
use App\Models\Kategori;
use App\Models\Penulis;
use App\Models\Penerbit;

$jumlahBuku = Buku::count();
    $jumlahKategori = Kategori::count();
    $jumlahPenulis = Penulis::count();
    $jumlahPenerbit = Penerbit::count();

@endphp
    <div class="main-content container-fluid">
        <div class="page-title">
            <h3>Dashboard</h3>
            <p class="text-subtitle text-muted">
                A good dashboard to display your statistics
            </p>
        </div>
        <section class="section">
            <div class="row mb-2">
                <div class="col-12 col-md-3">
                    <div class="card card-statistic">
                        <div class="card-body p-0">
                            <div class="d-flex flex-column">
                                <div class="px-3 py-3 d-flex justify-content-between">
                                    <h3 class="card-title">Buku</h3>
                                    <div class="card-right d-flex align-items-center">
                                        <p>{{ $jumlahBuku }}</p>
                                    </div>
                                </div>
                                <div class="chart-wrapper">
                                    <canvas id="canvas1" style="height: 100px !important"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="card card-statistic">
                        <div class="card-body p-0">
                            <div class="d-flex flex-column">
                                <div class="px-3 py-3 d-flex justify-content-between">
                                    <h3 class="card-title">Kategori</h3>
                                    <div class="card-right d-flex align-items-center">
                                        <p>{{ $jumlahKategori }}</p>
                                    </div>
                                </div>
                                <div class="chart-wrapper">
                                    <canvas id="canvas2" style="height: 100px !important"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="card card-statistic">
                        <div class="card-body p-0">
                            <div class="d-flex flex-column">
                                <div class="px-3 py-3 d-flex justify-content-between">
                                    <h3 class="card-title">Penulis</h3>
                                    <div class="card-right d-flex align-items-center">
                                        <p>{{ $jumlahPenulis }}</p>
                                    </div>
                                </div>
                                <div class="chart-wrapper">
                                    <canvas id="canvas3" style="height: 100px !important"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="card card-statistic">
                        <div class="card-body p-0">
                            <div class="d-flex flex-column">
                                <div class="px-3 py-3 d-flex justify-content-between">
                                    <h3 class="card-title">Penerbit</h3>
                                    <div class="card-right d-flex align-items-center">
                                        <p>{{ $jumlahPenerbit }}</p>
                                    </div>
                                </div>
                                <div class="chart-wrapper">
                                    <canvas id="canvas4" style="height: 100px !important"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
