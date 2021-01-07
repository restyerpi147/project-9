@extends('template.base') 


      @section('content')
        
        <div class="row">
          <div class="col-md-12 mt-5">
            <div class="card">
            	<div class="card-header">
            		Detail Makanan
            	</div>
            	<div class="card-body">
                <h3>{{$makanan->nama}}</h3>
                    <hr>
                    <p>
            			kategori : {{$makanan->kategori}} |
                        {{$makanan->harga}} |
                        Seller :{{$makanan->seller}} |
                        Tanggal Produk : {{$makanan->created_at->format('d M Y')}}
                    </p>
                    <p>
                        {{$makanan->deskripsi}}
                    </p>          
            	</div>
            </div>
          </div>
        </div>



@endsection