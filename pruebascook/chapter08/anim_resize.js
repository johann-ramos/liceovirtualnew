YUI().use("node", "anim", function(Y){
    var anim = new Y.Anim({node: '#anim-container', to: { width:'300px', height:'100px'}});
    Y.on("contentready", function (){
        anim.run();
    }, "#anim-container");
});

