<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lista de passeios') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="w-full text-right mb-4">
                <a href="{{ route('passeios.create') }}" class="btn btn-primary">
                    Adicionar passeio
                </a>
            </div>

            @if (session('msgPasseio'))
                <div class="alert alert-success mb-3">{{ session('msgPasseio') }}</div>
            @endif

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Local</th>
                                <th scope="col">Preço</th>
                                <th scope="col">Desconto</th>
                                <th scope="col">Valor com desconto</th>
                                <th scope="col" style="text-align: right">Opções</th>
                            </tr>
                        </thead>
                        <tbody>

                            @forelse ($passeios as $passeio)
                                <tr>
                                    <td>{{ $passeio->local }}</td>
                                    <td>{{ "R$ {$passeio->price}" }}</td>
                                    <td>{{ "{$passeio->desconto}%" }}</td>
                                    <td>R$ {!! discountPrice($passeio->price, $passeio->desconto) !!}</td>
                                    <td style="text-align: right">
                                        <a href="{{ route('passeios.edit', $passeio->id) }}" title="Editar passeio"><i class="fa fa-pencil text-info d-inline-block me-3"></i></a>
                                        <form action="{{ route('passeios.destroy', $passeio->id) }}" method="POST" class="d-inline-block me-3">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" title="Apagar passeio"><i class="fa fa-trash text-danger"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="text-center">Nenhum passeio inserido</td>
                                </tr>
                            @endforelse

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
