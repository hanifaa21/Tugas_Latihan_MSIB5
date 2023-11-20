<?php

namespace App\Exports;

use App\Models\Produk;
use Illuminate\Support\Arr;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Nette\Utils\Arrays;

class ProdukExport implements FromCollection, WithHeadings  
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        // return Produk::all();
        $produk = Produk::join('jenis_produk', 'jenis_produk_id', '=', 'jenis_produk.id')
        ->select('produk.kode', 'produk.nama', 'produk.harga_jual', 'produk.harga_beli', 
        'produk.stok', 'produk.min_stok', 'jenis_produk.nama as jenis')
        ->get();
        return $produk;
    }

    public function Headings() : Array{
        return ["Kode", "Nama", "Harga Jual", "Harga Beli", "Stok", "Minimal Stok", "Jenis Produk"];
    }

}
