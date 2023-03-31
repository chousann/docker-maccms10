<?php
namespace app\admin\controller;

class Conch extends Base
{
    public function theme()
    {
        if (Request()->isPost()) {
            $config = input();

            $nav = ['type','mid','aid','top','bottom'];
            foreach($nav as $k=>$v){
                $a = implode(",", $config['nav'][$v]['PC']);
                $b = implode(",", $config['nav'][$v]['mobile']);
                $config['nav'][$v]['PC'] = $a;
                $config['nav'][$v]['mobile'] = $b;
            }
            $config['theme']['search']['filter'] = implode(",", $config['theme']['search']['filter']);
            $config['actor']['show']['filter'] = implode(",", $config['actor']['show']['filter']);
            
            $config_old = config("conchvip");
            $config_new = array_merge($config_old, $config);
            $res = mac_arr2file(APP_PATH . "extra/conchvip.php", $config_new);
            if ($res === false) {
                return $this->error("保存失败，请重试!");
            }
            return $this->success("保存成功!");
        }
        $this->assign("conch", config("conchvip"));
        return $this->fetch("admin@conch/theme");
    }

}
