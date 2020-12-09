<?php

use Illuminate\Database\Seeder;

class M_ShipmentsStatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('m_shipments_statuses')->insert([
            [
                'id' => 1,
                'shipment_status_name' => '入金待ち',
            ],
            [
                'id' => 2,
                'shipment_status_name' => '発送処理中',
            ],
            [
                'id' => 3,
                'shipment_status_name' => '発送処理済',
            ],
            [
                'id' => 4,
                'shipment_status_name' => '欠品中',
            ],
            [
                'id' => 5,
                'shipment_status_name' => '発送処理済',
            ],
        ]);
    }
}
