<div class="container">
    <div class="row mt-4 mb-2">
        <div class="col">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-dark">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('keranjang') }}" class="text-dark">Keranjang</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                    </ol>
                </nav>           
            </div>   
        </div>

        <div class="row">
            <div class="col-md-12">
                @if (session()->has('message'))
                <div class="alert alert-danger">
                    {{ session('message') }}
                </div>
                @endif
            </div>
        </div>

        <div class="row mt-3">
            <div class="col">
                <a href="{{ route('keranjang') }}" class="btn btn-sm btn-dark"><i class="fas fa-arrow-left"></i>Kembali</a>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col">
                <h4>Informasi Pembayaran</h4>
                <hr>
                <p>Untuk pembayaran, silakan transfer ke rekening yang tertera dengan nominal : <strong> Rp. {{ number_format($total_harga) }}</strong> </p>
                <div class="media">
                    <img src="{{ url('assets/assets/bri.png') }}" class="mr-3" alt="Bank BRI" width="50">
                    <div class="media-body">
                      <h5 class="mt-0">BANK BRI</h5>
                      <p>No. Rekening : 0199-0198-7165-7865 atas nama <strong>Raihan Rizki Alfareza</strong></p>
                    </div>
                  </div>
            </div>
            <div class="col">
                <h4>Informasi Pengiriman</h4>
                <hr>
                <form wire:submit.prevent="checkout">

                    <div class="form-group">
                        <label for="">No. HP</label>
                        <input id="nohp" type="text" class="form-control @error('nohp') is-invalid @enderror"   wire:model="nohp" value="{{ old('nohp') }}"  autocomplete="nohp" autofocus>

                    @error('nohp')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                    
                    <div class="form-group">
                        <label for="">Alamat</label>
                        <textarea wire:model="alamat" class="form-control @error('nama') is-invalid @enderror"></textarea>

                        @error('alamatnohp')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary btn-block"><i class="fas fa-arrow-right"></i>Checkout Now</button>

                </form>
            </div>
        </div>
</div>