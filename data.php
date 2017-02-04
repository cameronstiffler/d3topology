<?PHP
$data = '{
  "nodes":[
    {"name":"Myriel","group":"1"},
    {"name":"Napoleon","group":"2"},
    {"name":"Mlle.Baptistine","group":"3"},
    {"name":"Mme.Magloire","group":"4"},
    {"name":"CountessdeLo","group":"5"},
    {"name":"Geborand","group":"2"},
    {"name":"Champtercier","group":"2"},
    {"name":"Cravatte","group":"1"}
  ],
  "links":[
    {"source":"1","target":"0","value":"1"},
    {"source":"2","target":"0","value":"3"},
    {"source":"3","target":"0","value":"1"},
    {"source":"3","target":"2","value":"6"},
    {"source":"4","target":"0","value":"1"},
    {"source":"5","target":"0","value":"1"},
    {"source":"2","target":"0","value":"1"},
    {"source":"4","target":"0","value":"1"}
  ]
}';
header('Content-Type: application/json','Access-Control-Allow-Origin : *');
echo $data;

