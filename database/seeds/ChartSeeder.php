<?php

use Illuminate\Database\Seeder;
use Ramsey\Uuid\Uuid;

class ChartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon\Carbon::now();

        App\ChartGroup::insert([
            ['name'=>'Aktiva', 'created_at'=> $now, 'updated_at'=> $now],
            ['name'=>'Passiva', 'created_at'=> $now, 'updated_at'=> $now],
            ['name'=>'Laba Rugi', 'created_at'=> $now, 'updated_at'=> $now],
        ]);

        App\Chart::insert([
            ['id'=>Uuid::uuid4()->getHex(),'chart_code'=>'111.001.','sub_chart'=>null,'chart_name'=>'KAS BESAR','subno'=>0,'transaction'=>'debet','group_id'=>'1','created_at'=> $now, 'updated_at'=> $now],
            ['id'=>Uuid::uuid4()->getHex(),'chart_code'=>'112.001.','sub_chart'=>null,'chart_name'=>'KAS KECIL','subno'=>0,'transaction'=>'debet','group_id'=>'1','created_at'=> $now, 'updated_at'=> $now],
            ['id'=>Uuid::uuid4()->getHex(),'chart_code'=>'113.000.','sub_chart'=>null,'chart_name'=>'BANK','subno'=>0,'transaction'=>'debet','group_id'=>'1','created_at'=> $now, 'updated_at'=> $now],
            ['id'=>Uuid::uuid4()->getHex(),'chart_code'=>'113.000.001','sub_chart'=>'113.000.','chart_name'=>'DANAMON 8800003207 - HO','subno'=>1,'transaction'=>'debet','group_id'=>'1','created_at'=> $now, 'updated_at'=> $now],
            ['id'=>Uuid::uuid4()->getHex(),'chart_code'=>'113.000.002','sub_chart'=>'113.000.','chart_name'=>'OCBC NISP 30800011980 - HO','subno'=>2,'transaction'=>'debet','group_id'=>'1','created_at'=> $now, 'updated_at'=> $now],
            ['id'=>Uuid::uuid4()->getHex(),'chart_code'=>'113.000.003','sub_chart'=>'113.000.','chart_name'=>'PANIN 3105116506 - HO','subno'=>3,'transaction'=>'debet','group_id'=>'1','created_at'=> $now, 'updated_at'=> $now],
            ['id'=>Uuid::uuid4()->getHex(),'chart_code'=>'113.000.004','sub_chart'=>'113.000.','chart_name'=>'PERMATA 3301223098 - HO','subno'=>4,'transaction'=>'debet','group_id'=>'1','created_at'=> $now, 'updated_at'=> $now],
            ['id'=>Uuid::uuid4()->getHex(),'chart_code'=>'113.000.005','sub_chart'=>'113.000.','chart_name'=>'DANAMON 3528305828 - KENDAL','subno'=>5,'transaction'=>'debet','group_id'=>'1','created_at'=> $now, 'updated_at'=> $now],
            ['id'=>Uuid::uuid4()->getHex(),'chart_code'=>'113.000.006','sub_chart'=>'113.000.','chart_name'=>'DANAMON 3528308392 - BATANG','subno'=>6,'transaction'=>'debet','group_id'=>'1','created_at'=> $now, 'updated_at'=> $now],

            
			['id'=>Uuid::uuid4()->getHex(),'chart_name'=>'DANAMON 3528310109 - PEMALANG','chart_code'=>'113.000.007','sub_chart'=>'113.000.','subno'=>7,'transaction'=>'debet','group_id'=>1,'created_at'=> $now, 'updated_at'=> $now],
			['id'=>Uuid::uuid4()->getHex(),'chart_name'=>'PERSEDIAAN UNIT','chart_code'=>'114.100.','sub_chart'=>null,'transaction'=>'debet','subno'=>0,'group_id'=>1,'created_at'=> $now, 'updated_at'=> $now],
			['id'=>Uuid::uuid4()->getHex(),'chart_name'=>'PERSEDIAAN SPAREPART','chart_code'=>'114.200.','sub_chart'=>null,'transaction'=>'debet','subno'=>0,'group_id'=>1,'created_at'=> $now, 'updated_at'=> $now],
			['id'=>Uuid::uuid4()->getHex(),'chart_name'=>'PERSEDIAAN JAKET','chart_code'=>'114.310.','sub_chart'=>null,'transaction'=>'debet','subno'=>0,'group_id'=>1,'created_at'=> $now, 'updated_at'=> $now],
			['id'=>Uuid::uuid4()->getHex(),'chart_name'=>'PERSEDIAAN BARANG PROMOSI LAIN-LAIN','chart_code'=>'114.390.','sub_chart'=>null,'transaction'=>'debet','subno'=>0,'group_id'=>1,'created_at'=> $now, 'updated_at'=> $now],
			['id'=>Uuid::uuid4()->getHex(),'chart_name'=>'PIUTANG SEMENTARA KONSUMEN','chart_code'=>'115.110.','sub_chart'=>null,'trasaction'=>'debet','subno'=>0,'group_id'=>1,'created_at'=> $now, 'updated_at'=> $now],
			['id'=>Uuid::uuid4()->getHex(),'chart_name'=>'PIUTANG CASH KONSUMEN','chart_code'=>'115.120.','sub_chart'=>null,'transaction'=>'debet','subno'=>0,'group_id'=>1,'created_at'=> $now, 'updated_at'=> $now],
			['id'=>Uuid::uuid4()->getHex(),'chart_name'=>'PIUTANG SERVIS & SPAREPART KONSUMEN','chart_code'=>'115.130.','sub_chart'=>null,'transaction'=>'debet','subno'=>0,'group_id'=>1,'created_at'=> $now, 'updated_at'=> $now],
			['id'=>Uuid::uuid4()->getHex(),'chart_name'=>'PIUTANG LAIN-LAIN KONSUMEN','chart_code'=>'115.190.','sub_chart'=>null,'transaction'=>'debet','subno'=>0,'group_id'=>1,'created_at'=> $now, 'updated_at'=> $now],
			['id'=>Uuid::uuid4()->getHex(),'chart_name'=>'PIUTANG UNIT LEASING','chart_code'=>'115.210.','sub_chart'=>null,'transaction'=>'debet','subno'=>0,'group_id'=>1,'created_at'=> $now, 'updated_at'=> $now],
			['id'=>Uuid::uuid4()->getHex(),'chart_name'=>'PIUTANG SUBSIDI LEASING','chart_code'=>'115.230.','sub_chart'=>null,'transaction'=>'debet','subno'=>0,'group_id'=>1,'created_at'=> $now, 'updated_at'=> $now],
			['id'=>Uuid::uuid4()->getHex(),'chart_name'=>'PIUTANG KARYAWAN','chart_code'=>'115.300.','sub_chart'=>null,'transaction'=>'debet','subno'=>0,'group_id'=>1,'created_at'=> $now, 'updated_at'=> $now],
			['id'=>Uuid::uuid4()->getHex(),'chart_name'=>'PIUTANG PIHAK KETIGA','chart_code'=>'115.400.','sub_chart'=>null,'transaction'=>'debet','subno'=>0,'group_id'=>1,'created_at'=> $now, 'updated_at'=> $now],
			['id'=>Uuid::uuid4()->getHex(),'chart_name'=>'TAMPUNGAN PEMBAYARAN LEASING','chart_code'=>'115.500.','sub_chart'=>null,'transaction'=>'debet','subno'=>0,'group_id'=>1,'created_at'=> $now, 'updated_at'=> $now],
			['id'=>Uuid::uuid4()->getHex(),'chart_name'=>'DANA DIBAYAR DIMUKA LAIN-LAIN','chart_code'=>'115.900.','sub_chart'=>null,'transaction'=>'debet','subno'=>0,'group_id'=>1,'created_at'=> $now, 'updated_at'=> $now],
			['id'=>Uuid::uuid4()->getHex(),'chart_name'=>'PPN MASUKAN','chart_code'=>'116.100.','sub_chart'=>null,'transaction'=>'debet','subno'=>0,'group_id'=>1,'created_at'=> $now, 'updated_at'=> $now],
			['id'=>Uuid::uuid4()->getHex(),'chart_name'=>'PPN MASUKAN UNIT','chart_code'=>'116.110.','sub_chart'=>null,'transaction'=>'debet','subno'=>0,'group_id'=>1,'created_at'=> $now, 'updated_at'=> $now],
			['id'=>Uuid::uuid4()->getHex(),'chart_name'=>'PPN MASUKAN SERVIS & SPAREPART','chart_code'=>'116.120.','sub_chart'=>null,'transaction'=>'debet','subno'=>0,'group_id'=>1,'created_at'=> $now, 'updated_at'=> $now],
			['id'=>Uuid::uuid4()->getHex(),'chart_name'=>'PPH 22 DIBAYAR DIMUKA','chart_code'=>'116.130.','sub_chart'=>null,'transaction'=>'debet','subno'=>0,'group_id'=>1,'created_at'=> $now, 'updated_at'=> $now],
			['id'=>Uuid::uuid4()->getHex(),'chart_name'=>'PPH 23 DIBAYAR DIMUKA','chart_code'=>'116.140.','sub_chart'=>null,'transaction'=>'debet','subno'=>0,'group_id'=>1,'created_at'=> $now, 'updated_at'=> $now],
			['id'=>Uuid::uuid4()->getHex(),'chart_name'=>'PPH 25 DIBAYAR DIMUKA','chart_code'=>'116.150.','sub_chart'=>null,'transaction'=>'debet','subno'=>0,'group_id'=>1,'created_at'=> $now, 'updated_at'=> $now],
			['id'=>Uuid::uuid4()->getHex(),'chart_name'=>'TANAH','chart_code'=>'121.000.','sub_chart'=>null,'transaction'=>'debet','subno'=>0,'group_id'=>1,'created_at'=> $now, 'updated_at'=> $now],
			['id'=>Uuid::uuid4()->getHex(),'chart_name'=>'GEDUNG','chart_code'=>'122.000.','sub_chart'=>null,'transaction'=>'debet','subno'=>0,'group_id'=>1,'created_at'=> $now, 'updated_at'=> $now],
			['id'=>Uuid::uuid4()->getHex(),'chart_name'=>'KENDARAAN','chart_code'=>'123.000.','sub_chart'=>null,'transaction'=>'debet','subno'=>0,'group_id'=>1,'created_at'=> $now, 'updated_at'=> $now],
			['id'=>Uuid::uuid4()->getHex(),'chart_name'=>'PERABOT & PERALATAN KANTOR','chart_code'=>'124.000.','sub_chart'=>null,'transaction'=>'debet','subno'=>0,'group_id'=>1,'created_at'=> $now, 'updated_at'=> $now],
			['id'=>Uuid::uuid4()->getHex(),'chart_name'=>'MESIN & PERALATAN BENGKEL','chart_code'=>'125.000.','sub_chart'=>null,'transaction'=>'debet','subno'=>0,'group_id'=>1,'created_at'=> $now, 'updated_at'=> $now],
			['id'=>Uuid::uuid4()->getHex(),'chart_name'=>'HUTANG DAGANG UNIT','chart_code'=>'211.100.','sub_chart'=>null,'transaction'=>'credit','subno'=>0,'group_id'=>2,'created_at'=> $now, 'updated_at'=> $now],
			['id'=>Uuid::uuid4()->getHex(),'chart_name'=>'HUTANG DAGANG SPAREPART','chart_code'=>'211.200.','sub_chart'=>null,'transaction'=>'credit','subno'=>0,'group_id'=>2,'created_at'=> $now, 'updated_at'=> $now],
			['id'=>Uuid::uuid4()->getHex(),'chart_name'=>'HUTANG AKTIVA','chart_code'=>'212.000.','sub_chart'=>null,'transaction'=>'credit','subno'=>0,'group_id'=>2,'created_at'=> $now, 'updated_at'=> $now],
			['id'=>Uuid::uuid4()->getHex(),'chart_name'=>'HUTANG BIAYA','chart_code'=>'213.000.','sub_chart'=>null,'transaction'=>'credit','subno'=>0,'group_id'=>2,'created_at'=> $now, 'updated_at'=> $now],
			['id'=>Uuid::uuid4()->getHex(),'chart_name'=>'HUTANG PPN KELUARAN UNIT','chart_code'=>'214.100.','sub_chart'=>null,'transaction'=>'credit','subno'=>0,'group_id'=>2,'created_at'=> $now, 'updated_at'=> $now],
			['id'=>Uuid::uuid4()->getHex(),'chart_name'=>'HUTANG PPN KELUARAN SERVIS & SPAREPART','chart_code'=>'214.200.','sub_chart'=>null,'transaction'=>'credit','subno'=>0,'group_id'=>2,'created_at'=> $now, 'updated_at'=> $now],
			['id'=>Uuid::uuid4()->getHex(),'chart_name'=>'HUTANG PPN KELUARAN INSENTIF','chart_code'=>'214.300.','sub_chart'=>null,'transaction'=>'credit','subno'=>0,'group_id'=>2,'created_at'=> $now, 'updated_at'=> $now],
			['id'=>Uuid::uuid4()->getHex(),'chart_name'=>'HUTANG BBN','chart_code'=>'215.000.','sub_chart'=>null,'transaction'=>'credit','subno'=>0,'group_id'=>2,'created_at'=> $now, 'updated_at'=> $now],
			['id'=>Uuid::uuid4()->getHex(),'chart_name'=>'HUTANG PADA PEMILIK','chart_code'=>'216.000.','sub_chart'=>null,'transaction'=>'credit','subno'=>0,'group_id'=>2,'created_at'=> $now, 'updated_at'=> $now],
			['id'=>Uuid::uuid4()->getHex(),'chart_name'=>'HUTANG LAIN-LAIN','chart_code'=>'219.000.','sub_chart'=>null,'transaction'=>'credit','subno'=>0,'group_id'=>2,'created_at'=> $now, 'updated_at'=> $now],
			['id'=>Uuid::uuid4()->getHex(),'chart_name'=>'HUTANG BANK','chart_code'=>'221.000.','sub_chart'=>null,'transaction'=>'credit','subno'=>0,'group_id'=>2,'created_at'=> $now, 'updated_at'=> $now],
			['id'=>Uuid::uuid4()->getHex(),'chart_name'=>'HUTANG PADA PIHAK LAIN','chart_code'=>'222.000.','sub_chart'=>null,'transaction'=>'credit','subno'=>0,'group_id'=>2,'created_at'=> $now, 'updated_at'=> $now],
			['id'=>Uuid::uuid4()->getHex(),'chart_name'=>'MODAL','chart_code'=>'310.000.','sub_chart'=>null,'transaction'=>'credit','subno'=>0,'group_id'=>2,'created_at'=> $now, 'updated_at'=> $now],
			['id'=>Uuid::uuid4()->getHex(),'chart_name'=>'DEVIDEN','chart_code'=>'320.000.','sub_chart'=>null,'transaction'=>'credit','subno'=>0,'group_id'=>2,'created_at'=> $now, 'updated_at'=> $now],
			['id'=>Uuid::uuid4()->getHex(),'chart_name'=>'LABA RUGI PERIODE BERJALAN','chart_code'=>'331.000.','sub_chart'=>null,'transaction'=>'credit','subno'=>0,'group_id'=>2,'created_at'=> $now, 'updated_at'=> $now],
			['id'=>Uuid::uuid4()->getHex(),'chart_name'=>'LABA DITAHAN PERIODE LALU','chart_code'=>'332.000.','sub_chart'=>null,'transaction'=>'credit','subno'=>0,'group_id'=>2,'created_at'=> $now, 'updated_at'=> $now],
			['id'=>Uuid::uuid4()->getHex(),'chart_name'=>'PENJUALAN UNIT','chart_code'=>'411.000.','sub_chart'=>null,'transaction'=>'credit','subno'=>0,'group_id'=>3,'created_at'=> $now, 'updated_at'=> $now],
			['id'=>Uuid::uuid4()->getHex(),'chart_name'=>'DISCOUNT OTR','chart_code'=>'412.000.','sub_chart'=>null,'transaction'=>'debet','subno'=>0,'group_id'=>3,'created_at'=> $now, 'updated_at'=> $now],
			['id'=>Uuid::uuid4()->getHex(),'chart_name'=>'DISCOUNT PEMBAYARAN','chart_code'=>'413.000.','sub_chart'=>null,'transaction'=>'debet','subno'=>0,'group_id'=>3,'created_at'=> $now, 'updated_at'=> $now],
			['id'=>Uuid::uuid4()->getHex(),'chart_name'=>'SUBSIDI LEASING','chart_code'=>'414.000.','sub_chart'=>null,'transaction'=>'credit','subno'=>0,'group_id'=>3,'created_at'=> $now, 'updated_at'=> $now],
			['id'=>Uuid::uuid4()->getHex(),'chart_name'=>'HPP UNIT','chart_code'=>'415.000.','sub_chart'=>null,'transaction'=>'debet','subno'=>0,'group_id'=>3,'created_at'=> $now, 'updated_at'=> $now],
			['id'=>Uuid::uuid4()->getHex(),'chart_name'=>'DISCOUNT HPP UNIT','chart_code'=>'416.000.','sub_chart'=>null,'transaction'=>'credit','subno'=>0,'group_id'=>3,'created_at'=> $now, 'updated_at'=> $now],
			['id'=>Uuid::uuid4()->getHex(),'chart_name'=>'PENDAPATAN SERVIS','chart_code'=>'421.000.','sub_chart'=>null,'transaction'=>'credit','subno'=>0,'group_id'=>3,'created_at'=> $now, 'updated_at'=> $now],
			['id'=>Uuid::uuid4()->getHex(),'chart_name'=>'DISCOUNT SERVIS','chart_code'=>'422.000.','sub_chart'=>null,'transaction'=>'debet','subno'=>0,'group_id'=>3,'created_at'=> $now, 'updated_at'=> $now],
			['id'=>Uuid::uuid4()->getHex(),'chart_name'=>'BIAYA KEPERLUAN BENGKEL','chart_code'=>'423.000.','sub_chart'=>null,'transaction'=>'debet','subno'=>0,'group_id'=>3,'created_at'=> $now, 'updated_at'=> $now],
			['id'=>Uuid::uuid4()->getHex(),'chart_name'=>'PENJUALAN SPAREPART','chart_code'=>'431.000.','sub_chart'=>null,'transaction'=>'credit','subno'=>0,'group_id'=>3,'created_at'=> $now, 'updated_at'=> $now],
			['id'=>Uuid::uuid4()->getHex(),'chart_name'=>'DISCOUNT PENJUALAN SPAREPART','chart_code'=>'432.000.','sub_chart'=>null,'transaction'=>'debet','subno'=>0,'group_id'=>3,'created_at'=> $now, 'updated_at'=> $now],
			['id'=>Uuid::uuid4()->getHex(),'chart_name'=>'RETUR PENJUALAN SPAREPART','chart_code'=>'433.000.','sub_chart'=>null,'transaction'=>'debet','subno'=>0,'group_id'=>3,'created_at'=> $now, 'updated_at'=> $now],
			['id'=>Uuid::uuid4()->getHex(),'chart_name'=>'HPP SPAREPART','chart_code'=>'434.000.','sub_chart'=>null,'transaction'=>'debet','subno'=>0,'group_id'=>3,'created_at'=> $now, 'updated_at'=> $now],
			['id'=>Uuid::uuid4()->getHex(),'chart_name'=>'DISCOUNT HPP SPAREPART','chart_code'=>'435.000.','sub_chart'=>null,'transaction'=>'credit','subno'=>0,'group_id'=>3,'created_at'=> $now, 'updated_at'=> $now],
			['id'=>Uuid::uuid4()->getHex(),'chart_name'=>'PENDAPATAN PENJUALAN AKTIVA','chart_code'=>'442.000.','sub_chart'=>null,'transaction'=>'credit','subno'=>0,'group_id'=>3,'created_at'=> $now, 'updated_at'=> $now],
			['id'=>Uuid::uuid4()->getHex(),'chart_name'=>'PENDAPATAN BUNGA BANK','chart_code'=>'443.000.','sub_chart'=>null,'transaction'=>'credit','subno'=>0,'group_id'=>3,'created_at'=> $now, 'updated_at'=> $now],
			['id'=>Uuid::uuid4()->getHex(),'chart_name'=>'PENDAPATAN KOMISI DARI MAIN DEALER','chart_code'=>'444.000.','sub_chart'=>null,'transaction'=>'credit','subno'=>0,'group_id'=>3,'created_at'=> $now, 'updated_at'=> $now],
			['id'=>Uuid::uuid4()->getHex(),'chart_name'=>'PENDAPATAN KOMISI DARI LEASING','chart_code'=>'445.000.','sub_chart'=>null,'transaction'=>'credit','subno'=>0,'group_id'=>3,'created_at'=> $now, 'updated_at'=> $now],
			['id'=>Uuid::uuid4()->getHex(),'chart_name'=>'PENDAPATAN SUBSIDI DARI LEASING','chart_code'=>'446.000.','sub_chart'=>null,'transaction'=>'credit','subno'=>0,'group_id'=>3,'created_at'=> $now, 'updated_at'=> $now],
			['id'=>Uuid::uuid4()->getHex(),'chart_name'=>'PENDAPATAN LAIN-LAIN','chart_code'=>'449.000.','sub_chart'=>null,'transaction'=>'credit','subno'=>0,'group_id'=>3,'created_at'=> $now, 'updated_at'=> $now],
			['id'=>Uuid::uuid4()->getHex(),'chart_name'=>'GAJI KARYAWAN','chart_code'=>'511.000.','sub_chart'=>null,'transaction'=>'debet','subno'=>0,'group_id'=>3,'created_at'=> $now, 'updated_at'=> $now],
			['id'=>Uuid::uuid4()->getHex(),'chart_name'=>'TUNJANGAN KARYAWAN','chart_code'=>'512.000.','sub_chart'=>null,'transaction'=>'debet','subno'=>0,'group_id'=>3,'created_at'=> $now, 'updated_at'=> $now],
			['id'=>Uuid::uuid4()->getHex(),'chart_name'=>'PIKET DAN LEMBUR','chart_code'=>'513.000.','sub_chart'=>null,'transaction'=>'debet','subno'=>0,'group_id'=>3,'created_at'=> $now, 'updated_at'=> $now],
			['id'=>Uuid::uuid4()->getHex(),'chart_name'=>'PERJALANAN DINAS','chart_code'=>'514.000.','sub_chart'=>null,'transaction'=>'debet','subno'=>0,'group_id'=>3,'created_at'=> $now, 'updated_at'=> $now],
			['id'=>Uuid::uuid4()->getHex(),'chart_name'=>'OPERASIONAL UMUM','chart_code'=>'515.000.','sub_chart'=>null,'transaction'=>'debet','subno'=>0,'group_id'=>3,'created_at'=> $now, 'updated_at'=> $now],
			['id'=>Uuid::uuid4()->getHex(),'chart_name'=>'PERBAIKAN & PERAWATAN','chart_code'=>'517.000.','sub_chart'=>null,'transaction'=>'debet','subno'=>0,'group_id'=>3,'created_at'=> $now, 'updated_at'=> $now],
			['id'=>Uuid::uuid4()->getHex(),'chart_name'=>'PERIJINAN','chart_code'=>'518.000.','sub_chart'=>null,'transaction'=>'debet','subno'=>0,'group_id'=>3,'created_at'=> $now, 'updated_at'=> $now],
			['id'=>Uuid::uuid4()->getHex(),'chart_name'=>'PENYUSUTAN','chart_code'=>'519.000.','sub_chart'=>null,'transaction'=>'debet','subno'=>0,'group_id'=>3,'created_at'=> $now, 'updated_at'=> $now],
			['id'=>Uuid::uuid4()->getHex(),'chart_name'=>'ADMINISTRASI KANTOR','chart_code'=>'520.000.','sub_chart'=>null,'transaction'=>'debet','subno'=>0,'group_id'=>3,'created_at'=> $now, 'updated_at'=> $now],
			['id'=>Uuid::uuid4()->getHex(),'chart_name'=>'RESEARCH & DEVELOPMENT','chart_code'=>'521.000.','sub_chart'=>null,'transaction'=>'debet','subno'=>0,'group_id'=>3,'created_at'=> $now, 'updated_at'=> $now],
			['id'=>Uuid::uuid4()->getHex(),'chart_name'=>'PEMASARAN','chart_code'=>'522.000.','sub_chart'=>null,'transaction'=>'debet','subno'=>0,'group_id'=>3,'created_at'=> $now, 'updated_at'=> $now],
			['id'=>Uuid::uuid4()->getHex(),'chart_name'=>'SUMBANGAN','chart_code'=>'523.000.','sub_chart'=>null,'transaction'=>'debet','subno'=>0,'group_id'=>3,'created_at'=> $now, 'updated_at'=> $now],
			['id'=>Uuid::uuid4()->getHex(),'chart_name'=>'JASA BANK','chart_code'=>'524.000.','sub_chart'=>null,'transaction'=>'debet','subno'=>0,'group_id'=>3,'created_at'=> $now, 'updated_at'=> $now],
			['id'=>Uuid::uuid4()->getHex(),'chart_name'=>'BIAYA PAJAK','chart_code'=>'525.000.','sub_chart'=>null,'transaction'=>'debet','subno'=>0,'group_id'=>3,'created_at'=> $now, 'updated_at'=> $now],
			['id'=>Uuid::uuid4()->getHex(),'chart_name'=>'BUNGA PINJAMAN','chart_code'=>'540.000.','sub_chart'=>null,'transaction'=>'debet','subno'=>0,'group_id'=>3,'created_at'=> $now, 'updated_at'=> $now],
			['id'=>Uuid::uuid4()->getHex(),'chart_name'=>'BIAYA LAIN-LAIN','chart_code'=>'550.000.','sub_chart'=>null,'transaction'=>'debet','subno'=>0,'group_id'=>3,'created_at'=> $now, 'updated_at'=> $now],
			['id'=>Uuid::uuid4()->getHex(),'chart_name'=>'KOREKSI','chart_code'=>'610.000.','sub_chart'=>null,'transaction'=>'debet','subno'=>0,'group_id'=>3,'created_at'=> $now, 'updated_at'=> $now],
        ]);
    }
}

