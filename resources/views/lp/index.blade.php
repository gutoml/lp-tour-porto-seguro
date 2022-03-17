@extends('layouts.lp')

@section('content-lp')

<div class="bg-warning">
    <div class="container">
        <p class="text-center text-dark m-0 pt-1 pb-1">Torne sua viagem inesquecível!</p>
    </div>
</div>

<div id="carrosselPasseios" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        @for ($i = 0;$i < $passeios->count();$i++)

        <button type="button" data-bs-target="#carrosselPasseios" data-bs-slide-to="{{ $i }}" {!! $i == 0 ? 'class="active" aria-current="true"' : '' !!} aria-label="Slide {{ $i }}"></button>

        @endfor
    </div>
    <div class="carousel-inner">
        @foreach ($passeios as $passeio)

        <div class="carousel-item">
            <img src="{{ asset("storage/{$passeio->imagensPasseio[0]->dir}") }}" class="d-block w-100" alt="{{ $passeio->local }}">
            <div class="carousel-caption d-none d-md-block">
                <h5>{{ $passeio->local }}</h5>
                <p>{{ $passeio->subtitle }}</p>
            </div>
        </div>

        @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carrosselPasseios" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Anterior</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carrosselPasseios" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Próximo</span>
    </button>
</div>

<div class="bg-light text-center pt-3 pb-3" id="bg-btn-whatsapp" style="background-color: #dee2e6 !important;">
    <a href="https://api.whatsapp.com/send?phone=5573999219744&text=Ol%C3%A1%2C%20quero%20agendar%20um%20passeio%20%F0%9F%98%84" target="_blank" class="btn-whatsapp">
        <div class="icon">
            <i class="fa-brands fa-whatsapp"></i>
        </div>
        <div class="text">
            <h5>Fale conosco no WhatsApp</h5>
            <p class="m-0">Garanta já o seu passeio com desconto!</p>
        </div>
    </a>
</div>

<div class="container">
    <h4 class="mt-4 mb-4">Nossos passeios</h4>

    <div class="row">
        @foreach ($passeios as $passeio)

        <div class="col-md-4 mt-3">
            <div class="card">
                <img src="{{ asset("storage/{$passeio->imagensPasseio[0]->dir}") }}" class="card-img-top" alt="{{ $passeio->local }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $passeio->local }}</h5>
                    <p class="card-text">{{ $passeio->subtitle }}</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            @if ($passeio->desconto > 0)
                            <p style="color:#878888;" class="mb-1">{!! "De <s>R$ {$passeio->price}</s> por" !!}</p>
                            @endif
                            <h5>R$ {!! discountPrice($passeio->price, $passeio->desconto) !!}</h5>
                        </div>
                        <a href="{{ url("passeio/" .(new Illuminate\Support\Str)::slug($passeio->local, '-')) }}" class="btn btn-primary rounded-circle"><i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>

        @endforeach
    </div>
</div>

<div class="container">
    <div class="row mt-5">
        <div class="col-md">
            <h5 class="mb-4">Imagens dos nossos passeios</h5>
        </div>
    </div>
    <div class="owl-carousel owl-theme">
        @foreach ($fotosPasseios as $foto)
        <div class="item">
            <img src="{{ asset("storage/{$foto->dir}") }}" alt="">
        </div>
        @endforeach
    </div>

</div>

@endsection
