<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
class SeasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

     public function generateRandomOceanName()
     {
         $name = array('北大西洋', '太平洋', '印度洋', '北极海域', '大西洋', '東太平洋');
         
         $sid = rand(1, 6); // 随机生成 sid，这里假设 sid 的范围是 1 到 6
     
         // 使用 switch 语句根据不同的 sid 设置 $ocean_name
         switch ($sid) {
             case 1:
                 $ocean_name = '北大西洋';
                 break;
             case 2:
                 $ocean_name = '太平洋';
                 break;
             case 3:
                 $ocean_name = '印度洋';
                 break;
             case 4:
                 $ocean_name = '北极海域';
                 break;
             case 5:
                 $ocean_name = '大西洋';
                 break;
             case 6:
                 $ocean_name = '東太平洋';
                 break;
             default:
                 // 在没有匹配的情况下，设置默认值
                 $ocean_name = '未知海域';
         }
     
         return $ocean_name;
     }

    public function generateRandomRegion(){
        $name = array('西半球', '東半球', '北半球', '南半球');
        $random_word = $name[array_rand($name)];
        $Region = $random_word;
        return $Region;
    }

    public function generateRandomArea_sq_km(){
        $Area_sq_km = rand(14056000, 106400000);
        return $Area_sq_km;
    }
    public function generateRandomAvg_depth(){
        $Avg_depth = rand(1000, 5000);
        return $Avg_depth;
    }

    public function generateRandomGeomorphology(){
        $ocean_landscapes = array(
            '珊瑚礁',
            '深海峽谷',
            '漩渦湖',
            '海底山脉',
            '沉船墓地',
            '碧綠礁石',
            '沉沒的城市',
            '砂石海床',
            '漂浮冰山',
            '碧藍海洋',
            '紅珊瑚海',
            '火山海口',
            '海藻森林',
            '漂浮垃圾帶',
            '水母湖',
            '孤島環礁',
            '沙灘河口',
            '藍光海灘',
            '颶風暴潮',
            '金色日落湾'
        );
        $ocean_landscapes = $ocean_landscapes[array_rand($ocean_landscapes)];
        
        return $ocean_landscapes;
    }
    public function run(): void
    {
        for ($i=0; $i < 32; $i++) { 
            
            $ocean_name=$this->generateRandomOceanName();
            $region=$this->generateRandomRegion();
            $area_sq_km=$this->generateRandomArea_sq_km();
            $avg_depth=$this->generateRandomAvg_depth();
            $geomorphology=$this->generateRandomGeomorphology();
            $random_datetime = Carbon::now()->subDays(rand(1, 365));
    
            // 時間是用Carbon::now()現在時間
            DB::table('seas')->insert([
                'ocean_name' =>$ocean_name,
                'region'=>$region,
                'area_sq_km'=>$area_sq_km,
                'avg_depth'=>$avg_depth,
                'geomorphology'=>$geomorphology,
                'created_at'=>$random_datetime,
                'updated_at'=>$random_datetime
            ]);
        }

    
    }
}
