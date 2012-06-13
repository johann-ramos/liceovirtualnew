YUI().use("node", "anim", function(Y) {
    var anim = new Y.Anim({node: '#anim-container', to: { width:'400px', height:'100px'}, easing:Y.Easing.bounceOut});
    Y.on("contentready", function (){
        anim.run();
    }, "#anim-container");
});

