YUI().use("node", "anim", function(Y){
    var anim = new Y.Anim({node: '#anim-container', duration:'3' });
    Y.on("contentready", function (){
        var yScrollHeight = Y.one('#anim-container').get('scrollHeight');
        var yClientHeight = Y.one('#anim-container').get('clientHeight');
        var yScroll = yScrollHeight-yClientHeight;
        anim.set('to', { scroll: [0, yScroll] });
        anim.run();
    }, "#anim-container");
});

