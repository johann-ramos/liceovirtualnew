YUI().use("node", "anim", function(Y) {
    var anim = new Y.Anim({node: '#anim-container', to: { width:'180px', height:'50px'}});
    var animEnd = function(){
        this.detach('end', animEnd);
        this.set('to', {opacity:0});
        this.run();
    }
    anim.on('end', animEnd);
    Y.on("contentready", function (){
        anim.run();
    }, "#anim-container");
});

