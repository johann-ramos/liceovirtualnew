/*
YUI().use("node-base", function(Y) {
    var btn1_Click = function(e){
        alert('Button clicked');
    };
    Y.on("click", btn1_Click, "#txt1");
});
*/
YUI().use('node', function (Y) {
Y.one('#txt1').on('click', function(e) {
    e.preventDefault();
    alert('event: ' + e.type + ' target: ' + e.target.get('tagName')); 
});
});
