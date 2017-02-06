<?PHP
$data = '{
  "graph": [],
  "links": [
    {"source": 0, "target": 1},
    {"source": 0, "target": 2},
    {"source": 0, "target": 3},
    {"source": 0, "target": 4},
    {"source": 0, "target": 5},
    {"source": 0, "target": 6},
    {"source": 1, "target": 3},
    {"source": 1, "target": 4},
    {"source": 1, "target": 5},
    {"source": 1, "target": 6},
    {"source": 2, "target": 4},
    {"source": 2, "target": 5},
    {"source": 2, "target": 6},
    {"source": 3, "target": 5},
    {"source": 3, "target": 6},
    {"source": 5, "target": 6},
    {"source": 0, "target": 7},
    {"source": 1, "target": 8},
    {"source": 2, "target": 9},
    {"source": 3, "target": 10}],
  "nodes": [
    {"uid": 0, "score": 0, "id": "Data Base 3", "type": "circle", "entity":"db"},
    {"uid": 1, "score": 0.2, "id": "Data Base 2", "type": "circle", "entity":"db"},
    {"uid": 2, "score": 0.4, "id": "Data Base 1", "type": "circle", "entity":"db"},
    {"uid": 3, "score": 0.6, "id": "Router 50", "type": "circle", "entity":"router"},
    {"uid": 4, "score": 0.8, "id": "Wan 2", "type": "circle", "entity":"wan"},
    {"uid": 5, "score": 1, "id": "Data Base 12", "type": "circle", "entity":"db"},
    {"uid": 6, "score": 0, "id": "Wan", "type": "square", "entity":"wan"},
    {"uid": 7, "score": 0.2, "id": "Router 34", "type": "square","entity":"router"},
    {"uid": 8, "score": 0.4, "id": "Router 3", "type": "square","entity":"router"},
    {"uid": 9, "score": 0.6, "id": "Wan 3", "type": "square","entity":"wan"},
    {"uid": 10, "score": 0.8, "id": "Router 1", "type": "square","entity":"router"},
    {"uid": 11, "score": 1, "id": "Router 2", "type": "square","entity":"router"}],
  "directed": false,
  "multigraph": false
}'
;
header('Content-Type: application/json','Access-Control-Allow-Origin : *');
echo $data;

