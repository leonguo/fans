<?php
/**
 * User: wings
 * Date: 2016/12/13
 * Time: 9:49
 */

class DateHelper {

    /**
     * 根据开始日期和结束日期组成数组 按周
     * @param string $start_day
     * @param string $end_day
     * @return array
     */
    public static function dateWeek($start_day, $end_day)
    {
        $start_year = intval(date('Y', strtotime($start_day)));
        $start_week = intval(date('W', strtotime($start_day)));
        $end_year = intval(date('Y', strtotime($end_day)));
        $end_week = intval(date('W', strtotime($end_day)));
        $data = [];

        for ($y = $start_year; $y <= $end_year; $y++) {
            $maxWeek = $end_week;
            $minWeek = $start_week;
            if ($y < $end_year) {
                $maxWeek = date("W", mktime(0, 0, 0, 12, 28, $y));
            }
            if ($y > $start_year) {
                $minWeek = 1;
            }
            for ($w = $minWeek; $w <= $maxWeek; $w++) {
                if ($w < 10) {
                    $w = '0' . $w;
                }
                $data[$y . $w] = [
                    'date' => date('Y-m-d', strtotime($y . 'W' . strval($w)))
                ];
            }
        }
        $data[$start_year . $start_week]['date'] = $start_day;
        return $data;
    }

    /**
     * 根据开始日期和结束日期组成数组 按月
     * @param $start_day
     * @param $end_day
     * @return array
     */
    public static function dateYear($start_day, $end_day)
    {
        $start_year = intval(date('Y', strtotime($start_day)));
        $start_month = intval(date('m', strtotime($start_day)));
        $end_year = intval(date('Y', strtotime($end_day)));
        $end_month = intval(date('m', strtotime($end_day)));
        $data = [];

        for ($y = $start_year; $y <= $end_year; $y++) {
            $maxMonth = $end_month;
            $minMonth = $start_month;
            if ($y < $end_year) {
                $maxMonth = 12;
            }
            if ($y > $start_year) {
                $minMonth = 1;
            }
            for ($m = $minMonth; $m <= $maxMonth; $m++) {
                if ($m < 10) {
                    $m = '0' . $m;
                }
                $data[$y . $m] = ['date' => $start_year . '-' . $m . '-01'];
            }
        }
        $data[$start_year . $start_month]['date'] = $start_day;
        return $data;
    }

    /**
     * 统计周数据特殊处理
     * @param $data
     * @param $end_day
     */
    public static function formatDate(&$data, $end_day)
    {
        $dataKeys = array_keys($data);
        foreach ($dataKeys as $k => $v) {
            if (isset($dataKeys[$k + 1])) {
                $data[$dataKeys[$k]]['date'] = $data[$dataKeys[$k]]['date'] . '~' . $data[$dataKeys[$k + 1]]['date'];
            } else {
                $data[$dataKeys[$k]]['date'] = $data[$dataKeys[$k]]['date'] . '~' . $end_day;
            }
        }
    }

    /**
     * 统计月数据特殊处理
     * @param $data
     */
    public static function formatYearDate(&$data)
    {
        foreach ($data as $k => $v) {
            $data[$k]['date'] = $v['date'] . '#';
        }
    }
}