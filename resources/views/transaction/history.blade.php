@extends('layouts.app')

@section('title', 'Form Barang')

@section('contents')
          <!-- Begin Page Content -->
          <div class="container-fluid">
            <!-- Page Heading -->
            <h1 class="h3 m-3 text-m">Riwayat</h1>
            <div class="form-group col form-row">
            <form action="{{ route('search') }}" method="GET">
                <input type="date" name="start_date" class="form-control mb-3" placeholder="Tanggal Awal" required>
                <input type="date" name="end_date" class="form-control mb-3" placeholder="Tanggal Akhir" required>
                <button type="submit" class="btn btn-success">Cari</button>
            </form>
            </div>

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
              <div class="card-body">
                <div class="table-responsive">
                  <!--id="dataTable"-->
                  <table
                    class="table table-bordered"
                    width="100%"
                    cellspacing="0"
                  >
                    <thead>
                    @if ($transaction->isEmpty())
                      <p class="text-center font-weight-bold">Tidak ada data yang ditemukan.</p>
                    @else
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Nama Pelanggan</th>
                        <th>Tipe</th>
                        <th>Kecepatan</th>
                        <th>Berat</th>
                        <th>Tarif</th>
                      </tr>
                    </thead>
                    <tbody>
                    @php
                        $currentPage = $transaction->currentPage();
                        $perPage = $transaction->perPage();
                        $counter = ($currentPage - 1) * $perPage + 1;
                    @endphp
                      @foreach ($transaction as $row)
                        <tr>
                          <th>{{ $counter++ }}</th>
                          <td>{{ $row->tgl_masuk }}</td>
                          <td>{{ $row->nama }}</td>
                          <td>Kiloan</td>
                          <td>{{ $row->kecepatan }}</td>
                          <td>{{ $row->berat }} Kg</td>
                          <td>Rp.{{ $row->tarif }}</td>
                        </tr>
                      @endforeach
                    </tbody>
                    @endif
                  </table>
                </div>
              </div>
            </div>
            <div class="mb-4">
              {{ $transaction->links() }}
            </div>
          <!-- /.container-fluid -->
        </div>
        <!-- End of Main Content -->
@endsection