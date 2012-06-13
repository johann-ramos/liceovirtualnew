YUI().use("node-base", function(Y) {
    var btn1_Click = function(e){
        alert('Button clicked');
    };
    Y.on("click", btn1_Click, "#btn1");
});

