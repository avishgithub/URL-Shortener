<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Url;

class UrlController extends Controller
{
    // Show the form to submit long URL
    public function showForm()
    {
        return view('welcome');  // or your blade file name for the form
    }

    // Handle the form submission, shorten URL and save to DB
    public function shorten(Request $request)
    {
        $request->validate([
            'original_url' => 'required|url'
        ]);

        // Generate a unique short code
        $short_code = substr(md5(time()), 0, 6);

        // Save to DB
        $url = new Url();
        $url->original_url = $request->original_url;
        $url->short_code = $short_code;
        $url->save();

        // Return the short URL to the user
      return redirect('/')
        ->with('short_url', url($url->short_code))
        ->with('clicks', $url->clicks);


    }

    // Redirect short URL to original URL
    public function redirect($short_code)
    {
        $url = Url::where('short_code', $short_code)->first();

        if (!$url) {
            return abort(404);
        }

    // Increment click count
    $url->increment('clicks');

    return redirect($url->original_url);
    }

    public function adminUrls()
    {
        $urls = Url::all(); // get all URLs from database
        return view('admin_urls', compact('urls'));
    }

    public function adminPage()
    {
        // Fetch all URLs from the database
        $urls = Url::all();

        // Pass the data to the admin_urls view
        return view('admin_urls', compact('urls'));
    }



}
