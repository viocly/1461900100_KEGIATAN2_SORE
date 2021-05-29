<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Siswa;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $siswa = new Siswa;
        $siswa->nama = 'Vio';
        $siswa->nbi = '00100';
        $siswa->jk = 'laki-laki';
        $siswa->save();

        $siswa = new Siswa;
        $siswa->nama = 'Aswin';
        $siswa->nbi = '00130';
        $siswa->jk = 'laki-laki';
        $siswa->save();

        $siswa = new Siswa;
        $siswa->nama = 'Juno';
        $siswa->nbi = '0089';
        $siswa->jk = 'laki-laki';
        $siswa->save();
    }
}
