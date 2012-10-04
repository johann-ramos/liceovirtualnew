YUI().use('datasource-io', 'datasource-jsonschema', 'node', function(Y) {
    var dataSource = new Y.DataSource.IO({source:"./data.json"});
    dataSource.plug(Y.Plugin.DataSourceJSONSchema, {
        schema: {
            resultListLocator: "list", resultFields: ["name"]
        }
    });

    function loadJSON(){
        dataSource.sendRequest({
            callback: {
                success: function(e){
                    var jsonData = "";
                    Y.Array.each(e.response.results, function(item){
                        jsonData += item.name + ‹\n›
                    });
                    document.getElementById(‹contents›).value = jsonData;
                },
                
                failure: function(e){
                    alert(e.error.message);
                }
            }
        });
    }
    
    Y.on('click', loadJSON, "#go");
});

