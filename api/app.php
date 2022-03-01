<?php
    /*
    error-00   没有请求id
    error-01   请求id不存在
    error-02   数据错误
    error-03   无数据
    */
    date_default_timezone_set('Asia/Shanghai');//设置默认时区
    //判断是否存在请求
    if (isset($_GET["id"])) {
        $id=$_GET["id"];
        //判断客户端id
        //绊爱日历请求id
        if($id=="0630")
        {
            $client_date=$_GET["date"];
            //判断请求数据是否与数据库时期匹配
            if ($client_date == date("m-d")) 
            {
                $dir="./videos/KizunaAI";
                $video_floder=scandir($dir);//获取视频主目录下所有文件夹
                //遍历数组
                foreach($video_floder as $i)
                {
                    //根据客户端传来的日期确定相应名称的文件夹
                    if($client_date == $i)
                    {
                        $video=scandir($dir."/".$i);//获取视频分目录下所有文件
                        $new_video=array_slice($video,2);//截取数组
                        if(count($new_video) > 1)//count($new_video)获取数组长度
                        {
                            $rand_video=$new_video[array_rand($new_video)];//随机获取数组元素
                            $bcak_dir=$dir."/".$i."/".$rand_video;
                            echo $bcak_dir;
                        }
                        else
                        {
                            $bcak_dir=$dir."/".$i."/".$new_video[0];
                            echo $bcak_dir;
                        }
                    }
                }
            } 
            else
            {
                echo "error-02";
            }
        }
        else
        {
            echo "error-01";
        }
    }
    else
    {
        echo "error-00";
    }
?>