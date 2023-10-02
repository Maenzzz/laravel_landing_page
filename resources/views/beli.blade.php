<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <link rel="stylesheet" href="{{ asset('css/css.css') }}">

    <style>



        img {
            width: 300px;
            height: 300px;
            display: block; /* Ensures the image is a block element */
            margin: 0 auto; /* Centers the image horizontally in its container */
        }

    </style>


{{--   
        
    </div>
   <div class="section left">
    <h2>Section 3</h2>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quae 
        </p>
         <img src="images/sin_sekai.jpg"  alt="">
<h1> </h1>
Possimus asperiores eius itaque animi
        </div>

        <div class="section right"></div>
        <div class="section right"></div> --}}


        <div class="section left">
            <h2>Section Left</h2>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quae</p>
            <img src="{{ asset('images/' . $product->gambar) }}" alt="{{ $product->nama }}">
        </div>
        
        <div class="section center">
            <h2>Section Center</h2>
            <h1>{{ $product->nama }}</h1>
            <p>Harga: Rp. {{ $product->harga }}</p>
            <p>Jumlah Tersedia: {{ $product->jumlah}}</p>
            <a href="landing"><h1>back</h1></a>
        </div>
        
        <div class="section right">
            <h2>Section Right</h2>
            <p>Harga: Rp. {{ $product->harga }}</p>
            <p>Jumlah Tersedia: {{ $product->jumlah }}</p>
            <p>jumlah <input class="jumlah" type="number"> <button>-></button></p>
        </div>
       
        <center>
            <hr>
                <h1 class="texto">Information Schema</h1></center>
                <div class="section left">
                    
            <h1>Tentang Website</h1>
            <p></p>Hak Kekayaan Intelektual</p>
            <p>Karir</p>
            <p>Blog</p>
            <p>Bridestory</p>
            <p>Tokopedia Parents</p>
            <p>
                Mitra Blog</p>
            <br>    
            
            <h1>Beli</h1>
            
            Tagihan & Top Up
            Tukar Tambah & COD
                </div>
            
                <div class="section center">
                <h1>  Jual</h1>
            <p></p>
            <p>Pusat Edukasi Seller</p>
            <p>Mitra Toppers</p>
            <p>Daftar Official Store</p>
            <h1>Bantuan dan Panduan</h1>
            
            <p>Web Care</p>
            <P>Syarat dan Ketentuan</p>
                <p>Kebijakan Privasi</p>
                <p>Mitra</p>
            <h1>Keamanan & Privasi<h1>
                </div>
            
                <div class="section right">
                    <h2>Section 3</h2>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quae 
                        explicabo perferendis minima ea fugiat 
                        fugit officiis voluptatum odit? Officia, itaque eos.
                         Possimus asperiores eius itaque animi</p>
                         <img src="{{ asset('images/' . $product->gambar) }}" alt="{{ $product->nama }}">
                <h1>SIN SEKAI </h1>
                Possimus asperiores eius itaque animi
                        </div>
        
</body>
</html>