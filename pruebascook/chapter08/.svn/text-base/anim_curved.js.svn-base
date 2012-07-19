YUI().use("anim", function(Y) {
    var startX = Y.one('#anim-container').getX();
    var startY = Y.one('#anim-container').getY();
    var anim = new Y.Anim({node: '#anim-container', to: { curve:[[startX+40, startY-40],[startX+160, startY]]}});
    
    Y.on("contentready", function (){
        anim.run();
    }, "#anim-container");
});

