<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Auth;
use App\Models\Book;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user_id = Auth::user()->id;

        $auth_users = Book::where('user_id', $user_id)->get()->toArray();

        $other_users = Book::whereNotIn('user_id', [$user_id])->get()->toArray();

        return view('user_details', ['auth_users' => $auth_users, 'other_users' => $other_users]);
    }

    public function fetchBook(Request $request)
    {
        $query = $request->input('query');
        $searchType = $request->input('search_type', 'isbn');
        $bookInfo = $this->getBookInfo($query, $searchType);

        return view('books_details', ['bookInfo' => $bookInfo]);
    }

    private function getBookInfo($query, $searchType)
    {
        $client = new Client();

        $params = [
            'format' => 'json',
            'jscmd' => 'data',
        ];

        if ($searchType === 'isbn') {
            $params['bibkeys'] = "ISBN:$query";
        } elseif ($searchType === 'title') {
            $params['title'] = $query;
        } else {
            return [];
        }

        $response = $client->get("https://openlibrary.org/api/books", [
            'query' => $params,
        ]);

        $body = $response->getBody();
        $bookInfo = json_decode($body, true);

        return $bookInfo;
    }

    public function addBook(Request $request) {

        $url = $request->url !== '-' ? $request->url : 'null';
        $title = $request->title !== '-' ? $request->title : 'null';
        $authors = $request->authors !== '-' ? $request->authors : 'null';
        $pages = $request->pages !== '-' ? $request->pages : 'null';
        $publishers = $request->publishers !== '-' ? $request->publishers : 'null';
        $publish_date = $request->publish_date !== '-' ? $request->publish_date : 'null';

        $user_id = Auth::user()->id;

        $create = Book::create([
            'user_id' => $user_id,
            'title' => $title,
            'authors' => $authors,
            'pages' => $pages,
            'publishers' => $publishers,
            'publish_date' => $publish_date,
            'url' => $url,
        ]);

        return;
    }

    public function delete($id) {

        $delete_book = Book::where('id', $id)->delete();

        return redirect()->back();
    }

}
