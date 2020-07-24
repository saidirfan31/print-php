<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Print Tagihan Bulanan</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}" media="all" />
  </head>
  <body>
    <header class="clearfix">
		<div class="box">
			<img class="float-left" src="{{asset('img/logo.png')}}">
		</div>
		<div class="box">
			<h1><b>BADAN PENGELOLA<br>PUSAT PERDAGANGAN<br>CARINGIN<br>STRUK PEMBAYARAN</b></h1>
		</div>
		<div class="box">
			<div id="qr">
			<img src="{{asset('img/qr.png')}}"></div>
		</div>
		<div id="company" class="box-2" style="font-size:15px">
			<div>PT. Pengelola Pusat Perdagangan Caringin</div>
			<div>Jl. Soekarno Hatta No. 220 Blok A1 No. 21-24<br /> Pasar Induk Caringin, Bandung</div>
			<div>(602) 519-0450</div>
      	</div>
		<div id="project" class="box-2">
			<div>1 Maret 2020</div>
			<div>Muhammad Said</div>
			<div>1167050107</div>
		</div>
    </header>
    <main>
      <table>
        <thead>
          <tr>
            <th class="service">Item</th>
            <th class="desc">L</th>
            <th class="desc">B</th>
            <th class="desc">P</th>
            <th><b>Harga</b></th>
          </tr>
        </thead>
        <tbody>	
		  <tr><td colspan="5" style="text-align:left">No.Kontrol</td></tr>
          <tr>
            <td class="service">Air</td>
            <td class="desc">100000</td>
            <td class="desc">100000</td>
            <td class="desc">100000</td>
            <td class="total"><b>600000</b></td>
          </tr>
          <tr>
            <td class="service">Listrik</td>
            <td class="desc">100000</td>
            <td class="desc">100000</td>
            <td class="desc">100000</td>
            <td class="total"><b>700000</b></td>
          </tr>
          <tr>
            <td class="service">Keamanan & IPK</td>
            <td class="desc"></td>
            <td class="desc"></td>
            <td class="desc"></td>
            <td class="total"><b>800000</b></td>
          </tr>
          <tr>
            <td class="service">Kebersihan</td>
            <td class="desc"></td>
            <td class="desc"></td>
            <td class="desc"></td>
            <td class="total"><b>900000</b></td>
          </tr>
          <tr>
            <td class="service">Denda</td>
            <td class="desc"></td>
            <td class="desc"></td>
            <td class="desc"></td>
            <td class="total"><b>300000</b></td>
          </tr>
          <tr>
            <td class="service">Tunggakan</td>
            <td class="desc"></td>
            <td class="desc"></td>
            <td class="desc"></td>
            <td class="total"><b>400000</b></td>
          </tr>
		</tbody>
		<tr><td colspan="5"></td></tr>
		<tr>
            <td colspan="4" class="grand dark"><b>TOTAL</b></td>
            <td class="grand dark total"><b>999000</b></td>
          </tr>
      </table>
      <div id="notices">
        <div><b>CATATAN:</b></div>
		<div class="notice">Pembayaran paling lambat tanggal 15 setiap bulannya.</div>
      </div>
    </main>
  </body>
</html>

<?php
echo "<script>window.close();</script>";