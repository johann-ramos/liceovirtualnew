YUI().use("yui2-container", "yui2-dragdrop", "node", function(Y){
    var YAHOO = Y.YUI2;
    var panel = new YAHOO.widget.Panel("modalPanel",{
        visible:false,
        modal:true,
        width:"300px",
        height:"auto",
        close: true,
        draggable: false,
        fixedcenter: true
    });

    panel.hideEvent.subscribe(function(){
        Y.one('#modalContainer').setStyle('height', null);});
        panel.render();
        function showPanel(){
            Y.one('#modalContainer').setStyle('height',Y.one('body').get('winHeight'));
            panel.show();
        }
        Y.on('click', showPanel, "#show");
});
