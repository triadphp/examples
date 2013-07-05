<?php

namespace MySimpleService\Models;

class Paging
{
    protected $limit;
    protected $offset;
    protected $request;

    public function __construct(\Triad\Request $request) {
        $this->request = $request;
        $this->limit = 10;
        $this->offset = 0;

        if (isset($request->params["limit"]))
            $this->limit = (int)$request->params["limit"];

        if (isset($request->params["offset"]))
            $this->offset = (int)$request->params["offset"];
    }

    public function addFrame(&$data) {
        $urlPrev = $this->request->getPath() . "?" . http_build_query(
            array("limit" => $this->limit, "offset" => $this->offset - $this->limit) + $this->request->getParams()
        );

        $urlNext = $this->request->getPath() . "?" . http_build_query(
            array("limit" => $this->limit, "offset" => $this->offset + $this->limit) + $this->request->getParams()
        );

        $paging = array();

        // display next if there is next page possible
        if (count($data) == $this->limit)
            $paging["next"] = $urlNext;

        // display prev if there is previous page
        if ($this->offset - $this->limit >= 0)
            $paging["prev"] = $urlPrev;

        return array("data" => $data, "paging" => $paging);
    }

    /**
     * @return string LIMIT [from], [to]
     */
    public function getLimit() {
        return " LIMIT ".(int)$this->limit . " OFFSET ".(int)$this->offset . " ";
    }
}