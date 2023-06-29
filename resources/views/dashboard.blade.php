@extends('layouts.app')

@section('title', 'Dashboard')

@section('contents')
<!-- Begin Page Content -->
        <div class="container-fluid">
            <!-- Page Heading -->
            <div
              class="d-sm-flex align-items-center justify-content-between mb-4"
            >
              <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
              <!--<a
                href="#"
                class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"
              >
                <i class="fas fa-download fa-sm text-white-50"></i> Generate
                Report
                </a>-->
            </div>
          <div div class="row">
              <!-- Pemesanan Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <a class="nav-link" href="{{ route('transaction') }}">
                <div class="card border-left-primary shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div
                          class="text-lg font-weight-bold text-primary text-uppercase mt-2"
                        >
                          Pemesanan
                        </div>
                        <div
                          class="h5 mb-0 font-weight-bold text-gray-800"
                        ></div>
                      </div>
                      <div class="col-auto mt-2">
                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>

              <!-- Riwayat Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <a class="nav-link" href="{{ route('history') }}">
                <div class="card border-left-success shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div
                          class="text-lg font-weight-bold text-success text-uppercase mt-2"
                        >
                          Riwayat
                        </div>
                        <div
                          class="h5 mb-0 font-weight-bold text-gray-800"
                        ></div>
                      </div>
                      <div class="col-auto mt-2">
                        <i
                          class="fa-solid fa-clock-rotate-left fa-2x text-gray-300"
                        ></i>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>

              <!-- Penghasilan Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <a class="nav-link" href="{{ route('revenue') }}">
                <div class="card border-left-success shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div
                          class="text-lg font-weight-bold text-success text-uppercase mt-2"
                        >
                          Penghasilan
                        </div>
                        <div
                          class="h5 mb-0 font-weight-bold text-gray-800"
                        ></div>
                      </div>
                      <div class="col-auto mt-2">
                        <i class="fa-solid fa-wallet fa-2x text-gray-300"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
            @endsection