@extends('templatelaravel')
@section('title', 'Keranjang Belanja')

@section('konten')

<h2>Keranjang Belanja</h2>

@if (session('success'))
    <p style="color:green;">
        {{ session('success') }}
    </p>
@endif

<a href="{{ route('keranjangbelanja.create') }}"
   class="btn btn-primary">
   Beli
</a>

<br><br>

<table class="table table-striped table-hover">

    <tr>
        <th>Kode Pembelian</th>
        <th>Kode Barang</th>
        <th>Jumlah Pembelian</th>
        <th>Harga per Item</th>
        <th>Total</th>
        <th>Action</th>
    </tr>

    @php
        $grandTotal = 0;
    @endphp

    @forelse($data as $row)

        @php
            $total = $row->Jumlah * $row->Harga;
            $grandTotal += $total;
        @endphp

        <tr>
            <td>{{ $row->ID }}</td>
            <td>{{ $row->KodeBarang }}</td>
            <td>{{ $row->Jumlah }}</td>
            <td>{{ number_format($row->Harga, 0, ',', '.') }}</td>
            <td>{{ number_format($total, 0, ',', '.') }}</td>

            <td>

                <form action="{{ route('keranjangbelanja.destroy',$row->ID) }}"
                      method="POST">

                    @csrf
                    @method('DELETE')

                    <button type="submit"
                            class="btn btn-danger">
                        Batal
                    </button>

                </form>

            </td>
        </tr>

    @empty

        <tr>
            <td colspan="6">
                Belum ada data pembelian.
            </td>
        </tr>

    @endforelse

    <tr>
        <th colspan="4">
            Total Semua Pembelian
        </th>

        <th>
            {{ number_format($grandTotal, 0, ',', '.') }}
        </th>

        <th></th>
    </tr>

</table>

@endsection
