<?php

namespace App\Controllers;
use CodeIgniter\Controllers; 
use App\Models\M_model;
use Dompdf\Dompdf;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Home extends BaseController
{
    public function index()
    {
  //    echo view('header');
        // echo view('menu');
        // echo view('footer');
        

        $model=new M_model();
        echo view('login');
    }

    public function aksi_login()
    {
        $n=$this->request->getPost('username'); 
        $p=$this->request->getPost('password');
        $model = new M_model();
        $data=array(
            'username'=>$n, 
            'password'=>$p
        );
        $cek=$model->getarray('user', $data);
        if ($cek>0) {

            session()->set('id', $cek['id_user']);
            session()->set('username', $cek['username']);
            session()->set('level', $cek['level']);
            return redirect()->to('/home/dashboard');

        }else {
        return redirect()->to('/home/dashboard');
    }
}

    public function log_out()
    {
        // if(session()->get('id')>0) {

         session()->destroy();
         return redirect()->to('/');

    //  }else{
    //     return redirect()->to('/home/dashboard');
    // }
    }

    public function dashboard()
    {
        echo view('header');
        echo view('menu');
        echo view('dashboard');
        echo view('footer');
    }

    public function user()
    {
// if(session()->get('level')== 1) {

        $model = new M_model();
        $kui['ferdi'] = $model->tampil('user');

        $id = session()->get('id');
        $where = array('id' => $id);

        echo view('header', $kui);
        echo view('menu');
        echo view('v_user');
        echo view('footer');
// }else{
//     return redirect()->to('/home/dashboard');
// }
    }

    // public function tambah_user()
    // {
    //     $model = new M_model();
    //     $kui['ferdi']=$model->tampil('user');
    //     echo view('header');
    //     echo view('menu');
    //     echo view('v_tambah_user',$kui);
    //     echo view('footer');
    // }

    // public function aksi_tambah_user()
    // {
    //     $a= $this->request->getPost('username');
    //     $b= $this->request->getPost('password');
    //     $c= $this->request->getPost('level');
        
    //     $simpan=array(
    //         'username'=>$a,
    //         'password'=>$b,
    //         'level'=>$c
           
    //     );
    //     $model = new M_model();
    //     $model->simpan('user',$simpan);
    //     return redirect()->to('/home/user');
    // }

    public function hapus_user($id)
    {
        $model = new M_model();
        $where=array('id_user'=>$id);
        $model->hapus('user',$where);
        return redirect()->to('/home/user');
    }

    public function anak()
    {
// if(session()->get('level')== 1) {

        $model = new M_model();
        $kui['ferdi'] = $model->tampil('anak');

        // $id = session()->get('id');
        // $where = array('id' => $id);

        echo view('header', $kui);
        echo view('menu');
        echo view('v_anak');
        echo view('footer');
// }else{
//     return redirect()->to('/home/dashboard');
// }
    }

    public function tambah_anak()
    {
        $model = new M_model();
        $kui['ferdi']=$model->tampil('anak');
        echo view('header');
        echo view('menu');
        echo view('v_tambah_anak',$kui);
        echo view('footer');
    }

    public function aksi_tambah_anak()
    {
        $a= $this->request->getPost('nama_anak');
        $b= $this->request->getPost('umur_anak');
        $c= $this->request->getPost('jk_anak');       

        $simpan=array(
            'nama_anak'=>$a,
            'umur_anak'=>$b,
            'jk_anak'=>$c         

        );
        $model = new M_model();
        $model->simpan('anak',$simpan);
        return redirect()->to('/home/anak');
    }

    public function edit_anak($id)
    {
        $model = new M_model();
        $where=array('id_anak'=>$id);
        $kui['ferdi']=$model->getRow('anak',$where);

        $id=session()->get('id');
        $where=array('id_user'=>$id);

        echo view('header');
        echo view('menu');
        echo view('v_edit_anak',$kui);
        echo view('footer');
    }

    public function aksi_edit_anak()
    {
         $model=new M_model();
         $id= $this->request->getPost('id');
         $nama_anak= $this->request->getPost('nama_anak');
         $umur_anak= $this->request->getPost('umur_anak');
         $jk_anak= $this->request->getPost('jk_anak');
         

         $where=array('id_anak'=>$id);
         $simpan=array(
            'nama_anak'=>$nama_anak,
            'umur_anak'=>$umur_anak,
            'jk_anak'=>$jk_anak
    
         );

         $model = new M_model();
         $model->edit('anak', $simpan, $where);
         return redirect()->to('/home/anak');
    }

    public function hapus_anak($id)
    {
        $model = new M_model();
        $where=array('id_anak'=>$id);
        $model->hapus('anak',$where);
        return redirect()->to('/home/anak');
    }

    public function pembayaran()
    {
// if(session()->get('level')== 1) {

        $model = new M_model();
        $kui['ferdi'] = $model->tampil('pembayaran');

        // $id = session()->get('id');
        // $where = array('id' => $id);

        echo view('header', $kui);
        echo view('menu');
        echo view('v_pembayaran');
        echo view('footer');
// }else{
//     return redirect()->to('/home/dashboard');
// }
    }

    public function tambah_pembayaran()
    {
        $model = new M_model();
        $kui['ferdi']=$model->tampil('pembayaran');
        echo view('header');
        echo view('menu');
        echo view('v_tambah_pembayaran',$kui);
        echo view('footer');
    }

    public function aksi_tambah_pembayaran()
    {
        $a= $this->request->getPost('nominal');
        $b= $this->request->getPost('tgl_pembayaran');

        $simpan=array(
            'nominal'=>$a,
            'tgl_pembayaran'=>$b

        );
        $model = new M_model();
        $model->simpan('pembayaran',$simpan);
        return redirect()->to('/home/pembayaran');
    }

    public function edit_pembayaran($id)
    {
        $model = new M_model();
        $where=array('id_pembayaran'=>$id);
        $kui['ferdi']=$model->getRow('pembayaran',$where);

        $id=session()->get('id');
        $where=array('id_user'=>$id);

        echo view('header');
        echo view('menu');
        echo view('v_edit_pembayaran',$kui);
        echo view('footer');
    }

    public function aksi_edit_pembayaran()
    {
         $model=new M_model();
         $id= $this->request->getPost('id');
         $nominal= $this->request->getPost('nominal');
         $tgl_pembayaran= $this->request->getPost('tgl_pembayaran');

         $where=array('id_pembayaran'=>$id);
         $simpan=array(
            'nominal'=>$nominal,
            'tgl_pembayaran'=>$tgl_pembayaran

         );

         $model = new M_model();
         $model->edit('pembayaran', $simpan, $where);
         return redirect()->to('/home/pembayaran');
    }

    public function hapus_pembayaran($id)
    {
        $model = new M_model();
        $where=array('id_pembayaran'=>$id);
        $model->hapus('pembayaran',$where);
        return redirect()->to('/home/pembayaran');
    }

    public function pengguna()
    {
// if(session()->get('level')== 1) {

        $model = new M_model();
        $kui['ferdi'] = $model->tampil('pengguna');

        // $id = session()->get('id');
        // $where = array('id' => $id);

        echo view('header', $kui);
        echo view('menu');
        echo view('v_pengguna');
        echo view('footer');
// }else{
//     return redirect()->to('/home/dashboard');
// }
    }

    public function tambah_pengguna()
    {
        $model = new M_model();
        $kui['ferdi']=$model->tampil('pengguna');
        echo view('header');
        echo view('menu');
        echo view('v_tambah_pengguna',$kui);
        echo view('footer');
    }

    public function aksi_tambah_pengguna()
    {
        $a= $this->request->getPost('nama_pengguna');
        $b= $this->request->getPost('jenis_kelamin');
        $c= $this->request->getPost('tgl_lahir');

        $simpan=array(
            'nama_pengguna'=>$a,
            'jenis_kelamin'=>$b,
            'tgl_lahir'=>$c

        );
        $model = new M_model();
        $model->simpan('pengguna',$simpan);
        return redirect()->to('/home/pengguna');
    }

    public function edit_pengguna($id)
    {
        $model = new M_model();
        $where=array('id_pengguna'=>$id);
        $kui['ferdi']=$model->getRow('pengguna',$where);

        $id=session()->get('id');
        $where=array('id_user'=>$id);

        echo view('header');
        echo view('menu');
        echo view('v_edit_pengguna',$kui);
        echo view('footer');
    }

    public function aksi_edit_pengguna()
    {
         $model=new M_model();
         $id= $this->request->getPost('id');
         $nama_pengguna= $this->request->getPost('nama_pengguna');
         $jenis_kelamin= $this->request->getPost('jenis_kelamin');
         $tgl_lahir= $this->request->getPost('tgl_lahir');

         $where=array('id_pengguna'=>$id);
         $simpan=array(
            'nama_pengguna'=>$nama_pengguna,
            'jenis_kelamin'=>$jenis_kelamin,
            'tgl_lahir'=>$tgl_lahir

         );

         $model = new M_model();
         $model->edit('pengguna', $simpan, $where);
         return redirect()->to('/home/pengguna');
    }

    public function hapus_pengguna($id)
    {
        $model = new M_model();
        $where=array('id_pengguna'=>$id);
        $model->hapus('pengguna',$where);
        return redirect()->to('/home/pengguna');
    }




///////////////===============================RESEP============================///////////////
//     public function resep()
//     {
//         // if(session()->get('level')== 1 || session()->get('level')== 2 || session()->get('level')== 3 || session()->get('level')== 4) { 

//         $model = new M_model();
//         $on='resep.id_dokter=dokter.id_dokter';
//         $on2='resep.id_pasien=pasien.id_pasien';
//         $on3='resep.id_poliklinik=poliklinik.id_poliklinik';
//         $kui['ferdi'] = $model->ultra('resep', 'dokter', 'pasien', 'poliklinik', $on, $on2, $on3);

//         $id=session()->get('id');
//         $where=array('id_user'=>$id);
//         $where=array('id_user' => session()->get('id'));
//         $kui['user']=$model->getRow('user',$where);

//         echo view('header', $kui);
//         echo view('menu');
//         echo view('v_resep');
//         echo view('footer');
//     // }else{
//     //     return redirect()->to('/home/dashboard');
//     // }
//     }

//     public function tambah_resep()
//     {
//         // if(session()->get('level')== 1 || session()->get('level')== 2 || session()->get('level')== 3) {

//         $model=new M_model();
//         $on='resep.id_dokter=dokter.id_dokter';
//         $on2='resep.id_pasien=pasien.id_pasien';
//         $on3='resep.id_poliklinik=poliklinik.id_poliklinik';
//         $kui['ferdi'] = $model->ultra('resep', 'dokter', 'pasien', 'poliklinik', $on, $on2, $on3);

//         $id=session()->get('id');
//         $where=array('id_user'=>$id);
//         $where=array('id_user' => session()->get('id'));    
//         $kui['user']=$model->getRow('user',$where);

//         $where=array('id_user' => session()->get('id'));
//         // $kui['user']=$model->getRow('user',$where);

//         $kui['duar']=$model->tampil('dokter'); 
//         $kui['a']=$model->tampil('pasien'); 
//         $kui['b']=$model->tampil('poliklinik'); 


//         echo view('header',$kui);
//         echo view('menu');
//         echo view('v_tambah_resep');
//         echo view('footer');

//     //     }else{
//     //     return redirect()->to('/home/dashboard');
//     // }
//     }

//     public function aksi_tambah_resep()
//     {
//         $model = new M_model();
//         $id_dokter = $this->request->getPost('id_dokter');
//         $id_pasien = $this->request->getPost('id_pasien');
//         $id_poliklinik = $this->request->getPost('id_poliklinik');
//         $tgl_resep = $this->request->getPost('tgl_resep');
//         $total_harga = $this->request->getPost('total_harga');
//         $bayar = $this->request->getPost('bayar');
//         $kembali = $this->request->getPost('kembali');

//         $data = array(
//             'id_dokter' => $id_dokter,
//             'id_pasien' => $id_pasien,
//             'id_poliklinik' => $id_poliklinik,
//             'tgl_resep' => $tgl_resep,
//             'total_harga' => $total_harga,
//             'bayar' => $bayar,
//             'kembali' => $kembali
//         );
//     // print_r($data);
//         // Simpan data ke dalam tabel 'resep' menggunakan model
//         $model->simpan('resep', $data);

//         // // Redirect ke halaman '/home/resep'
//         return redirect()->to('/home/resep');
//     }

//     public function edit_resep($id)
//     {
//         // if(session()->get('level')== 4) {

//         $model=new M_model();
//         $where2=array('id_resep'=>$id);
//         $on='resep.id_dokter=dokter.id_dokter';
//         $on2='resep.id_pasien=pasien.id_pasien';
//         $on3='resep.id_poliklinik=poliklinik.id_poliklinik';
//         $kui['ferdi'] = $model->edit_resep('resep', 'dokter', 'pasien', 'poliklinik', $on, $on2, $on3, $where2);
//         $kui['duar']=$model->tampil('dokter'); 
//         $kui['a']=$model->tampil('pasien'); 
//         $kui['b']=$model->tampil('poliklinik'); 

//         $id=session()->get('id');
//         $where=array('id_user'=>$id);
//         $where=array('id_user' => session()->get('id'));
//         $kui['user']=$model->getwhere('user',$where);

//         echo view('header',$kui);
//         echo view('menu');
//         echo view('v_edit_resep');
//         echo view('footer');

// //     }else{
// //         return redirect()->to('/home/dashboard');
// //     }
//     }

//     public function aksi_edit_resep()
//     {
//         $model=new M_model();
//         $id=$this->request->getPost('id');
//         $a=$this->request->getPost('id_pasien');
//         $b=$this->request->getPost('id_dokter');
//         $c=$this->request->getPost('id_poliklinik');
//         $tgl_resep=$this->request->getPost('tgl_resep');        
//         $total_harga=$this->request->getPost('total_harga');
//         $bayar=$this->request->getPost('bayar');
//         $kembali=$this->request->getPost('kembali');

//         $data=array(
//             'id_pasien'=>$a,
//             'id_dokter'=>$b,
//             'id_poliklinik'=>$c,
//             'tgl_resep'=>$tgl_resep,
//             'total_harga'=>$total_harga,
//             'bayar'=>$bayar,
//             'kembali'=>$kembali,            

//         );
//         // print_r($data);
//         $where=array('id_resep'=>$id);
//         $model->edit('resep',$data,$where);
//         return redirect()->to('/home/resep');
//     }

//     public function hapus_resep($id)
//     {
//         $model = new M_model();
//         $where=array('id_resep'=>$id);
//         $model->hapus('resep',$where);
//         return redirect()->to('/home/resep');
//     }

    public function laporan_pembayaran()
    {
        // if(session()->get('level')== 2) {

        $model=new M_model();
        $kui['kunci']='view_pembayaran';

        $id=session()->get('id');
        $where=array('id_user'=>$id);
        $kui['foto']=$model->getRow('user',$where);

        echo view('header',$kui);
        echo view('menu',$kui);
        echo view('filter',$kui);
        echo view('footer');

    //     }else{
    //     return redirect()->to('/home/dashboard');
    // }
    }
    public function cari_pembayaran()
    {
        // if(session()->get('level')== 2) {

        $model=new M_model();
        // $on = 'pembayaran.id_pasien = pasien.id_pasien';
        $awal= $this->request->getPost('awal');
        $akhir= $this->request->getPost('akhir');
        $kui['ferdi'] = $model->filter('pembayaran', $awal, $akhir);
        // $img = file_get_contents(
        //     'C:\xampp\htdocs\pengajian\public\assets\KOP_PH.jpg');

        // $kui['foto'] = base64_encode($img);


        echo view('c_p',$kui);

    //     }else{
    //     return redirect()->to('/home/dashboard');
    // }
    }
    public function pdf_pembayaran()
    {
       // if(session()->get('level')== 2 ||session()->get('level')==4 ) {

        $model=new M_model();
        $awal= $this->request->getPost('awal');
        $akhir= $this->request->getPost('akhir');
        $kui['ferdi']=$model->filter('pembayaran',$awal,$akhir);
        // $img = file_get_contents(
        //     'C:\xampp\htdocs\koperasi-simpan-pinjam\public\images\ksp.png');

        // $kui['user'] = base64_encode($img);

        $dompdf = new\Dompdf\Dompdf();
        $dompdf->setPaper('A4','landscape');
        $dompdf->loadHtml(view('c_p',$kui));
        $dompdf->render();
        $dompdf->stream('my.pdf', array('Attachment'=>0));
    //     }else{
    //     return redirect()->to('/home/dashboard');
    // }
    }
    public function excel_pembayaran()
    {
        // if(session()->get('level')== 2) {

        $model=new M_model();
        // $on = 'pembayaran.id_pasien = pasien.id_pasien';
        $awal= $this->request->getPost('awal');
        $akhir= $this->request->getPost('akhir');
        $data=$model->filter('pembayaran', $awal, $akhir);

        $spreadsheet=new Spreadsheet();

        $spreadsheet->setActiveSheetIndex(0)
        ->setCellValue('A1', 'Nominal')
        ->setCellValue('B1', 'Tgl Pembayaran');


        // ->setCellValue('C1', 'Jarak')
        // // ->setCellValue('D1', 'Due Date')
        // ->setCellValue('D1', 'Suhu')
        // ->setCellValue('E1', 'Tanggal Perjalanan');

        $column=2;

        foreach($data as $data){

            $spreadsheet->setActiveSheetIndex(0)
            ->setCellValue('A'. $column, $data->nominal)
            ->setCellValue('B'. $column, $data->tgl_pembayaran);
          

            // ->setCellValue('C'. $column, $data->jarak)
            // // ->setCellValue('D'. $column, $data->tgl_jatuh_tempo)
            // ->setCellValue('D'. $column, $data->suhu)
            // ->setCellValue('E'. $column, $data->tanggal_perjalanan);

            // $total += $data->jumlah_gaji;

            $column++;
        }
        $writer = new XLsx($spreadsheet);
        $fileName = 'pembayaran';

        header('Content-type:vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition:attachment;filename='.$fileName.'.xls');
        header('Cache-Control: max-age=0');

        $writer->save('php://output');
        // }else{
        //     return redirect()->to('/home/dashboard');
        // }
    }
}
