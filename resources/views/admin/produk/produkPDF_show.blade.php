<html>
<head >
<title>DAFTAR RIWAYAT HIDUP</title>
<style type="text/css">
h1{
background-color: red;
padding: 4px;
}
h2{
color: white;
background-color: black;
padding: 3px;
}
.menu {
text-align: center;
background-color: black;
font-size:18px;
padding-top: 16pt;
}
.button {
background-color: white;
padding: 5px;
border-color: black;
text-decoration: none;
}
.button:hover {
background-color: blue;
}
</style>
</head>
<body>

<h1 align="center">DETAIL PRODUK</h1>
<table align="center" border="1">
@foreach ($produk as $p)
    
<tr><td colspan="2"><img src="{{ $p->foto }}"></td></tr>
<tr align="center">
<td> 085396717324 </td> 
<td> Lara4store@gmail.com </td></tr>
</table>
<h2 id="1" align="center">Data Detail Produk</h2>
<table align="left">
            <tr>
                <td width="1%">Kode Produk</td>
                <td width="10%"> : {{ $p->kode }}</td>
            </tr>
            <tr>
                <td width="1%">Nama Produk</td>
                <td width="10%">: {{ $p->nama }}</td>
            </tr>
            <tr>
                <td width="1%">Harga Beli</td>
                <td width="10%">: {{ $p->harga_jual }}</td>
            </tr>
            <tr>
                <td width="1%">Harga Jual</td>
                <td width="10%">: {{ $p->harga_beli }}</td>
            </tr>
            <tr>
                <td width="1%">Stok</td>
                <td width="10%">: {{ $p->stok }}</td>
                </tr>
            <tr>
                <td width="1%">Minimal Stok</td>
                <td width="10%">: {{ $p->min_stok }}</td>
            </tr>
            <tr>
                <td width="1%">Jenis Produk</td>
                <td width="10%">: {{ $p->jenis_produk_id }}</td>
            </tr>
</table>
@endforeach
</table>
<footer>
{{-- <p align="center">
<font align="center" font color="blue">
<b>Copyright&copy; 2022</b> Created with HTML <a href="https://www.anaktekno.com">Anaktekno.com</a>
</font> --}}
</footer>
</body> 
</html>