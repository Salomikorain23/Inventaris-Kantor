namespace App\Controllers;

class Home extends BaseController
{
public function index()
{
// Sementara: simulasikan login sebagai admin
if (!session()->has('role')) {
session()->set('role', 'admin'); // ubah ke 'manajer' jika mau lihat menu manajer
}

return view('templates/dashboard');
}
}