<html>
    <head>
        <title>Invoice</title>

        <link href="<?= base_url() ?>design/admin/assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?= base_url() ?>design/admin/assets/css/style.css" rel="stylesheet"></head>
        <style>
            html,body {margin: 15px; background: white;}
            th, td {padding: 5px;}
            .table-block {
                background: #eee;
            }
            .total {
                font-size: 14pt;
            }
        </style>
    </head>
    <body>
        <table width="800px">
            <tr>
                <td>
                    <img src="<?= base_url() ?>design/admin/assets/logo/logo-light.png" alt="POSSI">
                </td>
                <td align="right">
                    <a href="javascript:window.print()">Cetak <i class="glyphicon glyphicon-print"></i></a>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <h4>Invoice</h4>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <table width="100%">
                        <tr>
                            <th>Penjual</th>
                            <td>Apple Store Karawang</td>
                            <th>Pembayaran</th>
                            <td>Transfer Bank</td>
                        </tr>
                        <tr>
                            <th>Nomor</th>
                            <td>TR\XVV\20130601\0000256</td>
                            <th>Tanggal</th>
                            <td>02 May 2017</td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <hr>
                    <table width="100%">
                        <tr>
                            <th>Nama Produk</th>
                            <th>Jumlah Barang</th>
                            <th>Harga Barang</th>
                            <th>Sub Total</th>
                        </tr>
                        <tr>
                            <td>BCD #02</td>
                            <td>2</td>
                            <td>Rp 500.000</td>
                            <td>Rp 1.000.000</td>
                        </tr>
                        <tr>
                            <td>BCD #01</td>
                            <td>6</td>
                            <td>Rp 395.000</td>
                            <td>Rp 2.370.000</td>
                        </tr>
                        <tr>
                            <td></td>
                        </tr>
                        <tr class="table-block">
                            <th colspan="3">Subtotal</th>
                            <th>Rp 3.370.000</th>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <hr>
                            </td>
                        </tr>
                        <tr>
                            <th colspan="3">
                                Shipping
                            </th>
                            <td>Rp 15.000</td>
                        </tr>
                        <tr class="table-block">
                            <th colspan="3">
                                Subtotal
                            </th>
                            <th>
                                Rp 15.000
                            </th>
                        </tr>
                        <tr>
                            <td></td>
                        </tr>
                        <tr>
                            <td>
                            </td>
                            <th colspan="2" class="table-block">
                                <span class="total">Total</span>
                            </th>
                            <th class="table-block">
                                <span class="total text-success">
                                    Rp 3.385.000
                                </span>
                            </th>
                        </tr>
                    </table>
                    <hr>
                </td>
            </tr>
            <tr>
                <td>
                    <h4>Alamat Penagihan</h4>
                    <p>
                        <b>Miraj Fauzi</b><br>
                        Jl Kopo no. sekian <br>
                        Margahayu Selatan, Margahayu, Bandung 40226 <br>
                        Jawa Barat <br>
                        081224571321
                    </p>
                </td>
                <td>
                    <h4>Alamat Pengiriman</h4>
                    <p>
                        <b>Miraj Fauzi</b><br>
                        Jl Kopo no. sekian <br>
                        Margahayu Selatan, Margahayu, Bandung 40226 <br>
                        Jawa Barat <br>
                        081224571321
                    </p>
                </td>
            </tr>
        </table>
    </body>
</html>