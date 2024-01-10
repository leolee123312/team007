<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class FishesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */


    public function generateRandomFishes_name(){
        $fish_types = array(
            '金枪鱼',
            '鲨鱼',
            '海马',
            '热带鱼',
            '鲈鱼',
            '刺豚',
            '海龟',
            '海豚',
            '章鱼',
            '海星',
            '斑马鱼',
            '鳗鱼',
            '帝王蟹',
            '虎鲸',
            '鳐鱼',
            '鱼群',
            '螃蟹',
            '鱼鹰',
            '鳕鱼',
            '海龙',
        );
        $fish_types = $fish_types[array_rand($fish_types)];
        
        return $fish_types;
    }
    public function generateRandomLongest(){
        $Longest = rand(10, 100);
        return $Longest;
    }
    public function generateRandomShortest(){
        $Longest = rand(100, 200);
        return $Longest;
    }
    public function generateRandomStart() {
        // 生成随机的开始日期
        $startTimestamp = rand(strtotime('2022-01-01'), strtotime('2022-12-31'));
        $startDate = date('Y-m-d', $startTimestamp);
    
        return $startDate;
    }
    
    public function generateRandomEnd() {
        // 生成随机的结束日期，可以在开始日期之后
        
        $startTimestamp = strtotime($this->generateRandomStart());
        $endTimestamp = strtotime(' -3 months', $startTimestamp);

        $endDate = date('Y-m-d', $endTimestamp);

        if($endTimestamp<$startTimestamp){
            $endDate = strtotime('+2 year', $endTimestamp);
            $mounthDate = date('Y-m-d', $endDate);
            return $mounthDate;
        }
    
        return $endDate;
    }

    
    public function generateRandomLightest_weight(){
        $Lightest_weight = rand(100, 200);
        return $Lightest_weight;
    }
    public function generateRandomHeaviest_weight(){
        $Heaviest_weight = rand(200, 300);
        return $Heaviest_weight;
    }
    public function run(): void
    {
        for ($i=0; $i < 87; $i++) { 
            
            $Fishes_name=$this->generateRandomFishes_name();
            $longest=$this->generateRandomLongest();
            $shortest=$this->generateRandomShortest();
            $start=$this->generateRandomStart();
            $end=$this->generateRandomEnd();
            $lightest_weight=$this->generateRandomLightest_weight();
            $heaviest_weight=$this->generateRandomHeaviest_weight();
            $random_datetime = Carbon::now()->subDays(rand(1, 365));
    
            // 時間是用Carbon::now()現在時間
            DB::table('fishes')->insert([
                'name' =>$Fishes_name,
                'sid' =>rand(1,6),
                'longest'=>$longest,
                'shortest'=>$shortest,
                'start'=>$start,
                'end'=>$end,
                'lightest_weight'=>$lightest_weight,
                'heaviest_weight'=>$heaviest_weight,
                'created_at'=>$random_datetime,
                'updated_at'=>$random_datetime
            ]);
        }
    }
}

// 這就是形成資料
// seeder = 生成資料