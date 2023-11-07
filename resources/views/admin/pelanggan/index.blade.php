@extends('admin.layout.appadmin')
@section('content')

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
                    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode</th>
                                            <th>Nama</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Tempat Lahir</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Email</th>
                                            <th>Jenis Kartu</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($pelanggan as $p )
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $p->kode }}</td>
                                            <td>{{ $p->nama }}</td>
                                            <td>{{ $p->jk }}</td>
                                            <td>{{ $p->tmp_lahir }}</td>
                                            <td>{{ $p->tgl_lahir }}</td>
                                            <td>{{ $p->email }}</td>
                                            <td>{{ $p->kartu->nama }}</td>
                                        </tr>  
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

@endsection