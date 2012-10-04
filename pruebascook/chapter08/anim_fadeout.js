YUI().use("node", "anim", function(Y){
    var anim = new Y.Anim({node: '#anim-container',to: {opacity:0}});

    Y.on("contentready", function (){
        anim.run();
        }, "#anim-container");
});

