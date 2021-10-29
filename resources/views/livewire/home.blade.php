<div class="container">
    <div class="banner">
        <img src="{{ url('assets/assets/slider/slider1.png') }}" alt="">
    </div>
    
    {{-- PILIH LIGA --}}
    <section class="pilih-liga">
        <h3 class="mt-4"><strong>Pilih Liga</strong></h3>
        <div class="row mt-4">
            @foreach($ligas as $liga)
            <div class="col">
               <a href="{{ route('products.liga', $liga->id) }}">
                <div class="card shadow">
                    <div class="card-body text-center">
                      <img src="{{ url('assets/assets/liga') }}/{{ $liga->gambar }}" class="img-fluid">
                    </div>
                  </div>
               </a>
            </div>
            @endforeach
        </div>
    </section>

    {{-- Produk Pilihan --}}
    <section class="produk">
        <h3 class="mt-4">
            <strong>Produk Pilihan</strong>
            <a href="{{ route('products') }}" class="btn btn-primary float-right"><i class="fas fa-eye"></i> Lihat Semua</a>
        </h3>
        <div class="row mt-4">
            @foreach($product as $products)
            <div class="col-md-3">
                <div class="card shadow">
                    <div class="card-body text-center">
                      <img src="{{ url('assets/assets/jersey') }}/{{ $products->gambar }}" class="img-fluid">
                      <div class="row mt-2">
                          <div class="col-md-12">
                              <h5><strong>{{ $products->nama }}</strong></h5>
                              <h5>Rp. {{ number_format($products->harga) }}</h5>
                          </div>
                      </div>
                      <div class="row mt-2">
                        <div class="col-md-12">
                            <a href="{{ route('products.detail', $products->id) }}" class="btn btn-primary btn-block"><i class="fas fa-eye"></i> Detail</a>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
            @endforeach
        </div>
    </section>

</div>