@extends('layouts.appwn')

@section('title', 'Form Barang')

@section('contents')
            <!-- Form Card -->
          <form action="{{ route('transaction.simpan') }}" method="POST">
            @csrf
            @if($errors->any())
                <div class="alert alert-danger mt-4 ml-5 mr-5">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="form-card form-group">
              <h3 class="text-m mb-4">Transaksi Baru</h3>
              <div class="row">
                <div class="form-cust col-sm-4">
                  <h3 class="text-m">Data Pelanggan</h3>
                  <hr />
                    <div class="form-group">
                      <label for="nama" class="col-sm-2 control-label text-m"
                        >Nama:</label
                      >
                      <div class="col-sm-12">
                        <input
                          type="text"
                          id="nama"
                          name="nama"
                          class="form-control"
                          placeholder="Masukkan nama....."
                        />
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="no_telpon" class="col-sm-4 control-label text-m"
                        >No Telpon:</label
                      >
                      <div class="col-sm-12">
                        <input
                          type="tel"
                          id="no_telpon"
                          name="no_telpon"
                          class="form-control"
                          placeholder="Masukkan nomor telepon....."
                        />
                      </div>
                    </div>
                </div>

                <div class="form-type col-sm-7">
                  <h3 class="text-m">Layanan</h3>
                  <hr />
                    <div class="form-row">
                      <div class="form-group col">
                        <label for="name">Tipe:</label>
                        <input
                          type="text"
                          id="name"
                          class="col-sm-12 form-control"
                          value="Kiloan"
                          readonly
                        />
                      </div>
                      <div class="form-group col">
                        <label for="kecepatan">Kecepatan:</label>
                        <select
                          id="kecepatan"
                          name="kecepatan"
                          class="col-sm-12 form-control"
                        >
                          <option value="default" disabled selected>
                            Pilih Tipe
                          </option>
                          <option value="reguler">Reguler</option>
                          <option value="express">Express</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col">
                        <label for="berat" class="text-m"
                          >Berat:</label
                        >
                        <input
                          type="text"
                          name="berat"
                          id="berat"
                          class="col-sm-12 form-control"
                        />
                      </div>
                      <div class="form-group col">
                        <label for="tarif" class="text-m">Tarif:</label>

                        <input
                          type="text"
                          name="tarif"
                          id="tarif"
                          class="col-sm-12 form-control"
                        />
                      </div>
                    </div>
                    <div class="form-row form-group">
                      <label for="tgl_masuk" class="text-m">Tanggal Masuk</label>
                      <div class="col-sm-12">
                        <input type="date" name="tgl_masuk" id="tgl_masuk" class="form-control" />
                      </div>
                    </div>
                    <div class="form-row form-group">
                      <label for="tgl_keluar" class="text-m"
                        >Tanggal Selesai</label
                      >
                      <div class="col-sm-12">
                        <input type="date" name="tgl_keluar" id="tgl_keluar" class="form-control" />
                      </div>
                    </div>
                  </div>
                </div>
              <button type="submit" class="btn btn-primary mt-5 btn-sub">Submit</button>
            </div>
          </form>
          @endsection