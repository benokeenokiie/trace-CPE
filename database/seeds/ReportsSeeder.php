<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use App\ReportInfos;

class ReportsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('report_infos')->delete();

        ReportInfos::create(
        	array(
        		'drivers_name' => 'Jin Kazama',
        		'plate_number' => 'RLS-502',
        		'description' => 'Tekken Character. Bida-bida',
        		'partner_screen_name' => 'Tekken' 
    		)
    	);

        ReportInfos::create(
        	array(
        		'drivers_name' => 'Ling Xiaoyou',
        		'plate_number' => 'HOQ-924',
        		'description' => 'Tekken Character. Babaeng maliksi. Kaasar. Laging ginagamit ni Ben.',
        		'partner_screen_name' => 'Panda' 
    		)
    	);

        ReportInfos::create(
        	array(
        		'drivers_name' => 'Asuka Kazama',
        		'plate_number' => 'YDG-796',
        		'description' => 'Tekken Character. Paborito ni Benok gamitin kasi malakas.',
        		'partner_screen_name' => 'Basahan' 
    		)
    	);

    	ReportInfos::create(
        	array(
        		'drivers_name' => 'Martial Law',
        		'plate_number' => 'KLA-025',
        		'description' => 'Tekken Character. EDSA EDSA EDSA EDSA EDSA EDSA EDSA.',
        		'partner_screen_name' => 'Marcos' 
    		)
    	);

    	ReportInfos::create(
        	array(
        		'drivers_name' => 'Eddy Gordon',
        		'plate_number' => 'HJY-091',
        		'description' => 'Tekken Character. Madaya madaya madaya puro paa O X lang gamitin mo button masher panalo ka na',
        		'partner_screen_name' => 'Capoeira' 
    		)
    	);

    	ReportInfos::create(
        	array(
        		'drivers_name' => 'Zafina',
        		'plate_number' => 'NBB-009',
        		'description' => 'Tekken Character. Spider woman. Kaasar laging sa baba tumitira.',
        		'partner_screen_name' => 'Insekto' 
    		)
    	);

    	ReportInfos::create(
        	array(
        		'drivers_name' => 'Lili',
        		'plate_number' => 'OIU-123',
        		'description' => 'Tekken Character. Maganda at sexy. Mayaman. Mahaba buhok. Madaya din',
        		'partner_screen_name' => 'Collins' 
    		)
    	);

    	ReportInfos::create(
        	array(
        		'drivers_name' => 'Mara Olivar',
        		'plate_number' => 'CLD-567',
        		'description' => 'Wala. Epal. Lang. Siya.',
        		'partner_screen_name' => 'Batman' 
    		)
    	);

    	ReportInfos::create(
        	array(
        		'drivers_name' => 'Paul Phoenix',
        		'plate_number' => 'GFR-091',
        		'description' => 'Tekken Character. Malakas.',
        		'partner_screen_name' => 'Hawk' 
    		)
    	);

    	ReportInfos::create(
        	array(
        		'drivers_name' => 'Sony Vaio',
        		'plate_number' => 'SNY-143',
        		'description' => 'Brand ng device.',
        		'partner_screen_name' => 'Sony' 
    		)
    	);

    	ReportInfos::create(
        	array(
        		'drivers_name' => 'Harry Potter',
        		'plate_number' => 'HRY-9876',
        		'description' => 'Magician',
        		'partner_screen_name' => 'Voldemort' 
    		)
    	);
    }
}
