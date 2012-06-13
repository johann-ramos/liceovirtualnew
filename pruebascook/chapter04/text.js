YUI().use('io-base', 'node', function(Y){
    function success(id, o, args){
        Y.one(‹#contents›).set(‹value›, o.responseText);
    }
    function failure(id, o, args){
        Y.one(‹#contents›).set(‹value›, ‹Error: ‹+o.statusText);
    }
    Y.on(‹io:success›, success, Y);
    Y.on(‹io:failure›, failure, Y);

    function getFile(){
        var uri = "text.txt";
        var request = Y.io(uri);
    }
    Y.on(‹click›, getFile, "#go");
});

