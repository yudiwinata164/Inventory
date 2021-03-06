@extends('inventory.layouts.main')

@section('content')
    <!-- Recent Sales Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row">
            <div class="col-12 m-auto">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Info lengkap Data Barang RSIA Puri Bunda Denpasar</h6>
                    <table class="table text-start table-hover mb-0">
                      <tr>
                        <th class="d-flex justify-content-between">Kode Barang <span>:</span></th>
                        <td>{{ $databarang->kode_barang }}</td>
                      </tr>
                     <tr>
                       <th class="d-flex justify-content-between">Nama Barang <span>:</span></th>
                       <td>{{ $databarang->nama_barang }}</td>
                     </tr>
                     <tr>
                       <th class="d-flex justify-content-between">Kategori<span>:</span></th>
                       <td>{{ @$databarang->kategori }}</td>
                     </tr>
                     <tr>
                       <th class="d-flex justify-content-between">Seri Perangkat <span>:</span></th>
                       <td>{{ @$databarang->seri_perangkat }}</td>
                     </tr>
                     <tr>
                       <th class="d-flex justify-content-between">Serial Number <span>:</span></th>
                       <td>{{ @$databarang->serial_number }}</td>
                     </tr>
                     <tr>
                        <th class="d-flex justify-content-between">IP Sistem <span>:</span></th>
                        <td>{{ $databarang->ip_sistem }}</td>
                     </tr>
                     <tr>
                        <th class="d-flex justify-content-between">Spesifikasi <span>:</span></th>
                        <td>{{ $databarang->spesifikasi }}</td>
                     </tr>
                     <tr>
                        <th class="d-flex justify-content-between">Vendor <span>:</span></th>
                        <td>{{ $databarang->vendor }}</td>
                     </tr>
                     <tr>
                       <th class="d-flex justify-content-between">Password Teamviewer <span>:</span></th>
                       <td>{{ $databarang->password_teamviewer }}</td>
                     </tr>
                     <tr>
                       <th class="d-flex justify-content-between">Password Anydesk <span>:</span></th>
                       <td>{{ $databarang->password_anydesk }}</td>
                     </tr>
                     <tr>
                      <th class="d-flex justify-content-between">Tanggal Terima <span>:</span></th>
                      <td>{{ $databarang->tanggal_terima }}</td>
                    </tr>
                     <tr>
                      <th class="d-flex justify-content-between">Tanggal Distribusi <span>:</span></th>
                      <td>{{ $databarang->tanggal_terima }}</td>
                    </tr>
                     <tr>
                      <th class="d-flex justify-content-between">Tanggal & Waktu Pencatatan <span>:</span></th>
                      <td>{{ $databarang->created_at }}</td>
                    </tr>
                   </table>
                </div>
            </div>
            <div class="col-12 mt-3 d-flex justify-content-end gap-3">
              <div><a href="{{ route("databarang.index") }}" class="btn btn-danger w-100 d-flex align-items-center gap-2">Kembali</a></div>
              <div><a href="{{ route("maintenance.index", $databarang->id) }}" class="btn btn-warning w-100 d-flex align-items-center gap-2"><span class="material-symbols-rounded">settings</span>Maintenance</a></div>
            </div>
        </div>
    </div>
    <!-- Recent Sales End -->

@endsection