<div class="container">
    <div class="row mb-2">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-dark">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Daftar Jersey</li>
                </ol>
              </nav>              
        </div>
    </div>

    <div class="row">
        <div class="col-md-8">
            <h2>{{ $title }}</h2>
        </div>
        <div class="col-md-4">
            <div class="input-group mb-3">
                <input wire:model="search" type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="basic-addon1">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">
                        <i class="fas fa-search"></i>
                    </span>
                  </div>
              </div>
        </div>
    </div>

    <section class="produk mb-5">
        <div class="row mt-4">
            @foreach($produk as $products)
            <div class="col-md-3 mb-5">
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

        <div class="row">
            <div class="col">
                {{ $produk->links() }}
            </div>
        </div>

    </section>
</div>