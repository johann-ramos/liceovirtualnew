YUI().use('datasource-io', 'datasource-textschema', 'node',
function(Y) {
var dataSource = new Y.DataSource.IO({source:"./data.csv"});
dataSource.plug(Y.Plugin.DataSourceTextSchema, {
schema: {
resultDelimiter: "\n",
fieldDelimiter: ",",
resultFields: ["id","name"]
}
});
function loadCSV(){
dataSource.sendRequest({
callback: {
success: function(e){
var csvData = "";
Y.Array.each(e.response.results, function(item)
{
csvData += item.id + ": " + item.name + '\n'
});
document.getElementById('contents').value = csvData;
},
failure: function(e){
alert(e.error.message);
}
}
});
}
Y.on(‹click›, loadCSV, "#go");
});

