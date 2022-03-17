@extends('layouts.lp')

@section('content-lp')

<div class="container pt-5 pb-3">
    <h3>Passeio em {{ (new Illuminate\Support\Str)::title($passeio->local) }}</h3>

    <div class="box-image image-header w-100">
        <img src="{{ asset("storage/".$passeio->imagensPasseio[0]->dir) }}" alt="Passeio em {{ (new Illuminate\Support\Str)::title($passeio->local) }}">
    </div>

    <div class="owl-carousel owl-theme">
        @foreach ($passeio->imagensPasseio as $foto)
        <div class="item">
            <img src="{{ asset("storage/{$foto->dir}") }}" alt="">
        </div>
        @endforeach
    </div>

    <div class="row border-top mt-5 pt-5">
        <div class="col-md-9">
            <p class="text-desc">{{ $passeio->content }}</p>

            <div id="bg-btn-whatsapp" class="text-center">
                <a href="https://api.whatsapp.com/send?phone=5573999219744&text=Ol%C3%A1%2C%20quero%20agendar%20um%20passeio%20para%20{{ (new Illuminate\Support\Str)::title($passeio->local) }}%20%F0%9F%98%84" target="_blank" class="btn-whatsapp mt-5">
                    <div class="icon">
                        <i class="fa-brands fa-whatsapp"></i>
                    </div>
                    <div class="text">
                        <h5>Fale conosco no WhatsApp</h5>
                        <p class="m-0">Garanta já o seu passeio com desconto!</p>
                    </div>
                </a>
            </div>
        </div>

        <div class="col-md-3">
            <h5 class="mb-3 title-outros-passeios">Outros passeios</h5>
            @foreach ($passeios as $passeioSingle)
                <a href="{{ url("passeio/" .(new Illuminate\Support\Str)::slug($passeioSingle->local, '-')) }}" class="passeio">
                    <div class="img-passeio">
                        <img src="{{ asset("storage/".$passeioSingle->imagensPasseio[0]->dir) }}" alt="{{ $passeioSingle->local }}">
                    </div>
                    <div class="descricao-passeio">
                        <h6>{{ $passeioSingle->local }}</h6>
                        <p>{!! strlen($passeioSingle->subtitle) > 40 ? (new Illuminate\Support\Str)::substr($passeioSingle->subtitle, 0, 40)."..." : $passeioSingle->subtitle !!}</p>
                    </div>
                </a>
            @endforeach
        </div>
    </div>

</div>

@endsection
