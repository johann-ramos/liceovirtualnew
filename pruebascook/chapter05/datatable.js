YUI().use("yui2-datatable", function(Y){
    var YAHOO = Y.YUI2;
    var dataSource = new YAHOO.util.DataSource(YAHOO.util.Dom.get("cooktable"));
    dataSource.responseType = YAHOO.util.DataSource.TYPE_HTMLTABLE;
    dataSource.responseSchema = {
        fields: [
            { key: "chapter", parser: "number" },
            { key: "title", parser: "string" }
        ]
    };
}

YUI().use("yui2-datatable", "yui2-paginator", function(Y) {
    var YAHOO = Y.YUI2;
    var dataSource = new YAHOO.util.DataSource(YAHOO.util.Dom.get("cooktable"));
    dataSource.responseType = YAHOO.util.DataSource.TYPE_HTMLTABLE;
    dataSource.responseSchema = {
        fields: [
            { key: "chapter", parser: "number" },
            { key: "title", parser: "string" }
        ]
    };
    
    var columns = [
    {
        key: "chapter",
        label: "Chapter No.",
        formatter: "number",
        sortable: true
    },
    {
        key: "title",
        label: "Title",
        formatter: "string",
        sortable: true
    }
    ];
    var dataTable = new YAHOO.widget.ScrollingDataTable("container", columns, dataSource, {height: "150px"});


});

YUI().use("yui2-datatable", "yui2-paginator", function(Y) {
Below the column definition object, add the following code:
var config = {
paginator : new YAHOO.widget.Paginator({
rowsPerPage: 5
}),
};
