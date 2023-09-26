<?

namespace App\Controllers;

use App\Models\GalleryModel;

class Gallery extends BaseController
{
    public function viewgallery()
    {
        $galleryModel = new GalleryModel();
        $data['gambar'] = $galleryModel->findAll();
        // Mengambil semua gambar dari tabel gallery

        return view('gallery', $data);
    }
}
