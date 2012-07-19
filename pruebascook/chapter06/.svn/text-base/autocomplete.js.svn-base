YUI().use("yui2-autocomplete", "yui2-datasource", "yui2-element", "yui2-button", "yui2-yahoo-dom-event", function(Y){
    var YAHOO = Y.YUI2;
    var dataSource = new YAHOO.util.LocalDataSource(["Alpha","Bravo","Beta","Gamma","Golf"]);
    var autoCompleteText = new YAHOO.widget.AutoComplete("txtInput", "txtInput_container", dataSource);
    var autoCompleteCombo = new YAHOO.widget.AutoComplete("txtCombo", "txtCombo_container", dataSource {minQueryLength: 0, queryDelay: 0});
    var toggler = YAHOO.util.Dom.get("toggle");
    var tButton = new YAHOO.widget.Button({container:toggler, label:"&darr;"});
    var toggle = function(e) {
        if(autoCompleteCombo.isContainerOpen()) {
            autoCompleteCombo.collapseContainer();
        }
        else {
            autoCompleteCombo.getInputEl().focus();
            setTimeout(function() {
                autoCompleteCombo.sendQuery("");},0);
        }
    }
    tButton.on("click", toggle);
});

