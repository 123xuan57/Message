<?php

use Illuminate\Database\Seeder;
use App\Msg;

class MsgTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //清空原始数据
        DB::table('msgs')->delete();

        //创建新纪录
        for($i=0;$i<3;$i++) {
        Msg::create([
            'title' => '广州迪奥信息科技有限公司简介',
            'author' => '迪奥科技' ,
            'content' => '广州迪奥信息科技有限公司，是一家以电子商务数据挖掘为技术核心的互联网公司。公司致力于为广大电子商务商家打造一个集数据收集、数据仓库、数据挖掘服务于一体的云计算平台，帮助淘宝商家快速掌握行业竞争态势、管理老顾客、个性化推荐、商品定价、营销推广建议。'

            ]);
         }

        for($i=0;$i<20;$i++) {
        	Msg::create([
        	'title' => '留言'.$i ,
        	'author' => '吴胜国' ,
        	'content' => 'Hello, 广州迪奥信息科技有限公司'

        	]);
        }
        
    }
}
