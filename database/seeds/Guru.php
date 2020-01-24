<?php

use Illuminate\Database\Seeder;

class Guru extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['nik'=>'10001', 'nama'=>'raka', 'alamat'=>'Bandung', 'jenis_kelamin'=>'lakilaki', 'tempat_lahir'=>'Bandung', 'tanggal_lahir'=>'1996-10-25', 'pelajaran'=>'indonesia'],
            ['nik'=>'10002', 'nama'=>'fitri', 'alamat'=>'Bandung', 'jenis_kelamin'=>'perempuan', 'tempat_lahir'=>'Bandung', 'tanggal_lahir'=>'1998-12-25', 'pelajaran'=>'inggris'],
            ['nik'=>'10003', 'nama'=>'rizal', 'alamat'=>'Bandung', 'jenis_kelamin'=>'lakilaki', 'tempat_lahir'=>'Bandung', 'tanggal_lahir'=>'1996-10-25', 'pelajaran'=>'pkn'],
            ['nik'=>'10004', 'nama'=>'yosep', 'alamat'=>'Bandung', 'jenis_kelamin'=>'lakilaki', 'tempat_lahir'=>'Bandung', 'tanggal_lahir'=>'1999-10-25', 'pelajaran'=>'alquran'],
            ['nik'=>'10005', 'nama'=>'rudi', 'alamat'=>'Bandung', 'jenis_kelamin'=>'lakilaki', 'tempat_lahir'=>'Bandung', 'tanggal_lahir'=>'1998-10-25', 'pelajaran'=>'penjaskes'],
            ['nik'=>'10006', 'nama'=>'kintan', 'alamat'=>'Bandung', 'jenis_kelamin'=>'perempuan', 'tempat_lahir'=>'Bandung', 'tanggal_lahir'=>'1997-10-25', 'pelajaran'=>'senibudaya'],
            ['nik'=>'10007', 'nama'=>'sri', 'alamat'=>'Bandung', 'jenis_kelamin'=>'perempuan', 'tempat_lahir'=>'Bandung', 'tanggal_lahir'=>'1999-10-25', 'pelajaran'=>'pkwu'],
            ['nik'=>'10008', 'nama'=>'dudung', 'alamat'=>'Bandung', 'jenis_kelamin'=>'lakilaki', 'tempat_lahir'=>'Bandung', 'tanggal_lahir'=>'1995-10-25', 'pelajaran'=>'sunda'],
            ['nik'=>'10009', 'nama'=>'salsa', 'alamat'=>'Bandung', 'jenis_kelamin'=>'perempuan', 'tempat_lahir'=>'Bandung', 'tanggal_lahir'=>'1996-10-25', 'pelajaran'=>'fisika'],
            ['nik'=>'10010', 'nama'=>'doni', 'alamat'=>'Bandung', 'jenis_kelamin'=>'lakilaki', 'tempat_lahir'=>'Bandung', 'tanggal_lahir'=>'1995-10-25', 'pelajaran'=>'simdig']
        ];
    }
}
