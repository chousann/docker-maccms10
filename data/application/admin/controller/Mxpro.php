<?php
namespace app\admin\controller;


class Mxpro extends Base
	{
		public function mxproset()
		{
			if (Request()->isPost()) {
				$config = input();
				$config_new["mxprocms"] = $config["mxprocms"];
				$config_old = config("mxprost");
				$config_new = array_merge($config_old, $config_new);
				$res = mac_arr2file(APP_PATH . "extra/mxprost.php", $config_new);
				if ($res === false) {
					return $this->error("保存失败，请重试!");
				}
				return $this->success("保存成功!");
			}
			$this->assign("config", config("mxprost"));
			return $this->fetch("admin@system/mxprocms");
		}
	}
