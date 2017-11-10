<?php

use App\JournalSetting;
use Illuminate\Database\Seeder;
use Ramsey\Uuid\Uuid;

class JournalSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $js = new JournalSetting();
        $js->id = Uuid::uuid4()->getHex();
        $js->name = 'vehicle.sales.cash';
        $js->chart_code = '115.120.';
        $js->formula = 'price_otr&-&price_bbn';
        $js->queue = 1;
        $js->save();

        $js = new JournalSetting();
        $js->id = Uuid::uuid4()->getHex();
        $js->name = 'vehicle.sales.cash';
        $js->chart_code = '412.000.';
        $js->formula = 'price_otr';
        $js->queue = 2;
        $js->save();

        $js = new JournalSetting();
        $js->id = Uuid::uuid4()->getHex();
        $js->name = 'vehicle.sales.cash';
        $js->chart_code = '411.000.';
        $js->formula = '(&price_otr&-&price_disc&-&price_bbn&)&/&1.1&+&price_disc';
        $js->queue = 3;
        $js->save();

        $js = new JournalSetting();
        $js->id = Uuid::uuid4()->getHex();
        $js->name = 'vehicle.sales.cash';
        $js->chart_code = '215.000.';
        $js->formula = 'price_bbn';
        $js->queue = 4;
        $js->save();

        $js = new JournalSetting();
        $js->id = Uuid::uuid4()->getHex();
        $js->name = 'vehicle.sales.cash';
        $js->chart_code = '214.100.';
        $js->formula = '(&price_otr&-&price_bbn&-&(&price_otr&-&price_disc&-&price_bbn&)&/&1.1&+&price_disc';
        $js->queue = 4;
        $js->save();
    }
}
