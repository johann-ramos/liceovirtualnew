YUI().use('datasource-io', 'datasource-xmlschema', 'node', function(Y){
    var dataSource = new Y.DataSource.IO({source:"./data.xml"});
    dataSource.plug(Y.Plugin.DataSourceXMLSchema, {
        schema: {
            resultListLocator: "item",resultFields: [{key:"text", locator:"."}]
        }
    });

    function loadXML(){
        dataSource.sendRequest({
            callback: {
                success: function(e){
                    var xmlData = "";
                    Y.Array.each(e.response.results, function(item){
                        xmlData += item.text + '\n'});
                        document.getElementById('contents').value = xmlData;
                },
                failure: function(e){
                    alert(e.error.message);
                }
            }
        });
    }

    Y.on('click', loadXML, "#go");
});

