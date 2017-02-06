<?PHP
$data = '{
  "alarms": [],
  "links": [
    {"uid": 0, "alarm": "critical"},
    {"uid": 2, "alarm": "warning"}],
  "nodes": [
    {"uid": 0,"alarm":"critical"},
    {"uid": 2,"alarm":"critical"},
    {"uid": 4,"alarm":"warning"},
    {"uid": 1,"alarm":"warning"}]
}'
;
header('Content-Type: application/json','Access-Control-Allow-Origin : *');
echo $data;

