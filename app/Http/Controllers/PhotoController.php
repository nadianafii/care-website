<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function upload(Request $request)
    {
        // Validasi request
        $request->validate([
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // sesuaikan dengan kebutuhan
        ]);

        // Simpan foto
        $imageName = time().'.'.$request->photo->extension();  
        $request->photo->move(public_path('images'), $imageName);

        // Simpan data foto ke database jika diperlukan
        // Contoh: $photo = Photo::create(['file_name' => $imageName]);

        // Redirect kembali ke halaman dashboard dengan pesan sukses atau langsung tampilkan foto
        return redirect('/dashboard')->with('success','Foto berhasil diunggah!')->with('image', $imageName);
    }
}
