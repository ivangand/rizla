<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Tampilkan halaman Home
    public function home()
    {
        return view('home');
    }

    // Tampilkan halaman About Me
    public function about()
    {
        return view('about');
    }

    // Tampilkan halaman Projects
    public function projects()
    {
        // Hardcoded project data for demo purposes
        $projects = [
            [
                'id' => 1,
                'title' => 'Proyek 1',
                'description' => 'Deskripsi singkat Proyek 1.',
                'thumbnail' => '/path-to-thumbnail1.jpg',
                'url' => '/projects/1'
            ],
            [
                'id' => 2,
                'title' => 'Proyek 2',
                'description' => 'Deskripsi singkat Proyek 2.',
                'thumbnail' => '/path-to-thumbnail2.jpg',
                'url' => '/projects/2'
            ],
            [
                'id' => 3,
                'title' => 'Proyek 3',
                'description' => 'Deskripsi singkat Proyek 3.',
                'thumbnail' => '/path-to-thumbnail3.jpg',
                'url' => '/projects/3'
            ],
        ];

        return view('projects', compact('projects'));
    }

    // Tampilkan halaman Contact
    public function contact()
    {
        return view('contact');
    }

    // Proses pengiriman formulir kontak
    public function submitContactForm(Request $request)
    {
        // Validasi data yang masuk
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        // Proses data, misalnya kirim email atau simpan ke database
        // ...

        // Redirect dengan pesan sukses
        return redirect()->route('contact')->with('success', 'Pesan berhasil dikirim!');
    }

    // Function to show individual project details
    public function showProject($id)
    {
        // Hardcoded project data for demo purposes
        $projects = [
            1 => [
                'title' => 'Project 1',
                'description' => 'Ini adalah deskripsi proyek 1.',
                'image' => 'project1.jpg',
                'details' => 'Detail lebih lanjut tentang proyek 1.'
            ],
            2 => [
                'title' => 'Project 2',
                'description' => 'Ini adalah deskripsi proyek 2.',
                'image' => 'project2.jpg',
                'details' => 'Detail lebih lanjut tentang proyek 2.'
            ],
            3 => [
                'title' => 'Project 3',
                'description' => 'Ini adalah deskripsi proyek 3.',
                'image' => 'project3.jpg',
                'details' => 'Detail lebih lanjut tentang proyek 3.'
            ],
        ];

        // Check if project exists
        if (!array_key_exists($id, $projects)) {
            abort(404); // Show 404 page if project not found
        }

        // Fetch project data based on ID
        $project = $projects[$id];

        return view('projects.show', compact('project'));
    }
}
