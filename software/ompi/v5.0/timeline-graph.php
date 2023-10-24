<?php
$topdir = "../../..";
include_once("$topdir/includes/timeline-graph.inc");

$vpos = 0;
$graph = 0;
$data = array();

# Oldest milestone date
$first_date = "2021-03-11";

# The graph needs about a year time span for the title to display properly.
# So pick either a year beyond the first date or 90 days beyond now,
# whichever is greater.

# 3 months from today
$ts1 = time() + (90 * 24 * 60 * 60);
# 1 year beyond the first date (this i
$ts2 = mktime(0, 0, 0, 3, 11, 2022);
# 1 month before the first date:
$series_start = new DateTime($first_date);
$series_start->modify("-1 month");

$ts = (int) max($ts1, $ts2);
$beyond_end_date = strftime("%Y-%m-%d", $ts);

//////////////////////////////////////////////////////////////////////////
// v5.0 release series
series("v5.0 series", $series_start->format("Y-m-d"), $beyond_end_date, $data, $vpos, $graph);
milestone("branch from main", "2021-03-11", $data, $vpos);
milestone("v5.0.0rc1", "2021-09-30", $data, $vpos);
milestone("v5.0.0rc2", "2021-10-18", $data, $vpos);
milestone("v5.0.0rc3", "2022-03-08", $data, $vpos);
milestone("v5.0.0rc4", "2022-03-31", $data, $vpos);
milestone("v5.0.0rc5", "2022-04-07", $data, $vpos);
milestone("v5.0.0rc6", "2022-04-15", $data, $vpos);
milestone("v5.0.0rc7", "2022-05-13", $data, $vpos);
milestone("v5.0.0rc8", "2022-09-29", $data, $vpos);
milestone("v5.0.0rc9", "2022-10-21", $data, $vpos);
milestone("v5.0.0rc10", "2023-02-02", $data, $vpos);
milestone("v5.0.0rc11", "2023-04-06", $data, $vpos);
milestone("v5.0.0rc12", "2023-05-19", $data, $vpos);
milestone("v5.0.0rc13", "2023-09-29", $data, $vpos);
milestone("v5.0.0rc14", "2023-10-17", $data, $vpos);
milestone("v5.0.0rc15", "2023-10-19", $data, $vpos);
milestone("v5.0.0rc16", "2023-10-24", $data, $vpos);

// Party on
$graph->CreateSimple($data);
$graph->Stroke();
