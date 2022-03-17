<?php

namespace App\Http\Controllers;

use App\Http\Requests\EditPasseioRequest;
use App\Http\Requests\PasseioRequest;
use App\Models\ImagePasseio;
use App\Models\Passeio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $passeios = Passeio::all();

        return view('posts.index', compact('passeios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PasseioRequest $request)
    {
        $passeio = Passeio::create([
            'local' => $request->local,
            'price' => $request->price,
            'desconto' => $request->desconto,
            'subtitle' => $request->subtitle,
            'content' => $request->descricao,
        ]);

        for ($i = 0;$i < count($request->allFiles()['fotos']);$i++) {
            $nome = $request->fotos[$i]->hashName("imagens_passeios");
            $image = Image::make($request->fotos[$i])->fit(1200, 720);

            Storage::disk('public')->put($nome, $image->encode());
            ImagePasseio::create([
                'passeio_id' => $passeio->id,
                'dir' => $nome,
            ]);
        }

        $request->session()->flash('msgPasseio', 'Passeio adicionado com sucesso');
        return redirect()->route('passeios.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $passeio = Passeio::find($id);

        return view('posts.edit', compact('passeio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditPasseioRequest $request, $id)
    {
        $passeio = Passeio::find($id);

        $passeio->update([
            'local' => $request->local,
            'price' => $request->price,
            'desconto' => $request->desconto,
            'subtitle' => $request->subtitle,
            'content' => $request->descricao,
        ]);

        if ($request->has('fotos')) {
            for ($i = 0;$i < count($request->allFiles()['fotos']);$i++) {
                $nome = $request->fotos[$i]->hashName("imagens_passeios");
                $image = Image::make($request->fotos[$i])->fit(1200, 720);

                Storage::disk('public')->put($nome, $image->encode());
                ImagePasseio::create([
                    'passeio_id' => $passeio->id,
                    'dir' => $nome,
                ]);
            }
        }

        $request->session()->flash('msgPasseio', 'Passeio editado com sucesso');
        return redirect()->route('passeios.edit', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $passeio = Passeio::find($id);

        $fotos = ImagePasseio::where('passeio_id', $passeio->id)->get();

        foreach ($fotos as $foto) {
            Storage::disk('public')->delete($foto->dir);
        }

        $passeio->delete();

        $request->session()->flash('msgPasseio', 'Passeio excluído corretamente');
        return redirect()->route('passeios.index');
    }

    /**
     * Delete the specified image from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deleteImage(Request $request, $id, $idPasseio)
    {
        $fotos = ImagePasseio::where('passeio_id', $idPasseio)->get();

        if ($fotos->count() == 1) {
            $request->session()->flash('erroPasseio', 'Tem que haver no mínimo 1 imagem para ilustrar o passeio');
            return redirect()->route('passeios.edit', $idPasseio);
        }

        $foto = ImagePasseio::find($id);

        Storage::disk('public')->delete($foto->dir);

        ImagePasseio::destroy($id);

        $request->session()->flash('msgPasseio', 'Imagem deletada com sucesso');
        return redirect()->route('passeios.edit', $idPasseio);
    }
}
