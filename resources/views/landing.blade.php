<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <link rel="stylesheet" href="{{ asset('css/css.css') }}">

</head>
<body>
    <div class="navbar">
        <a href="#" class="logo">Logo</a>
        <div class="menu">
            <a href="#">Home</a>
            <a href="#">Products</a>
            <a href="#">About</a>
        </div>
        <a href="#" class="search">Search</a>
        
    </div>

    <center><br>&#128179;
        <input type="text" class="cari" style="width: 200px;">
        <button>-></button>
    </center>
    <center>
        <br><br>
        <h1><b>PRODUCTS</b></h1>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis temporibus maxime
    </center>

    <!-- Grid at the bottom of the page -->
    {{-- <div class="grid">
        @foreach ($barang as $product)
            <div class="grid-item">
               <a href=""> <img src="{{ asset('images/' . $product->gambar) }}" alt="{{ $product->nama }}"> 
               <h3> {{ $product->id }} | {{ $product->nama }}</h3></a>
                <p>Harga: {{ $product->harga }} | Jumlah: {{ $product->jumlah }}</p>
           
            </div>
        @endforeach
    </div> --}}

    <div class="grid">
        @foreach ($barang as $product)
            <div class="grid-item">
                <a href="{{ route('product.details', ['kode' => $product->kode]) }}">
                    <img src="{{ asset('images/' . $product->gambar) }}" alt="{{ $product->nama }}">
                    <h3>{{ $product->nama }}</h3>
                    <p>Harga: {{ $product->harga }} | Jumlah: {{ $product->jumlah }}</p>
                </a>
            </div>
        @endforeach
    </div>
@include('bawah')    

</body>
</html>
