/*
In the PHP file yui_eventdom.php, we set up the standard Moodle programming
environment as usual, and included a <div> tag, inside which we will print messages from
each of the four event handlers. Note that we have set an ID container for this <div> tag,
ensuring that we can reference it later on in our JavaScript.
Moving on to our JavaScript file yui_eventdom.js, we begin by loading the node-base
module which gives us access to the Y.on method, which we will use to register the event
handlers. Next, we set up the four event handlers we are demonstrating, beginning with
available and contentready, which are registered in our container <div>. The next
event handler is domready, which is not applied to any particular element as the DOM is
intrinsic to the page. Finally, we register the load event to Y.config.win, which is YUI's
browser-independent reference to the page's window object.
Inside each of these event handlers we have made a call to the function printMessage,
which prints the message passed to it, along with a numbered prefix reflecting the order in
which the call was made.
Now when we load our page in a web browser, we will see the order in which the events have
been called. The order generally corresponds to the "safest" one first. That is, the order that
allows the respective events to be called as early as possible in the page load lifecycle without running into any browser-specific issues such as crashes due to attempts to access DOM
elements that have not been loaded.

*/
YUI().use("node-base", function(Y){
    Y.on("available",function(){
        printMessage("Element #container 'available'");
    },
    "#container");
    
    Y.on("contentready",function(){
        printMessage("Elememt #container 'contentready'");
    },
    "#container");

    Y.on("domready",function(){
        printMessage("Page 'domready'");
});

    Y.on("load",function(e){
        printMessage("Window 'load'");
    },
    Y.config.win);

    var order = 1;
    var container = Y.one('#container');
    function printMessage(message){
        container.append('<p>' + order++ + '. ' + message + '</p>');
    }
});
