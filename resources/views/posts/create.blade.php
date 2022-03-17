<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Criar novo passeio') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <h4 class="font-semibold text-xl text-gray-800 leading-tight">Adicionar passeio</h4>

                    <form action="{{ route('passeios.store') }}" method="POST" enctype="multipart/form-data" class="mt-4">

                        @csrf

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="local">Local do passeio</label>
                                    <input type="text" class="form-control rounded mt-2" id="local" name="local" value="{{ old('local') }}">
                                    @error('local')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="price">Preço</label>
                                    <input type="number" class="form-control rounded mt-2" id="price" name="price" min="0" value="{{ old('price') }}">
                                    @error('price')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="desconto">Desconto (em %)</label>
                                    <input type="number" class="form-control rounded mt-2" id="desconto" name="desconto" min="0" max="100" value="{{ old('desconto', 0) }}">
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
                                    <input type="text" class="form-control rounded mt-2" id="subtitle" name="subtitle" value="{{ old('subtitle') }}">
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
                                    <textarea name="descricao" id="descricao" class="form-control rouded mt-2" rows="5">{{ old('descricao') }}</textarea>
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
                                <button type="submit" class="btn btn-primary">Adicionar</button>
                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
