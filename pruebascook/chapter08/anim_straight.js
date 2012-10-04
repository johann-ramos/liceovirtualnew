YUI().use("anim", function(Y) {
    var anim = new Y.Anim({node: '#anim-container'});
    Y.on("contentready", function (){
        var startX = Y.one('#anim-container').getX();
        var startY = Y.one('#anim-container').getY();
        anim.set('to', { xy:[startX+200, startY] });
        anim.run();
    }, "#anim-container");
});

