<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar passeio') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            @if (session('msgPasseio'))
                <div class="alert alert-success mb-3">{{ session('msgPasseio') }}</div>
            @endif

            @if (session('erroPasseio'))
                <div class="alert alert-warning mb-3">{{ session('erroPasseio') }}</div>
            @endif

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <h4 class="font-semibold text-xl text-gray-800 leading-tight">Editar dados de passeio</h4>

                    <form action="{{ route('passeios.update', $passeio->id) }}" method="POST" enctype="multipart/form-data" class="mt-4">

                        @method('PUT')

                        @csrf

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="local">Local do passeio</label>
                                    <input type="text" class="form-control rounded mt-2" id="local" name="local" value="{{ old('local', $passeio->local) }}">
                                    @error('local')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="price">Preço</label>
                                    <input type="number" class="form-control rounded mt-2" id="price" name="price" min="0" value="{{ old('price', $passeio->price) }}">
                                    @error('price')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="desconto">Desconto (em %)</label>
                                    <input type="number" class="form-control rounded mt-2" id="desconto" name="desconto" min="0" max="100" value="{{ old('desconto', $passeio->desconto) }}">
                                    @error('desconto')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="subtitle">Subtitulo/Breve descrição</label>
                                    <input type="text" class="form-control rounded mt-2" id="subtitle" name="subtitle" value="{{ old('subtitle', $passeio->subtitle) }}">
                                    @error('subtitle')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="descricao">Descrição detalhada do passeio</label>
                                    <textarea name="descricao" id="descricao" class="form-control rouded mt-2" rows="5">{{ old('descricao', $passeio->content) }}</textarea>
                                    @error('descricao')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Fotos ilustrativas</label>
                                    <input type="file" class="form-control" name="fotos[]" id="fotos" accept="image/png, image/jpeg" multiple="multiple">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12" align="right">
                                <a href="{{ route('passeios.index') }}" class="btn btn-secondary">Voltar</a>
                                <button type="submit" class="btn btn-primary">Editar</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h4 class="font-semibold text-xl text-gray-800 leading-tight">Apagar fotos</h4>
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="row">
                                    @foreach ($passeio->imagensPasseio as $imagemPasseio)
                                    <div class="col-md-3 mt-3" style="position:relative;">
                                        <img src="{{ asset("storage/{$imagemPasseio->dir}") }}" class="img-fluid">
                                        <form action="{{ route('passeios.deleteImage', [$imagemPasseio->id, $passeio->id]) }}" method="post" class="form-delete-img">
                                            @csrf
                                            <button type="submit"><i class="fa fa-trash img-passeio text-danger"></i></button>
                                        </form>
                                        <div class="overlay"></div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
