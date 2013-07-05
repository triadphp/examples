<?php

namespace MySimpleService\Models;

use \Triad\Request;
use \Triad\Model;

class LogRepository extends Model
{
    public function logError(\Exception $e, Request $request) {
        $this->db->exec("INSERT INTO error_log(
                request_method,
                request_path,
                request_params,
                message,
                class,
                trace,
                created_time
            ) VALUES (
                :request_method,
                :request_path,
                :request_params,
                :message,
                :class,
                :trace,
                :created_time
            )",
            array(
                "request_method" => $request->getMethod(),
                "request_path" => $request->getPath(),
                "request_params" => json_encode($request->getParams()),
                "message" => $e->getMessage(),
                "class" => get_class($e),
                "trace" => $e->getTraceAsString(),
                "created_time" => time(),
            ));
    }

}