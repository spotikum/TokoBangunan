@extends('../layout/app')

@section('title', 'Lainnya')

@section('navbar')
    <ul class="navbar-nav">
        <li class="nav-item dropdown">
            <a class="nav-link" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="material-icons">notifications</i>
                Hello
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="#">Mike John responded to your email</a>
            <a class="dropdown-item" href="#">You have 5 new tasks</a>
            <a class="dropdown-item" href="#">You're now friend with Andrew</a>
            <a class="dropdown-item" href="#">Another Notification</a>
            <a class="dropdown-item" href="#">Another One</a>
            </div>
        </li>
    </ul>
    <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
        <span class="sr-only">Toggle navigation</span>
        <span class="navbar-toggler-icon icon-bar"></span>
        <span class="navbar-toggler-icon icon-bar"></span>
        <span class="navbar-toggler-icon icon-bar"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end">
        <form class="navbar-form">
        <div class="input-group no-border">
            <input type="text" value="" class="form-control" placeholder="Search...">
            <button type="submit" class="btn btn-white btn-round btn-just-icon">
            <i class="material-icons">search</i>
            <div class="ripple-container"></div>
            </button>
        </div>
        </form>
    </div>
@endsection

@section('title', 'Pembelian')
@section('isi')
    <div class="content">
        <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title ">Data Barang</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                    <table class="table">
                        <thead class=" text-primary">
                            <th>
                                No
                            </th>
                            <th>
                                Kode
                            </th>
                            <th>
                                Nama Barang
                            </th>
                            <th>
                                Jenis
                            </th>
                            <th>
                                Satuan
                            </th>
                            <th>
                                Stok
                            </th>
                        </thead>
                        <tbody>
                            @foreach ($barang as $barang)
                                <tr>
                                    <td>
                                        {{ $loop->iteration }}
                                    </td>
                                    <td>
                                        {{ $barang->kode }}
                                    </td>
                                    <td>
                                        {{ $barang->nama_barang }}
                                    </td>
                                    <td>
                                        {{ $barang->jenis}}
                                    </td>
                                    <td>
                                        {{ $barang->satuan}}
                                    </td>
                                    <td>
                                        {{ $barang->stok}}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
            {{-- {{ $listbarang->links() }} --}}
        </div>
        </div>
    </div>
@endsection