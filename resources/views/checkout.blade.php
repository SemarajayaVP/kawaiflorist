<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>KOPPEE - Coffee Shop HTML Template</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free Website Template" name="keywords">
        <meta content="Free Website Template" name="description">

    

        <!-- Customized Bootstrap Stylesheet -->
        <link href="/templatedb/css/stylecheckout.css" rel="stylesheet">
    

    </head>

    <body>
        
        <div class="mainscreen">
            <!-- <img src="https://image.freepik.com/free-vector/purple-background-with-neon-frame_52683-34124.jpg"  class="bgimg " alt="">--> 
            <div class="card">
                <div class="leftside">
                <img
                    src="/templatedb/img/logoKawaiFlorist.jpg"
                    class="product"
                    alt="Shoes"
                />
                </div>
                <div class="rightside">
                <form id="form1" action="">
                    <h1 style="text-align: center">CheckOut</h1>
                    <h2>Form Pembelian</h2>
                    <p>Nama</p>
                    <input type="text"  class="inputbox" id="kontak-nama" onkeyup="validasiNama()" />
                    <div>
                        <span id="nama-error" class="error"></span>
                    </div>
                    <p>Email</p>
                    <input type="text"  id="kontak-email" onkeyup=" validasiEmail()" class="inputbox">
                    <div>
                        <span id="email-error" class="error"></span>
                    </div>
                    <p>Nomor Telepon</p>
                    <input type="text"  id="kontak-notelp" onkeyup=" validasiNotelp()" class="inputbox">
                    <div>
                        <span id="tel-error" class="error"></span>
                    </div>
                    <p>Nama Produk</p>
                    <select class="inputbox" name="card_type" id="card_type" required>
                        <option value="">--Pilih Produkmu--</option>
                        <option value="BouquetMawar">Bouquet Mawar == Rp 70.000</option>
                        <option value="BouquetLily">Bouquet Lily == Rp 100.000</option>
                        <option value="BouquetKering">Bouquet Bunga Kering == Rp 50.000</option>
                        <option value="EternalDome">Eternal Dome == Rp 120.000</option>
                        <option value="BouquetUang">Bouquet Uang == Rp 80.000</option>
                        <option value="CardBox">CardBox == Rp 5.000</option>
                    </select>
                    <p>Catatan</p>
                    <input type="text" class="inputbox" id="catatan" required />
        
        
                    <p>Metode Pengiriman</p>
                    <select class="inputbox" name="card_type" id="card_type" required>
                    <option value="">--Pilih Pengiriman--</option>
                    <option value="kirim">GoSend/GrabExpress</option>
                    <option value="ambil">Ambil ke toko</option>
                    </select>
        
                    <p></p>
                    <button type="submit" class="button">Checkout</button>
                </form>
                </div>
            </div>
            </div>
        
            <script src="/templatedb/js/script.js"></script> 
    </body>
</html>

    