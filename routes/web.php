<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Route Basic
Route::get('halo',function()
{
        return 'Halo Ini Aplikasi Laravel Pertama Saya'.
               '<br>Laravel is Magical Framework';
});

Route::get('about',function()
{
        return '<h1>Halo</h1>'
               .'Selamat datang di webapp saya<br>'
               .'Laravel,emang keren.';
});

//Route Basic
Route::get('profil',function()
{
        return '<h1>Halo1</h1>'
                .'Selamat datang di profil saya<br>'
                .'nama saya bilgis maharani.';
});

//Route Parameter
Route::get('biodata/{nama}',function($a)
{
    return 'Halo Ini Biodata '.$a;
});

//Route Parameter
Route::get('biodataa/{nama}/{alamat}/{sekolah}/{umur}',function($a,$b,$c,$d)
{
        return 'Nama saya '.$a.
               '<br>alamat saya '.$b.
               '<br>sekolah saya '.$c.
               '<br>umur saya '.$d;
});

//Route optional parameter
Route::get('pesan/{a?}/{b?}/{c?}',function($mkn=null, $minum=null, $harga=null){
        if(isset($mkn)){
                $mkn = "Anda memesan $mkn";
                echo $mkn;
        }
        if(isset($minum)){
                $minum = " & $minum";
                echo $minum;
        }
        if(isset($harga)){
                $harga = " dengan harga $$harga<br>";
                echo $harga;
        }

        if(!$mkn && !$minum && !$harga && !$sz)
        return " Anda Belum Memesan Sesuatu";
        if ($harga == 25000) {
           echo " Anda memesan minuman dengan ukuran medium";
        }if ($harga == 35000) {
           echo " Anda memesan minuman dengan ukuran large";
        }if ($harga < 25000) {
           echo " Anda memesan minuman dengan ukuran small";
        }
});

//Route optional parameter
Route::get('tni/{nama}/{bb}/{umur}',function($nm=null, $bb=null, $umur=null){
        if(isset($nm)){
                $nm = "Nama anda $nm";
                echo "$nm<br>";
        }
        if(isset($bb)){
                $bb = "Berat badan anda $bb";
                echo "$bb<br>";
        }

        if ($bb == 100 ){
                echo "Anda harus turunkan berat badan<br>";
        }
        if ($bb == 75 ){
                echo "berat badan anda ideal<br>";
        }
        if ($bb == 50 ){
                echo "naikan berat badan anda<br>";
        }
        if ($bb < 50 ){
                echo "Anda kurang nutrisi<br>";
        }
        if(isset($umur)){
                $umur = "umur anda $umur";
                echo "$umur<br>";
        }
        if(umur == 30 && $umur <= 40){
                echo "perwira";
        }if(umur == 40 && $umur <= 50){
                echo "laksamana";
        }if(umur == 50 && $umur <= 60){
                echo "jendral";
        }

        if (!$nm && !$bb)
        return "silahkan isi data terlebih dahulu";
});

//Akses model post
Route::get('testmodel/1',function()
{
    $query = App\Post::all();
    return $query;
});

//Mencari model berdasarkan id
Route::get('testmodel/2',function()
{
    $query = App\Post::find(1);
    return $query;
});

//Mencari model berdasarkan title
Route::get('testmodel/3',function()
{
    $query = App\Post::where('title','like','%cepat nikah%')->get();
    return $query;
});

//Mengubah record, (hapus semua isi function)
Route::get('testmodel/4',function()
{
    $post = App\Post::find(1);
    $post->title = "Ciri Keluarga Sakinah";
    $post->save();
    return $post;
    });

//Menghapus record, (hapus semua isi function)
Route::get('testmodel/5',function()
{
    $post = App\Post::find(1);
    $post->delete();
});

//Menambah record, (hapus semua isi function)
Route::get('testmodel/6',function()
{
    $post = new App\Post;
    $post->title = "7 Amalan Pembuka Jodoh";
    $post->content = "shalat malam, sedekah, puasa sunah, silaturahmi, senyum, doa, tobat";
    $post->save();
    return $post;
});

Route::get('guruu',function(){
    $data = App\Guru::select('nik','nama','pelajaran')
    ->first();
    return $data;
});

Route::get('tiga',function()
{
    //select * from posts
    $query = App\Guru::all()
    ->take(3);
    ;
    return $data;
});



