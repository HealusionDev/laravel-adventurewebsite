<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image::class;
use App\Article;
use App\User;
use App\Role;
use Gate;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middlew*963.
        are('auth');
    }

    public function index()
    {
        $articles = Article::orderBy('id')->paginate(5);
        return view('admin.articles.index')->with('articles', $articles);
    }


    public function edit(Article $article, User $user, Request $request)
    {
        if(Gate::denies('edit-users', $user)){
            return redirect(route('admin.articles.index'));
        }

        $articles = Article::all();

        return view('admin.articles.edit')->with([
            'article'=> $article
        ]);
    }

    
    public function create(Request $request, Article $article)
    {
        $this->validate($request, [
            'title' => 'required',
            'detail' => 'required',
        ]);

        $title=$request->input('title');
        $detail=$request->input('detail');

        $article = new Article;
        $dom = new \DomDocument();

        $dom->loadHtml(mb_convert_encoding($detail, 'HTML-ENTITIES', "UTF-8"), LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);    

        $images = $dom->getElementsByTagName('img');

        foreach($images as $img){
            $src = $img->getAttribute('src');
            
            // if the img source is 'data-url'
            if(preg_match('/data:image/', $src)){
                
                // get the mimetype
                preg_match('/data:image\/(?<mime>.*?)\;/', $src, $groups);
                $mimetype = $groups['mime'];
                
                // Generating a random filename
                $filename = uniqid();
                $filepath = "/img/$filename . '.' . $mimetype";
    
                // @see http://image.intervention.io/api/
                $image = Image::make($src)
                  // resize if required
                  ->resize(300, 200)
                  ->encode($mimetype, 100)  // encode file to the specified mimetype
                  ->save(public_path($filepath));
                
                $new_src = asset($filepath);
                $img->removeAttribute('src');
                $img->setAttribute('src', $new_src);
            }
        } 
    
        $article->detail = $dom->saveHTML();
        $article->title = $title;
        
        $article->save();

        return redirect()->route('admin.articles.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function insert()
    {
        //    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */

    public function show(Article $article)
    {

        $articles = Article::find($article->id);

        return view('admin.articles.show')->with([
            'article'=> $article
        ]);
   }

    
    public function update(Request $request, Article $article)
    {
        $article->title = $request->title;
        $article->detail = $request->detail;
        $article->save();

        if ($article->save()){
            $request->session()->flash('success', $article->title . ' a été mis à jour');
        }else{
            $request->session()->flash('error', 'Erreur pendant la mise à jour');
        }
        

        return redirect()->route('admin.articles.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article, User $user)
    {
        if(Gate::denies('delete-users', $user)){
            return redirect(route('admin.users.index'));
        }
        
        $article->destroy($article->id);

        return redirect()->route('admin.articles.index');
    }
}
