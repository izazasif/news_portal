<?php

namespace App\Http\Controllers;
use App\Models\NewsArticle;
use App\Models\User;
use App\Models\Category;
use App\Models\ArticleCategory;
use Illuminate\Http\Request;
use DB;
class NewsItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }
    public function showLatestPosts()
   {

    $latestPosts = NewsArticle::latest()->where('status','=','Published')->take(3)->get();
    return response()->json([
        'latestPosts' => $latestPosts
    ],200);

   }
   public function nextLargePost()
   {
    $nextFourNews = NewsArticle::with('user')->latest()->where('status','=','Published')->skip(3)->take(1)->first();
        return response()->json([
            'nextFourNews' => $nextFourNews
        ],200);
   }
   public function nextFourside ()
   {
      
    $nextFouride = NewsArticle::with('user')->where('status','=','Published')->latest()->skip(4)->take(5)->get();
        return response()->json([
            'nextFoursides' => $nextFouride
        ],200);
   }
   public function nextOnelarge()
   {
    
    $categoryId = 2; // The ID of the category you want to fetch articles for

    $articles = DB::table('news_articles')
                ->join('article_categories', 'news_articles.id', '=', 'article_categories.article_id')
                ->join('categories', 'article_categories.category_id', '=', 'categories.id')
                ->join('users','users.id','=','news_articles.user_id')
                ->where('article_categories.category_id', $categoryId)
                ->where('status','=','Published')
                ->select('news_articles.*', 'categories.name as category_name','users.name as user_name')
                ->first();
    return response()->json([
            'articles' => $articles
        ],200);
   }
   public function cateThreecontent()
   {
      
        $cateThreecontent = NewsArticle::latest()->where('status','=','Published')->skip(8)->take(3)->get();
            return response()->json([
                'cateThreecontents' => $cateThreecontent
            ],200);
   }
   public function lastFour(Request $request)
   {
    
    $categoryId = 40; // The ID of the category you want to fetch articles for
    $perPage = $request->input('per_page', 4); // Number of items per page, default is 4
    $page = $request->input('page', 1); // Current page, default is 1

    $articleslast = DB::table('news_articles')
        ->join('article_categories', 'news_articles.id', '=', 'article_categories.article_id')
        ->join('categories', 'article_categories.category_id', '=', 'categories.id')
        ->join('users', 'users.id', '=', 'news_articles.user_id')
        ->where('article_categories.category_id', $categoryId)
        ->where('status','=','Published')
        ->select('news_articles.*', 'categories.name as category_name', 'users.name as user_name')
        ->paginate($perPage, ['*'], 'page', $page);

        return response()->json($articleslast, 200);

   }
    /**
     * Show the form for creating a new resource.
     */
    public function details($slug)
    {
        
        $data = DB::table('news_articles')
                ->join('article_categories', 'news_articles.id', '=', 'article_categories.article_id')
                ->join('categories', 'article_categories.category_id', '=', 'categories.id')
                ->join('users','users.id','=','news_articles.user_id')
                ->where('news_articles.slug', $slug)
                ->select('news_articles.*', 'categories.name as category_name','users.name as user_name')
                ->first();
        return response()->json([
                    'data' => $data,
                    'meta_title' => $data->meta_title,
                    'meta_description' => $data->meta_description,  // Assuming these fields exist in your database
                    'meta_keywords' => $data->meta_keywords
                ],200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
